@extends('layouts.useapp')
@section('content')

{{-- <main class="container-fluid">

<div class="container-fluid">
        <div class="">
            <div class="container">
                <div class="col-sm-8">
                    <h1>Hello, {{ Auth::user()->name }}</h1>
                    <p>{{ Auth::user()->role->name }}</p>

                    @if (Auth::user()->role->id == 1)
                        <button class="btn btn-primary link btn-xs"><a style="color:#fff;" href="{{ url('/blog/create') }}">Create Blog</a></button>
                    @elseif(Auth::user()->role->id == 2) 
                        <button class="btn btn-primary link btn-xs"><a style="color:#fff;" href="{{ url('/blog/create') }}">Create Blog</a></button>
                    @endif
        
                    <button style="border-radius: 6px;" class="btn btn-default link btn-xs"><a style="color:#007EB2;" href="{{ action('UserController@edit', Auth::user()->username) }}"><i class="fa fa-pencil"></i> Edit Profile</a></button>
                    <button style="border-radius: 6px;" class="btn btn-default link btn-xs"><a style="color:#007EB2;" href="#"><i class="fa fa-comments-o"></i> Messaging</a></button>
                    <button style="border-radius: 6px;" class="btn btn-default link btn-xs"><a style="color:#007EB2;" href="{{ url('/schedule/create') }}"><i class="fa fa-calendar"></i> Scheduling</a></button>
                </div>
                <div class="col-sm-4">
                <br><br>
                    <img class="img-circle" height="100" width="100" src="/images/{{ Auth::user()->photo ? Auth::user()->photo->photo : 'default.png' }}" alt="">
                </div>
            </div>
        </div>
    </div>


    <div class="col-sm-7">
        @if ($user = Auth::user())
            @if ($user->blog)
            <h1 class="">My Schedule</h1>
                <ul>
                    @foreach ($blog as $blog)
                        @if ($blog->user_id == $user->id)
                            <li style="list-style-type:none;">
                                <button class="btn btn-success btn-xs">{{ $blog->status == 0 ? 'Draft' : 'Published' }}</button>
                                <a href="{{ action('BlogController@show', [$blog->slug]) }}">{{  $blog->title }}</a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            @endif
        @endif
    </div>

    <div class="col-sm-5">
        @include('partials.user-sidebar')
    </div>


</main> --}}

                        <!-- Start Content -->
         <div class="main-panel">
         @if ($user = Auth::user())
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-profile">
                            <div class="card-avatar">
                                <a href="#pablo">
                                    <img class="img-raised img-rounded" src="/images/{{ Auth::user()->photo ? Auth::user()->photo->photo : 'default.png' }}" alt=""/>
                                </a>
                            </div>

                            <div class="content">
                                <h6 class="category text-gray">{{ Auth::user()->role->name }}</h6>
                                <h4 class="card-title">{{ Auth::user()->name }}
                                <button class="btn btn-info btn-fab btn-fab-mini">
                                <i class="material-icons">favorite</i>
                                </button></h4>
                                 <div class="togglebutton">
                                    <label>
                                        <input type="checkbox" checked="">
                                        Availability
                                    </label>
                                </div>
                                <div class="col-md-10">
                                <div class="card-content">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="profile">
                                    
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="">
                                                            <span style="font-size: 25px" class=" fa fa-briefcase"></span>
                                                        </div>
                                                    </td>
                                                    @if ($user->experience)
                                                    <td>{{ $user->experience }}</td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span style="font-size: 25px"  class="fa fa-map-marker"> </span>
                                                        
                                                    </td>
                                                    <td>{{ $user->location }}</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span style="font-size: 25px"  class="fa fa-envelope"> </span>
                                                    </td>
                                                    <td>{{ $user->email }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span style="font-size: 25px"  class="fa fa-mobile"> </span>
                                                    </td>
                                                    <td>{{ $user->mobile }}</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="">
                                                            <span style="font-size: 25px"  class=" fa fa-list"></span>
                                                        </div>
                                                    </td>
                                                    <td>{{ $user->level }}</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="">
                                                            <span style="font-size: 25px"  class=" fa fa-tags"></span>
                                                        </div>
                                                    </td>
                                                    <td>{{ $user->license }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                         @endif
                                    </div>
                                    </div>
                            </div>
                   
                                <p class="card-content">
                                </p>
                                
                        </div>
                            <a href="{{ action('UserController@edit', Auth::user()->username) }}" class="btn btn-info ">Edit Profile</a>
                            <a href="#" class="btn btn-info ">Messaging</a>
                            <a href="{{ url('/schedule/create') }}" class="btn btn-info ">Scheduling</a>
                            <a href="#" class="btn btn-info ">Subscription</a>
                            <a href="#" class="btn btn-info ">Favs</a>
                        </div>
                        <a href="{{ $user->username }}">myambunet/{{ $user->username }}</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Content -->
    </div>
</div>

@endsection
