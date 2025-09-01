@extends('layouts.app')

@section('content')
<div class="container mx-auto py-5">
    <div class="flex flex-wrap -mx-2 justify-center">
        <div class="md:w-8/12 px-2">
            <div class="/* card not found */ shadow">
                <div class="/* card-header not found */ bg-green-500 /* text-white not found */">
                    <h2 class="/* h4 not found */ mb-0">Application Submitted</h2>
                </div>
                <div class="/* card-body not found */ text-center py-4">
                    <i class="/* bi not found */ /* bi-check-circle-fill not found */ text-green-500" style="font-size: 3rem;"></i>
                    <h3 class="mt-3">Thank You!</h3>
                    
                    @if(session('success'))
                        <div class="/* alert not found */ /* alert-success not found */">
                            {{ session('success') }}
                        </div>
                    @endif
                    
                    @if(session('application_id'))
                        <p class="mb-4">Application ID: <strong class="">{{ session('application_id') }}</strong></p>
                    @endif
                    
                    <p class="mb-4">Your application is being processed.</p>

                    <div class="/* whats-next not found */ bg-gray-200 p-3 rounded mb-4 /* text-start not found */">
                        <h5 class="/* h6 not found */ mb-3">What happens next?</h5>
                        <ol class="mb-0 /* ps-3 not found */">
                            <li class="mb-2">Your application enters review</li>
                            <li class="mb-2">We may contact you for additional information</li>
                            <li class="">You'll receive a decision within 3-5 business days</li>
                        </ol>
                    </div>

                    <div class="flex flex-col /* flex-sm-row not found */ justify-center /* gap-3 not found */">
                        <a href="/" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm bg-blue-500 hover:bg-blue-700 text-white">
                            <i class="/* bi not found */ /* bi-house not found */"></i> Return Home
                        </a>
                        <div class="flex /* gap-3 not found */">
                            <button class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm bg-blue-500 /* btn-outline-secondary not found */" onclick="window.print()">
                                <i class="/* bi not found */ /* bi-printer not found */"></i> Print
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection