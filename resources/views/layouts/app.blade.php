<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

@yield('head')

<body class="sidebar-menu-collapsed">
  <div class="se-pre-con"></div>
<section>
  <!-- sidebar menu start -->
  <div class="sidebar-menu sticky-sidebar-menu">

    <!-- logo start -->
    <div class="logo">
      <h1><a href="{{ route('landingpage') }}">{{config('app.name')}}</a></h1>
    </div>


    <div class="logo-icon text-center">
      <a href="{{ route('landingpage') }}" title="logo"><img src="{{ asset('assets/images/logo.png') }}" alt="logo-icon"> </a>
    </div>
    <!-- //logo end -->

    <div class="sidebar-menu-inner">

      <!-- sidebar nav start -->
      <ul class="nav nav-pills nav-stacked custom-nav">
        <li class="active"><a href="{{ route('landingpage') }}"><i class="fa fa-tachometer"></i><span> Dashboard</span></a>
        </li>
        <li class="menu-list">
          <a href="#"><i class="fa fa-users"></i>
            <span>Account <i class="lnr lnr-chevron-right"></i></span></a>
          <ul class="sub-menu-list">
            @auth
            <li><a href="{{ route('user.index') }}">Profile</a> </li>
            <li><a href="{{ route('personal.edit') }}">My PSN Detail</a> </li>
            <li><a href="{{ route('company.edit') }}">My CSN Info</a> </li>
            <li><a href="{{ route('particulars.edit') }}">My Particulars</a> </li>
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log out</a> </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            @else
            <li><a href="{{ route('personal.login') }}">Login</a></li>
            <li><a href="{{ route('personal.index') }}">Register Personal Detail</a></li>
            <li><a href="{{ route('company.index') }}">Register Company Info</a></li>
            <li><a href="{{ route('particulars.index') }}">Register Particulars</a></li>
            {{-- <li><a href="/register">Register</a></li> --}}
            @endauth
          </ul>
        </li>
        {{-- <li><a href="pricing.html"><i class="fa fa-table"></i> <span>Pricing tables</span></a></li>
        <li><a href="blocks.html"><i class="fa fa-th"></i> <span>Content blocks</span></a></li>
        <li><a href="forms.html"><i class="fa fa-file-text"></i> <span>Forms</span></a></li> --}}
      </ul>
      <!-- //sidebar nav end -->
      <!-- toggle button start -->
      <a class="toggle-btn">
        <i class="fa fa-angle-double-left menu-collapsed__left"><span>Collapse Sidebar</span></i>
        <i class="fa fa-angle-double-right menu-collapsed__right"></i>
      </a>
      <!-- //toggle button end -->
    </div>
  </div>
  <!-- //sidebar menu end -->
   <!-- header-starts -->
  <div class="header sticky-header">

    <!-- notification menu start -->
    <div class="menu-right">
      <div class="navbar user-panel-top">
        
        <div class="user-dropdown-details d-flex">
          
          <div class="profile_details">
            <nav class="navbar navbar-expand-lg navbar-light {{-- bg-light --}}">
              <a class="navbar-brand" href="{{ route('landingpage') }}">{{config('app.name')}}</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  {{-- <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                  </li> --}}
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">contact us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="{{ route('faq') }}">FAQ</a>
                  </li>
                </ul>
              </div>
            </nav>
            
          </div>
        </div>
      </div>
    </div>
    <!--notification menu end -->
  </div>
  <!-- //header-ends -->








@yield('main-content')
<!-- main content end-->
</section>
  <!--footer section start-->
<footer class="dashboard">
  <p>&copy {{date('Y')}} {{config('app.name')}}. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank"
      class="text-primary">W3layouts.</a></p>
</footer>
<!--footer section end-->
<!-- move top -->
<button onclick="topFunction()" id="movetop" class="bg-primary" title="Go to top">
  <span class="fa fa-angle-up"></span>
</button>
@yield('script')



</body>

</html>
  