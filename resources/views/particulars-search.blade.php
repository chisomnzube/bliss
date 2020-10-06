@extends('layouts.app')
@section('head')

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Vehicle Licence plate search | {{config('app.name')}}</title>

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">

  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">
</head>
@endsection

@section('main-content')
  <!-- main content start -->
<div class="main-content" style="background-image: url({{ asset('assets/images/techy2.jpg') }});">

  <!-- content -->
  <div class="container-fluid content-top-gap">

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('landingpage') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Vehicle Licence plate Search</li>
      </ol>
    </nav>
    @auth
      <div class="welcome-msg pt-3 pb-4">
        <h1>Hi <span class="text-primary">{{auth()->user()->name}}</span>, Welcome back</h1>
        {{-- <p>Very detailed & featured admin.</p> --}}
      </div>
    @endauth
    <div class="row">
      <div class="col">
        <h3>Particulars of owner</h3>
        <p><b>Name: {{$lic->name}}</b></p>
        <p><b>Phone Number: {{$lic->phone}}</b></p>
        <p><b>Email: {{$lic->email}}</b></p>
        <p><b>City: {{$lic->city}}</b></p>
        <p><b>LGA: {{$lic->lga}}</b></p>
        <p><b>State: {{$lic->state}}</b></p>
        <p><b>Country: {{$lic->country}}</b></p>
        <p><b>Address: {{$lic->address}}</b></p>
        <p><b>Occupation: {{$lic->occupation}}</b></p>
        <p><b>Date of birth: {{$lic->dob}}</b></p>
        <p><b>PSN: {{$lic->psn}}</b></p>
        <p><b>Tax ID: {{$lic->tax}}</b></p>        
        <hr>
        <h3>Risk insurance</h3>
        <p><b>Insurance Company: {{$lic->insurance_company}}</b></p>
        <p><b>Policy holder: {{$lic->policy_holder}}</b></p>
        <p><b>Policy Note: {{$lic->policy_note}}</b></p>
        <p><b>Effective date from: {{$lic->effective_date_from}}</b></p>
        <p><b>Effective date to: {{$lic->effective_date_to}}</b></p>
        <hr>
        <h3>Emergency Contact person</h3>
        <p><b>ECP Name: {{$lic->ecp_name}}</b></p>
        <p><b>ECP Phone Number: {{$lic->ecp_phone}}</b></p>
        <p><b>ECP Email: {{$lic->ecp_email}}</b></p>
        <p><b>ECP City: {{$lic->ecp_city}}</b></p>
        <p><b>ECP LGA: {{$lic->ecp_lga}}</b></p>
        <p><b>ECP State: {{$lic->ecp_state}}</b></p>
        <p><b>ECP Country: {{$lic->ecp_country}}</b></p>
        <p><b>ECP Address: {{$lic->ecp_address}}</b></p>
        
      </div>
      <div class="col">
        <h3>Particulars of Automobile</h3>
        <p><b>Class: {{$lic->class}}</b></p>
        <p><b>Type: {{$lic->type}}</b></p>
        <p><b>Licence Number: {{$lic->licence_number}}</b></p>
        <p><b>Place of Registration: {{$lic->por}}</b></p>
        <p><b>Model: {{$lic->model}}</b></p>
        <p><b>Model Code: {{$lic->model_code}}</b></p>
        <p><b>Manufactured Year: {{$lic->manufactured_year}}</b></p>
        <p><b>Status: {{$lic->status}}</b></p>
        <p><b>engine Number: {{$lic->engine_number}}</b></p>
        <p><b>Chassis Number: {{$lic->chassis_number}}</b></p>
        <p><b>Color: {{$lic->color}}</b></p>
        <p><b>Body type: {{$lic->body_type}}</b></p>
        <p><b>Place of Origin: {{$lic->origin}}</b></p>
        <p><b>Cylinder Capacity: {{$lic->cylinder_capacity}}</b></p>
        <p><b>Rated Power: {{$lic->rated_power}}</b></p>
        <p><b>Seating Capacity: {{$lic->seating_capacity}}</b></p>
        <p><b>Propulsion: {{$lic->propulsion}}</b></p>
        <p><b>Steering: {{$lic->steering}}</b></p>
        <p><b>No of tire: {{$lic->tire_no}}</b></p>
        <p><b>No of door: {{$lic->door_no}}</b></p>
        <p><b>GPS: {{$lic->gps}}</b></p>
        <p><b>Airbag: {{$lic->airbag}}</b></p>
        <p><b>Tracker: {{$lic->tracker}}</b></p>
        
      </div>
    </div>



  </div>
  <!-- //content -->
</div>
<!-- main content end-->

@endsection

@section('script')
<script>
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function () {
    scrollFunction()
  };

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("movetop").style.display = "block";
    } else {
      document.getElementById("movetop").style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
</script>
<!-- /move top -->


<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/jquery-1.10.2.min.js"></script>

<!-- chart js -->
<script src="assets/js/Chart.min.js"></script>
<script src="assets/js/utils.js"></script>
<!-- //chart js -->

<!-- Different scripts of charts.  Ex.Barchart, Linechart -->
<script src="assets/js/bar.js"></script>
<script src="assets/js/linechart.js"></script>
<!-- //Different scripts of charts.  Ex.Barchart, Linechart -->


<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/scripts.js"></script>

<!-- close script -->
<script>
  var closebtns = document.getElementsByClassName("close-grid");
  var i;

  for (i = 0; i < closebtns.length; i++) {
    closebtns[i].addEventListener("click", function () {
      this.parentElement.style.display = 'none';
    });
  }
</script>
<!-- //close script -->

<!-- disable body scroll when navbar is in active -->
<script>
  $(function () {
    $('.sidebar-menu-collapsed').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll when navbar is in active -->

 <!-- loading-gif Js -->
 <script src="assets/js/modernizr.js"></script>
 <script>
     $(window).load(function () {
         // Animate loader off screen
         $(".se-pre-con").fadeOut("slow");;
     });
 </script>
 <!--// loading-gif Js -->

<!-- Bootstrap Core JavaScript -->
<script src="assets/js/bootstrap.min.js"></script>
@endsection
  