@extends('layouts.useapp')
@section('content')

{{-- <main class="container-fluid">

        <h3>Registered Users <span class="label label-default">{{ $user->count() }}</span></h3>
        <h2 style="text-align: center;"><span  class="label label-primary"><i style="color: #fff;" class="fa fa-list-alt"></i> Open Schedules</span></h2>
        <div class="jumbotsron col-sm-12 col-sm-offset-3">
            @foreach ($users as $user)
                @if ($user->created_at > \Carbon\Carbon::yesterday())
                 @if ($user->role->id === 2)
                    <h2>Recent Provider to join myambunet</h2>
                    <p>{{ $user->name }}</p>
                    <p>{{ $user->created_at->diffForHumans() }}</p>
                 @endif   
                @endif
            @endforeach
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-header">Schedules</h1>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Blog Title</th>
                                <th>Blog Content</th>
                                <th>Action</th>
                                <th>Settings</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blog as $blog)
                                {{ Form::model($blog, ['method' => 'PATCH', 'action' => ['BlogController@publish', $blog->id]]) }}
                                    @include('partials.error-message')
                                <tr>
                                    <td>
                                        {!! Form::text("title", null, ['class' => 'form-control']) !!}
                                        <a class="btn btn-danger btn-xs" href="{{ action('BlogController@edit', $blog->id) }}">Edit/Delete</a>
                                    </td>
                                    <td>{!! Form::textarea("body", null, ['class' => 'form-control', 'size' => '20x5']) !!}</td>
                                    <td>{!! Form::select("status", ['0' => 'Draft', '1' => 'Publish'], null, ['class' => 'btn btn-primary']) !!} </td>
                                    <td>{{ Form::submit("Submit", ['class' => 'btn btn-success btn-xs']) }}</td>
                                </tr>                               
                                {{ Form::close() }}
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> 


</main> --}}
<div class="content">
                <div class="container-fluid">
                    <div class="row">

                    <div class="col-md-12">
                                <div class="">
                                    <h1 style="text-align: center; font-size: 45px;"><i class="fa fa-list-alt"></i> Open Schedules</h1>
                                </div>
                    </div>
                <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="blue">
                                    <h4 class="title">Open Schedules 15th March, 2017</h4>
                                    <p class="category"></p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-warning">
                                            <th>Title</th>
                                            <th>Type</th>
                                            <th>Start Time</th>
                                            <th>End Time</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Need a medic today $200 flat</td>
                                                <td>Full Day</td>
                                                <td>02/06/17</td>
                                                <td>02/07/17</td>
                                            </tr>
                                            <tr>
                                                <td>Looking for full time medic </td>
                                                <td>Fulltime TTS</td>
                                                <td>02/06/17</td>
                                                <td>02/07/17</td>
                                            </tr>
                                            <tr>
                                                <td>We pay premium price for quality medics</td>
                                                <td>Fulltime MWF</td>
                                                <td>02/06/17</td>
                                                <td>02/07/17</td>
                                            </tr>
                                            <tr>
                                                <td>Quick Run for 4 hours</td>
                                                <td>Run</td>
                                                <td>02/06/17</td>
                                                <td>02/07/17</td>
                                            </tr>
                                            <tr>
                                                <td>Are you available on Friday?</td>
                                                <td>Fulltime Variable</td>
                                                <td>02/06/17</td>
                                                <td>02/07/17</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
