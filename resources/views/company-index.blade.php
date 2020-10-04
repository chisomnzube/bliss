@extends('layouts.app')
@section('head')

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Company Info | {{config('app.name')}}</title>

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
                <li class="breadcrumb-item active" aria-current="page">Company Info</li>
            </ol>
        </nav>
        <!-- //breadcrumbs -->
        <!-- forms -->
        <section class="forms">
          @include('inc.messages')
            <!-- forms 1 -->
            <div class="card card_border py-2 mb-4">
                <div class="cards__heading">
                    <h3>Company Info <span></span></h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('company.store') }}" method="post" enctype="multipart/form-data">
                      @csrf
                        <fieldset class="form-group">
                          <legend>Create Login</legend>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="exampleInputEmail1" class="input__label">Password</label>
                                  <input type="password" name="password" class="form-control input-style "  id="exampleInputEmail1"  aria-describedby="emailHelp" placeholder="Enter password">                                  
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="exampleInputEmail1" class="input__label">Confirm password</label>
                                  <input type="password" name="password_confirmation" class="form-control input-style "  id="exampleInputEmail1"  aria-describedby="emailHelp" placeholder="Enter confirm password">                                  
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="security_question" class="input__label">security question</label>
                                  <input type="text" name="security_question" class="form-control input-style "  id="security_question"  aria-describedby="emailHelp" placeholder="Enter security question">                                  
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="security_answer" class="input__label">security answer</label>
                                  <input type="text" name="security_answer" class="form-control input-style "  id="security_answer"  aria-describedby="emailHelp" placeholder="Enter security answer">    
                              </div>
                            </div>
                        </div>
                        </fieldset>

                        <fieldset>
                          <legend>COMPANY INFO</legend>
                          <div class="row">
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="industry" class="input__label">industry</label>
                                  <input type="text" name="industry" class="form-control input-style "  id="industry"  aria-describedby="emailHelp" placeholder="Enter industry">    
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="toc" class="input__label">Type of Company</label>
                                  <input type="text" name="toc" class="form-control input-style "  id="toc"  aria-describedby="emailHelp" placeholder="Enter Type of Company">    
                              </div>
                            </div>
                            
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="company_name" class="input__label">company name</label>
                                  <input type="text" name="company_name" class="form-control input-style "  id="company_name"  aria-describedby="emailHelp" placeholder="Enter company name">    
                              </div>
                            </div>
                            
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="parent_company" class="input__label">parent company</label>
                                  <input type="text" name="parent_company" class="form-control input-style "  id="parent_company"  aria-describedby="emailHelp" placeholder="Enter parent company">    
                              </div>
                            </div>
                            
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="office_address" class="input__label">office address</label>
                                  <input type="text" name="office_address" class="form-control input-style "  id="office_address"  aria-describedby="emailHelp" placeholder="Enter office address">    
                              </div>
                            </div>
                            
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="branches" class="input__label">branches</label>
                                  <input type="text" name="branches" class="form-control input-style "  id="branches"  aria-describedby="emailHelp" placeholder="Enter branches">    
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="yoe" class="input__label">Year of Establishment</label>
                                  <input type="text" name="yoe" class="form-control input-style "  id="yoe"  aria-describedby="emailHelp" placeholder="Enter Place of Birth">    
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="doi" class="input__label">Date of Incorporation</label>
                                  <input type="date" name="doi" class="form-control input-style "  id="doi"  aria-describedby="emailHelp" placeholder="Enter Date of Birth">    
                              </div>
                            </div>
                            
                            
                            
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="employees" class="input__label">No of employees</label>
                                  <input type="text" name="employees" class="form-control input-style "  id="employees"  aria-describedby="emailHelp" placeholder="Enter No of employees">    
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="others" class="input__label">others</label>
                                  <input type="text" name="others" class="form-control input-style "  id="others"  aria-describedby="emailHelp" placeholder="Enter others">    
                              </div>
                            </div>
                            
                          </div>
                          
                        </fieldset>

                        <fieldset>
                          <legend>BUSINESS INFO</legend>
                          <div class="row">
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="market" class="input__label">market</label>
                                  <input type="text" name="market" class="form-control input-style "  id="market"  aria-describedby="emailHelp" placeholder="Enter market">    
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="traded_as" class="input__label">traded as</label>
                                  <input type="text" name="traded_as" class="form-control input-style "  id="traded_as"  aria-describedby="emailHelp" placeholder="Enter traded as">    
                              </div>
                            </div>
                            
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="stock_price" class="input__label">stock price</label>
                                  <input type="text" name="stock_price" class="form-control input-style "  id="stock_price"  aria-describedby="emailHelp" placeholder="Enter stock price">    
                              </div>
                            </div>
                            
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="isin" class="input__label">ISIN</label>
                                  <input type="text" name="isin" class="form-control input-style "  id="isin"  aria-describedby="emailHelp" placeholder="Enter ISIN">    
                              </div>
                            </div>
                            
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="rc" class="input__label">RC Number</label>
                                  <input type="text" name="rc" class="form-control input-style "  id="rc"  aria-describedby="emailHelp" placeholder="Enter RC Number">    
                              </div>
                            </div>
                            
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="founded" class="input__label">founded</label>
                                  <input type="text" name="founded" class="form-control input-style "  id="founded"  aria-describedby="emailHelp" placeholder="Enter founded">    
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="founder" class="input__label">Founder</label>
                                  <input type="text" name="founder" class="form-control input-style "  id="founder"  aria-describedby="emailHelp" placeholder="Enter Founder">    
                              </div>
                            </div>
                            
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="area_served" class="input__label">area served</label>
                                  <input type="text" name="area_served" class="form-control input-style "  id="area_served"  aria-describedby="emailHelp" placeholder="Enter area served">    
                              </div>
                            </div>
                            
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="key_people" class="input__label">Key people</label>
                                  <input type="text" name="key_people" class="form-control input-style "  id="key_people"  aria-describedby="emailHelp" placeholder="Enter Key people">    
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="products" class="input__label"> products</label>
                                  <input type="text" name="products" class="form-control input-style "  id="products"  aria-describedby="emailHelp" placeholder="Enter  products">    
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="revenue" class="input__label">revenue</label>
                                  <input type="text" name="revenue" class="form-control input-style "  id="revenue"  aria-describedby="emailHelp" placeholder="Enter revenue">    
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="asc" class="input__label">Authorized share capital</label>
                                  <input type="text" name="asc" class="form-control input-style "  id="asc"  aria-describedby="emailHelp" placeholder="Enter Authorized share capital">    
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="market_cap" class="input__label">market cap</label>
                                  <input type="text" name="market_cap" class="form-control input-style "  id="market_cap"  aria-describedby="emailHelp" placeholder="Enter market cap">    
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="asset" class="input__label">Total asset</label>
                                  <input type="text" name="asset" class="form-control input-style "  id="asset"  aria-describedby="emailHelp" placeholder="Enter Total asset">    
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="equity" class="input__label">Total equity</label>
                                  <input type="text" name="equity" class="form-control input-style "  id="equity"  aria-describedby="emailHelp" placeholder="Enter Total equity">    
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="operating_income" class="input__label">operating income</label>
                                  <input type="text" name="operating_income" class="form-control input-style "  id="operating_income"  aria-describedby="emailHelp" placeholder="Enter operating income">    
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="net_income" class="input__label">net income</label>
                                  <input type="text" name="net_income" class="form-control input-style "  id="net_income"  aria-describedby="emailHelp" placeholder="Enter net income">    
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="subsidiary" class="input__label">subsidiary</label>
                                  <input type="text" name="subsidiary" class="form-control input-style "  id="subsidiary"  aria-describedby="emailHelp" placeholder="Enter subsidiary">    
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="website" class="input__label">website</label>
                                  <input type="text" name="website" class="form-control input-style "  id="website"  aria-describedby="emailHelp" placeholder="Enter website">    
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="email" class="input__label">email</label>
                                  <input type="email" name="email" class="form-control input-style "  id="email"  aria-describedby="emailHelp" placeholder="Enter email">    
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="phone" class="input__label">phone</label>
                                  <input type="text" name="phone" class="form-control input-style "  id="phone"  aria-describedby="emailHelp" placeholder="Enter phone">    
                              </div>
                            </div>
                            
                          </div>
                          
                        </fieldset>



                        <fieldset>
                          <legend>REGISTRATION INFORMATION</legend>
                          <div class="row">
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="reg_date" class="input__label">Registration date</label>
                                  <input type="text" name="reg_date" class="form-control input-style "  id="reg_date"  aria-describedby="emailHelp" placeholder="Enter Registration date">    
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="name" class="input__label">name</label>
                                  <input type="text" name="name" class="form-control input-style "  id="name"  aria-describedby="nameHelp" placeholder="Enter name">    
                              </div>
                            </div> 
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="address" class="input__label">address</label>
                                  <input type="text" name="address" class="form-control input-style "  id="address"  aria-describedby="emailHelp" placeholder="Enter address">    
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="position" class="input__label">position</label>
                                  <input type="text" name="position" class="form-control input-style "  id="position"  aria-describedby="positionHelp" placeholder="Enter position">    
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
                                  <label for="security_status" class="input__label">security status</label>
                                  <input type="text" name="security_status" class="form-control input-style "  id="security_status"  aria-describedby="security_statusHelp" placeholder="Enter security status">    
                              </div>
                            </div>                             
                            
                          </div>
                          
                        </fieldset>

                        <fieldset>
                          <legend>ID</legend>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="id_type" class="input__label">ID type</label>
                                  <input type="text" name="id_type" class="form-control input-style "  id="id_type"  aria-describedby="emailHelp" placeholder="Enter ID type">    
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="id_number" class="input__label">ID number</label>
                                  <input type="id_number" name="id_number" class="form-control input-style "  id="id_number"  aria-describedby="id_numberHelp" placeholder="Enter ID number">    
                              </div>
                            </div>                            
                            
                          </div>
                          
                        </fieldset>

                        
                        <div class="form-group">
                            <label for="document" class="input__label">Support document</label>
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