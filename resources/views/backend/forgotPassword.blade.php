@extends('backend.layout')

@section('title', 'Forgot Password')

@section('content')

 <form action="{{route('forget.password.post')}}" method="post">
    @csrf
    <div class="container main" style="width: 800px;">
        <div></div>

        <div class="login p-5">

            <div class="account">
                <h4>Forgot Your Password?</h4>
            </div>
            @include('flash-message')
            <div class="line">
                <hr />
            </div>
            <div class="para">
                <p>You forgot your password? Here you can easily retrieve a new password..</p>
            </div>
            <div class="input">
                <input type="text" placeholder="Enter Email/ Account ID"  name="email"  class=" @error('email') is-invalid @enderror">
            </div>
            @error('email')
            <div  style="color:red">{{ $message }}</div>
            @enderror


            <div class="submit">
                <input type="submit" value="Request new password" name="submit" id="submit">
            </div>

        </div>
    </div>
 </form>

 @endsection
