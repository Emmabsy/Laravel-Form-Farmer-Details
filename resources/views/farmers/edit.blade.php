<!-- resources/views/farmer/edit.blade.php -->
@extends('farmers.layout')
@section('content')
    <h4 class="text-center mt-1 text-info mb-3"> Edit Plumbee Farmer Details</h4>

    <div class="card">
        <div class="card-body">


            <form action="{{ route('farmers.update', $farmer->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group row">
                    <label for="group" class="col-sm-3 col-form-label">Select Group:</label>
                    <div class="col-sm-9">
                        <select id="group" name="groupname" class="form-control">
                            <option value="">--Select--</option>
                            <option value="Baari" {{ $farmer->groupname === 'Baari' ? 'selected' : '' }}>Baari Farmer
                                supply group</option>
                            <option value="Mairo-inya" {{ $farmer->groupname === 'Mairo-inya' ? 'selected' : '' }}>
                                Mairo-inya Farmer supply group</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="county" class="col-sm-3 col-form-label">County:</label>
                    <div class="col-sm-9">
                        <input type="text" id="county" name="county" readonly class="form-control"
                            value="{{ $farmer->county }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="sub-county" class="col-sm-3 col-form-label">Sub-county:</label>
                    <div class="col-sm-9">
                        <input type="text" id="subcounty" name="subcounty" readonly class="form-control"
                            value="{{ $farmer->subcounty }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="location" class="col-sm-3 col-form-label">Location:</label>
                    <div class="col-sm-9">
                        <input type="text" id="location" name="location" readonly class="form-control"
                            value="{{ $farmer->location }}">
                    </div>
                </div>


                <h5 class="text-center mb-3" style="text-decoration: underline;"> Personal Information</h5>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="firstname">First Name:</label>
                            <input type="text" name="firstname" id="firstname" class="form-control"
                                value="{{ $farmer->firstname }}">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="middlename">Middle Name:</label>
                            <input type="text" name="middlename" id="middlename" class="form-control"
                                value="{{ $farmer->middlename }}">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="lastname">Last Name:</label>
                            <input type="text" name="lastname" id="lastname" class="form-control"
                                value="{{ $farmer->lastname }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="dob">Date of Birth:</label>
                            <input type="date" name="dob" id="dob" class="form-control"
                                value="{{ $farmer->dob }}">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="village">Village:</label>
                            <input type="text" name="village" id="village" class="form-control"
                                value="{{ $farmer->village }}">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="mobile">Mobile:</label>
                            <input type="text" name="mobile" id="mobile" class="form-control"
                                value="{{ $farmer->mobile }}">
                        </div>
                    </div>
                </div>




                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="maritalStatus">Marital Status:</label>
                            <select class="form-control" id="maritalStatus" name="maritalStatus">
                                <option value="Single" {{ $farmer->maritalStatus === 'Single' ? 'selected' : '' }}>Single
                                </option>
                                <option value="Married" {{ $farmer->maritalStatus === 'Married' ? 'selected' : '' }}>
                                    Married</option>
                                <option value="Divorced" {{ $farmer->maritalStatus === 'Divorced' ? 'selected' : '' }}>
                                    Divorced</option>
                                <option value="Widowed" {{ $farmer->maritalStatus === 'Widowed' ? 'selected' : '' }}>
                                    Widowed</option>
                                <option value="Separated" {{ $farmer->maritalStatus === 'Separated' ? 'selected' : '' }}>
                                    Separated</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="idnumber">ID Number:</label>
                            <input type="text" name="idnumber" id="idnumber" class="form-control"
                                value="{{ $farmer->idnumber }}">
                        </div>
                    </div>
                </div>


                <h5 class="text-center mb-3 " style="text-decoration: underline;">Household Size and Income Details</h5>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="occupation">Occupation:</label>
                            <select class="form-control" id="occupation" name="occupation">
                                <option value="Farming" {{ $farmer->occupation === 'Farming' ? 'selected' : '' }}>Farming
                                </option>
                                <option value="Business" {{ $farmer->occupation === 'Business' ? 'selected' : '' }}>
                                    Business</option>
                                <option value="Employee" {{ $farmer->occupation === 'Employee' ? 'selected' : '' }}>
                                    Employee</option>
                                <option value="Entrepreneur"
                                    {{ $farmer->occupation === 'Entrepreneur' ? 'selected' : '' }}>Entrepreneur</option>
                                <option value="Others" {{ $farmer->occupation === 'Others' ? 'selected' : '' }}>Others
                                </option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="incomeSource">Income Source:</label>
                            <select class="form-control" id="incomeSource" name="incomeSource">
                                <option value="Employment" {{ $farmer->incomeSource === 'Employment' ? 'selected' : '' }}>
                                    Employment</option>
                                <option value="Business" {{ $farmer->incomeSource === 'Business' ? 'selected' : '' }}>
                                    Business</option>
                                <option value="Farming" {{ $farmer->incomeSource === 'Farming' ? 'selected' : '' }}>
                                    Farming</option>
                                <option value="Investments"
                                    {{ $farmer->incomeSource === 'Investments' ? 'selected' : '' }}>Investments</option>
                                <option value="Others" {{ $farmer->incomeSource === 'Others' ? 'selected' : '' }}>Others
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="monthly-income">Monthly income of the household:</label>
                            <select class="form-control" id="monthly-income" name="monthlyincome" required>
                                <option value="Less than KES 1,000"
                                    {{ $farmer->monthlyincome === 'Less than KES 1,000' ? 'selected' : '' }}>Less than KES
                                    1,000</option>
                                <option value="KES 1,000 - KES 2,000"
                                    {{ $farmer->monthlyincome === 'KES 1,000 - KES 2,000' ? 'selected' : '' }}>KES 1,000 -
                                    KES 2,000</option>
                                <option value="KES 2,000 - KES 5,000"
                                    {{ $farmer->monthlyincome === 'KES 2,000 - KES 5,000' ? 'selected' : '' }}>KES 2,000 -
                                    KES 5,000</option>
                                <option value="KES 5,000 - KES 7,000"
                                    {{ $farmer->monthlyincome === 'KES 5,000 - KES 7,000' ? 'selected' : '' }}>KES 5,000 -
                                    KES 7,000</option>
                                <option value="More than KES 7,000"
                                    {{ $farmer->monthlyincome === 'More than KES 7,000' ? 'selected' : '' }}>More than KES
                                    7,000</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="children">Do you have children?</label>
                            <select class="form-control" id="children" name="children">
                                <option value="yes" {{ $farmer->children === 'yes' ? 'selected' : '' }}>Yes</option>
                                <option value="no" {{ $farmer->children === 'no' ? 'selected' : '' }}>No</option>
                            </select>
                            @error('children')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>
                </div>


                <!----Start-->
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                        <label for="under5">Number of Children Under 5:</label>
                        <input type="number" name="under5" id="under5" class="form-control"
                            value="{{ $farmer->under5 ?? 0 }}" {{ $farmer->children === 'no' ? 'disabled' : '' }} />
                        @error('under5')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    </div>
                    

                   <div class="col-md-4">
                        <div class="form-group">
                        <label for="children6to11">Number of Children Aged 6 to 11:</label>
                        <input type="number" name="children6to11" id="children6to11" class="form-control"
                            value="{{ $farmer->children6to11 ?? 0 }}"
                            {{ $farmer->children === 'no' ? 'disabled' : '' }} />
                        @error('children6to11')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                   </div>

                     <div class="col-md-4">
                        <div class="form-group">
                        <label for="children12to18">Number of Children Aged 12 to 18:</label>
                        <input type="number" name="children12to18" id="children12to18" class="form-control"
                            value="{{ $farmer->children12to18 ?? 0 }}"
                            {{ $farmer->children === 'no' ? 'disabled' : '' }} />
                        @error('children12to18')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>
                     </div>
                </div>

                <h5 class="text-center mb-3" style="text-decoration: underline;">Farm Details for Household</h5>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="landstatus">Do you own or lease the land that you farm?</label>
                            <select class="form-control" name="landstatus" id="landstatus">
                                <option value="OWN" {{ $farmer->landstatus === 'OWN' ? 'selected' : '' }}>Own</option>
                                <option value="Lease" {{ $farmer->landstatus === 'Lease' ? 'selected' : '' }}>Lease
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="landsize">How big is your land (in acres)?</label>
                            <input type="number" name="landsize" id="landsize" min="0.01" step="0.01"
                                class="form-control" value="{{ $farmer->landsize }}">
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="cropgrown">What do you grow in your plot?</label>
                            <input type="text" name="cropgrown" id="cropgrown" class="form-control"
                                value="{{ $farmer->cropgrown }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="marketaccess">Market Access:</label>
                            <select class="form-control" id="marketaccess" name="marketaccess">
                                <option value="Local market"
                                    {{ $farmer->marketaccess === 'Local market' ? 'selected' : '' }}>Local market</option>
                                <option value="Urban market"
                                    {{ $farmer->marketaccess === 'Urban market' ? 'selected' : '' }}>Urban market</option>
                                <option value="Middlemen" {{ $farmer->marketaccess === 'Middlemen' ? 'selected' : '' }}>
                                    Middlemen</option>
                                <option value="Supermarkets"
                                    {{ $farmer->marketaccess === 'Supermarkets' ? 'selected' : '' }}>Supermarkets</option>
                                <option value="Exports" {{ $farmer->marketaccess === 'Exports' ? 'selected' : '' }}>
                                    Exports</option>
                                <option value="The internet"
                                    {{ $farmer->marketaccess === 'The internet' ? 'selected' : '' }}>The internet</option>
                                <option value="Others" {{ $farmer->marketaccess === 'Others' ? 'selected' : '' }}>Others
                                </option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="wateraccess">What is your main access to water?</label>
                            <select class="form-control" id="wateraccess" name="wateraccess">
                                <option value="Own a well" {{ $farmer->wateraccess === 'Own a well' ? 'selected' : '' }}>
                                    Own a well</option>
                                <option value="Neighbors well"
                                    {{ $farmer->wateraccess === 'Neighbors well' ? 'selected' : '' }}>Neighbors well
                                </option>
                                <option value="Tap water" {{ $farmer->wateraccess === 'Tap water' ? 'selected' : '' }}>Tap
                                    water</option>
                                <option value="Storage tank from rain harvest"
                                    {{ $farmer->wateraccess === 'Storage tank from rain harvest' ? 'selected' : '' }}>
                                    Storage tank from rain harvest</option>
                                <option value="River" {{ $farmer->wateraccess === 'River' ? 'selected' : '' }}>River
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lastcrop">Which main crop did you harvest last season?</label>
                            <input type="text" name="lastcrop" id="lastcrop" class="form-control"
                                value="{{ $farmer->lastcrop }}">
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="animals">Do you own any farm animals? (List of options/multiple selection)</label>

                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <input type="checkbox" name="animal[]" value="cows" id="cows"
                                            {{ in_array('cows', explode(',', $farmer->animal)) ? 'checked' : '' }}> Cows
                                    </div>
                                    <div>
                                        <input type="checkbox" name="animal[]" value="pigs" id="pigs"
                                            {{ in_array('pigs', explode(',', $farmer->animal)) ? 'checked' : '' }}> Pigs
                                    </div>
                                    <div>
                                        <input type="checkbox" name="animal[]" value="poultry" id="poultry"
                                            {{ in_array('poultry', explode(',', $farmer->animal)) ? 'checked' : '' }}>
                                        Poultry (Chickens, ducks, geese, etc.)
                                    </div>
                                    <div>
                                        <input type="checkbox" name="animal[]" value="bees" id="bees"
                                            {{ in_array('pigs', explode(',', $farmer->animal)) ? 'checked' : '' }}> Bees
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <input type="checkbox" name="animal[]" value="sheep" id="sheep"
                                            {{ in_array('sheep', explode(',', $farmer->animal)) ? 'checked' : '' }}> Sheep
                                    </div>
                                    <div>
                                        <input type="checkbox" name="animal[]" value="goats" id="goats"
                                            {{ in_array('goats', explode(',', $farmer->animal)) ? 'checked' : '' }}> Goats
                                    </div>
                                    <div>
                                        <input type="checkbox" name="animal[]" value="rabbits" id="rabbits"
                                            {{ in_array('rabbits', explode(',', $farmer->animal)) ? 'checked' : '' }}>
                                        Rabbits
                                    </div>
                                    <div>
                                        <input type="checkbox" name="animal[]" value="pigs" id="others"
                                            {{ in_array('others', explode(',', $farmer->animal)) ? 'checked' : '' }}>
                                        Others
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="cropearnings">How much did you earn from this crop last season?</label>
                            <input type="number" name="cropearnings" id="cropearnings" class="form-control"
                                value="{{ $farmer->cropearnings }}">
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="projectland">What land size are you committing to the project (in acres)?</label>
                            <input type="number" name="projectland" id="projectland" min="0.01"
                                step="0.01"class="form-control" value="{{ $farmer->projectland }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="projecttime">How much free time can you commit to the project weekly(in
                                hours)?</label>
                            <input type="number" name="projecttime" id="projecttime" class="form-control"
                                value="{{ $farmer->projecttime }}">
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="pumpkin">Have you ever planted pumpkins before?</label>
                            <select class="form-control" id="pumpkin" name="pumpkin">
                                <option value="1" {{ $farmer->pumpkin ? 'selected' : '' }}>Yes</option>
                                <option value="0" {{ !$farmer->pumpkin ? 'selected' : '' }}>No</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <img src="/images/gps.png" width="30" height="30" class="d-inline-block mr-2">
                                <button type="button" id="geolocationButton" class="btn btn-primary">Capture
                                    Geolocation</button>
                                <input type="hidden" name="geolocation" id="geolocationInput"
                                    value="{{ $farmer->geolocation }}">
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="photo">Uplod ID Photo:</label>
                                <div class="col-sm-9">
                                    <input type="file" id="photo" name="photo" class="form-control-file">
                                    @if ($farmer->photo)
                                    @endif
                                    <img src="{{ asset($farmer->photo) }}" alt="Photo" class="img-thumbnail"
                                        style="max-width: 20%; height: auto;">
                                </div>
                                @error('photo')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>


                </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="terms">By clicking here you agree to the terms and conditions of joining this group</label>
                <div class="form-check">
                    <input type="checkbox" id="terms" name="terms" class="form-check-input" value="Yes"
                        {{ $farmer->terms ? 'checked' : '' }}>
                    <label class="form-check-label" for="terms">Yes</label>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-3" style="text-align:center;">
        <button type="submit" class="btn btn-primary" style="width: 200px;">Update</button>
        <a class="btn btn-secondary" style="width: 200px;"href="{{ route('farmers.show', $farmer->id) }}">Cancel</a>
    </div>
    </form>
    </div>
    </div>
    <!-- Include the JavaScript code at the bottom of the page -->

    <script>
        // Function to handle the change event of the children select
        function handleChildrenChange() {
            var childrenSelect = document.getElementById('children');
            var under5Input = document.getElementById('under5');
            var children6to11Input = document.getElementById('children6to11');
            var children12to18Input = document.getElementById('children12to18');

            if (childrenSelect.value === 'no') {
                under5Input.value = 0;
                children6to11Input.value = 0;
                children12to18Input.value = 0;
                under5Input.disabled = true;
                children6to11Input.disabled = true;
                children12to18Input.disabled = true;
            } else {
                under5Input.disabled = false;
                children6to11Input.disabled = false;
                children12to18Input.disabled = false;
            }
        }

        // Attach the event listener to the children select
        var childrenSelect = document.getElementById('children');
        childrenSelect.addEventListener('change', handleChildrenChange);

        // Call the handleChildrenChange function to initialize the state
        handleChildrenChange();
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const geolocationButton = document.getElementById('geolocationButton');
            const geolocationInput = document.getElementById('geolocationInput');

            geolocationButton.addEventListener('click', function() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function(position) {
                        const latitude = position.coords.latitude;
                        const longitude = position.coords.longitude;
                        const geolocation = latitude + ',' + longitude;
                        geolocationInput.value = geolocation;
                    });
                } else {
                    console.log('Geolocation is not supported by this browser.');
                }
            });
        });
    </script>
@endsection
