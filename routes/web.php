<?php

use App\Models\Currency;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoanApplicationController;

/*Main Homepage Route
Route::get('/', function () {
    return view('home'); 
});*/

Route::get('/', function () {
    $currencies = Currency::with(['exchangeRates.bank'])->get();
    return view('home', compact('currencies'));
});



/* routed one by one
Route::get('/loan-application', [LoanApplicationController::class, 'create'])->name('loan.application');
Route::post('/loan-application', [LoanApplicationController::class, 'store'])->name('loan.submit');

//
Route::get('/loan/success', function () {
    return view('loan.success');
})->name('loan.success');   */


// Loan Application Routes
Route::prefix('loan')->group(function () {
    //Form
    Route::get('/application', [LoanApplicationController::class, 'create'])
         ->name('loan.application');
         
    Route::post('/application', [LoanApplicationController::class, 'store'])
         ->name('loan.submit');
    
    // Success Page
    Route::get('/success', function () {
        return view('loan.success');
    })->name('loan.success');

}); 

//For form submission
// Route::post('/loan/submit', [LoanApplicationController::class, 'store'])
//      ->name('loan.submit'); -->


