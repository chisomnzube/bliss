@extends('layouts.app')
@section('head')

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>PSN search | {{config('app.name')}}</title>

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
        <li class="breadcrumb-item active" aria-current="page">PSN Search</li>
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
        <h3>Passport</h3>
        <img src="{{ asset('storage/'.$psn->passport) }}" width="150">
        <hr>
        <h3>Personal Detail:</h3>
        <p><b>Title: {{$psn->title}}</b></p>
        <p><b>First name: {{$psn->fname}}</b></p>
        <p><b>Last Name: {{$psn->lname}}</b></p>
        <p><b>Middle Name: {{$psn->mname}}</b></p>
        <p><b>Median NAme: {{$psn->median_name}}</b></p>
        <p><b>Marital Status: {{$psn->marital_status}}</b></p>
        <p><b>Gender: {{$psn->gender}}</b></p>
        <p><b>Dateof Birth: {{$psn->dob}}</b></p>
        <p><b>Place of Birth: {{$psn->pob}}</b></p>
        <p><b>State: {{$psn->state}}</b></p>
        <p><b>LGA: {{$psn->lga}}</b></p>
        <p><b>CITY: {{$psn->city}}</b></p>
        <p><b>Nationality: {{$psn->nationality}}</b></p>
        <p><b>Resident Status: {{$psn->residence_status}}</b></p>
        <hr>
        <h3>Other Details</h3>
        <p><b>Native Language: {{$psn->native_lang}}</b></p>
        <p><b>Other Language: {{$psn->other_lang}}</b></p>
        <p><b>Religion: {{$psn->religion}}</b></p>
        <p><b>Education Level: {{$psn->education}}</b></p>
        <p><b>Employment status: {{$psn->employment_status}}</b></p>
        <p><b>Company: {{$psn->company}}</b></p>
        <p><b>Company address: {{$psn->company_address}}</b></p>
        <p><b>Job title: {{$psn->job_title}}</b></p>
        <p><b>Year of appointment: {{$psn->yoa}}</b></p>
        <p><b>Emergency contact person: {{$psn->ecp}}</b></p>
        <p><b>ECP Address: {{$psn->ecp_address}}</b></p>
        <p><b>ECP phone: {{$psn->ecp_phone}}</b></p>
        <p><b>ECP relationship: {{$psn->relationship}}</b></p>
        {{-- <p><b>{{$psn->ecp_psn}}</b></p> --}}
        <p><b>Health Status: {{$psn->health_status}}</b></p>
        <p><b>Security Status: {{$psn->security_status}}</b></p>
      </div>
      <div class="col">

        <h3>Contact Info</h3>
        <p><b>Phone Number: {{$psn->phone}}</b></p>
        <p><b>Email: {{$psn->email}}</b></p>
        <hr>
        <h3>Social Sites</h3>
        <p><b>Facebook: {{$psn->facebook}}</b></p>
        <p><b>Twitter: {{$psn->twitter}}</b></p>
        <p><b>Linkedin: {{$psn->linkedin}}</b></p>
        <p><b>Instagram: {{$psn->instagram}}</b></p>
        <hr>
        <h3>Identification</h3>
        <p><b>ID type: {{$psn->id_type}}</b></p>
        <p><b>ID Number: {{$psn->id_number}}</b></p>
        <hr>
        <h3>Financial Institutions</h3>
        <p><b>Bank name: {{$psn->bank_name}}</b></p>
        <p><b>Bank Address: {{$psn->bank_address}}</b></p>
        <p><b>Sort Code: {{$psn->sort_code}}</b></p>
        <p><b>Account type: {{$psn->account_type}}</b></p>
        <p><b>Account number{{$psn->account_number}}</b></p>
        <p><b>Tax ID: {{$psn->tax}}</p>
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
  