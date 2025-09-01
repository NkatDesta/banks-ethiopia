<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoanApplication;
use Illuminate\Support\Facades\Log;

class LoanApplicationController extends Controller
{
       public function create()
    {
        return view('loan-form');
    }

    public function store(Request $request)
{
    try {
        $request->merge([
            'has_children' => $request->has('has_children'),
            'has_coapplicant' => $request->has('has_coapplicant'),
            'residence_type' => $request->has('rents_home') ? 'rent' : 'own'
        ]);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            'civil_status' => 'required|in:single,married,divorced,widowed',
            'has_children' => 'sometimes|boolean',
            'has_coapplicant' => 'sometimes|boolean',
            'residence_type' => 'required|in:rent,own',
            'monthly_housing_cost' => 'required|numeric|min:0',
            'employment_type' => 'required|in:employed,self_employed',
            'monthly_income' => 'required|numeric|min:0',
            'hired_since' => 'required|date_format:Y-m', // changed validation
            'company_name' => 'required|string|max:255',
            'loan_type' => 'required|in:mortgage,vehicle',
            'loan_amount' => 'required|numeric|min:1000',
            'loan_term' => 'required|integer|min:1|max:30',
            'currency' => 'required|in:ETB,USD,EUR',
            //'agree_terms' => 'accepted'
        ]);

        // Split hired_since into year & month
        $year = date('Y', strtotime($validated['hired_since']));
        $month = date('F', strtotime($validated['hired_since']));

        $loan = LoanApplication::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'civil_status' => $validated['civil_status'],
            'has_children' => $request->has('has_children'),
            'has_coapplicant' => $request->has('has_coapplicant'),
            'residence_type' => $validated['residence_type'],
            'monthly_housing_cost' => $validated['monthly_housing_cost'],
            'employment_type' => $validated['employment_type'],
            'monthly_income' => $validated['monthly_income'],
            'hired_since_year' => $year,
            'hired_since_month' => $month,
            'company_name' => $validated['company_name'],
            'loan_type' => $validated['loan_type'],
            'loan_amount' => $validated['loan_amount'],
            'loan_term' => $validated['loan_term'],
            'currency' => $validated['currency'],
            'status' => 'pending'
        ]);

        return redirect()->route('loan.success')->with([
            'success' => 'Application submitted successfully!',
            'application_id' => $loan->id
        ]);

    } catch (\Exception $e) {
        Log::error('Loan application error: '.$e->getMessage());
        return back()->withInput()->with('error', 'Error submitting application. Please try again.');
    }
}

}