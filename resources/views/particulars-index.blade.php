@extends('layouts.app')
@section('head')

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Particulars Detail | {{config('app.name')}}</title>

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
                <li class="breadcrumb-item active" aria-current="page">Particulars Detail</li>
            </ol>
        </nav>
        <!-- //breadcrumbs -->
        <!-- forms -->
        <section class="forms">
          @include('inc.messages')
            <!-- forms 1 -->
            <div class="card card_border py-2 mb-4">
                <div class="cards__heading">
                    <h3>Particulars Detail <span></span></h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('particulars.store') }}" method="post" enctype="multipart/form-data">
                      @csrf
                        

                        <fieldset>
                          <legend>Particulars of owner</legend>
                          <div class="row">
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="name" class="input__label">Full name</label>
                                  <input type="text" name="name" class="form-control input-style "  id="name"  aria-describedby="emailHelp" placeholder="Enter full name">    
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="phone" class="input__label">Phone Number</label>
                                  <input type="text" name="phone" class="form-control input-style "  id="phone"  aria-describedby="emailHelp" placeholder="Enter Phone Number">    
                              </div>
                            </div>
                            
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="email" class="input__label">Email</label>
                                  <input type="email" name="email" class="form-control input-style "  id="email"  aria-describedby="emailHelp" placeholder="Enter Email">    
                              </div>
                            </div>
                            
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="city" class="input__label">City</label>
                                  <input type="text" name="city" class="form-control input-style "  id="city"  aria-describedby="emailHelp" placeholder="Enter City">    
                              </div>
                            </div>
                            
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="lga" class="input__label">LGA</label>
                                  <input type="text" name="lga" class="form-control input-style "  id="lga"  aria-describedby="emailHelp" placeholder="Enter LGA">    
                              </div>
                            </div>
                            
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="state" class="input__label">Status</label>
                                  <input type="text" name="state" class="form-control input-style "  id="state"  aria-describedby="emailHelp" placeholder="Enter Status">    
                              </div>
                            </div>
                            
                            
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="country" class="input__label">Country</label>
                                  <input type="text" name="country" class="form-control input-style "  id="country"  aria-describedby="emailHelp" placeholder="Enter Country">    
                              </div>
                            </div>
                            
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="address" class="input__label">Address</label>
                                  <input type="text" name="address" class="form-control input-style "  id="address"  aria-describedby="emailHelp" placeholder="Enter Address">    
                              </div>
                            </div>
                            
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="occupation" class="input__label">occupation</label>
                                  <input type="text" name="occupation" class="form-control input-style "  id="occupation"  aria-describedby="emailHelp" placeholder="Enter occupation">    
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="dob" class="input__label">Date Of Birth</label>
                                  <input type="date" name="dob" class="form-control input-style "  id="dob"  aria-describedby="emailHelp" placeholder="Enter Date Of Birth">    
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="psn" class="input__label">PSN</label>
                                  <input type="text" name="psn" class="form-control input-style "  id="psn"  aria-describedby="emailHelp" placeholder="Enter PSN">    
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="tax" class="input__label">Tax ID</label>
                                  <input type="text" name="tax" class="form-control input-style "  id="tax"  aria-describedby="emailHelp" placeholder="Enter Tax ID">    
                              </div>
                            </div>
                            
                          </div>
                          
                        </fieldset>

                        <fieldset>
                          <legend>Particulars of Automobile </legend>
                          <div class="row">
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="class" class="input__label">Select class</label>   
                                  <select name="class" class="form-control input-style "  id="class">
                                      <option>Select Class</option>
                                      <option value="truck">truck</option>
                                      <option value="trailer">trailer</option>
                                      <option value="tractor">tractor</option>
                                      <option value="car">car</option>
                                      <option value="bus">bus</option>
                                      <option value="Municipal">Municipal</option>
                                      <option value="equipment">equipment</option>
                                      <option value="campers">campers</option>
                                      <option value="byke">byke</option>
                                      <option value="tricycle">tricycle</option>
                                      <option value="Boat">Boat</option>
                                      <option value="jet">Jet</option>
                                  </select> 
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="type" class="input__label">type</label>
                                  <input type="text" name="type" class="form-control input-style "  id="type"  aria-describedby="emailHelp" placeholder="Enter type">    
                              </div>
                            </div>
                            
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="licence_number" class="input__label">licence number</label>
                                  <input type="text" name="licence_number" class="form-control input-style "  id="licence_number"  aria-describedby="emailHelp" placeholder="Enter licence number">    
                              </div>
                            </div>
                            
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="por" class="input__label">Place of Registration</label>
                                  <input type="text" name="por" class="form-control input-style "  id="por"  aria-describedby="emailHelp" placeholder="Enter Place of Registration">    
                              </div>
                            </div>
                            
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="model" class="input__label">model</label>
                                  <input type="text" name="model" class="form-control input-style "  id="model"  aria-describedby="emailHelp" placeholder="Enter model">    
                              </div>
                            </div>
                            
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="model_code" class="input__label">model code</label>
                                  <input type="text" name="model_code" class="form-control input-style "  id="model_code"  aria-describedby="emailHelp" placeholder="Enter model code">    
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="manufactured_year" class="input__label">manufactured year</label>
                                  <input type="text" name="manufactured_year" class="form-control input-style "  id="manufactured_year"  aria-describedby="emailHelp" placeholder="Enter manufactured year">    
                              </div>
                            </div>
                            
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="status" class="input__label">status</label>
                                  <input type="text" name="status" class="form-control input-style "  id="status"  aria-describedby="emailHelp" placeholder="Enter status">    
                              </div>
                            </div>
                            
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="engine_number" class="input__label">engine number</label>
                                  <input type="text" name="engine_number" class="form-control input-style "  id="engine_number"  aria-describedby="emailHelp" placeholder="Enter engine number">    
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="chassis_number" class="input__label">chassis number</label>
                                  <input type="text" name="chassis_number" class="form-control input-style "  id="chassis_number"  aria-describedby="emailHelp" placeholder="Enter chassis number">    
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="color" class="input__label">color</label>
                                  <input type="text" name="color" class="form-control input-style "  id="color"  aria-describedby="emailHelp" placeholder="Enter color">    
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="body_type" class="input__label">body type</label>
                                  <input type="text" name="body_type" class="form-control input-style "  id="body_type"  aria-describedby="emailHelp" placeholder="Enter body type">    
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="origin" class="input__label">place of origin</label>
                                  <input type="text" name="origin" class="form-control input-style "  id="origin"  aria-describedby="emailHelp" placeholder="Enter place of origin">    
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="cylinder_capacity" class="input__label">cylinder capacity</label>
                                  <input type="text" name="cylinder_capacity" class="form-control input-style "  id="cylinder_capacity"  aria-describedby="emailHelp" placeholder="Enter cylinder capacity">    
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="rated_power" class="input__label">rated power</label>
                                  <input type="text" name="rated_power" class="form-control input-style "  id="rated_power"  aria-describedby="emailHelp" placeholder="Enter rated power">    
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="seating_capacity" class="input__label">seating capacity</label>
                                  <input type="text" name="seating_capacity" class="form-control input-style "  id="seating_capacity"  aria-describedby="emailHelp" placeholder="Enter seating capacity">    
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="propulsion" class="input__label">propulsion</label>
                                  <input type="text" name="propulsion" class="form-control input-style "  id="propulsion"  aria-describedby="emailHelp" placeholder="Enter propulsion">    
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="steering" class="input__label">steering</label>
                                  <input type="text" name="steering" class="form-control input-style "  id="steering"  aria-describedby="emailHelp" placeholder="Enter steering">    
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="tire_no" class="input__label">No of tire</label>
                                  <input type="text" name="tire_no" class="form-control input-style "  id="tire_no"  aria-describedby="emailHelp" placeholder="Enter No of tire">    
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="door_no" class="input__label">No of Door</label>
                                  <input type="text" name="door_no" class="form-control input-style "  id="door_no"  aria-describedby="emailHelp" placeholder="Enter No of Door">    
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="gps" class="input__label">GPS</label><br>
                                  <input type="radio" name="gps" value="yes"  > YES
                                  <input type="radio" name="gps" value="no" > NO

                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="airbag" class="input__label">Airbag</label><br>
                                  <input type="radio" name="airbag" value="yes"  > YES
                                  <input type="radio" name="airbag" value="no" > NO

                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="tracker" class="input__label">Tracker</label><br>
                                  <input type="radio" name="tracker" value="yes"  > YES
                                  <input type="radio" name="tracker" value="no" > NO

                              </div>
                            </div>
                            
                            
                          </div>
                          
                        </fieldset>

                        <fieldset>
                          <legend>Risk insurance</legend>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="insurance_company" class="input__label">insurance company</label>
                                  <input type="text" name="insurance_company" class="form-control input-style "  id="insurance_company"  aria-describedby="emailHelp" placeholder="Enter insurance company">    
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="policy_holder" class="input__label">policy holder</label>
                                  <input type="text" name="policy_holder" class="form-control input-style "  id="policy_holder"  aria-describedby="emailHelp" placeholder="Enter policy holder">    
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                  <label for="policy_note" class="input__label">policy note</label>
                                  <textarea name="policy_note" class="form-control input-style "  id="policy_note"></textarea>   
                              </div>
                            </div> 
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="effective_date_from" class="input__label">effective date from</label>
                                  <input type="date" name="effective_date_from" class="form-control input-style "  id="effective_date_from"  aria-describedby="emailHelp" placeholder="Enter effective date from">    
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="effective_date_to" class="input__label">effective date to</label>
                                  <input type="date" name="effective_date_to" class="form-control input-style "  id="effective_date_to"  aria-describedby="emailHelp" placeholder="Enter effective date to">    
                              </div>
                            </div>                           
                            
                          </div>
                          
                        </fieldset>

                        <fieldset>
                          <legend>Emergency Contact person </legend>
                          <div class="row">
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="ecp_name" class="input__label">ECP name</label>
                                  <input type="text" name="ecp_name" class="form-control input-style "  id="ecp_name"  aria-describedby="emailHelp" placeholder="Enter ECP name">    
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="ecp_phone" class="input__label">ECp phone</label>
                                  <input type="text" name="ecp_phone" class="form-control input-style "  id="ecp_phone"  aria-describedby="ecp_phoneHelp" placeholder="Enter ECP phone">    
                              </div>
                            </div> 
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="ecp_email" class="input__label">ECP email</label>
                                  <input type="text" name="ecp_email" class="form-control input-style "  id="ecp_email"  aria-describedby="emailHelp" placeholder="Enter ECP email">    
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="ecp_city" class="input__label">ECP city</label>
                                  <input type="text" name="ecp_city" class="form-control input-style "  id="ecp_city"  aria-describedby="ecp_cityHelp" placeholder="Enter ECP city">    
                              </div>
                            </div>    
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="ecp_lga" class="input__label">ECP lga</label>
                                  <input type="text" name="ecp_lga" class="form-control input-style "  id="ecp_lga"  aria-describedby="emailHelp" placeholder="Enter ECP lga">    
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="ecp_state" class="input__label">ECP state</label>
                                  <input type="text" name="ecp_state" class="form-control input-style "  id="ecp_state"  aria-describedby="ecp_stateHelp" placeholder="Enter ECP state">    
                              </div>
                            </div> 
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="ecp_country" class="input__label">ECP country</label>
                                  <input type="text" name="ecp_country" class="form-control input-style "  id="ecp_country"  aria-describedby="emailHelp" placeholder="Enter ECP country">    
                              </div>
                            </div>

                            <div class="col-md-12">
                              <div class="form-group">
                                  <label for="ecp_address" class="input__label">ECP address</label>  
                                  <textarea name="ecp_address" class="form-control input-style "  id="ecp_address"></textarea>  
                              </div>
                            </div>                            
                            
                          </div>
                          
                        </fieldset>

                        
                        <div class="form-group">
                            <label for="passport" class="input__label">Document</label>
                            <input type="file" name="document" class="form-control input-style "  id="document">    
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