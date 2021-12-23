<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <!-- or -->
  <link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/meanmenu.css">

<link rel="stylesheet" href="assets/css/boxicons.min.css">

<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

<link rel="stylesheet" href="assets/css/animate.min.css">

<link rel="stylesheet" href="assets/fonts/flaticon.css">

<link rel="stylesheet" href="assets/css/odometer.min.css">

<link rel="stylesheet" href="assets/css/nice-select.min.css">

<link rel="stylesheet" href="assets/css/magnific-popup.min.css">

<link rel="stylesheet" href="assets/css/style.css">

<link rel="stylesheet" href="assets/css/responsive.css">
 <link rel="stylesheet" href="assets/css/leads_boxes.css">
<title>MarketLeads</title>
<link rel="icon" type="image/png" href="assets/img/favicon.png">
</head>
<body>
@include('user/header')
<div class="page-title-area">
<div class="d-table">
<div class="d-table-cell">
<div class="container">

</div>
</div>
</div>
</div>

<!--Leadsform-->
<section class="section" id="reservation"style="background-image: url(assets/img/leadsform.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="left-text-content">
                        <div class="section-heading">
                          <h1 class="margin-b-0 home-h1" style="color: #bd5434">Emerging Market Leaders</h1>
            </div>
            <p class="home-pera"> The Success of your Portfolio can often come down to a few emerging market leaders. Seeking to build wealth by investing in equity markets? We tell you exactly what to buy &amp; why! </p>
                        <div class="row">
      
                <a href="portfoliopayment"><button class="btn common-btn disabled" style="pointer-events: all; cursor: pointer;">Subscribe</button></a>
            
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                      
                              <form  id="contact" action="" method="post" >
                    @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                    @csrf
                          <div class="row">
                            <div class="col-lg-12">
                                <h4>GET IN TOUCH</h4>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                                 <span style="color:red">@error('name'){{ $message }} @enderror</span>
                              </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                              <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="example123@gmail.com" required="">
                               <span style="color:red">@error('email'){{ $message }} @enderror</span>
                            </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="mobile" type="text" id="phone" placeholder="Enter Phone Number*" required="">
                                 <span style="color:red">@error('mobile'){{ $message }} @enderror</span>
                              </fieldset>
                            </div>
                             <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="city" type="text" id="city" placeholder="Enter City*" required="">
                                 <span style="color:red">@error('city'){{ $message }} @enderror</span>
                              </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                  <fieldset>
                    <input name="category" type="text" value="MarketLead" id="category" placeholder="MarketLead" readonly>
                    <span style="color:red">@error('category'){{ $message }} @enderror</span>
                  </fieldset>
                </div>
                                 <span style="color:red">@error('product'){{ $message }} @enderror</span>
                              </fieldset>
                            </div>
                           
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button-icon">Submit</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br><br><br>
   <!-- <section class="pad-t-100 pad-b-100 pad-m-t-50  pad-m-b-50" style="background-color:whitesmoke; padding:7%">
            <div class="container">
              <div class="col-md-12 float-none no-pad">
                <div class="row">
                  <div class="col-md-4">
                    <div class="services-bulet wow fadeIn" data-wow-delay="0.2s">
                      <div class="services-i"><i class="fa fa-thumbs-up" aria-hidden="true" style="font-size:30px"></i></div>
                      <h2>Characteristics</h2>
                      <ul>
                        <li>Premium Quality Stocks.</li>
                        <li>Potential for substantial price movement in the near future.</li>
                        <li>Strong technical buy points.</li>
                        <li>Strict Stop loss adherence.</li>
                        <li>Short term profit booking.</li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="services-bulet wow fadeIn" data-wow-delay="0.2s">
                      <div class="services-i"><i class="fa fa-arrow-circle-right"style="font-size:30px"></i></div>
                      <h2>Right for you if</h2>
                      <ul>
                        <li>Can invest for a limited time frame.</li>
                        <li>Seeking profits over the next 3-6 months.</li>
                        <li>Want to benefit from hot &amp; moving stocks.</li>
                        <li>Looking for stocks trading at ideal entry levels.</li>
                        <li>Own an active portfolio.</li>
                        <li>Adhere to Stop loss.</li>
                
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="services-bulet wow fadeIn" data-wow-delay="0.2s">
                      <div class="services-i"> <i class="fa fa-check-square"style="font-size:30px"></i></div>
                      <h2>You Get</h2>
                      <ul>
                        <li>15-20 recommendations per year.</li>
                        <li>In-depth Research Reports for your recommendations.</li>
                        <li>Real-time digital recommendations via SMS, email &amp; mobile app notifications.</li>
                        <li>Support from your allotted Relationship Manager.</li>
                       
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <br><br>-->
            <!--Boxes start-->
  <section class="pad-t-70 pad-b-50">
    <div class="container-fluid2">
      <div class="col-md-9 no-pad float-none margin-center">
        <div class="row">
          <div class="col-md-4 margin-tb-20">
            <div class="ser-card card4">
              <p class="cardser">Equity Research</p>
              <div class="col-md-12 float-none no-pad">
                <div class="col-9 no-pad">

                  <h2>Emerg Market Leads &nbsp<i class="fa fa-users" style="font-size:24px"></i></h2>

                  <p>The Success of your Lead Portfolio can often come down to a few emerging market leaders.

                    <span id="dots">...</span>
                    <span id="more">Portfolio Characteristics:<br>
                      <i class="fa fa-thumbs-up" aria-hidden="true"></i>:10-15 recommendations per year.<br>
                      <i class="fa fa-thumbs-up" aria-hidden="true"></i>:In-depth Research Reports for your recommendations.<br>
                      <i class="fa fa-thumbs-up" aria-hidden="true"></i>:Access to Research Analysts.<br><br>

                      <a href="portfoliopayment" class="btn btn-danger btn-serb" style="background-color: #f14f09;
                     border-color: #f55507;margin-left: 20%;">Subscribe Market Leaders</a>
                    </span>
                  </p>
                  <button href="#" onclick="myFunction()" id="myBtn" style="background-color: inherit;border: hidden;">
                    <i class="fa fa-angle-down" style="font-size:36px"></i></button>

                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 margin-tb-20">
            <div class="ser-card card5">
              <p class="cardser">Equity Research</p>
              <div class="col-md-12 float-none no-pad">
                <div class="col-9 no-pad">

                  <h2>Stock On The Move &nbsp<i class="fa fa-industry" style="font-size:24px"></i></h2>
                  <p>Consist profits over the shorter term can make a major difference over the long term.
                    <span id="dots2">...</span>
                    <span id="more2">Portfolio Characteristics:<br>
                      <i class="fa fa-thumbs-up" aria-hidden="true"></i>:15-20 recommendations per year. <br>
                      <i class="fa fa-thumbs-up" aria-hidden="true"></i>:In-depth Research Reports for your recommendations.<br>
                      <i class="fa fa-thumbs-up" aria-hidden="true"></i>:Access to Research Analysts.<br><br>
                       <a href="portfoliopayment" class="btn btn-danger btn-serb" style="background-color: #f14f09;
                      border-color: #f55507;margin-left: 20%;">Subscribe Stock Move</a>
                    </span>
                  </p>
                  <button href="" onclick="myFunction2()" id="myBtn2" style="background-color: inherit;border: hidden;">
                    <i class="fa fa-angle-down" style="font-size:36px"></i></button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 margin-tb-20">
            <div class="ser-card card6">
              <p class="cardser">Equity Research</p>
              <div class="col-md-12 float-none no-pad">
                <div class="col-9 no-pad">

                  <h2>Millars Portfolio &nbsp<i class="fa fa-sitemap" style="font-size:24px"></i></h2>
                  <p>An active portfolio of 15 – 20 quality companies which are qualify the six guiding principles
                    <span id="dots3">...</span>
                    <span id="more3">Portfolio Characteristics:<br>
                      <i class="fa fa-thumbs-up" aria-hidden="true"></i>:Focus on growth-oriented stocks qualifying MILARS guiding principles.<br>
                      <i class="fa fa-thumbs-up" aria-hidden="true"></i>:Support from your allotted Relationship Manager.<br>
                      <i class="fa fa-thumbs-up" aria-hidden="true"></i>:15 - 20 quality stocks.<br>
                        <a href="portfoliopayment"class="btn btn-danger btn-serb" style="background-color: #f14f09;
    border-color: #f55507;margin-left: 20%;"> Subscribe Millars Portfolio</a>
                    </span>
                  </p>
                  <button href="" onclick="myFunction3()" id="myBtn3"   style="background-color: inherit;border: hidden;">
                    <i class="fa fa-angle-down" style="font-size:36px"></i></button>
                </div>
              </div>
            </div>
          </div>




        </div>
      </div>
    </div>

  </section>
  <!--BoxesEnd-->


    
