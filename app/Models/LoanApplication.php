<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoanApplication extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'civil_status',
        'has_children',
        'has_coapplicant',
        'residence_type',
        'monthly_housing_cost',
        'employment_type',
        'monthly_income',
        'hired_since_year',
        'hired_since_month',
        'company_name',
        'loan_type',
        'loan_amount',
        'loan_term',
        'currency',
        'status'
    ];
}
