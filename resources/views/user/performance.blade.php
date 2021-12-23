<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <!-- or -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
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
  <title>Performance Report</title>
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
</head>
<style>
  /**performancepage*/
  ul#pills-tab {
    width: 1900px;
  }

  .provide-area .nav li {
    padding-bottom: 30px;
  }

  /*performance page end**/
</style>

<body style="overflow-x: hidden">
  @include('user/header')

  <section class="provide-area pt-100 pb-70">
    <div class="container">
      <div class="section-title three">
        <span class="sub-title">Services</span>
        <h2>Our Advisory Services</h2>
        <p> We assist our clients in choosing the right investments which are well positioned to deliver the required returns.</p>
      </div>
      <ul class="nav nav-pills" id="pills-tab" role="tablist">

        <li class="nav-item" role="presentation">
          <a class="nav-link" href="marketlead">
            <div class="provide-nav">
              <i class="fa fa-money"></i>
              <h3>MARKET LEADERS</h3>
              <p class="serfirstp">The Success of your Portfolio can often come down to a few market leaders. Seeking to build </p>
              <a href="marketlead" class="btn common-btn" style="padding:8px">Subscribe Now</a>
            </div>
          </a>
        </li>

        <li class="nav-item" role="presentation">
          <a class="nav-link" href="stockmove">
            <div class="provide-nav">
              <i class="fa fa-line-chart"></i>
              <h3> Stocks on The Move</h3>
              <p class="serfirstp">Consist profits over the shorter term can make a major difference over the long term.</p>
              <a href="stockmove" class="btn common-btn" style="padding:8px">Subscribe Now</a>
            </div>
          </a>
        </li>

        <li class="nav-item" role="presentation">
          <a class="nav-link" href="portfolio">
            <div class="provide-nav">
              <i class="fa fa-user"></i>
              <h3>MILARS Portfolio</h3>
              <p class="serfirstp">Consist profits over the shorter term can make a major difference over the long term.</p>
              <a href="portfolio" class="btn common-btn" style="padding:8px">Subscribe Now</a>
            </div>
          </a>
        </li>
      </ul>

    </div>
  </section>
  <br>
  <section class="table">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title" style="text-align:center">Performance Report</h3>
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
              $profitbooked = ($b - $a) / 100;
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
  @include('user/footer')
</body>

</html>