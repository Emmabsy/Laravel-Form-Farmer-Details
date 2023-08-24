<!-- resources/views/farmer/show.blade.php -->

@extends('farmers.layout')
@section('content')
   <h4 class="text-center  text-info mb-3 mt-3"> Plumbee Farmer Partnership Data Management System</h4>
<div class="card">
<div class="card-body">

<div class="container table-responsive">

    <table class="table table-bordered">
        <tr>
            <th>Group Name:</th>
            <td>{{ $farmer->groupname }}</td>
        </tr>
        <tr>
            <th>First Name:</th>
            <td>{{ $farmer->firstname }}</td>
        </tr>
        <tr>
            <th>Middle Name:</th>
            <td>{{ $farmer->middlename }}</td>
        </tr>
        <tr>
            <th>Last Name:</th>
            <td>{{ $farmer->lastname }}</td>
        </tr>
        <tr>
            <th>Date of Birth:</th>
            <td>{{ $farmer->dob }}</td>
        </tr>
    
        <tr>
            <th>Village:</th>
            <td>{{ $farmer->village }}</td>
        </tr>
        <tr>
            <th>Mobile:</th>
            <td>{{ $farmer->mobile }}</td>
        </tr>
        <tr>
            <th>Marital Status:</th>
            <td>{{ $farmer->maritalStatus }}</td>
        </tr>
        <tr>
            <th>ID Number:</th>
            <td>{{ $farmer->idnumber }}</td>
        </tr>
        <tr>
            <th>Occupation:</th>
            <td>{{ $farmer->occupation }}</td>
        </tr>
        <tr>
            <th>Income Source:</th>
            <td>{{ $farmer->incomeSource }}</td>
        </tr>
        <tr>
            <th>Monthly Income:</th>
            <td>{{ $farmer->monthlyincome }}</td>
        </tr>
        <tr>
            <th>Children:</th>
            <td>{{ $farmer->children  ? 'Yes' : 'No'}}</td>
        </tr>
        <tr>
        <th>Under 5:</th>
        <td>{{ $farmer->under5 }}</td>
    </tr>
    <tr>
        <th>Children 6 to 11:</th>
        <td>{{ $farmer->children6to11 }}</td>
    </tr>
    <tr>
        <th>Children 12 to 18:</th>
        <td>{{ $farmer->children12to18 }}</td>
    </tr>
    <tr>
        <th>Land Status:</th>
        <td>{{ $farmer->landstatus }}</td>
    </tr>
    <tr>
        <th>Land Size:</th>
        <td>{{ $farmer->landsize }}</td>
    </tr>
    <tr>
        <th>Crop Grown:</th>
        <td>{{ $farmer->cropgrown }}</td>
    </tr>
    <tr>
        <th>Market Access:</th>
        <td>{{ $farmer->marketaccess }}</td>
    </tr>
    <tr>
        <th>Water Access:</th>
        <td>{{ $farmer->wateraccess }}</td>
    </tr>
    <tr>
        <th>Last Crop:</th>
        <td>{{ $farmer->lastcrop }}</td>
    </tr>
    <tr>
        <th>Animals:</th>
        <td>{{ $farmer->animal }}</td>
    </tr>
    <tr>
        <th>Crop Earnings:</th>
        <td>{{ $farmer->cropearnings }}</td>
    </tr>
    <tr>
        <th>Project Land:</th>
        <td>{{ $farmer->projectland }}</td>
    </tr>
    <tr>
        <th>Project Time:</th>
        <td>{{ $farmer->projecttime }}</td>
    </tr>
    <tr>
        <th>Pumpkin:</th>
        <td>{{ $farmer->pumpkin ? 'Yes' : 'No' }}</td>
    </tr>
    <tr>
        <th>Geolocation</th>
        <td>{{ $farmer->geolocation }}</td>
    </tr>
    <tr>
        <th>Photo</th>
        <td>{{ $farmer->photo }}</td>
    </tr>
    <tr>
        <th>Terms:</th>
        <td>{{ $farmer->terms ? 'Accepted' : 'Not Accepted' }}</td>
    </tr>
    </table>
</div>
</div>
</div>
<div class= "mt-3 mb-3" style="text-align:center;">
    <a href="{{ route('farmers.edit', $farmer->id) }}" class="btn btn-primary" style="width: 200px;">Edit</a>
     
    
    <a class="btn btn-primary" href="{{ route('farmers.index') }}" style="width: 200px;">Back</a>
</div>
@endsection
