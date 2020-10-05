@extends('layouts.app')
@section('head')

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Personal Detail | {{config('app.name')}}</title>

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
                <li class="breadcrumb-item active" aria-current="page">Personal Detail</li>
            </ol>
        </nav>
        <!-- //breadcrumbs -->
        <!-- forms -->
        <section class="forms">
          @include('inc.messages')
            <!-- forms 1 -->
            <div class="card card_border py-2 mb-4">
                <div class="cards__heading">
                    <h3>Personal Detail <span></span></h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('personal.store') }}" method="post" enctype="multipart/form-data">
                      @csrf
                        <fieldset class="form-group">
                          <legend>Create Login</legend>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="exampleInputEmail1" class="input__label">Password <small>(* required)</small></label>
                                  <input type="password" name="password" class="form-control input-style "  id="exampleInputEmail1"  aria-describedby="emailHelp" placeholder="Enter password">                                  
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="exampleInputEmail1" class="input__label">Confirm password <small>(* required)</small></label>
                                  <input type="password" name="password_confirmation" class="form-control input-style "  id="exampleInputEmail1"  aria-describedby="emailHelp" placeholder="Enter confirm password">                                  
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="security_question" class="input__label">security question <small>(* required)</small></label>
                                  <input type="text" name="security_question" class="form-control input-style "  id="security_question"  aria-describedby="emailHelp" placeholder="Enter security question" value="{{ old('security_question') }}">                                  
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="security_answer" class="input__label">security answer <small>(* required)</small></label>
                                  <input type="text" name="security_answer" class="form-control input-style "  id="security_answer"  aria-describedby="emailHelp" placeholder="Enter security answer" value="{{ old('security_answer') }}">    
                              </div>
                            </div>
                        </div>
                        </fieldset>

                        <fieldset>
                          <legend>Personal Details</legend>
                          <div class="row">
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="title" class="input__label">title <small>(* required)</small></label>
                                  <input type="text" name="title" class="form-control input-style "  id="title"  aria-describedby="emailHelp" placeholder="Enter title" value="{{ old('title') }}">    
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="fname" class="input__label">First name <small>(* required)</small></label>
                                  <input type="text" name="fname" class="form-control input-style "  id="fname"  aria-describedby="emailHelp" placeholder="Enter First name" value="{{ old('fname') }}">    
                              </div>
                            </div>
                            
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="lname" class="input__label">Last Name <small>(* required)</small></label>
                                  <input type="text" name="lname" class="form-control input-style "  id="lname"  aria-describedby="emailHelp" placeholder="Enter Last name" value="{{ old('lname') }}">    
                              </div>
                            </div>
                            
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="mname" class="input__label">Middle Name <small>(* required)</small></label>
                                  <input type="text" name="mname" class="form-control input-style "  id="mname"  aria-describedby="emailHelp" placeholder="Enter Middle Name" value="{{ old('mname') }}">    
                              </div>
                            </div>
                            
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="median_name" class="input__label">Median name <small>(* required)</small></label>
                                  <input type="text" name="median_name" class="form-control input-style "  id="median_name"  aria-describedby="emailHelp" placeholder="Enter median name" value="{{ old('median_name') }}">    
                              </div>
                            </div>
                            
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="marital_status" class="input__label">Marital status <small>(* required)</small></label>
                                  <input type="text" name="marital_status" class="form-control input-style "  id="marital_status"  aria-describedby="emailHelp" placeholder="Enter Marital status" value="{{ old('marital_status') }}">    
                              </div>
                            </div>
                            
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="gender" class="input__label">Gender <small>(* required)</small></label><br>
                                  <input type="radio" name="gender" value="male"  > Male
                                  <input type="radio" name="gender" value="female" > Female

                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="dob" class="input__label">Date of Birth <small>(* required)</small></label>
                                  <input type="date" name="dob" class="form-control input-style "  id="dob"  aria-describedby="emailHelp" placeholder="Enter Date of Birth" value="{{ old('dob') }}">    
                              </div>
                            </div>
                            
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="pob" class="input__label">Place of Birth <small>(* required)</small></label>
                                  <input type="text" name="pob" class="form-control input-style "  id="pob"  aria-describedby="emailHelp" placeholder="Enter Place of Birth" value="{{ old('pob') }}">    
                              </div>
                            </div>
                            
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="state" class="input__label">State <small>(* required)</small></label>
                                  <input type="text" name="state" class="form-control input-style "  id="state"  aria-describedby="emailHelp" placeholder="Enter State" value="{{ old('state') }}">    
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="lga" class="input__label">LGA <small>(* required)</small></label>
                                  <input type="text" name="lga" class="form-control input-style "  id="lga"  aria-describedby="emailHelp" placeholder="Enter LGA" value="{{ old('lga') }}">    
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="city" class="input__label">City <small>(* required)</small></label>
                                  <input type="text" name="city" class="form-control input-style "  id="city"  aria-describedby="emailHelp" placeholder="Enter City" value="{{ old('city') }}">    
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="nationality" class="input__label">Nationality <small>(* required)</small></label>
                                  <input type="text" name="nationality" class="form-control input-style "  id="nationality"  aria-describedby="emailHelp" placeholder="Enter Nationality" value="{{ old('nationality') }}">    
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="residence_status" class="input__label">Residence status <small>(* required)</small></label>
                                  <input type="text" name="residence_status" class="form-control input-style "  id="residence_status"  aria-describedby="emailHelp" placeholder="Enter residence status" value="{{ old('residence_status') }}">    
                              </div>
                            </div>
                          </div>
                          
                        </fieldset>

                        <fieldset>
                          <legend>Other Details</legend>
                          <div class="row">
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="native_lang" class="input__label">native language <small>(* required)</small></label>
                                  <input type="text" name="native_lang" class="form-control input-style "  id="native_lang"  aria-describedby="emailHelp" placeholder="Enter native language" value="{{ old('native_lang') }}">    
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="other_lang" class="input__label">other language </label>
                                  <input type="text" name="other_lang" class="form-control input-style "  id="other_lang"  aria-describedby="emailHelp" placeholder="Enter other language" value="{{ old('other_lang') }}">    
                              </div>
                            </div>
                            
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="religion" class="input__label">religion <small>(* required)</small></label>
                                  <input type="text" name="religion" class="form-control input-style "  id="religion"  aria-describedby="emailHelp" placeholder="Enter religion" value="{{ old('religion') }}">    
                              </div>
                            </div>
                            
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="education" class="input__label">education level <small>(* required)</small></label>
                                  <input type="text" name="education" class="form-control input-style "  id="education"  aria-describedby="emailHelp" placeholder="Enter education level" value="{{ old('education') }}">    
                              </div>
                            </div>
                            
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="employment_status" class="input__label">employment status <small>(* required)</small></label>
                                  <input type="text" name="employment_status" class="form-control input-style "  id="employment_status"  aria-describedby="emailHelp" placeholder="Enter employment status" value="{{ old('employment_status') }}">    
                              </div>
                            </div>
                            
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="company" class="input__label">company <small>(* required)</small></label>
                                  <input type="text" name="company" class="form-control input-style "  id="company"  aria-describedby="emailHelp" placeholder="Enter company" value="{{ old('company') }}">    
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="company_address" class="input__label">company address <small>(* required)</small></label>
                                  <input type="text" name="company_address" class="form-control input-style "  id="company_address"  aria-describedby="emailHelp" placeholder="Enter company address" value="{{ old('company_address') }}">    
                              </div>
                            </div>
                            
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="job_title" class="input__label">job title <small>(* required)</small></label>
                                  <input type="text" name="job_title" class="form-control input-style "  id="job_title"  aria-describedby="emailHelp" placeholder="Enter job title" value="{{ old('job_title') }}">    
                              </div>
                            </div>
                            
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="yoa" class="input__label">Year of appointment <small>(* required)</small></label>
                                  <input type="text" name="yoa" class="form-control input-style "  id="yoa"  aria-describedby="emailHelp" placeholder="Enter Year of appointment" value="{{ old('yoa') }}">    
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="ecp" class="input__label">Emergency Contact Person <small>(* required)</small></label>
                                  <input type="text" name="ecp" class="form-control input-style "  id="ecp"  aria-describedby="emailHelp" placeholder="Enter Emergency Contact Person" value="{{ old('ecp') }}">    
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="ecp_address" class="input__label">ECP address <small>(* required)</small></label>
                                  <input type="text" name="ecp_address" class="form-control input-style "  id="ecp_address"  aria-describedby="emailHelp" placeholder="Enter ECP address" value="{{ old('ecp_address') }}">    
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="ecp_phone" class="input__label">ECP phone <small>(* required)</small></label>
                                  <input type="text" name="ecp_phone" class="form-control input-style "  id="ecp_phone"  aria-describedby="emailHelp" placeholder="Enter ECP phone" value="{{ old('ecp_phone') }}">    
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="ecp_psn" class="input__label">ECP PSN <small>(* required)</small></label>
                                  <input type="text" name="ecp_psn" class="form-control input-style "  id="ecp_psn"  aria-describedby="emailHelp" placeholder="Enter ECP PSN" value="{{ old('ecp_psn') }}">    
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="relationship" class="input__label">relationship <small>(* required)</small></label>
                                  <input type="text" name="relationship" class="form-control input-style "  id="relationship"  aria-describedby="emailHelp" placeholder="Enter relationship" value="{{ old('relationship') }}">    
                              </div>
                            </div>
                            
                          </div>
                          
                        </fieldset>

                        <fieldset>
                          <legend>Contact Details</legend>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="phone" class="input__label">phone <small>(* required)</small></label>
                                  <input type="text" name="phone" class="form-control input-style "  id="phone"  aria-describedby="emailHelp" placeholder="Enter phone" value="{{ old('phone') }}">    
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="email" class="input__label">email <small>(* required)</small></label>
                                  <input type="email" name="email" class="form-control input-style "  id="email"  aria-describedby="emailHelp" placeholder="Enter email" value="{{ old('email') }}">    
                              </div>
                            </div>                            
                            
                          </div>
                          
                        </fieldset>

                        <fieldset>
                          <legend>Social sites</legend>
                          <div class="row">
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="facebook" class="input__label">facebook</label>
                                  <input type="text" name="facebook" class="form-control input-style "  id="facebook"  aria-describedby="emailHelp" placeholder="Enter facebook" value="{{ old('facebook') }}">    
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="twitter" class="input__label">twitter</label>
                                  <input type="text" name="twitter" class="form-control input-style "  id="twitter"  aria-describedby="twitterHelp" placeholder="Enter twitter" value="{{ old('twitter') }}">    
                              </div>
                            </div> 
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="linkedin" class="input__label">linkedin</label>
                                  <input type="text" name="linkedin" class="form-control input-style "  id="linkedin"  aria-describedby="emailHelp" placeholder="Enter linkedin" value="{{ old('linkedin') }}">    
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="instagram" class="input__label">instagram</label>
                                  <input type="text" name="instagram" class="form-control input-style "  id="instagram"  aria-describedby="instagramHelp" placeholder="Enter instagram" value="{{ old('instagram') }}">    
                              </div>
                            </div>                            
                            
                          </div>
                          
                        </fieldset>

                        <fieldset>
                          <legend>ID</legend>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="id_type" class="input__label">ID type <small>(* required)</small></label>
                                  <input type="text" name="id_type" class="form-control input-style "  id="id_type"  aria-describedby="emailHelp" placeholder="Enter ID type" value="{{ old('id_type') }}">    
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="id_number" class="input__label">ID number <small>(* required)</small></label>
                                  <input type="id_number" name="id_number" class="form-control input-style "  id="id_number"  aria-describedby="id_numberHelp" placeholder="Enter ID number" value="{{ old('id_number') }}">    
                              </div>
                            </div>                            
                            
                          </div>
                          
                        </fieldset>

                        <fieldset>
                          <legend>Financial Institution</legend>
                          <div class="row">
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="bank_name" class="input__label">bank_name <small>(* required)</small></label>
                                  <input type="text" name="bank_name" class="form-control input-style "  id="bank_name"  aria-describedby="emailHelp" placeholder="Enter bank name" value="{{ old('bank_name') }}">    
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="bank_address" class="input__label">bank address <small>(* required)</small></label>
                                  <input type="text" name="bank_address" class="form-control input-style "  id="bank_address"  aria-describedby="bank_addressHelp" placeholder="Enter bank address" value="{{ old('bank_address') }}">    
                              </div>
                            </div> 
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="sort_code" class="input__label">sort code <small>(* required)</small></label>
                                  <input type="text" name="sort_code" class="form-control input-style "  id="sort_code"  aria-describedby="emailHelp" placeholder="Enter sort code" value="{{ old('sort_code') }}">    
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="account_type" class="input__label">account type <small>(* required)</small></label>
                                  <input type="text" name="account_type" class="form-control input-style "  id="account_type"  aria-describedby="account_typeHelp" placeholder="Enter account type" value="{{ old('account_type') }}">    
                              </div>
                            </div> 
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="account_number" class="input__label">account number <small>(* required)</small></label>
                                  <input type="text" name="account_number" class="form-control input-style "  id="account_number"  aria-describedby="emailHelp" placeholder="Enter account number" value="{{ old('account_number') }}">    
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="tax" class="input__label">tax <small>(* required)</small></label>
                                  <input type="text" name="tax" class="form-control input-style "  id="tax"  aria-describedby="taxHelp" placeholder="Enter tax" value="{{ old('tax') }}">    
                              </div>
                            </div>                            
                            
                          </div>
                          
                        </fieldset>
                        <div class="form-group">
                            <label for="passport" class="input__label">Passport <small>(* required)</small></label>
                            <input type="file" name="passport" class="form-control input-style "  id="passport">    
                        </div>

                        <button type="submit" class="btn btn-primary btn-block btn-style mt-4">Submit</button>
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