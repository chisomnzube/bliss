@extends('layouts.app')
@section('head')

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>CSN Search | {{config('app.name')}}</title>

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
        <li class="breadcrumb-item active" aria-current="page">CSN search</li>
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
        <h3>Company Info</h3>
        <p><b>Industry: {{$csn->industry}}</b></p>
        <p><b>Type od Company: {{$csn->toc}}</b></p>
        <p><b>Company name: {{$csn->company_name}}</b></p>
        <p><b>Parent Company{{$csn->parent_company}}</b></p>
        <p><b>Office Address: {{$csn->office_address}}</b></p>
        <p><b>Branches: {{$csn->branches}}</b></p>
        <p><b>Year of establishment: {{$csn->yoe}}</b></p>
        <p><b>Date of Incorporation: {{$csn->doi}}</b></p>
        <p><b>No of employees: {{$csn->employees}}</b></p>
        <p><b>Others: {{$csn->others}}</b></p>
        <br>
        <h3>Registration Info</h3>
        <p><b>Registration date: {{$csn->reg_date}}</b></p>
        <p><b>Name: {{$csn->name}}</b></p>
        <p><b>Address: {{$csn->address}}</b></p>
        <p><b>ID Number: {{$csn->id_number}}</b></p>
        <p><b>ID type: {{$csn->id_type}}</b></p>
        <p><b>Position: {{$csn->position}}</b></p>
        <p><b>Security Status{{$csn->security_status}}</b></p>
        <p><b>Rating: {{$csn->rating}}</b></p>
        
      </div>
      <div class="col">
        <h3>Business Info</h3>
        <p><b>Market: {{$csn->market}}</b></p>
        <p><b>Traded as: {{$csn->traded_as}}</b></p>
        <p><b>Stock price: {{$csn->stock_price}}</b></p>
        <p><b>ISIN: {{$csn->isin}}</b></p>
        <p><b>RC Number: {{$csn->rc}}</b></p>
        <p><b>Founded: {{$csn->founded}}</b></p>
        <p><b>Founder: {{$csn->founder}}</b></p>
        <p><b>Area served: {{$csn->area_served}}</b></p>
        <p><b>Key people: {{$csn->key_people}}</b></p>
        <p><b>Products: {{$csn->products}}</b></p>
        <p><b>Revenue: {{$csn->revenue}}</b></p>
        <p><b>Authorized share capital: {{$csn->asc}}</b></p>
        <p><b>Market Cap: {{$csn->market_cap}}</b></p>
        <p><b>Total Asset: {{$csn->asset}}</b></p>
        <p><b>Total equity: {{$csn->equity}}</b></p>
        <p><b>Operating Income: {{$csn->operating_income}}</b></p>
        <p><b>Net Income: {{$csn->net_income}}</b></p>
        <p><b>Subsidiaries: {{$csn->subsidiary}}</b></p>
        <p><b>Website: {{$csn->website}}</b></p>
        <p><b>Email: {{$csn->email}}</b></p>
        <p><b>Phone number: {{$csn->phone}}</b></p>

        
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
  