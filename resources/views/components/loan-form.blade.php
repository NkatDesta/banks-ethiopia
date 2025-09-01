{{-- <form method="POST" action="{{ route('loan.submit') }}" class="">
    @csrf
    <div class="/* card not found */ shadow">
        <div class="/* card-body not found */ p-4">
            <h3 class="/* h4 not found */ mb-4">Loan Application</h3>
            
            <div class="mb-3">
        <label class="/* form-label not found */">Loan Type</label>
        <div class="/* btn-group not found */ w-full" role="group">
            <input type="radio" class="/* btn-check not found */" name="loan_type" id="mortgageLoan" value="mortgage" autocomplete="off" checked="">
            <label class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm /* btn-outline-primary not found */" for="mortgageLoan">Mortgage</label>
            
            <input type="radio" class="/* btn-check not found */" name="loan_type" id="vehicleLoan" value="vehicle" autocomplete="off">
            <label class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm /* btn-outline-primary not found */" for="vehicleLoan">Vehicle</label>
        </div>
    </div>

            
            <div class="flex flex-wrap -mx-2 mb-3">
                <div class="md:w-6/12 px-2">
                    <label class="/* form-label not found */">Country</label>
                    <select class="/* form-select not found */">
                        <option selected="" class="">Ethiopia</option>
                        <option class="">United States</option>
                        <option class="">United Kingdom</option>
                    </select>
                </div>
                <div class="md:w-6/12 px-2">
                    <label class="/* form-label not found */">Currency</label>
                    <select class="/* form-select not found */">
                        <option class="">ETB</option>
                        <option selected="" class="">USD</option>
                        <option class="">EUR</option>
                    </select>
                </div>
            </div>
            
            <div class="mb-4">
                <label class="/* form-label not found */">Loan Amount</label>
                <input type="range" class="/* form-range not found */" min="10000" max="1000000" step="1000" value="100000" id="loanAmountSlider">
                <div class="flex justify-between">
                    <small class="">10K</small>
                    <span id="loanAmountValue" class="/* fw-bold not found */">100,000</span>
                    <small class="">100.00M</small>
                </div>
            </div>
            
            <div class="mb-4">
                <label class="/* form-label not found */">Loan Term</label>
                <select class="/* form-select not found */" id="loanTerm">
                     @for($i = 1; $i <= 30; $i++)
                        <option value="{{ $i }}" {{ $i == 1 ? 'selected' : '' }}> {{ $i }} Year{{ $i > 1 ? 's' : '' }}
                        <option value="{{ $i }}" {{="" $i="=" 1="" ?="" 'selected'="" :="" ''="" }}="" class="">{{ $i }} Year{{ $i &gt; 1 ? 's' : '' }}</option>
                    @endfor
                </select>
            </div>
            
            <div class="/* alert not found */ /* alert-info not found */ mb-4">
                <div class="flex justify-between">
                    <span class="">Approximate Cost:</span>
                    <span id="monthlyPayment" class="/* fw-bold not found */">8.50K USD / Month</span>
                </div>
            </div>

            <a href="{{ route('loan.application') }}" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm bg-blue-500 hover:bg-blue-700 text-white w-full /* text-decoration-none not found */"> 
                <i class="/* bi not found */ /* bi-pencil-square not found */ /* me-2 not found */"></i> Start Application 
            </a> 

            
    </div>

</div></form> --}}





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Banks Ethiopia - Loan Application</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
    <style>
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
</head>
<body class="bg-gray-50">
<div class="container mx-auto px-4 py-8 max-w-4xl">

    <!-- Progress Steps -->
    <div class="flex justify-between mb-8">
        @foreach(range(1,4) as $step)
            <div class="step flex flex-col items-center" data-step="{{ $step }}">
                <div class="w-10 h-10 rounded-full bg-gray-200 text-gray-600 flex items-center justify-center mb-2">{{ $step }}</div>
                <span class="text-sm font-medium">
                    @switch($step)
                        @case(1) Loan Details @break
                        @case(2) Personal Info @break
                        @case(3) Employment @break
                        @case(4) Review @break
                    @endswitch
                </span>
            </div>
        @endforeach
    </div>

    <form method="POST" action="{{ route('loan.submit') }}" class="space-y-6 bg-green-100 p-6 rounded-lg">
        @csrf
        <div class="bg-dark rounded-lg shadow-md p-8">

            <!-- Step 1: Loan Details -->
            <div id="step-1" class="step-content">
                <h2 class="text-lg font-semibold mb-4 text-gray-800">Select Loan Type</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
                    <label class="loan-type-option flex items-center space-x-3 p-4 border border-gray-80 rounded-lg cursor-pointer">
                        <input type="radio" name="loan_type" value="mortgage" class="h-5 w-5 text-blue-600" checked>
                        <span class="font-medium text-gray-800">Mortgage Loan</span>
                    </label>
                    <label class="loan-type-option flex items-center space-x-3 p-4 border border-gray-300 rounded-lg cursor-pointer">
                        <input type="radio" name="loan_type" value="vehicle" class="h-5 w-5 text-blue-600">
                        <span class="font-medium text-gray-800">Vehicle Loan</span>
                    </label>
                </div>

                <h2 class="text-lg font-semibold mb-4 text-gray-800">Loan Details</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                    <div>
                        <label class="block text-gray-700 mb-2">Country</label>
                        <select name="country" id="country" class="w-full p-3 text-black border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option>Select Country</option>
                            <option selected>Ethiopia</option>
                            <option>United States</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-gray-700 mb-2">Currency</label>
                        <select name="currency" id="currency" class="w-full p-3 text-black border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="ETB">ETB</option>
                            <option value="USD" selected>USD</option>
                            <option value="EUR">EUR</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-gray-700 mb-2">Loan Amount</label>
                        <input type="number" name="loan_amount" id="loan_amount" class="w-full p-3 text-black border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" value="100000" min="1000" max="100000000">
                        {{-- <div class="flex justify-between text-xs text-gray-500 mt-1">
                            <span>1K</span>
                            <span id="max-amount-label">100.00M</span>
                        </div> --}}
                    </div>

                    <div>
                        <label class="block text-gray-700 mb-2">Loan Term</label>
                        <select name="loan_term" id="loan_term" class="w-full p-3 text-black border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            @for($i=1; $i<=30; $i++)
                                <option value="{{ $i }}" {{ $i==1?'selected':'' }}>{{ $i }} Year{{ $i>1?'s':'' }}</option>
                            @endfor
                        </select>
                    </div>
                </div>

                <div class="mt-8 p-6 bg-blue-50 rounded-lg">
                    <p class="text-gray-700 font-medium">Approximate Monthly Payment:</p>
                    <p class="text-2xl font-bold text-blue-600" id="monthly-payment">9,500 USD / Month</p>
                </div>

                <div class="flex justify-end mt-8">
                    <button type="button" onclick="nextStep(2)" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">Continue</button>
                </div>
            </div>

            <!-- Step 2: Personal Info -->
            <div id="step-2" class="step-content hidden">
                <h2 class="text-lg font-semibold mb-4 text-gray-700">Personal Info</h2>

                <div class="mb-4">
                    <label for="name" class="block text-gray-700 mb-2">Full Name</label>
                    <input type="text" name="name" id="name" class="w-full p-3 border border-gray-300 rounded-lg" placeholder="Enter your full name" required>
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-700 mb-2">Email</label>
                    <input type="email" name="email" id="email" class="w-full p-3 border border-gray-300 rounded-lg" placeholder="you@example.com" required>
                </div>

                <div class="mb-4">
                    <label for="phone" class="block text-gray-700 mb-2">Phone Number</label>
                    <input type="tel" name="phone" id="phone" class="w-full p-3 border border-gray-300 rounded-lg" placeholder="0900000000" required>
                </div>

                <div class="mb-4">
                    <label for="civil_status" class="block text-gray-700 mb-2">Civil Status</label>
                    <select name="civil_status" id="civil_status" class="w-full p-3 text-black border border-gray-300 rounded-lg" required>
                        <option value="single" selected>Single</option>
                        <option value="married">Married</option>
                        <option value="divorced">Divorced</option>
                        <option value="widowed">Widowed</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="has_children" id="has_children" value="1">
                        <span class="ml-2 text-gray-700">Do you have children?</span>
                    </label>
                </div>

                <div class="mb-4">
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="has_coapplicant" id="has_coapplicant" value="1">
                        <span class="ml-2 text-gray-700">Do you have a co-applicant?</span>
                    </label>
                </div>

                <div class="flex justify-between mt-8">
                    <button type="button" onclick="prevStep(1)" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">Back</button>
                    <button type="button" onclick="nextStep(3)" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">Continue</button>
                </div>
            </div>

            <!-- Step 3: Employment -->
            <div id="step-3" class="step-content hidden">
                <h2 class="text-lg font-semibold mb-4 text-gray-700">Employment Data</h2>

                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Residence Type</label>
                        <label>
                            <input type="radio" name="residence_type" value="rent" required> Rent
                        </label>
                    <label class="ml-4">
                        <input type="radio" name="residence_type"  value="own"> Own
                    </label>
                </div>

                <div class="mb-4">
                    <label for="monthly_housing_cost" class="block text-gray-700 mb-2">Monthly Housing Cost</label>
                    <input type="number" name="monthly_housing_cost" id="monthly_housing_cost" class="w-full p-3 text-black border border-gray-300 rounded-lg" placeholder="123">
                </div>

                <div class="mb-4">
                    <label for="share_cost" class="block text-gray-700 mb-2">Your Share of Monthly Cost</label>
                    <input type="number" name="share_cost" id="share_cost" class="w-full p-3 text-black border border-gray-300 rounded-lg">
                </div>

                <div class="mb-4">
                    <label for="employment_type" class="block text-gray-700 mb-2">Employment Type</label>
                    <select name="employment_type" id="employment_type" class="w-full p-3 text-black border border-gray-300 rounded-lg" required>
                        <option value="">Select employment type</option>
                        <option value="employed">Employed</option>
                        <option value="self_employed">Self Employed</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="monthly_income" class="block text-gray-700 mb-2">Monthly Income Before Taxes</label>
                    <input type="number" name="monthly_income" id="monthly_income" class="w-full p-3 text-black border border-gray-300 rounded-lg">
                </div>

                <div class="mb-4">
                    <label for="company_name" class="block text-gray-700 mb-2">Company Name</label>
                    <input type="text" name="company_name" id="company_name" class="w-full p-3 text-black border border-gray-300 rounded-lg">
                </div>

                <div class="mb-4">
                    <label for="hired_since" class="block text-gray-700 mb-2">Hired Since</label>
                    <input type="month" name="hired_since" id="hired_since" class="w-full p-3 border border-gray-300 rounded-lg" value="2025-01">
                </div>

                <div class="flex justify-between mt-8">
                    <button type="button" onclick="prevStep(2)" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">Back</button>
                    <button type="button" onclick="nextStep(4)" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">Continue</button>
                </div>
            </div>

            <!-- Step 4: Review -->
            <div id="step-4" class="text-black step-content hidden">
                <h2 class="text-lg font-semibold mb-4 ">Review & Submit</h2>
                    <div>
                        <strong>Loan Type:</strong> <span id="review-loan-type"></span>
                    </div>
                    <div>
                        <strong>Country:</strong> <span id="review-country"></span>
                    </div>
                    <div>
                        <strong>Currency:</strong> <span id="review-currency"></span>
                    </div>
                    <div>
                        <strong>Loan Amount:</strong> <span id="review-loan-amount"></span>
                    </div>
                    <div>
                        <strong>Loan Term:</strong> <span id="review-loan-term"></span>
                    </div>
                    <div>
                        <strong>Full Name:</strong> <span id="review-name"></span>
                    </div>
                    <div>
                        <strong>Email:</strong> <span id="review-email"></span>
                    </div>
                    <div>
                        <strong>Phone Number:</strong> <span id="review-phone"></span>
                    </div>
                    <div>
                        <strong>Civil Status:</strong> <span id="review-civil-status"></span>
                    </div>
                    <div>
                        <strong>Has Children:</strong> <span id="review-has-children"></span>
                    </div>
                    <div>
                        <strong>Co-Applicant:</strong> <span id="review-has-coapplicant"></span>
                    </div>
                    <div>
                        <strong>Residence Type:</strong> <span id="review-residence-type"></span>
                    </div>
                    <div>
                        <strong>Monthly Housing Cost:</strong> <span id="review-monthly-housing-cost"></span>
                    </div>
                    <div>
                        <strong>Your Share of Monthly Cost:</strong> <span id="review-share-cost"></span>
                    </div>
                    <div>
                        <strong>Employment Type:</strong> <span id="review-employment-type"></span>
                    </div>
                    <div>
                        <strong>Monthly Income:</strong> <span id="review-monthly-income"></span>
                    </div>
                    <div>
                        <strong>Company Name:</strong> <span id="review-company-name"></span>
                    </div>
                    <div>
                        <strong>Hired Since:</strong> <span id="review-hired-since"></span>
                    </div>
               
                <p>Click submit if all details are correct.</p>
                <div class="flex justify-between mt-8">
                    <button type="button" onclick="prevStep(3)" class="text-blue-600 hover:text-blue-800 font-medium">← Back</button>
                    <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition">Submit Application</button>
                </div>
            </div>

        </div>
    </form>

    @if ($errors->any())
        <div class="bg-red-100 text-red-800 p-3 rounded mt-4">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="bg-green-100 text-green-800 p-3 rounded mt-4">
            {{ session('success') }}
        </div>
    @endif
