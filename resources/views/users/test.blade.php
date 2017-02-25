@extends('layouts.app')
@section('content')

<main class="container-fluid">

        <h3>Registered Users <span class="label label-default">{{ $user->count() }}</span></h3>
        <h2 style="text-align: center;"><span  class="label label-primary"><i style="color: #fff;" class="fa fa-medkit"></i> Available Medics</span></h2>
        <div class="jumbotsron col-sm-12 col-sm-offset-3">
            @foreach ($users as $user)
                {{-- @if ($user->created_at > \Carbon\Carbon::yesterday()) --}}
                 @if ($user->role->id === 3)
                    {{-- <h2>Recent Medic to join myambunet</h2> --}}
                    <p>{{ $user->username }} joined <span>  <i class="fa fa-clock-o"></i> {{ $user->created_at->diffForHumans() }}</span></p>
                 @endif   
               {{--  @endif --}}
            @endforeach
        </div>
    </div>


</main>


@endsection
