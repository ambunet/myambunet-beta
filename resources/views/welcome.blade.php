@extends('layouts.app')

@include('partials.meta-static')

@section('content')
    <div id="welcome">
    <br>
    <br>

    <div class="content">
            <div>
                <h1 style="color: #fff;"> Connections For Life.</h1>
                    <h3> Week : 10 <span id="pipeStyle">|</span> Day : 8 - 15 </h3>
            </div>
    </div>
    <br>
    <br>

            <div class="container">
                <div class="row-fluid">
                <div class="col-sm-6 col-xs-6">
                <table>
                    <thead>
                        <tr>
                            <th class="text-left col-md-4"><a class="thHeadLink" style="color:#fff; font-size:30px; font-weight: 700;"" href="{{ url('/openschedules/') }}">Open Schedules</a></th>
                        </tr>
                    </thead>
                    <tbody class="table-hover">
                        <tr>
                            <td class="text-left">Full Time  <span id="setNumber"> 21 </span></td>
                        </tr>
                        <tr>
                            <td class="text-left">Full Day  <span id="setNumber"> 6 </span></td>
                        </tr>
                        <tr>
                            <td class="text-left">Runs/Calls <span id="setNumber"> 17 </span></td>
                        </tr>
                    </tbody>
                </table>
                </div>
                
                <div class="col-sm-6 col-xs-6">
                <table>
                    <thead>
                        <tr>
                            <th class="text-left col-md-4"><a class="thHeadLink" style="color:#fff; font-size:30px; font-weight: 700;" href="{{ url('/test/') }}">Available Medics</a></th>
                        </tr>
                    </thead>
                    <tbody class="table-hover">
                        <tr>
                            <td class="text-left">EMT - Basic  <span id="setNumber"> 10 </span></td>
                        </tr>
                        <tr>
                            <td class="text-left">EMT - Intermediate   <span id="setNumber"> 8 </span></td>
                        </tr>
                        <tr>
                            <td class="text-left">EMT - Paramedic  <span id="setNumber"> 15 </span></td>
                        </tr>
                    </tbody>
                </table>
                </div>
                </div>
            </div>

        <div class="flex-center position-ref full-height">
            <div class="content">

                <div class="title m-b-sm">
                   <div class="col-sm-12">
                      myambunet
                    </div>
                </div>

                <div class="links">
                    @if (Auth::user())
                    <a href="{{ url('/openschedules/') }}">Open Schedules</a>
                    <a href="{{ url('/test/') }}">Available Medics</a>
                    @else
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            </div>
        </div>

    </div>
    {{-- customers --}}
    <main class="flex-center">
    <div class="">
        <div class="container-fluid">
            <div class="row">
            <h1>Our Customers</h1>
            </div>
         </div>   
        </div>
    </div>

