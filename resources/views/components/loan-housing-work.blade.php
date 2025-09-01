<hr class="my-5">  <!-- Increased spacing --> 

<h3 class="/* h5 not found */ mb-4 text-blue-500 flex items-center">
    <span class="/* me-2 not found */"><i class="/* bi not found */ /* bi-house-door not found */"></i></span>Housing &amp; Work</h3>
                

{{-- <h5 class="/* card-title not found */ text-gray-500 mb-4">Form Of Residence</h5>  
                                
<div class="/* btn-group not found */ w-full mb-4" role="group"> 
    <input type="radio" class="/* btn-check not found */" name="residence_type" id="rent" autocomplete="off" checked="">
    <label class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm /* btn-outline-primary not found */" for="rent">Rent</label>
                                    
    <input type="radio" class="/* btn-check not found */" name="residence_type" id="own" autocomplete="off">
    <label class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm /* btn-outline-primary not found */" for="own">Own</label>
</div><br class=""> --}}

<div class="mb-4">
    <label class="">Residence Type</label>
    
    <div class="/* form-check not found */">
        <input class="/* form-check-input not found */" type="radio" name="residence_type" id="rent" value="rent" required=""> 
               {{-- {{ old('residence_type') == 'rent' ? 'checked' : '' }}
               required&gt; --}}
        <label class="/* form-check-label not found */" for="rent">Rent</label>
    </div>
    
    <div class="/* form-check not found */">
        <input class="/* form-check-input not found */" type="radio" name="residence_type" id="own" value="own">
               {{-- {{ old('residence_type') == 'own' ? 'checked' : '' }}&gt; --}}
        <label class="/* form-check-label not found */" for="own">Own</label>
    </div>
</div><br class="">
                                
<div class="mb-4">  
    <label for="housing_cost" class="/* form-label not found */ /* fw-bold not found */ mb-2">Monthly Housing Cost</label>
    <input type="number" class="/* form-control not found */ /* form-control-lg not found */" id="monthly_housing_cost" name="monthly_housing_cost" placeholder="e.g., 500">
</div><br class="">
                                
<div class="mb-4">
    <label for="share_cost" class="/* form-label not found */ /* fw-bold not found */ mb-2">Your Share of the monthly cost</label>
    <input type="number" class="/* form-control not found */ /* form-control-lg not found */" id="share_cost" name="share_cost" placeholder="Your share">
</div><br class="">
<!--            
<h5 class="card-title text-secondary mb-4">Form Of Employment</h5>
                                
<div class="btn-group w-100 mb-4" role="group">
    <input type="radio" class="btn-check" name="employment_type" id="employed" autocomplete="off" checked>
    <label class="btn btn-outline-primary" for="employed">Employed</label>
                                    
    <input type="radio" class="btn-check" name="employment_type" id="self_employed" autocomplete="off">
    <label class="btn btn-outline-primary" for="self_employed">Self Employed</label>
</div><br>-->

<div class="mb-4">
    <label for="employment_type" class="">Employment Type</label>
    <select class="/* form-control not found */" name="employment_type" id="employment_type" required="">
        <option value="" class="">Select employment type</option>
        <option value="employed" class="">Employed</option>
        <option value="self_employed" class="">Self Employed</option>
    </select>
</div><br class="">


                                
<div class="mb-4">
    <label for="monthly_income" class="/* form-label not found */ /* fw-bold not found */ mb-2">Monthly Income Before Taxes</label>
    <input type="number" class="/* form-control not found */ /* form-control-lg not found */" id="monthly_income" name="monthly_income" placeholder="Monthly income">
</div><br class="">
                                
<div class="mb-4">
    <label for="company_name" class="/* form-label not found */ /* fw-bold not found */ mb-2">Company Name</label>
    <input type="text" class="/* form-control not found */ /* form-control-lg not found */" id="company_name" name="company_name" placeholder="Company name">
</div><br class="">
                                
<div class="mb-3">
    <label for="hired_since" class="/* form-label not found */ /* fw-bold not found */ mb-2">Hired Since</label>
    <input type="month" class="/* form-control not found */ /* form-control-lg not found */" id="hired_since" name="hired_since" value="2025-01">
</div><br class="">
                        
                



