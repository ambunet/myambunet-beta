@extends('layouts.useapp')
@section('content')

{{-- @include('partials.tinymce') --}}

{{-- <main class="container-fluid">
@include('partials.select-2-script')
    <div class="container-fluid">
    <br>
        <div class="">
            <h1>Create a schedule</h1>
        </div>
        <div class="col-sm-10 col-sm-offset-1">
            {!! Form::open([]) !!}
                <div class="form-group">
                    @include('partials.error-message')
                    {!! Form::label("title", "Title") !!}
                    {!! Form::text("title", null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    @include('partials.error-message')
                    {!! Form::label("type", "Type") !!}
                    {!! Form::text("type", null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
				<label for="start_time">Start</label>
				<div class="input-group">
					<input id="datepicker" type="text" class="form-control" name="start_time" placeholder="Select your start time" value="">
					<span class="input-group-addon">
						<span><i class="fa fa-calendar"></i></span>
                    </span>
				</div>
					
				</div>

				<div class="form-group">
				<label for="end_time">End</label>
				<div class="input-group">
					<input id="datepicker1" type="text" class="form-control" name="end_time" placeholder="Select your end time" value="">
					<span class="input-group-addon">
						<span><i class="fa fa-calendar"></i></span>
                    </span>
				</div>
					
				</div>
               
                <div class="form-group">
                    {!! Form::submit("Submit", ['class' => 'btn btn-primary']) !!}
                </div>
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
                                    <h4 class="title">Create Schedule</h4>
                                    <p class="category">Complete your schedule</p>
                                </div>
                                <div class="card-content">
                                {{-- <form> --}}
                            <div class="row">
                                <div class="col-md-12">
                                <div class="form-group label-floating">
                                    {!! Form::open([]) !!}
                                    <div class="form-group">
                                    @include('partials.error-message')
                                    {!! Form::label("title", "Title") !!}
                                    {!! Form::text("title", null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                </div>
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                @include('partials.error-message')
                                                    <label class="control-label">Type</label>
                                                    <select class="form-control" type="text" name="type" id="">
                                                            
                                                            <option value="1">Full Time MWF</option>
                                                            <option value="2">Full Time TTS</option>
                                                            <option value="3">Full Time Variable</option>
                                                            <option value="4">Full Day</option>
                                                            <option value="5">Runs/Calls</option>
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Start Time</label>
                                                    <input class="datepicker1 form-control" type="text" value="03/12/2016"/>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">End Time</label>
                                                    <input class="datepicker2 form-control" type="text" value="03/12/2016"/>
                                                    
                                                </div>
                                            </div>
                                        </div>    
                                <div class="form-group">
                               {!! Form::submit("Submit", ['class' => 'btn btn-primary']) !!}
                               </div>
                                {!! Form::close() !!}

                                        <!-- <a href="scheduleIndex.html" class="btn btn-info pull-right">Submit</a> -->
                                        <!-- <a href="userIndex.html"><button type="submit" class="btn btn-info pull-right">Update Profile </button></a> -->
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Content -->

@endsection