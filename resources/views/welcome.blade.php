@extends('layouts.useapp')

@include('partials.meta-static')

@section('content')
<div class="content">
                <div class="container-fluid">
                    <div class="row">

                    <div class="col-md-12">
                                <div class="">
                                    <h1 style="text-align: center; font-size: 45px;">Connections For Life.</h1>
                                </div>
                    </div>
                 </div>   
                <div class="row">
                        <div class="col-sm-3 col-sm-6 col-xs-6 col-lg-offset-2">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="blue">
                                    <i class="material-icons">date_range</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">WEEK</p>
                                    <h3 class="title">10</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">date_range</i> 2017
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-sm-6 col-xs-6 col-md-offset-2">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="blue">
                                    <i class="material-icons">today</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">DAYS</p>
                                    <h3 class="title">6 - 13</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">today</i> March
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">

                            <!-- start add -->
                            <div class="col-md-6 col-md-6">
                            <div class="card">
                                <div class="card-header" data-background-color="blue">
                                <i class="material-icons">schedule</i>
                                    <h4 class="title nav-pills-primary"><strong><a href="{{ url('/openschedules/') }}">Open Schedules</a></strong></h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-warning">
                                        
                                            
                                        </thead>
                                        <tbody>
                                            <tr>
                                                
                                                
                                                                                                
                                            </tr>
                                            <tr>
                                                <td>Full Time</td>
                                                <td><span class="label label-success">55</span></td>
                                                
                                            </tr>
                                            <tr>
                                                
                                                <td>Full Day</td>

                                                <td><span class="label label-success">75</span></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Runs/Calls</td>

                                                <td><span class="label label-success">155</span></td>
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                            <!-- end add -->
                        <div class="col-md-6 col-md-6">
                            <div class="card">
                                <div class="card-header" data-background-color="blue">
                                <i class="material-icons">view_list</i>
                                    <h4 class="title"><strong><a href="{{ url('/test/') }}">Available Medics</a></strong></h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-warning">
                                        
                                            
                                        </thead>
                                        <tbody>
                                            <tr>
                                                
                                                
                                                                                                
                                            </tr>
                                            <tr>
                                                <td>EMT - Basic</td>

                                                <td><span class="label label-success">255</span></td>
                                                
                                            </tr>
                                            <tr>
                                                
                                                <td>EMT - Intermediate</td>

                                                <td><span class="label label-success">107</span></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>EMT - Paramedic</td>

                                            <td><span class="label label-success">88</span></td>
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="http://ambu-net.com">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Support
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                            <li>
                                <a href="#"> <i style="font-size: 15px;" class=" fa fa-linkedin"> </i> </a> </li></a>
                            </li>
                            <li>
                                <a href="#"> <i style="font-size: 15px;" class=" fa fa-facebook"> </i> </a> </li></a>
                            </li>
                            <li>
                                <a href="#"> <i style="font-size: 15px;" class=" fa fa-twitter">   </i> </a> </li></a>
                            </li>
                            <li>
                                <a href="#"> <i style="font-size: 15px;" class=" fa fa-youtube">   </i> </a> </li></a   
                            </li>
                        </ul>
                    </nav>
                    <p class="copyright pull-right">
                        &copy; <script>document.write(new Date().getFullYear())</script> <a href="#">myambunet</a> |  An Ambu-Net Company
                    </p>
                </div>
            </footer>
        </div>
    </div>

@endsection