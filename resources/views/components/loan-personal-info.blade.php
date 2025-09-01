<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" class="">



<div class="container mx-auto py-5">
    <div class="/* card not found */ shadow-lg border-0 rounded-lg">
        <div class="/* card-body not found */ p-4 /* p-md-5 not found */">
            <h3 class="/* h5 not found */ mb-4 text-blue-500 flex items-center">
                    <span class="/* me-2 not found */"><i class="/* bi not found */ /* bi-person-badge not found */"></i></span>
                    Personal Data
            </h3>
                
                <div class="flex flex-wrap -mx-2 /* g-4 not found */">  <!-- Increased gutter spacing -->
                    <div class="md:w-6/12 px-2">
                        <label for="name" class="/* form-label not found */ /* fw-bold not found */ mb-2">Full Name</label>
                        <input type="text" name="name" id="name" class="/* form-control not found */ /* form-control-lg not found */" placeholder="Enter your full name" required="">
                        <div class="mb-3"></div>  <!-- Additional spacing -->
                    </div><br class="">
                    
                    <div class="md:w-6/12 px-2">
                        <label for="email" class="/* form-label not found */ /* fw-bold not found */ mb-2">Email Address</label>
                        <input type="email" class="/* form-control not found */ /* form-control-lg not found */" id="email" name="email" required="" placeholder="your@email.com">
                        <div class="mb-3"></div>
                    </div><br class="">
                    
                    <div class="md:w-6/12 px-2">
                        <label for="phone" class="/* form-label not found */ /* fw-bold not found */ mb-2">Phone Number</label>
                        <div class="/* input-group not found */">
                            <span class="/* input-group-text not found */ bg-gray-200">+251</span>
                            <input type="tel" class="/* form-control not found */ /* form-control-lg not found */" id="phone" name="phone" required="" placeholder="Phone number">
                        </div>
                        <div class="mb-3"></div>
                    </div><br class="">
                    
                    <div class="md:w-6/12 px-2">
                        <label for="civil_status" class="/* form-label not found */ /* fw-bold not found */ mb-2">Civil Status</label>
                        <select class="/* form-select not found */ /* form-select-lg not found */" id="civil_status" name="civil_status" required="">
                            <option value="single" selected="" class="">Single</option>
                            <option value="married" class="">Married</option>
                            <option value="divorced" class="">Divorced</option>
                            <option value="widowed" class="">Widowed</option>
                        </select>
                        <div class="mb-3"></div>
                    </div><br class="">
                    
                    {{-- <div class="w-full px-2 mt-2">
                        <div class="/* form-check not found */ mb-4">  
                            <input class="/* form-check-input not found */" type="checkbox" id="has_children" name="has_children">
                            <label class="/* form-check-label not found */ /* fw-bold not found */" for="has_children">Children under 21 of age</label>
                        </div><br class="">
                    </div> --}}


                    <div class="w-full px-2 mt-2">
                        <input class="/* form-check-input not found */" type="checkbox" name="has_children" id="has_children" value="1">
                        <label class="/* form-check-label not found */" for="has_children">Do you have children?</label>
                    </div>
                        
                    {{-- <div class="/* form-check not found */ mb-4">
                        <input class="/* form-check-input not found */" type="checkbox" id="has_coapplicant" name="has_coapplicant">
                        <label class="/* form-check-label not found */ /* fw-bold not found */" for="has_coapplicant">Add Co-Applicant</label>
                    </div><br class=""> --}}

                    <div class="/* form-check not found */">
                        <input class="/* form-check-input not found */" type="checkbox" name="has_coapplicant" id="has_coapplicant" value="1">
                        <label class="/* form-check-label not found */" for="has_coapplicant">
                            Do you have a co-applicant?
                        </label>
                    </div>
                    
                </div>
          
            
        </div></div></div>