<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginConroller extends Controller
{
    //
    public function LoginView(){

        return view('backend.login');
    }
    public function loginPost(Request $request){


    //    dd("post login");
    $request->validate([
        'email' => 'required',
        'password' => 'required',
    ]);

    if(Auth::guard('admin')->attempt($request->only('email', 'password'))){

        return redirect()->intended('admin/dashboard')->withSuccess('Signed in');
        // dd('success');

    }
    return redirect("/admin/login")->withError('Login details are not valid');


    }
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }
}
