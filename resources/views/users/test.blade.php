@extends('layouts.useapp')
@section('content')

{{-- <main class="container-fluid">


<br>
        <h3>Registered Users <span class="label label-default">{{ $user->count() }}</span></h3>
        <h2 style="text-align: center;"><span  class="label label-primary"><i style="color: #fff;" class="fa fa-medkit"></i> Available Medics</span></h2>
        <div class="jumbotsron col-sm-12 col-sm-offset-3">
            @foreach ($users as $user)
                @if ($user->created_at > \Carbon\Carbon::yesterday())
                 @if ($user->role->id === 3)
                    <p>{{ $user->username }} joined <span>  <i class="fa fa-clock-o"></i> {{ $user->created_at->diffForHumans() }}</span></p>
                 @endif   
            @endforeach
        </div>
    </div>


</main>
 --}}

            <div class="content">
                <div class="container-fluid">
                    <div class="row">

                    <div class="col-md-12">
                                <div class="">
                                    <h1 style="text-align: center; font-size: 45px;"><i class="fa fa-medkit"></i> Available Medics</h1>
                                </div>
                    </div>
                <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="blue">
                                    <h4 class="title">This is Today's Date 15th March, 2017</h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-warning">
                                            <th>Username</th>
                                            <th>Level</th>
                                            <th>Location</th>
                                            <!-- <th>End Time</th> -->
                                        </thead>
                                        @foreach ($users as $user)
                                        @if ($user->role->id === 3)

                                        <tbody>
                                            <tr>
                                            <td>{{ $user->username }}</td>
                                            <td>{{ $user->level }}</td>
                                            <td>{{ $user->location }}</td>
                                                
                                            </tr>
                                            
                                        </tbody>
                                        @endif 
                                        @endforeach
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
    <!-- Start Contact Modal -->
@endsection
