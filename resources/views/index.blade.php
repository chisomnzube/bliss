@extends('layouts.app')
@section('head')

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>{{config('app.name')}}</title>

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
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      </ol>
    </nav>
    @auth
      <div class="welcome-msg pt-3 pb-4">
        <h1>Hi <span class="text-primary">{{auth()->user()->name}}</span>, Welcome back</h1>
        {{-- <p>Very detailed & featured admin.</p> --}}
      </div>
    @endauth
    <form action="{{ route('search') }}" method="GET">
      @csrf
      <div class="row">
        <div class="col-md-3 form-group">
          <select name="type" class="form-control">
              <option>Select Type</option>
              <option value="psn">PSN</option>
              <option value="csn">CSN</option>
          </select>
        </div>
        <div class="col-md-7 form-group">
          <input type="text" name="id" class="form-control">
        </div>
        <div class="col-md-2">
          <button type="submit" class="btn btn-info">Search</button>
        </div>
      </div>
    </form>


        
          
        
    
   @if($posts->count() > 0)
    <div class="row">
    @foreach($posts as $post)
      <div class="col-md-3">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="{{passportImage($post->image)}}" alt="{{$post->title}}">
          <div class="card-body">
            <h5 class="card-title"><a href="{{ route('post.show', $post->slug) }}" >{{$post->title}}</a></h5>
            <p class="card-text">{{ str_limit(strip_tags($post->body), 150) }}</p>
            <a href="{{ route('post.show', $post->slug) }}" class="btn btn-primary">view</a>
          </div>
        </div>
      </div> 
    @endforeach
    </div>
   @endif

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
  