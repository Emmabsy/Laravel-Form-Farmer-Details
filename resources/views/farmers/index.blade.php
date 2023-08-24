<!-- resources/views/farmers/index.blade.php -->

@extends('farmers.layout')

@section('content')
 <h4 class="text-center  text-info mb-3 mt-3"> Plumbee Farmer Partnership Data Management System</h4>
<div class="card">
<div class="card-body">

<div class="container table-responsive">

    
    <table class="table">
        <thead>
            <tr>
                 <th>Group Name</th>
                <th>County</th>
                 <th>Sub County</th>
                <th>Location</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Date of Birth</th>
                <th>Village</th>
                <th>Mobile</th>
                <th>Marital Status</th>
                <th>ID Number</th>
                <th>Occupation</th>
                <th>Income Source</th>
                 <th>monthly Income</th>
                <th>Children</th>
                <th>Under 5</th>
                <th>Children 6 to 11</th>
                <th>Children 12 to 18</th>
                <th>Land Status</th>
                <th>Land Size</th>
                <th>Crop Grown</th>
                <th>Market Access</th>
                <th>Water Access</th>
                <th>Last Crop</th>
                <th>Animal</th>
                <th>Crop Earnings</th>
                <th>Project Land</th>
                <th>Project Time</th>
                <th>Pumpkin</th>
                <th>Geolocation</th>
                <th>Photo</th>
                <th>Terms</th>
                <!-- Add more table headers for other fields -->
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($farmers as $farmer)
                <tr>
                    <td>{{ $farmer->groupname }}</td>
                    <td>{{ $farmer->county }}</td>
                    <td>{{ $farmer->subcounty }}</td>
                    <td>{{ $farmer->location }}</td>
                    <td>{{ $farmer->firstname }}</td>
                                        <td>{{ $farmer->middlename }}</td>
                                        <td>{{ $farmer->lastname }}</td>
                                        <td>{{ $farmer->dob }}</td>
                                        <td>{{ $farmer->village }}</td>
                                        <td>{{ $farmer->mobile }}</td>
                                        <td>{{ $farmer->maritalStatus }}</td>
                                        <td>{{ $farmer->idnumber }}</td>
                                        <td>{{ $farmer->occupation }}</td>
                                        <td>{{ $farmer->incomeSource }}</td>
                                        <td>{{ $farmer->monthlyincome }}</td>
                                        <td>{{ $farmer->children ? 'Yes' : 'No' }}</td>
                                        <td>{{ $farmer->under5 }}</td>
                                        <td>{{ $farmer->children6to11 }}</td>
                                        <td>{{ $farmer->children12to18 }}</td>
                                        <td>{{ $farmer->landstatus }}</td>
                                        <td>{{ $farmer->landsize }}</td>
                                        <td>{{ $farmer->cropgrown }}</td>
                                        <td>{{ $farmer->marketaccess }}</td>
                                        <td>{{ $farmer->wateraccess }}</td>
                                        <td>{{ $farmer->lastcrop }}</td>
                                        <td>{{ $farmer->animal }}</td>
                                        <td>{{ $farmer->cropearnings }}</td>
                                        <td>{{ $farmer->projectland }}</td>
                                        <td>{{ $farmer->projecttime }}</td>
                                        <td>{{ $farmer->pumpkin ? 'Yes' : 'No' }}</td>
                                        <td>{{ $farmer->geolocation }}</td>
                                        <td>{{ $farmer->photo }}</td>
                                        <td>{{ $farmer->terms ? 'Yes' : 'No' }}</td>
                    <!-- Add more table cells for other fields -->
                    <td>
              <div class="d-flex">
    <div class="col-6">
        <div style="margin-bottom: 5px;">
            <a href="{{ route('farmers.show', $farmer->id) }}" class="btn btn-primary" style="width: 80px;">View</a>
        </div>
        <div style="margin-bottom: 5px;">
            <a href="{{ route('farmers.edit', $farmer->id) }}" class="btn btn-secondary" style="width: 80px;">Edit</a>
        </div>
        <div style="margin-bottom: 5px;">
            <form action="{{ route('farmers.destroy', $farmer->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" style="width: 80px; height:35px;" onclick="return confirm('Are you sure you want to delete this farmer?')">Delete</button>
            </form>
        </div>
    </div>
</div>


                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
</div>
    
    <div class="text-center" style="text-align:center;">
        <a href="{{ route('farmers.create') }}" class="btn btn-primary mt-3">Create Farmer</a>
        </div>

    
@endsection
