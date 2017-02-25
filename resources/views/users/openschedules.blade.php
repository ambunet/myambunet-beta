@extends('layouts.app')
@section('content')

<main class="container-fluid">

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


</main>


@endsection
