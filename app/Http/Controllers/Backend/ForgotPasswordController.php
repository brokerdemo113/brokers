<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    public function forgotPassword()
    {
        return view('backend.forgotPassword');
    }
    public function submitForgetPasswordForm(Request $request)
    {

        // dd('reset password');
        $request->validate([
            'email' => 'required|email|exists:admins',
        ]);

        $token = Str::random(64);


        DB::table('password_reset_tokens')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
          ]);

        Mail::send('backend.email.forgetPassword', ['token' => $token], function($message) use($request){
            $message->to($request->email);
            $message->subject('Reset Password');
        });

        // return back()->with('message', 'We have e-mailed your password reset link!');
        return redirect()->back()->withSuccess('We have e-mailed your password reset link!');
    }

    public function showResetPasswordForm($token) {
        return view('backend.forgetPasswordLink', ['token' => $token]);
     }

     public function submitResetPasswordForm(Request $request)
      {
          $request->validate([
              'email' => 'required|email|exists:admins',
              'password' => 'required|string|min:6|confirmed',
              'password_confirmation' => 'required'
          ]);

          $updatePassword = DB::table('password_reset_tokens')
                              ->where([
                                'email' => $request->email,
                                'token' => $request->token
                              ])
                              ->first();

          if(!$updatePassword){
              return back()->withInput()->with('error', 'Invalid token!');
          }

          $user = Admin::where('email', $request->email)
                      ->update(['password' => Hash::make($request->password)]);

          DB::table('password_reset_tokens')->where(['email'=> $request->email])->delete();

          return redirect('admin/login')->withSuccess('Your password has been changed!');
      }
}