<section class="services-area-two ptb-100">
<div class="container">
<div class="row">

<section class="table">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title" style="text-align:center">Current Portfolio Information </h3>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  @csrf
                  <table class="table table-hover table-width-100">
                    <thead style="text-align:center">
                      <tr>
                        <th class="width-30 width-15 text-align-left">Id</th>
                        <th class="width-30 width-15 text-align-left">company</th>
                        <th class="width-30 width-15 text-align-left">Yesterday price</th>
                        <th class="width-30 width-15 text-align-left">Today Price</th>
                        <th class="width-30 width-15 text-align-left">Reco. Date</th>
                        <th class="width-30 width-15 text-align-left">Profit Booked</th>
                        <th class="width-30 width-15 text-align-left">Duration</th>
                      </tr>
                    </thead>
                    <tbody style="font-size:90%;text-align:center">
                      @foreach($list as $row)
                      <?php
            $a = (float)$row->y_price;
            $b = (float)$row->t_price;
            $profitbooked = ($b - $a ) / 100;
            ?>
                      <tr>
                        <td class="width-30 width-15 text-align-left">{{$row->id}}</td>
                        <td class="width-30 width-15 text-align-left"><img src="{{asset('uploads/images/'. $row->image)}}" width="100"></td>
                        <td class="width-30 width-15 text-align-left">{{$row->y_price}}</td>
                        <td class="width-30 width-15 text-align-left">{{$row->t_price}}</td>
                        <td class="width-30 width-15 text-align-left">{{$row->date}}</td>
                        <td class="width-30 width-15 text-align-left"><?php echo $profitbooked; ?> % </td>
                        <td class="width-30 width-15 text-align-left">{{$row->duration}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            </section>
</div>

</div>
</section>

</div>

</div>
</section>
@include('user/footer')

<!--box1-->
  <script>
    function myFunction() {
      var dots = document.getElementById("dots");
      var moreText = document.getElementById("more");
      var btnText = document.getElementById("myBtn");

      if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = '<i class="fa fa-angle-down" style="font-size:36px"></i>';
        moreText.style.display = "none";
      } else {
        dots.style.display = "none";
        btnText.innerHTML = '<i class="fa fa-angle-up" style="font-size:36px"></i>';
        moreText.style.display = "inline";
      }
    }
  </script>
  <!--end box1-->
  <!--box2-->
  <script>
    function myFunction2() {
      var dots = document.getElementById("dots2");
      var moreText = document.getElementById("more2");
      var btnText = document.getElementById("myBtn2");

      if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = '<i class="fa fa-angle-down" style="font-size:36px"></i>';
        moreText.style.display = "none";
      } else {
        dots.style.display = "none";
        btnText.innerHTML = '<i class="fa fa-angle-up" style="font-size:36px"></i>';
        moreText.style.display = "inline";
      }
    }
  </script>
  <!--end box2-->
  <!--box3-->
  <script>
    function myFunction3() {
      var dots = document.getElementById("dots3");
      var moreText = document.getElementById("more3");
      var btnText = document.getElementById("myBtn3");

      if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = '<i class="fa fa-angle-down" style="font-size:36px"></i>';
        moreText.style.display = "none";
      } else {
        dots.style.display = "none";
        btnText.innerHTML = '<i class="fa fa-angle-up" style="font-size:36px"></i>';
        moreText.style.display = "inline";
      }
    }
  </script>
  <!--end box3-->

    
</body>
</html>