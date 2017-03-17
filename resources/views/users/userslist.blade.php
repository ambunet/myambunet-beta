@extends('layouts.useapp')
@section('content')

{{-- <main class="container-fluid">

    <div class="container-fluid">
    <br> --}}
        {{-- <div class="">
            <h2><span class="label label-default">{{ $user->count() }}</span> Users on myambunet</h2>
        </div> --}}
  {{--   </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-header"></h1>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Joined</th>
                                <th>Role</th>
                                <th>Action</th>
                                <th>Destroy</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td><a href="{{ route('users.show', $user->username) }}">{{ $user->name }}</a></td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at->diffForHumans() }}</td>
                                <td>
                                    {{ Form::model($user, ['method' => 'PATCH', 'action' => ['UserController@update', $user->id]]) }}
                                            {!! Form::select("role_id", ['1' => 'Administrator', '2' => 'Provider', '3' => 'Medic'], null, ['class' => 'btn btn-primary']) !!} </td>
                                        <td>{{ Form::submit("Update", ['class' => 'btn btn-success btn-xs']) }}
                                    {{ Form::close() }}
                                </td>
                                <td>
                                {{ Form::model($user, ['method' => 'DELETE', 'action' => ['UserController@destroy', $user->id]]) }}
                                        {{ Form::submit("Delete", ['class' => 'btn btn-danger btn-xs']) }}
                                    {{ Form::close() }}
                                </td>
                            </tr>
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
                            <div class="card">
                                <div class="card-header" data-background-color="blue">
                                    <h4 class="title">Recent Users</h4>
                                    <p class="category">Total # of Users: 6</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Joined</th>
                                            <th>Roles</th>
                                            <th>Action</th>

                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Dakota Rice</td>
                                                <td>dr@email.com</td>
                                                <td>5 days ago</td>
                                                <td>
                                                    <form action="">
                                                        <select class="btn-primary" name="" id="">
                                                            <option value="1">Administrator</option>
                                                            <option value="2">Provider</option>
                                                            <option value="3" selected="selected">Medic</option>
                                                        </select>
                                                    </form>
                                                </td>
                                                <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Update" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">update</i>
                                                            </button></td>
                                            </tr>
                                            <tr>
                                                <td>Minerva Hooper</td>
                                                <td>mh@email.com</td>
                                                <td>10 days ago</td>
                                                <td>
                                                    <form action="">
                                                        <select class="btn-primary" name="" id="">
                                                            <option value="1">Administrator</option>
                                                            <option value="2">Provider</option>
                                                            <option value="3" selected="selected">Medic</option>
                                                        </select>
                                                    </form>
                                                </td>
                                                <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Update" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">update</i>
                                                            </button></td>
                                            </tr>
                                            <tr>
                                                <td>Sage Rodriguez</td>
                                                <td>sr@email.com</td>
                                                <td>10 days ago</td>
                                                <td>
                                                    <form action="">
                                                        <select class="btn-primary" name="" id="">
                                                            <option value="1">Administrator</option>
                                                            <option value="2">Provider</option>
                                                            <option value="3" selected="selected">Medic</option>
                                                        </select>
                                                    </form>
                                                </td>
                                                <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Update" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">update</i>
                                                            </button></td>
                                            </tr>
                                            <tr>
                                                <td>Philip Chaney</td>
                                                <td>pc@email.com</td>
                                                <td>10 days ago</td>
                                                <td>
                                                    <form action="">
                                                        <select class="btn-primary" name="" id="">
                                                            <option value="1">Administrator</option>
                                                            <option value="2">Provider</option>
                                                            <option value="3" selected="selected">Medic</option>
                                                        </select>
                                                    </form>
                                                </td>
                                                <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Update" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">update</i>
                                                            </button></td>
                                            </tr>
                                            <tr>
                                                <td>Doris Greene</td>
                                                <td>dg@email.com</td>
                                                <td>10 days ago</td>
                                                <td>
                                                    <form action="">
                                                        <select class="btn-primary" name="" id="">
                                                            <option value="1">Administrator</option>
                                                            <option value="2">Provider</option>
                                                            <option value="3" selected="selected">Medic</option>
                                                        </select>
                                                    </form>
                                                </td>
                                                <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Update" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">update</i>
                                                            </button></td>
                                            </tr>
                                            <tr>
                                                <td>Mason Porter</td>
                                                <td>mp@email.com</td>
                                                <td>10 days ago</td>
                                                <td>
                                                    <form action="">
                                                        <select class="btn-primary" name="" id="">
                                                            <option value="1">Administrator</option>
                                                            <option value="2">Provider</option>
                                                            <option value="3" selected="selected">Medic</option>
                                                        </select>
                                                    </form>
                                                </td>
                                                <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Update" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">update</i>
                                                            </button></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="blue">
                                    <h4 class="title">All Users</h4>
                                    <p class="category">Total # of Users 5028</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Joined</th>
                                            <th>Status</th>
                                            <th>Roles</th>
                                            <th>Settings</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Dakota Rice</td>
                                                <td>MasonP@email.com</td>
                                                <td>10 days ago</td>
                                                <td>Active</td>
                                                <td>
                                                    <form action="">
                                                        <select class="btn-primary" name="" id="">
                                                            <option value="1">Administrator</option>
                                                            <option value="2">Provider</option>
                                                            <option value="3" selected="selected">Medic</option>
                                                        </select>
                                                    </form>
                                                </td>
                                                <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Enable" class="btn btn-success btn-simple btn-xs">
                                                                <i class="material-icons">check_circle</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Suspend" class="btn btn-warning btn-simple btn-xs">
                                                                <i class="material-icons">not_interested</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Compose Mail" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Disable Account" class="btn btn-danger btn-simple btn-xs">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                            </tr>
                                            <tr>
                                                <td>Minerva Hooper</td>
                                                <td>MasonP@email.com</td>
                                                <td>10 days ago</td>
                                                <td>Active</td>
                                                <td>
                                                    <form action="">
                                                        <select class="btn-primary" name="" id="">
                                                            <option value="1">Administrator</option>
                                                            <option value="2">Provider</option>
                                                            <option value="3" selected="selected">Medic</option>
                                                        </select>
                                                    </form>
                                                </td>
                                                <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Enable" class="btn btn-success btn-simple btn-xs">
                                                                <i class="material-icons">check_circle</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Suspend" class="btn btn-warning btn-simple btn-xs">
                                                                <i class="material-icons">not_interested</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Compose Mail" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Disable Account" class="btn btn-danger btn-simple btn-xs">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                            </tr>
                                            <tr>
                                                <td>Sage Rodriguez</td>
                                                <td>MasonP@email.com</td>
                                                <td>10 days ago</td>
                                                <td>Active</td>
                                                <td>
                                                    <form action="">
                                                        <select class="btn-primary" name="" id="">
                                                            <option value="1">Administrator</option>
                                                            <option value="2">Provider</option>
                                                            <option value="3" selected="selected">Medic</option>
                                                        </select>
                                                    </form>
                                                </td>
                                                <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Enable" class="btn btn-success btn-simple btn-xs">
                                                                <i class="material-icons">check_circle</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Suspend" class="btn btn-warning btn-simple btn-xs">
                                                                <i class="material-icons">not_interested</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Compose Mail" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Disable Account" class="btn btn-danger btn-simple btn-xs">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                            </tr>
                                            <tr>
                                                <td>Philip Chaney</td>
                                                <td>MasonP@email.com</td>
                                                <td>12 days ago</td>
                                                <td>Active</td>
                                                <td>
                                                    <form action="">
                                                        <select class="btn-primary" name="" id="">
                                                            <option value="1">Administrator</option>
                                                            <option value="2">Provider</option>
                                                            <option value="3" selected="selected">Medic</option>
                                                        </select>
                                                    </form>
                                                </td>
                                                <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Enable" class="btn btn-success btn-simple btn-xs">
                                                                <i class="material-icons">check_circle</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Suspend" class="btn btn-warning btn-simple btn-xs">
                                                                <i class="material-icons">not_interested</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Compose Mail" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Disable Account" class="btn btn-danger btn-simple btn-xs">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                            </tr>
                                            <tr>
                                                <td>Doris Greene</td>
                                                <td>MasonP@email.com</td>
                                                <td>5 days ago</td>
                                                <td>Active</td>
                                                <td>
                                                    <form action="">
                                                        <select class="btn-primary" name="" id="">
                                                            <option value="1">Administrator</option>
                                                            <option value="2">Provider</option>
                                                            <option value="3" selected="selected">Medic</option>
                                                        </select>
                                                    </form>
                                                </td>
                                                <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Enable" class="btn btn-success btn-simple btn-xs">
                                                                <i class="material-icons">check_circle</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Suspend" class="btn btn-warning btn-simple btn-xs">
                                                                <i class="material-icons">not_interested</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Compose Mail" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Disable Account" class="btn btn-danger btn-simple btn-xs">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                            </tr>
                                            <tr>
                                                
                                                <td>Mason Porter</td>
                                                <td>MasonP@email.com</td>
                                                <td>10 days ago</td>
                                                <td>Active</td>
                                                <td>
                                                    <form action="">
                                                        <select class="btn-primary" name="" id="">
                                                            <option value="1">Administrator</option>
                                                            <option value="2">Provider</option>
                                                            <option value="3" selected="selected">Medic</option>
                                                        </select>
                                                    </form>
                                                </td>
                                                <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Enable" class="btn btn-success btn-simple btn-xs">
                                                                <i class="material-icons">check_circle</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Suspend" class="btn btn-warning btn-simple btn-xs">
                                                                <i class="material-icons">not_interested</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Compose Mail" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Disable Account" class="btn btn-danger btn-simple btn-xs">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
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
@endsection