</div>

<script>
    let currentStep = 1;
    function showStep(step) {
        document.querySelectorAll('.step-content').forEach(s => s.classList.add('hidden'));
        document.getElementById(`step-${step}`).classList.remove('hidden');
        currentStep = step;

        document.querySelectorAll('.step').forEach((s, index) => {
            const circle = s.querySelector('div');
            if(index+1 < step) { circle.className = 'w-10 h-10 rounded-full bg-green-500 text-white flex items-center justify-center mb-2'; }
            else if(index+1 === step) { circle.className = 'w-10 h-10 rounded-full bg-blue-600 text-white flex items-center justify-center mb-2'; }
            else { circle.className = 'w-10 h-10 rounded-full bg-gray-200 text-gray-600 flex items-center justify-center mb-2'; }
        });
    }
    function nextStep(step) { showStep(step); }
    function prevStep(step) { showStep(step); }
    showStep(1);

    // Monthly payment calculation
    function calculateMonthlyPayment() {
        const amount = parseFloat(document.getElementById('loan_amount').value) || 0;
        const term = parseInt(document.getElementById('loan_term').value) || 1;
        const monthlyRate = 0.05 / 12;
        const months = term * 12;
        const monthlyPayment = (amount * monthlyRate) / (1 - Math.pow(1 + monthlyRate, -months));
        document.getElementById('monthly-payment').textContent = monthlyPayment.toLocaleString('en-US', {maximumFractionDigits:0}) + ' USD / Month';
    }
    document.getElementById('loan_amount').addEventListener('input', calculateMonthlyPayment);
    document.getElementById('loan_term').addEventListener('change', calculateMonthlyPayment);
    calculateMonthlyPayment();

    function updateReviewStep() {
        document.getElementById('review-loan-type').textContent = document.querySelector('input[name="loan_type"]:checked').value;
        document.getElementById('review-country').textContent = document.getElementById('country').value;
        document.getElementById('review-currency').textContent = document.getElementById('currency').value;
        document.getElementById('review-loan-amount').textContent = document.getElementById('loan_amount').value;
        document.getElementById('review-loan-term').textContent = document.getElementById('loan_term').value + " Year(s)";
        document.getElementById('review-name').textContent = document.getElementById('name').value;
        document.getElementById('review-email').textContent = document.getElementById('email').value;
        document.getElementById('review-phone').textContent = document.getElementById('phone').value;
        document.getElementById('review-civil-status').textContent = document.getElementById('civil_status').value;
        document.getElementById('review-has-children').textContent = document.getElementById('has_children').checked ? "Yes" : "No";
        document.getElementById('review-has-coapplicant').textContent = document.getElementById('has_coapplicant').checked ? "Yes" : "No";
        document.getElementById('review-residence-type').textContent = document.querySelector('input[name="residence_type"]:checked')?.value || '';
        document.getElementById('review-monthly-housing-cost').textContent = document.getElementById('monthly_housing_cost').value;
        document.getElementById('review-share-cost').textContent = document.getElementById('share_cost').value;
        document.getElementById('review-employment-type').textContent = document.getElementById('employment_type').value;
        document.getElementById('review-monthly-income').textContent = document.getElementById('monthly_income').value;
        document.getElementById('review-company-name').textContent = document.getElementById('company_name').value;
        document.getElementById('review-hired-since').textContent = document.getElementById('hired_since').value;
    }

    function nextStep(step) {
        if(step === 4) updateReviewStep();
        showStep(step);
    }
</script>

</body>
</html>
