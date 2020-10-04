@extends('layouts.app')
@section('head')

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>My Profile | {{config('app.name')}}</title>

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">

  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">
</head>
@endsection

@section('main-content')
<!-- main content start -->
<div class="main-content">

    <!-- content -->
    <div class="container-fluid content-top-gap">

        <!-- breadcrumbs -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb my-breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('landingpage') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">My Profile</li>
            </ol>
        </nav>
        <!-- //breadcrumbs -->
        <!-- forms -->
        <section class="forms">
          @include('inc.messages')
            <!-- forms 1 -->
            <div class="card card_border py-2 mb-4">
                <div class="cards__heading">
                    <h3>My Profile <span></span></h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('user.update') }}" method="post">
                      @csrf
                        <div class="form-group">
                            <label for="exampleInputName" class="input__label">Name</label>
                            <input type="text" name="name" class="form-control input-style" value="{{auth()->user()->name}}" id="exampleInputName"    aria-describedby="nameHelp" placeholder="Enter Name">
                            {{-- <small id="nameHelp" class="form-text text-muted">We'll never share your email with
                                anyone else.</small> --}}
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="input__label">Email address</label>
                            <input type="email" name="email" value="{{auth()->user()->email}}" class="form-control input-style "  id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter email">                            
                            
                        </div>
                        <p><small><i>Leave blank if you want to retain previous password</i></small></p>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="input__label">Password</label>
                                <input type="password" name="password" class="form-control input-style " id="exampleInputPassword1"
                                    placeholder="Password">
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                                <label for="exampleInputcPassword1" class="input__label"> Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control input-style " id="exampleInputcPassword1"  placeholder="confirm Password">
                            </div>
                          </div>
                        </div>
                        
                        
                        
                        <button type="submit" class="btn btn-primary btn-style mt-4">Update</button>
                    </form>
                </div>
            </div>

        </section>
        <!-- //forms  -->

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