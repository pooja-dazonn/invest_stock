<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
  <title>Header</title>
</head>

<body>
  <div class="header-area three">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="left">
            <ul>
              <li>
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <a href="#">
                  504 White St.Dawsonville, New York
                </a>
              </li>
              <li>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <a href="#">
                  <span class="__cf_email__" data-cfemail="e48c8188888ba4828d8a8b8aca878b89">email@gmail.com</span></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right">
            <ul>
              <li>
                <a href="#" target="_blank">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li>
                <a href="#" target="_blank">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li>
                <a href="#" target="_blank">
                  <i class='bx bxl-pinterest-alt'></i>
                </a>
              </li>
              <li>
                <a href="#" target="_blank">
                  <i class='bx bxl-linkedin'></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="navbar-area sticky-top">

    <div class="mobile-nav">
      <a href="home" class="logo">
        <img src="assets/img/logo-six.png" alt="Logo">
      </a>
    </div>

    <div class="main-nav three">
      <div class="container">
        <nav class="navbar navbar-expand-md navbar-light">
          <a class="navbar-brand" href="home">
            <img src="assets/img/logo-five.png" alt="Logo">
          </a>
          <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="#" class="nav-link dropdown-toggle">Services <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                <ul class="dropdown-menu">
                  <li class="nav-item">
                    <h5>Equity Research</h5>

                  </li>
                  <li class="nav-item">
                    <a href="marketlead" class="nav-link ">
                      <h7>Emerging Market Leaders</h7>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="stockmove" class="nav-link">
                      <h7>Stocks on The Move</h7>
                    </a>
                  </li>
                  <li class="nav-item">
                    <h5>Portfolio Advisory</h5>

                  </li>
                  <li class="nav-item">
                    <a href="portfolio" class="nav-link">
                      <h7> MILARS Portfolio</h7>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item">
                <a href="performance" class="nav-link">Performance report</a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link dropdown-toggle">Plans & Pricing
                  <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                <ul class="dropdown-menu">
                  <li class="nav-item">
                    <a href="equity" class="nav-link">Equity Research</a>
                  </li>
                  <li class="nav-item">
                    <a href="portfoliopayment" class="nav-link">Portfolio Advisory</a>
                  </li>
                </ul>
              </li>


              <!--userprofile-->
              <!-- Authentication Links -->
              @guest
              @if (Route::has('login'))
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              @endif

              @if (Route::has('register'))
              <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
              @endif
              @else
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="home" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  <i class="fa fa-user-circle"></i> {{ Auth::user()->name }}</a>
                <ul class="dropdown-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('userleads')}}">Your Leads</a>
                    <a class="nav-link" href="{{url('logout')}}">Logout</a>
                  </li>
                  <ul>
              </li>
          </div>
          @endguest
          <!--userprofileend-->
          <div class="side-nav">
            <div class="navbar-form">
              <form>
                <input type="text" class="form-control" placeholder="Search">
                <button type="submit" class="btn">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
            </div>

          </div>
      </div>
      </nav>
    </div>
  </div>
  </div>
</body>

</html>