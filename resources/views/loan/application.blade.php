@extends('layouts.app')

@section('content')
<div class="container mx-auto py-5">
    <div class="flex flex-wrap -mx-2 justify-center">
        <div class="lg:w-8/12 px-2">
            <div class="/* card not found */ shadow">
                <div class="/* card-header not found */ bg-blue-500 /* text-white not found */">
                    <div class="flex justify-between items-center">
                        <h2 class="/* h4 not found */ mb-0">Complete Loan Application</h2>
                    </div>
                </div>
                <div class="/* card-body not found */ p-4">
                    <form method="POST" action="{{ route('loan.submit') }}" id="loanApplicationForm" class="">
                        
                        @csrf
                        
                        <!-- Personal Data -->
                        <div class="/* application-step not found */ /* active not found */" id="step1">
                            @include('components.loan-personal-info')
                        </div>
                        
                        <!-- Housing & Work -->
                        <div class="/* application-step not found */" id="step2">
                            @include('components.loan-housing-work')
                        
                            <div class="/* form-check not found */ mt-4">
                                <input class="/* form-check-input not found */" type="checkbox" id="agreeTerms" name="agree_terms" required="">
                                <label class="/* form-check-label not found */" for="agreeTerms">
                                    By submitting the application, you agree to the user agreement and personal data policy
                                </label>
                            </div>
                            
                            <div class="flex justify-between mt-4">
                                <button type="button" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm bg-blue-500 hover:bg-blue-700 text-white" onclick="window.location.href='/'">
                                    <i class="/* bi not found */ /* bi-house not found */"></i> Back</button>
                                <button type="submit" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm bg-green-500 hover:bg-green-700 text-white">Submit Application</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
