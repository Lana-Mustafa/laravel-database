@extends('layouts.layout')
@section('style')
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body {
	color: #999;
	background: #e2e2e2;
	font-family: 'Roboto', sans-serif;
}
.form-control {
	min-height: 40px;
	box-shadow: none;
	border-color: #e1e1e1;
}
.form-control:focus {
	border-color: #00cb82;
}	
.form-control, .btn {        
	border-radius: 3px;
}
.form-header {
	margin: -30px -30px 20px;
	padding: 30px 30px 10px;
	text-align: center;
	
	border-bottom: 1px solid #eee;
	color: #fff;
}
.form-header h2 {
	font-size: 34px;
	font-weight: bold;
	margin: 0 0 10px;
	font-family: 'Pacifico', sans-serif;
}
.form-header p {
	margin: 20px 0 15px;
	font-size: 17px;
	line-height: normal;
	font-family: 'Courgette', sans-serif;
}
.signup-form {
	width: 600px;
	margin: 0 auto;	
	padding: 30px 0;	
}
.signup-form form {
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #f0f0f0;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.signup-form .form-group {
	margin-bottom: 20px;
}		
.signup-form label {
	font-weight: bold;
	font-size: 14px;
}
.signup-form input[type="checkbox"] {
	position: relative;
	top: 1px;
}
.signup-form .btn {        
	font-size: 16px;
	font-weight: bold;
	/* background: #00cb82; */
	border: none;
	min-width: 200px;
}
.signup-form .btn:hover, .signup-form .btn:focus {
	background: #909497 !important;
	outline: none;
}
.signup-form a {
	color: #00cb82;		
}
.signup-form a:hover {
	text-decoration: underline;
}
</style>
@endsection
@section('form')
<div class="signup-form">
    <form action="/form" method="post" enctype="multipart/form-data">
      @csrf
		<div class="form-header bg-dark">
			<h2>Register Form</h2>
			
        </div>
        
        <div class="form-group">
			<label >National ID</label>
        	<input type="text" class="form-control" name="national_id" placeholder="National ID" value="{{old('national_id')}}">
        </div>
        @error('national_id')
 			<p style="color: red;font-size:0.7rem">{{$message}}</p>
 			@enderror
        <div class="form-group">
			<label>Full Name</label>
        	<input type="text" class="form-control" name="fullname" placeholder="fullname"value="{{old('fullname')}}">
        </div>
        @error('fullname')
                <div>
                @if($message=="The fullname field is required.")
                <p style="color: red;font-size:0.7rem"> {{$message}}</p>
                @endif
                @if($message=="The fullname format is invalid.")
                <p style="color: red;font-size:0.7rem">{{'The Fullname must be 4 parts'}}</p>
                @endif
                </div>
         @enderror
        <div class="form-group">
			<label>Email Address</label>
        	<input type="text" class="form-control" name="email" placeholder="Email"value="{{old('email')}}">
        </div>
        @error('email')
 			<p style="color: red;font-size:0.7rem">{{$message}}</p>
 			@enderror
		<div class="form-group">
			<label>Mobile</label>
            <input type="text" class="form-control" name="mobile" placeholder="mobile"value="{{old('mobile')}}">
        </div>
        @error('mobile')
 			<p style="color: red;font-size:0.7rem">{{$message}}</p>
 			@enderror
		<div class="form-group">
			<label>Address</label>
            <input type="text" class="form-control" name="address" placeholder="address"value="{{old('address')}}">
        </div> 
        @error('address')
 			<p style="color: red;font-size:0.7rem">{{$message}}</p>
			 @enderror
			 <div class="form-group">
			<label>Password</label>
            <input type="password" class="form-control" name="password" placeholder="password"value="{{old('password')}}">
        </div> 
        @error('password')
 			<p style="color: red;font-size:0.7rem">{{$message}}</p>
 			@enderror
        <div class="form-group">
			<label>Image</label>
            <input type="file" class="form-control" name="userimg" >
        </div>  
        @error('userimg')
 			<p style="color: red;font-size:0.7rem">{{$message}}</p>
 			@enderror      
        
		<div class="form-group mt-5">
			<button type="submit" class="btn btn-dark btn-primary btn-block btn-lg ">Register </button>
		</div>	
    </form>
	
</div>
@endsection