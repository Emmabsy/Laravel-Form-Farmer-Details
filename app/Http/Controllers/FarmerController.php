<?php

namespace App\Http\Controllers;

use App\Models\Farmer;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;



class FarmerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $farmers = Farmer::all();
        return view('farmers.index', compact('farmers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('farmers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            // Other validation rules...
            'animal' => 'nullable|array',
            'animal.*' => 'exists:animals,id', // Assuming you have an "animals" table with an "id" column
        ]);

        $request->validate([
            'groupname' => 'required',
            'county' => 'required',
            'subcounty' => 'required',
            'location' => 'required',
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'dob' => 'required',
            'village' => 'required',
            'mobile' => 'required',
            'maritalStatus' => 'required',
            'idnumber' => 'required',
            'occupation' => 'required',
            'incomeSource' => 'required',
            'monthlyincome' => 'required',
            'children' => 'required|in:yes,no',
            'under5' => $request->input('children') === 'yes' ? 'nullable|numeric|min:0' : '',
            'children6to11' => $request->input('children') === 'yes' ? 'nullable|numeric|min:0' : '',
            'children12to18' => $request->input('children') === 'yes' ? 'nullable|numeric|min:0' : '',
            'landstatus' => 'required',
            'landsize' => 'required',
            'cropgrown' => 'required',
            'marketaccess' => 'required',
            'wateraccess' => 'required',
            'lastcrop' => 'required',
            'animal' => 'required|array',
            'cropearnings' => 'required',
            'projectland' => 'required',
            'projecttime' => 'required',
            'pumpkin' => 'required',
            'geolocation' => 'required',
            'photo' => 'required|image|max:2048',  
            'terms' => 'required'
        ]);

       

        $data = $request->all();

        if ($data['children'] === 'no') {
            $data['under5'] = 0;
            $data['children6to11'] = 0;
            $data['children12to18'] = 0;
        }
        
        $farmer = new Farmer();
        // Assign request data to the model's properties
        $farmer->groupname = $request->input('groupname');
        $farmer->county = $request->input('county');
        $farmer->subcounty = $request->input('subcounty');
        $farmer->location = $request->input('location');
        $farmer->firstname = $request->input('firstname');
        $farmer->middlename = $request->input('middlename');
        $farmer->lastname = $request->input('lastname');
        $farmer->dob = $request->input('dob');
        $farmer->village = $request->input('village');
        $farmer->mobile = $request->input('mobile');
        $farmer->maritalStatus = $request->input('maritalStatus');
        $farmer->idnumber = $request->input('idnumber');
        $farmer->occupation = $request->input('occupation');
        $farmer->incomeSource = $request->input('incomeSource');
        $farmer->monthlyincome = $request->input('monthlyincome');
        $farmer->children = $request->input('children') ? 1 : 0;
        $farmer->under5 = $request->input('children') === 'no' ? 0 : $request->input('under5');
        $farmer->children6to11 = $request->input('children') === 'no' ? 0 : $request->input('children6to11');
        $farmer->children12to18 = $request->input('children') === 'no' ? 0 : $request->input('children12to18');
        $farmer->landstatus = $request->input('landstatus');
        $farmer->landsize = $request->input('landsize');
        $farmer->cropgrown = $request->input('cropgrown');
        $farmer->marketaccess = $request->input('marketaccess');
        $farmer->wateraccess = $request->input('wateraccess');
        $farmer->lastcrop = $request->input('lastcrop');
        $farmer->animal = implode(',', $request->input('animal'));
        $farmer->cropearnings = $request->input('cropearnings');
        $farmer->projectland = $request->input('projectland');
        $farmer->projecttime = $request->input('projecttime');
        $farmer->pumpkin = $request->input('pumpkin');
        $farmer->geolocation = $request->input('geolocation');
        $farmer->photo = $request->input('photo');
        $farmer->terms = $request->input('terms');

        // Handle the photo upload
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoPath = $photo->store('images', 'public'); // Adjust the storage path as needed
            $farmer->photo = $photoPath;
        }
        // Save the model to the database
        $farmer->save();
        // Redirect to the index page with a success message
        return redirect()->route('farmers.index')->with('success', 'Farmer created successfully');
    }

    public function show($id)
    {
        $farmer = Farmer::find($id);
        return view('farmers.show', compact('farmer'));
    }

    public function edit($id)
    {
        $farmer = Farmer::find($id);
        return view('farmers.edit', compact('farmer'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'groupname' => 'required',
            'county' => 'required',
            'subcounty' => 'required',
            'location' => 'required',
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'dob' => 'required',
            'village' => 'required',
            'mobile' => 'required',
            'maritalStatus' => 'required',
            'idnumber' => 'required',
            'occupation' => 'required',
            'incomeSource' => 'required',
            'monthlyincome' => 'required',
            'under5' => 'required',
            'children6to11' => 'required',
            'children12to18' => 'required',
            'landstatus' => 'required',
            'landsize' => 'required',
            'cropgrown' => 'required',
            'marketaccess' => 'required',
            'wateraccess' => 'required',
            'lastcrop' => 'required',
            'animal' => 'required|array',
            'cropearnings' => 'required',
            'projectland' => 'required',
            'projecttime' => 'required',
            'pumpkin' => 'required',
            'geolocation' => 'required',
            'photo' => 'required|image|max:10000', 
            'terms' => 'required'
        ]);

        $data = $request->all();

        if ($data['children'] === 'no') {
            $data['under5'] = 0;
            $data['children6to11'] = 0;
            $data['children12to18'] = 0;
        }

        $farmer = Farmer::find($id);
        if (!$farmer) {
            return redirect()->route('farmers.index')->with('error', 'Farmer not found');
        }

        // Update the model's properties with the new values from the request
        $farmer->groupname = $request->input('groupname');
        $farmer->county = $request->input('county');
        $farmer->subcounty = $request->input('subcounty');
        $farmer->location = $request->input('location');
        $farmer->firstname = $request->input('firstname');
        $farmer->middlename = $request->input('middlename');
        $farmer->lastname = $request->input('lastname');
        $farmer->dob = $request->input('dob');
        $farmer->village = $request->input('village');
        $farmer->mobile = $request->input('mobile');
        $farmer->maritalStatus = $request->input('maritalStatus');
        $farmer->idnumber = $request->input('idnumber');
        $farmer->occupation = $request->input('occupation');
        $farmer->incomeSource = $request->input('incomeSource');
        $farmer->monthlyincome = $request->input('monthlyincome');
        $farmer->children = $request->input('children') ? 1 : 0;
        $farmer->under5 = $request->input('under5');
        $farmer->children6to11 = $request->input('children6to11');
        $farmer->children12to18 = $request->input('children12to18');
        $farmer->landstatus = $request->input('landstatus');
        $farmer->landsize = $request->input('landsize');
        $farmer->cropgrown = $request->input('cropgrown');
        $farmer->marketaccess = $request->input('marketaccess');
        $farmer->wateraccess = $request->input('wateraccess');
        $farmer->lastcrop = $request->input('lastcrop');
        $farmer->animal = implode(',', $request->input('animal'));
        $farmer->cropearnings = $request->input('cropearnings');
        $farmer->projectland = $request->input('projectland');
        $farmer->projecttime = $request->input('projecttime');
        $farmer->pumpkin = $request->input('pumpkin');
        $farmer->geolocation = $request->input('geolocation');
        $farmer->photo = $request->input('photo');
        $farmer->terms = $request->input('terms');


        /*if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoPath = $photo->store('images', 'public');
             $farmer->photo = $photoPath;
        }

        */

        if ($request->hasFile('photo')) {
            // Check if a new photo file has been uploaded
            $image = $request->file('photo');
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $imageFullName = $image_name . '.' . $ext;
            $uploadPath = 'images/';
            $imageURL = $uploadPath . $imageFullName;
            $success = $image->move(public_path($uploadPath), $imageFullName);

            // Update the photo attribute only when a new photo is uploaded
            $farmer->photo = $imageURL;
        }

        // Save the updated model to the database
        $farmer->save();

        // Redirect to the index page with a success message
        return redirect()->route('farmers.index')->with('success', 'Farmer updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $farmer = Farmer::find($id);
        // Delete the model from the database
        $farmer->delete();
        // Redirect to the index page with a success message
        return redirect()->route('farmers.index')->with('success', 'Farmer deleted successfully');
    }
}
