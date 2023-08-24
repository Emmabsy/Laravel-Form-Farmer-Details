@extends('farmers.layout')
@section('content')
    <h4 class="text-center mt-1 text-info mb-5"> Plumbee Farmer Partnership Data Management System</h4>
    <div class="container" style="background-color: #ffffff;">

        <form action="{{ route('farmers.store') }}" method="POST" enctype="multipart/form-data"
            onsubmit="return validateForm()">
            {!! csrf_field() !!}
            <div class="form-group row">
                <label for="group" class="col-sm-3 col-form-label">Select Group:</label>
                <div class="col-sm-9">
                    <select id="group" name="groupname" class="form-control">
                        <option value=""> --Select--</option>
                        <option value="Baari" {{ old('groupname') === 'Baari' ? 'selected' : '' }}>Baari Farmer supply
                            group</option>

                        <option value="Mairo-inya" {{ old('groupname') === 'Mairo-inya' ? 'selected' : '' }}> Mairo-inya
                            Farmer supply group</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="county" class="col-sm-3 col-form-label">County:</label>
                <div class="col-sm-9">
                    <input type="text" id="county" name="county" readonly class="form-control"
                        value="{{ old('county') }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="sub-county" class="col-sm-3 col-form-label">Sub-county:</label>
                <div class="col-sm-9">
                    <input type="text" id="subcounty" name="subcounty" readonly class="form-control"
                        value="{{ old('subcounty') }}">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="location" class="col-sm-3 col-form-label">Location:</label>
                <div class="col-sm-9">
                    <input type="text" id="location" name="location" readonly class="form-control"
                        value="{{ old('location') }}">
                </div>
                <h6 class="text-center mt-3" style="text-decoration: underline;"> Personal Information</h6>

                <div class="form-row">
                    <div class="form-group col-md-4 mb-3">
                        <label for="first-name">First Name</label>
                        <input type="text" class="form-control" id="first-name" name="firstname"
                            value="{{ old('firstname') }}" required>
                        @error('firstname')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4 mb-3">
                        <label for="middlename">Middle Name</label>
                        <input type="text" class="form-control" id="middlename" name="middlename"
                            value="{{ old('middlename') }}" required>
                        @error('middlename')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4 mb-3">
                        <label for="last-name">Last Name</label>
                        <input type="text" class="form-control" id="lastname" name="lastname"
                            value="{{ old('lastname') }}" required>
                        @error('lastname')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="dob">Date of Birth:</label>
                        <input type="date" name="dob" id="dob" class="form-control" min="1940-01-01"
                            max="2000-01-01" value="{{ old('dob') }}" />
                        @error('dob')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="village">Village:</label>
                        <input type="text" name="village" id="village" class="form-control"
                            value="{{ old('village') }}" />
                        @error('village')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="mobile">Mobile:</label>
                        <input type="text" name="mobile" id="mobile" class="form-control"
                            value="{{ old('mobile') }}" />
                        @error('mobile')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="maritalStatus">Marital Status:</label>
                        <select name="maritalStatus" id="maritalStatus" class="form-control">
                            <option value="">--Select--</option>
                            <option value="single" {{ old('maritalStatus') === 'single' ? 'selected' : '' }}>Single
                            </option>
                            <option value="married" {{ old('maritalStatus') === 'married' ? 'selected' : '' }}>Married
                            </option>
                            <option value="divorced" {{ old('maritalStatus') === 'divorced' ? 'selected' : '' }}>Divorced
                            </option>
                            <option value="widowed" {{ old('maritalStatus') === 'widowed' ? 'selected' : '' }}>Widowed
                            </option>
                        </select>
                        @error('maritalStatus')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="idnumber">ID Number:</label>
                        <input type="text" name="idnumber" id="idnumber" class="form-control"
                            value="{{ old('idnumber') }}">
                        @error('idnumber')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <h5 class="text-center mb-3 " style="text-decoration: underline;">Household Size and Income Details</h5>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="occupation">Main occupation of household</label>
                        <select class="form-control" id="occupation" name="occupation">
                            <option value="">--Select--</option>
                            <option value="livestock" {{ old('occupation') === 'livestock' ? 'selected' : '' }}>Livestock
                            </option>
                            <option value="own_farm_labor" {{ old('occupation') === 'own_farm_labor' ? 'selected' : '' }}>
                                Own Farm Labor</option>
                            <option value="employed_salaried"
                                {{ old('occupation') === 'employed_salaried' ? 'selected' : '' }}>Employed (Salaried)
                            </option>
                            <option value="casual_labor" {{ old('occupation') === 'casual_labor' ? 'selected' : '' }}>
                                Casual Labor</option>
                            <option value="petty_trade" {{ old('occupation') === 'petty_trade' ? 'selected' : '' }}>Petty
                                Trade</option>
                            <option value="merchant_trader"
                                {{ old('occupation') === 'merchant_trader' ? 'selected' : '' }}>Merchant/Trader</option>
                            <option value="firewood_charcoal"
                                {{ old('occupation') === 'firewood_charcoal' ? 'selected' : '' }}>Firewood/Charcoal
                            </option>
                            <option value="fishing" {{ old('occupation') === 'fishing' ? 'selected' : '' }}>Fishing
                            </option>
                            <option value="others" {{ old('occupation') === 'others' ? 'selected' : '' }}>Others</option>
                        </select>
                        @error('occupation')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6 ">
                        <label for="source-income">Main current source of income</label>
                        <select class="form-control" id="source-income" name="incomeSource">
                            <option value="">--Select--</option>
                            <option value="No income" {{ old('incomeSource') === 'No income' ? 'selected' : '' }}>No
                                income</option>
                            <option value="Sale of livestock"
                                {{ old('incomeSource') === 'Sale of livestock' ? 'selected' : '' }}>Sale of livestock
                            </option>
                            <option value="Sale of livestock Products"
                                {{ old('incomeSource') === 'Sale of livestock Products' ? 'selected' : '' }}>Sale of
                                livestock Products</option>
                            <option value="Sale of crops" {{ old('incomeSource') === 'Sale of crops' ? 'selected' : '' }}>
                                Sale of crops</option>
                            <option value="Petty trading" {{ old('incomeSource') === 'Petty trading' ? 'selected' : '' }}>
                                Petty trading</option>
                            <option value="Casual labor" {{ old('incomeSource') === 'Casual labor' ? 'selected' : '' }}>
                                Casual labor</option>
                            <option value="Permanent job" {{ old('incomeSource') === 'Permanent job' ? 'selected' : '' }}>
                                Permanent job</option>
                            <option value="Sale of personal assets"
                                {{ old('incomeSource') === 'Sale of personal assets' ? 'selected' : '' }}>Sale of personal
                                assets</option>
                            <option value="Remittance" {{ old('incomeSource') === 'Remittance' ? 'selected' : '' }}>
                                Remittance</option>
                            <option value="Fishing" {{ old('incomeSource') === 'Fishing' ? 'selected' : '' }}>Fishing
                            </option>
                            <option value="Others" {{ old('incomeSource') === 'Others' ? 'selected' : '' }}>Others
                            </option>
                        </select>
                        @error('incomeSource')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="monthly-income">Monthly income of the household</label>
                        <select class="form-control" id="monthly-income" name="monthlyincome">
                            <option value="">--Select--</option>
                            <option value="Less than KES 1,000"
                                {{ old('monthlyincome') === 'Less than KES 1,000' ? 'selected' : '' }}>Less than KES 1,000
                            </option>
                            <option value="KES 1,000 - KES 2,000"
                                {{ old('monthlyincome') === 'KES 1,000 - KES 2,000' ? 'selected' : '' }}>KES 1,000 - KES
                                2,000</option>
                            <option value="KES 2,000 - KES 5,000"
                                {{ old('monthlyincome') === 'KES 2,000 - KES 5,000' ? 'selected' : '' }}>KES 2,000 - KES
                                5,000</option>
                            <option value="KES 5,000 - KES 7,000"
                                {{ old('monthlyincome') === 'KES 5,000 - KES 7,000' ? 'selected' : '' }}>KES 5,000 - KES
                                7,000</option>
                            <option value="More than KES 7,000"
                                {{ old('monthlyincome') === 'More than KES 7,000' ? 'selected' : '' }}>More than KES 7,000
                            </option>
                        </select>
                        @error('monthlyincome')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for="children">Do you have children?</label>
                        <select class="form-control" id="children" name="children">
                            <option value="yes" {{ old('children') === 'yes' ? 'selected' : '' }}>Yes</option>
                            <option value="no" {{ old('children') === 'no' ? 'selected' : '' }}>No</option>
                        </select>
                        @error('children')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-row" id="children-questions">
                    <div class="form-group col-md-4">
                        <label for="under5">No of children Under 5:</label>
                        <input type="number" name="under5" id="under5" class="form-control"
                            value="{{ old('under5', 0) }}" {{ old('children') === 'no' ? 'disabled' : '' }} />
                        @error('under5')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="children6to11">No of children Aged 6 to 11:</label>
                        <input type="number" name="children6to11" id="children6to11" class="form-control"
                            value="{{ old('children6to11', 0) }}" {{ old('children') === 'no' ? 'disabled' : '' }} />
                        @error('children6to11')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="children12to18">No of children Aged 12 to 18:</label>
                        <input type="number" name="children12to18" id="children12to18" class="form-control"
                            value="{{ old('children12to18', 0) }}" {{ old('children') === 'no' ? 'disabled' : '' }} />
                        @error('children12to18')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <h5 class="text-center mb-3" style="text-decoration: underline;">Farm Details for Household</h5>



                <!--The rest-->
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="landstatus">Do you own or lease the land that you farm?</label>
                        <select class="form-control" name="landstatus" id="landstatus">
                            <option value="">--Select--</option>
                            <option value="OWN" {{ old('landstatus') === 'OWN' ? 'selected' : '' }}>Own</option>
                            <option value="Lease" {{ old('landstatus') === 'Lease' ? 'selected' : '' }}>Lease</option>
                        </select>
                        @error('landstatus')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for="landsize">How big is your land (in acres)?</label>
                        <input type="number" name="landsize" id="landsize" min="0.01"
                            step="0.01"class="form-control" value="{{ old('landsize') }}" />
                        @error('landsize')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                </div>


                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="cropgrown">What do you grow in your plot?</label>
                        <input type="text" name="cropgrown" id="cropgrown" class="form-control"
                            value="{{ old('cropgrown') }}" />
                        @error('cropgrown')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>

                    <div class="form-group col-md-6">
                        <label for="market-access">How's access to the market?</label>
                        <select class="form-control" id="market-access" name="marketaccess">
                            <option value="">--Select--</option>
                            <option value="Local market" {{ old('marketaccess') === 'Local market' ? 'selected' : '' }}>
                                Local market</option>
                            <option value="Urban market" {{ old('marketaccess') === 'Urban market' ? 'selected' : '' }}>
                                Urban market</option>
                            <option value="Middlemen" {{ old('marketaccess') === 'Middlemen' ? 'selected' : '' }}>
                                Middlemen</option>
                            <option value="Supermarkets" {{ old('marketaccess') === 'Supermarkets' ? 'selected' : '' }}>
                                Supermarkets</option>
                            <option value="Exports" {{ old('marketaccess') === 'Exports' ? 'selected' : '' }}>Exports
                            </option>
                            <option value="The internet" {{ old('marketaccess') === 'The internet' ? 'selected' : '' }}>
                                The internet</option>
                            <option value="Others" {{ old('marketaccess') === 'Others' ? 'selected' : '' }}>Others
                            </option>
                        </select>
                        @error('marketaccess')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div id="other-market-access" style="display:none;">
                            <input type="text" class="form-control" name="othermarketaccess"
                                placeholder="Enter other market access..." value="{{ old('othermarketaccess') }}" />
                        </div>
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="water-access">What is your main access to water?</label>
                        <select class="form-control" id="water-access" name="wateraccess">
                            <option value="">--Select--</option>
                            <option value="Own a well" {{ old('wateraccess') === 'Own a well' ? 'selected' : '' }}>Own a
                                well</option>
                            <option value="Neighbors well"
                                {{ old('wateraccess') === 'Neighbors well' ? 'selected' : '' }}>Neighbors well</option>
                            <option value="Tap water" {{ old('wateraccess') === 'Tap water' ? 'selected' : '' }}>Tap water
                            </option>
                            <option value="Storage tank from rain harvest"
                                {{ old('wateraccess') === 'Storage tank from rain harvest' ? 'selected' : '' }}>Storage
                                tank from rain harvest</option>
                            <option value="River" {{ old('wateraccess') === 'River' ? 'selected' : '' }}>River</option>
                        </select>
                        @error('wateraccess')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>




                    <div class="form-group col-md-6">
                        <label for="lastcrop">Which main crop did you harvest last season?</label>
                        <input type="text" name="lastcrop" id="lastcrop" class="form-control"
                            value="{{ old('lastcrop') }}" />
                        @error('lastcrop')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="animal">Do you own any farm animals?</label>
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <input type="checkbox" name="animal[]" value="cows" id="cows"
                                        {{ old('animal') && in_array('cows', old('animal')) ? 'checked' : '' }}> Cows
                                </div>
                                <div>
                                    <input type="checkbox" name="animal[]" value="sheep" id="sheep"
                                        {{ old('animal') && in_array('sheep', old('animal')) ? 'checked' : '' }}> Sheep
                                </div>
                                <div>
                                    <input type="checkbox" name="animal[]" value="bees" id="bees"
                                        {{ old('animal') && in_array('bees', old('animal')) ? 'checked' : '' }}> Bees
                                </div>
                                <div>
                                    <input type="checkbox" name="animal[]" value="poultry" id="poultry"
                                        {{ old('animal') && in_array('poultry', old('animal')) ? 'checked' : '' }}>
                                    Poultry(Chickens, ducks, geese, etc.)
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <input type="checkbox" name="animal[]" value="goats" id="goats"
                                        {{ old('animal') && in_array('goats', old('animal')) ? 'checked' : '' }}> Goats
                                </div>
                                <div>
                                    <input type="checkbox" name="animal[]" value="pigs" id="pigs"
                                        {{ old('animal') && in_array('pigs', old('animal')) ? 'checked' : '' }}> Pigs
                                </div>
                                <div>
                                    <input type="checkbox" name="animal[]" value="rabbits" id="rabbits"
                                        {{ old('animal') && in_array('rabbits', old('animal')) ? 'checked' : '' }}> Rabbits
                                </div>

                                <div>
                                    <input type="checkbox" name="animal[]" value="others" id="others"
                                        {{ old('animal') && in_array('others', old('animal')) ? 'checked' : '' }}> Others
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="form-group col-md-6">
                        <label for="cropearnings">How much did you earn from this crop last season?</label>
                        <input type="number" name="cropearnings" id="cropearnings" class="form-control"
                            value="{{ old('cropearnings') }}" />
                        @error('cropearnings')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="projectland">What land size are you committing to the project (in acres)?:</label>
                        <input type="number" name="projectland" id="projectland" class="form-control"
                            value="{{ old('projectland') }}" min="0.01" step="0.01" />
                        @error('projectland')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="form-group col-md-6">
                        <label for="projecttime">How much free time can you commit to the project weekly(in hours)?</label>
                        <input type="number" name="projecttime" id="projecttime" class="form-control"
                            value="{{ old('projecttime') }}" />
                        @error('projecttime')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                </div>

                <div class="form-group">

                    <label for="pumpkin">Have you ever planted pumpkins before?</label>
                    <select class="form-control" id="pumpkin" name="pumpkin">

                        <option value="1" {{ old('pumpkin') == 1 ? 'selected' : '' }}>Yes</option>
                        <option value="0" {{ old('pumpkin') == 0 ? 'selected' : '' }}>No</option>
                    </select>
                    @error('pumpkin')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
          
            <div class="form-row">
                <div class="form-group col-md-6">
                    <img src="/images/gps.png" width="30" height="30" class="d-inline-block mr-2">
                    <button type="button" id="geolocationButton" class="btn btn-primary">Capture Geolocation</button>
                    <input type="hidden" name="geolocation" id="geolocation" value="{{ old('geolocation') }}">
                    @error('geolocation')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
           
                <div class="form-group col-md-6">
                    
                    <label for="photo">Upload ID photo</label>
                    <input type="file" name="photo" id="photo" value="{{ old('photo') }}" onchange="previewImage(event)">
                </div>
                <div class="form-group">
                    <img id="preview" src="#" style="max-width: 10%; height: auto;">
                </div>
            </div>

            <div class="form-group">
                <label for="terms">By clicking here you agree to the terms and conditions of joining this group</label>
                <div class="form-check">
                    <input type="checkbox" id="terms" name="terms" class="form-check-input" value="Yes"
                        {{ old('terms') ? 'checked' : '' }}>
                    <label class="form-check-label" for="terms">Yes</label>
                    @error('terms')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="text-center" style="text-align:center;" style="width:400px;">
                    <button type="submit" class="btn btn-info">Submit</button>
                </div>

        </form>

    </div>


    <!----Start-->




    <!-- Include the JavaScript code at the bottom of the page -->
    <script>
        function validateForm() {
            var checkboxes = document.querySelectorAll('input[name="animal[]"]:checked');

            if (checkboxes.length === 0) {
                alert("Please select at least one animal.");
                return false;
            }

            return true;
        }
    </script>
    <script>
        const childrenSelect = document.getElementById("children");
        const childrenQuestions = document.getElementById("children-questions");
        const under5Field = document.getElementById("under5");
        const children6to11Field = document.getElementById("children6to11");
        const children12to18Field = document.getElementById("children12to18");

        childrenSelect.addEventListener("change", function() {
            if (childrenSelect.value === "no") {
                under5Field.value = 0;
                children6to11Field.value = 0;
                children12to18Field.value = 0;
                under5Field.disabled = true;
                children6to11Field.disabled = true;
                children12to18Field.disabled = true;
            } else {
                under5Field.disabled = false;
                children6to11Field.disabled = false;
                children12to18Field.disabled = false;
            }
        });

        // Enable under5Field, children6to11Field, and children12to18Field when page loads if childrenField is already set to "yes"
        if (childrenSelect.value === "yes") {
            under5Field.disabled = false;
            children6to11Field.disabled = false;
            children12to18Field.disabled = false;
        }
    </script>




    <script>
        function previewImage(event) {
            var input = event.target;
            var reader = new FileReader();
            reader.onload = function() {
                var imgElement = document.getElementById("preview");
                imgElement.src = reader.result;
            };
            reader.readAsDataURL(input.files[0]);
        }
    </script>
    <script>
        // Get the geolocation and populate the hidden input field
        function getGeolocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    function(position) {
                        const latitude = position.coords.latitude;
                        const longitude = position.coords.longitude;
                        const geolocationInput = document.getElementById('geolocation');
                        geolocationInput.value = `${latitude},${longitude}`;
                    },
                    function(error) {
                        console.log(error.message);
                    }
                );
            } else {
                console.log('Geolocation is not supported by this browser.');
            }
        }

        // Call the getGeolocation function when the page is loaded
        window.onload = getGeolocation;
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#group').change(function() {
                var selectedGroup = $(this).val();
                if (selectedGroup === 'Baari') {
                    $('#county').val('Nyandarua');
                    $('#subcounty').val('Ndaragwa');
                    $('#location').val('Baari village');
                } else if (selectedGroup === 'Mairo-inya') {
                    $('#county').val('Nairobi');
                    $('#subcounty').val('Ruaka');
                    $('#location').val('Bliss');
                } else {
                    $('#county').val('');
                    $('#subcounty').val('');
                    $('#location').val('');
                }
            });
        });
    </script>
@endsection
