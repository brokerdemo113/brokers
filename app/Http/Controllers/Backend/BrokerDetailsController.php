<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brokerdetails;

class BrokerDetailsController extends Controller
{
    public function BrokerDetails()
    {
        return view('backend.brokerDetail');
    }
    public function BrokerDetailsPost(Request $request)
    {

        // dd('post');
        $validatedData = $request->validate([
            'name' => 'required',
            'image' => 'required',
            'email' => 'required',
            'website' => 'required',
            'phone' => 'required',
            'year' => 'required',
            'platform_reg' => 'required',
            'company_abb' => 'required',
            'address' => 'required',
            'facebook_link' => 'required',
            'instagram_link' => 'required',
            'twitter_link' => 'required',
            'youtube_link' => 'required',
            'linkedin_link' => 'required',
        ]);
        $brokerDetails = new Brokerdetails();
         $brokerDetails->name = $validatedData['name'];
         $brokerDetails->image = $validatedData['image'];
         $brokerDetails->email = $validatedData['email'];
         $brokerDetails->website = $validatedData['website'];
         $brokerDetails->phone = $validatedData['phone'];
         $brokerDetails->year = $validatedData['year'];
         $brokerDetails->platform_reg = $validatedData['platform_reg'];
         $brokerDetails->company_abb = $validatedData['company_abb'];
         $brokerDetails->address = $validatedData['address'];
         $brokerDetails->facebook_link = $validatedData['facebook_link'];
         $brokerDetails->instagram_link = $validatedData['instagram_link'];
         $brokerDetails->twitter_link = $validatedData['twitter_link'];
         $brokerDetails->youtube_link = $validatedData['youtube_link'];
         $brokerDetails->linkedin_link = $validatedData['linkedin_link'];

         $brokerDetails->save();
        return redirect()->back()->with('success', 'Data stored successfully.');
    }
}
