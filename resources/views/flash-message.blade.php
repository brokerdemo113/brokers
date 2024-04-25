@if ($message = Session::get('success'))
<div  style="background-color: green ; color:white; padding:10px">

    <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('error'))
<div  style="background-color: rgb(210, 25, 25); color:white; padding:10px">

    <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('warning'))
<div  style="background-color: orange; color:white; padding:10px">

    <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('info'))
<div style="background-color: rgb(0, 191, 255); color:white; padding:10px">

    <strong>{{ $message }}</strong>
</div>
@endif

{{-- @if ($errors->any())
<div class="alert alert-danger">

    Please check the form below for errors
</div>
@endif --}}
