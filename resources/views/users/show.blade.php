@extends('layouts.useapp')
@section('content')

{{-- <main>
    <div class="">
        <div class="container">
            <div class="col-sm-12">
            <br>
                
            </div>
            <div class="col-sm-12">
            <br><br>
                <img class="img-circle" height="100" width="100" src="/images/{{ $user->photo ? $user->photo->photo : 'default.png' }}" alt="">
                <h1>{{ $user->username }}</h1>
                <p>{{ $user->role->name }}</p>
            </div>
             <div class="col-sm-12">
            @include('partials.user-sidebar')
        </div>
        </div>
    </div>
    </div>
        <a href="#" class="btn btn-info ">Schedule</a>
        <a href="#" class="btn btn-info ">Message</a>
    </div>
</main> --}}
                        <!-- Start Content -->
         <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-profile">
                            <div class="card-avatar">
                                <a href="#pablo">
                                    <img class="img-raised img-rounded" src="/images/{{ $user->photo ? $user->photo->photo : 'default.png' }}" alt=""/>
                                </a>
                            </div>

                            <div class="content">
                                <h6 class="category text-gray">{{ $user->role->name }}</h6>
                                <h4 class="card-title">{{ $user->username }}
                                <button class="btn btn-info btn-fab btn-fab-mini">
                                <i class="material-icons">favorite</i>
                                </button></h4>
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
                                    </div>
                                    </div>
                            </div>
                   
                                <p class="card-content">
                                </p>
                                
                        </div>
                            <a href="#" class="btn btn-info ">Schedule</a>
                            <a href="#" class="btn btn-info ">Message</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Content -->

@endsection