<section
            class="content bg-white customer-logos">
            <div class="container">                           
  <div class="cycle-slideshow"
      data-cycle-fx="scrollHorz"
      data-cycle-timeout=0
      data-cycle-slides="> ul"
      data-cycle-prev="#prev"
      data-cycle-next="#next"
      data-cycle-pager="#custom-pager"
      data-cycle-pager-template="<span></span>"
      data-cycle-log="false"
      >
      <!-- empty element for pager links -->
      <div id="custom-pager" class="center"></div>

    <ul style="list-style: none;">

      
        <li>
          <img srcset="https://d1f5pmhur9pirz.cloudfront.net/wp-content/uploads/2015/11/salesforce-logo-94x65.png, https://d1f5pmhur9pirz.cloudfront.net/wp-content/uploads/2015/11/salesforce-logo-94x65@2x.png 2x">
        </li>
        
        <li>
          <img srcset="https://d1f5pmhur9pirz.cloudfront.net/wp-content/uploads/2015/11/1024px-Barclays_logo.svg_-385x65.png, https://d1f5pmhur9pirz.cloudfront.net/wp-content/uploads/2015/11/1024px-Barclays_logo.svg_-385x65@2x.png 2x">
        </li>
        
        <li>
          <img srcset="https://d1f5pmhur9pirz.cloudfront.net/wp-content/uploads/2015/11/Adobe_Systems_logo_and_wordmark.svg_-65x65.png, https://d1f5pmhur9pirz.cloudfront.net/wp-content/uploads/2015/11/Adobe_Systems_logo_and_wordmark.svg_-65x65@2x.png 2x">
        </li>
        
        <li>
          <img srcset="https://d1f5pmhur9pirz.cloudfront.net/wp-content/uploads/2015/11/secureworks-logo-400x65.png, https://d1f5pmhur9pirz.cloudfront.net/wp-content/uploads/2015/11/secureworks-logo-400x65@2x.png 2x">
        </li>
        
        <li>
          <img srcset="https://d1f5pmhur9pirz.cloudfront.net/wp-content/uploads/2016/02/Samsung_Logo.svg_-197x65.png, https://d1f5pmhur9pirz.cloudfront.net/wp-content/uploads/2016/02/Samsung_Logo.svg_-197x65@2x.png 2x">
        </li>
        
        <li>
          <img srcset="https://d1f5pmhur9pirz.cloudfront.net/wp-content/uploads/2015/12/logo-office-depot-245x65.png, https://d1f5pmhur9pirz.cloudfront.net/wp-content/uploads/2015/12/logo-office-depot-245x65@2x.png 2x">
        </li>
        </ul>
  </div>
  <span id="prev"><i class="icon-arrow-left"></i></span>
  <span id="next"><i class="icon-arrow-right"></i></span>

            </div>      </section></main>  
{{-- customers --}}

      <!--/Start Middle main-->      
<main class="middle" id="middle">
    <div class="middle" id="middle">
        <div class="container-fluid">       
            <div id="Textbody">
                <div>   
                    <p>I'm</p>
                </div>     
                    <b>
                      <span1>
                        A Medic<br /> 
                        A Provider<br />
                        Connections For Life.<br />
                        myambunet<br />
                        At your service...
                        </span1>
                    </b>
            </div>
      </div>
    </div>
</main> 
<!--/End main-->

{{-- Start Footer --}}
<footer>
    <div class="footer" id="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> ABOUT US </h3>
                    <ul>
                        <li><a href="http://www.ambu-net.com" target="_blank">Company</a></li>
                        <li> <a href="#"></a>FAQ</li>
                        <li> <a href="#"> Subscription </a> </li>
                        <li> <a href="#"> Billing </a> </li>
                        <li> <a href="#">Referral Program </a> </li>
                        <li> <a href="#">Terms And Condition </a> </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> BLOGS </h3>
                    <ul>
                        <li> <a href="#">How to become a better medic</a> </li>
                        <li> <a href="#">Safety</a> </li>
                        <li> <a href="#">Medics Only</a> </li>
                        <li> <a href="#">Providers Only</a> </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Apps </h3>
                    <ul>
                        <li> <a href="#"> iOS App Coming Soon </a> </li>
                        <li> <a href="#"> Android App Coming Soon </a> </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Social </h3>
                    <ul class="social">
                        <li> <a href="#"> <i class=" fa fa-facebook">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-twitter">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-google-plus">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-pinterest">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-youtube">   </i> </a> </li>
                    </ul>
                </div>
                <div class="col-lg-1  col-md-3 col-sm-6 col-xs-12 ">
                    <h3> Support </h3>
                    <ul>
                        <li> <a href="#"> Technical </a> </li>
                        <li> <a href="#"> Guide </a> </li>
                        <li>
                            <div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <br>
        <div class="">
        <div class="container-fluid">
            <p style="color: #fff;" class="pull-left"> Copyright © Ambu-Net Inc 2017. All right reserved. </p>
            <div class="pull-right">
                <ul class="nav nav-pills payments">
                    <li><i style="color: #fff; font-size: 25px;"  class="fa fa-cc-stripe"></i></li>                
                </ul> 
            </div>
        </div>
    </div>
    </div>
    <!--/.footer-->
{{--     
    <div class="footer-bottom">
        <div class="container-fluid">
            <p class="pull-left"> Copyright © Ambu-Net Inc 2017. All right reserved. </p>
            <div class="pull-right">
                <ul class="nav nav-pills payments">
                    <li><i class="fa fa-cc-stripe"></i></li>
                    
                </ul> 
            </div>
        </div>
    </div> --}}

@endsection