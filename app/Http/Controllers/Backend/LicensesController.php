<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brokerdetails;
use App\Models\License;
use App\Models\Licensedetails;

class LicensesController extends Controller
{
    public function LicensesDetail(){

        // return view('backend.LicensesDetail');
        $brokerdetails = Brokerdetails::pluck('name', 'id');
        $license = License::pluck('license_name', 'id'); // Fetch categories from the database
        return view('backend.LicensesDetail', ['brokerdetails' => $brokerdetails],['license' => $license]);
    }
    public function AddLicense(){

        return view('backend.AddLicense');
    }
    public function PostLicense(Request $request){

        // dd('post');
        $validatedData = $request->validate([

            'license_name' => 'required',
            'license_abb' => 'required',
            'license_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $image = $request->file('license_image');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'), $imageName);

        $imagePath = 'images/' . $imageName;

        $addLicenses = new License();
        $addLicenses->license_name = $validatedData['license_name'];
        $addLicenses->license_abb = $validatedData['license_abb'];
        $addLicenses->license_image= $imagePath;
        $addLicenses->save();
        return redirect()->back()->with('success', 'Data stored successfully.');
    }
    public function PostLicensesDetail(Request $request){

        // dd('post');
        $validatedData = $request->validate([

            'licensed_institution' => 'required',
            'email_license' => 'required',
            'website_institution' => 'required',
            'address_license' => 'required',
            'license_type' => 'required',
            'license_no' => 'required',
            'effective_date' => 'required',
            'expiration_time' => 'required',
            'phone_number' => 'required',
        ]);
        $selectbroker = $request->input('selectbroker');
        $selectlicense = $request->input('selectlicense');
        $currentstatus = $request->input('currentstatus');
        $country = $request->input('country');

        $addLicensesDetails = new Licensedetails();
        $addLicensesDetails->selectbroker = $selectbroker;

        $addLicensesDetails->selectlicense= $selectlicense;
        $addLicensesDetails->currentstatus=$currentstatus;
        $addLicensesDetails->country=$country;
        $addLicensesDetails->licensed_institution= $validatedData['licensed_institution'];
        $addLicensesDetails->email_license = $validatedData['email_license'];
        $addLicensesDetails->website_institution = $validatedData['website_institution'];
        $addLicensesDetails->address_license = $validatedData['address_license'];
        $addLicensesDetails->license_type = $validatedData['license_type'];
        $addLicensesDetails->license_no = $validatedData['license_no'];
        $addLicensesDetails->effective_date = $validatedData['effective_date'];
        $addLicensesDetails->expiration_time = $validatedData['expiration_time'];
        $addLicensesDetails->phone_number = $validatedData['phone_number'];


        $addLicensesDetails->save();
        return redirect()->back()->with('success', 'Data stored successfully.');



    }
}
