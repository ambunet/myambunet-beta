@extends('layouts.app')
@section('content')

{{-- @include('partials.tinymce') --}}

<main class="container-fluid">
@include('partials.select-2-script')
    <div class="container-fluid">
        <div class="jumbotron">
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

</main>



@endsection