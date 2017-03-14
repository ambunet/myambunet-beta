@extends('layouts.useapp')
@section('content')

{{-- <main class="container-fluid">

    <div class="container-fluid">
        <div class="">
        <br>
            <h1>Hello, {{ $user->username }}</h1>
            <p>Please make changes to make your profile awesome</p>
        </div>

        <div class="col-sm-8 col-sm-offset-2">
            {!! Form::model($user, ['method' => 'PATCH', 'action' => ['UserController@update', $user->name], 'files' => true]) !!}
            @include('partials.error-message')
            @if (Auth::user()->role->id == 1)
                <div class="form-group">
                    {!! Form::label("username", "Company Name") !!}
                    {!! Form::text("username", null, ['class' => 'form-control', 'placeholder' => 'Your name']) !!}
                </div>
             @elseif(Auth::user()->role->id == 2)
                <div class="form-group">
                    {!! Form::label("username", "Company Name") !!}
                    {!! Form::text("username", null, ['class' => 'form-control', 'placeholder' => 'Your name']) !!}
                </div>
                @elseif(Auth::user()->role->id == 3)
                <div class="form-group">
                    {!! Form::label("username", "Username") !!}
                    {!! Form::text("username", null, ['class' => 'form-control', 'placeholder' => 'Your name']) !!}
                </div>
                @endif
                <div class="form-group">
                    {!! Form::label("experience", "Experience") !!}
                    {!! Form::text("experience", null, ['class' => 'form-control', 'placeholder' => 'Enter years of experience']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label("location", "Location") !!}
                    {!! Form::text("location", null, ['class' => 'form-control', 'placeholder' => 'location']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label("mobile", "Mobile") !!}
                    {!! Form::text("mobile", null, ['class' => 'form-control', 'placeholder' => 'mobile']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label("level", "Level") !!}
                    {!! Form::select("level", ['EMT - Basic' => 'EMT - Basic','EMT - Intermediate' => 'EMT - Intermediate','EMT - Paramedic' => 'EMT - Paramedic' ], null, ['class' => 'form-control', 'placeholder' => 'Select Your Level']) !!}
                </div>
               <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    {!! Form::label("license", "License") !!}
                    {!! Form::text("license", null, ['class' => 'form-control', 'placeholder' => 'License']) !!}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">
                                                    <i class="material-icons">file_upload</i> Profile Picture</label>
                                                    <input file="photo_id" name="photo_id" type="file" class="form-control" >
                                                </div>
                                            </div>   
                                        </div> 

                                        <br>
                                        <div class="row">
                                            <div class="col-md-12">
                                              <div class="form-group label-floating">
                                                {!! Form::label("get_email", "Email alert on new Blog post") !!}
                                                {!! Form::select("get_email", ['1' => 'Yes', '0' => 'No'], null, ['class' => 'form-control']) !!}
                                               </div> 
                                            </div>      
                                        </div>                           
                                        <!-- <a href="userIndex.html" class="btn btn-info pull-right">Update Profile</a>
                                        <div class="form-group"> -->
                                        {!! Form::submit("Update Profile", ['class' => 'btn btn-info pull-right']) !!}
                                        </div>
                                        <div class="clearfix"></div>
                                    {!! Form::close() !!}
                                </div>

    </div>


</main> --}}
<!-- Start Content -->
             <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="blue">
                                    <h4 class="title">Edit Profile</h4>
                                    <p class="category">Hello, {{ $user->username }}</p>
                                </div>
                                <div class="card-content">
                                    {!! Form::model($user, ['method' => 'PATCH', 'action' => ['UserController@update', $user->username], 'files' => true]) !!}
                                        @include('partials.error-message')
                                        
                                        <div class="row">
                                        @if (Auth::user()->role->id == 1)
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    {!! Form::label("username", "Company Name") !!}
                    {!! Form::text("username", null, ['class' => 'form-control', 'placeholder' => 'Your name']) !!}
                                                </div>
                                            </div>
                                        @elseif (Auth::user()->role->id == 2)
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    {!! Form::label("username", "Company Name") !!}
                    {!! Form::text("username", null, ['class' => 'form-control', 'placeholder' => 'Your name']) !!}
                                                </div>
                                            </div>                        
                                         @elseif(Auth::user()->role->id == 3)    
                                            <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                {!! Form::label("username", "username") !!}
                    {!! Form::text("name", null, ['class' => 'form-control', 'placeholder' => 'Your name']) !!}
                                                </div>
                                            </div>
                                         @endif   

                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    {!! Form::label("experience", "Experience") !!}
                    {!! Form::text("experience", null, ['class' => 'form-control', 'placeholder' => 'Enter years of experience']) !!}
                                                </div>
                                            </div>
                                            <div class="form-group label-floating">
                                             <div class="col-md-12">
                                                {!! Form::label("location", "Location") !!}
                    {!! Form::text("location", null, ['class' => 'form-control', 'placeholder' => 'location']) !!}
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Email address</label>
                                                    <input type="email" class="form-control" >
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    {!! Form::label("mobile", "Mobile") !!}
                    {!! Form::text("mobile", null, ['class' => 'form-control', 'placeholder' => 'mobile']) !!}
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    {!! Form::label("level", "Level") !!}
                    {!! Form::select("level", ['EMT - Basic' => 'EMT - Basic','EMT - Intermediate' => 'EMT - Intermediate','EMT - Paramedic' => 'EMT - Paramedic' ], null, ['class' => 'form-control', 'placeholder' => 'Select Your Level']) !!}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    {!! Form::label("license", "License") !!}
                    {!! Form::text("license", null, ['class' => 'form-control', 'placeholder' => 'License']) !!}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">
                                                    <i class="material-icons">file_upload</i> Profile Picture</label>
                                                    <input file="photo_id" name="photo_id" type="file" class="form-control" >
                                                </div>
                                            </div>   
                                        </div> 
                                        <div class="row">
                                            <div class="col-md-12">
                                              <div class="form-group label-floating">
                                                {!! Form::label("get_email", "Email alert on new Blog post") !!}
                                                {!! Form::select("get_email", ['1' => 'Yes', '0' => 'No'], null, ['class' => 'form-control']) !!}
                                               </div> 
                                            </div>      
                                        </div>                           
                                        <!-- <a href="userIndex.html" class="btn btn-info pull-right">Update Profile</a>
                                        <div class="form-group"> -->
                                        {!! Form::submit("Update Profile", ['class' => 'btn btn-info pull-right']) !!}
                                        </div>
                                        <div class="clearfix"></div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Content -->

        </div>
    </div>
@endsection
