@extends('layouts.layout')
@section ('style')
<style>
    body {
        background: -webkit-linear-gradient(left, #999,#464A4E );
    }

    .emp-profile {
        padding: 3%;
        margin-top: 3%;
        margin-bottom: 3%;
        border-radius: 0.5rem;
        background: #fff;
    }

    .profile-img {
        text-align: center;
    }

    .profile-img img {
        width: 40%;
        height: 20%;
    }

    .profile-img .file {
        position: relative;
        overflow: hidden;
        margin-top: -20%;
        width: 40%;
        border: none;
        border-radius: 0;
        font-size: 15px;
        background: #212529b8;
    }

    .profile-img .file input {
        position: absolute;
        opacity: 0;
        right: 0;
        top: 0;
    }

    .profile-head h5 {
        color: #333;
    }

    .profile-head h6 {
        color: #0062cc;
    }

    .profile-edit-btn {
        border: none;
        border-radius: 1.5rem;
        width: 70%;
        padding: 2%;
        font-weight: 600;
        color: #6c757d;
        cursor: pointer;
    }

    .proile-rating {
        font-size: 12px;
        color: #818182;
        margin-top: 5%;
    }

    .proile-rating span {
        color: #495057;
        font-size: 15px;
        font-weight: 600;
    }

    .profile-head .nav-tabs {
        margin-bottom: 5%;
    }

    .profile-head .nav-tabs .nav-link {
        font-weight: 600;
        border: none;
    }

    .profile-head .nav-tabs .nav-link.active {
        border: none;
        border-bottom: 2px solid #0062cc;
    }

    .profile-work {
        padding: 14%;
        margin-top: -15%;
    }

    .profile-work p {
        font-size: 12px;
        color: #818182;
        font-weight: 600;
        margin-top: 10%;
    }

    .profile-work a {
        text-decoration: none;
        color: #495057;
        font-weight: 600;
        font-size: 14px;
    }

    .profile-work ul {
        list-style: none;
    }

    .profile-tab label {
        font-weight: 600;
    }

    .profile-tab p {
        font-weight: 600;
        color: #0062cc;
    }
</style>
@endsection
@section('userProfile')

<div class="container emp-profile">
    <form method="post">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="profile-img">
                <img alt="" src="/images/{{$trainee->userimg}}">
                    
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="profile-head">
                    <h5>
                    {{$trainee->fullname}}
                    </h5>
                    <h6>
                        Trainee at Coding Academy by Orange
                    </h6>
                    
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-2">
                
                <a href="/home"type="button" class="btn btn-secondary"">Go to Back</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                
            </div>
            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <label>National Id</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$trainee->national_id}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Full Name</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$trainee->fullname}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Email</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$trainee->email}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Mobile</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$trainee->mobile}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Address</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$trainee->address}}</p>
                            </div>
                        </div>
                    </div>
                    
    </form>
</div>

@endsection