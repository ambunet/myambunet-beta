@extends('layouts.useapp')
@section('content')

{{-- <main class="container-fluid">

    <div class="container-fluid">
        <div class="">
            <h1>Email Us</h1>
        </div>

        <div class="col-sm-8 col-sm-offset-2">
            {{ Form::open(['method' => 'POST', 'action' => 'MailController@send']) }}
            @include('partials.error-message')
                <div class="form-group">
                    {{ Form::label("name", "Name") }}
                    {{ Form::text("name", null, ['class' => 'form-control', 'placeholder' => 'Your name']) }}
                </div>
                <div class="form-group">
                    {{ Form::label("email", "Email") }}
                    {{ Form::email("email", null, ['class' => 'form-control', 'placeholder' => 'Your email']) }}
                </div>
                <div class="form-group">
                    {{ Form::label("subject", "Subject") }}
                    {{ Form::text("subject", null, ['class' => 'form-control', 'placeholder' => 'Subject']) }}
                </div>
                <div class="form-group">
                    {{ Form::label("mail_message", "Message") }}
                    {{ Form::textarea("mail_message", null, ['class' => 'form-control', 'placeholder' => 'Your message']) }}
                </div>
                <div class="form-group">
                    {{ Form::submit("Send", ['class' => 'btn btn-info pull-right col-sm-12']) }}
                </div>
            {{ Form::close() }}
        </div>
        <br>
    </div>

</main> --}}
 <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="blue">
                                    <h2 class="title">Email Us</h2>
                                    <p class="category">Please let us know how we can serve you</p>
                                </div>
                                <div class="card-content">
                                    <form>
                                        <div class="row">
                                        {{ Form::open(['method' => 'POST', 'action' => 'MailController@send']) }}
                                    @include('partials.error-message')
                        <div class="col-md-12">      
                            <div class="form-group label-floating">
                            {{ Form::label("name", "Name") }}
                            {{ Form::text("name", null, ['class' => 'form-control']) }}
                           </div>
                        </div>
                     <div class="col-md-12">
                          <div class="form-group label-floating">
                        {{ Form::label("email", "Email") }}
                        {{ Form::email("email", null, ['class' => 'form-control']) }}
                        </div>
                     </div>
                    </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    {{ Form::label("subject", "Subject") }}
                    {{ Form::text("subject", null, ['class' => 'form-control']) }}
                                                </div>
                                            </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    {{ Form::label("mail_message", "Message") }}
                    {{ Form::textarea("mail_message", null, ['class' => 'form-control']) }}
                                                </div>
                                            </div>  
                                        </div>                           

                             <a href="userIndex.html"><button type="submit" class="btn btn-info pull-right">Send </button></a>
                                        <div class="clearfix"></div>
                             {{ Form::close() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Content -->


@endsection
