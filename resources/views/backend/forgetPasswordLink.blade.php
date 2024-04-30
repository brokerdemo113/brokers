@extends('backend.layout')

@section('title', 'Login')

@section('content')

 <form action="{{ route('reset.password.post') }}" method="post">
    @csrf
    <input type="hidden" name="token" value="{{ $token }}">
    <div class="container main" style="width: 800px;">
        <div></div>

        <div class="login p-5">
            <div class="header">
                <h3>Log in</h3>
            </div>
            <div class="account">
                <h4>Email/ Account ID</h4>
            </div>
            @include('flash-message')
            <div class="line">
                <hr />
            </div>
            <div class="para">
                <p>Registration is automatically completed as successful first login.</p>
            </div>
            <div class="input">
                <input type="text" placeholder="Enter Email/ Account ID"  name="email"  class=" @error('email') is-invalid @enderror">
            </div>
            @error('email')
            <div  style="color:red">{{ $message }}</div>
            @enderror
            <div class="input">
                <input type="password" placeholder="Enter Password" name="password"  class=" @error('password') is-invalid @enderror">
            </div>
            @error('password')
            <div style="color:red">{{ $message }}</div>
            @enderror
            <div class="input">
                <input type="password" placeholder="Confirm Password" name="password_confirmation"  class=" @error('password') is-invalid @enderror">
            </div>
            @error('password_confirmation')
            <div style="color:red">{{ $message }}</div>
            @enderror
            <div class="submit">
                <input type="submit" value="Reset" name="submit" id="submit">
            </div>

        </div>
    </div>
 </form>

 @endsection
