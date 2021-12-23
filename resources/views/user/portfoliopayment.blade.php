<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- or -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
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
    <title>PaymentPortfolio</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
</head>
<style></style>

<body>

    @include('user/header')

    <br><br><br><br><br><br>
    <form method="post" action="">
        <div class="container-payment d-lg-flex">
            <div class="box-1 bg-light user">

                <div class="box-inner-1 pb-3 mb-3 ">
                    <div class="d-flex justify-content-between mb-3 userdetails">
                        <p class="fw-bold">Millars Payment</p>
                        <p class="fw-lighter"><span class="fas fa-dollar"></span></p>
                    </div>
                    <div id="my" class="carousel slide carousel-fade img-details" data-bs-ride="carousel" data-bs-interval="2000">
                        <div class="carousel-indicators"> <button type="button" data-bs-target="#my" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button> <button type="button" data-bs-target="#my" data-bs-slide-to="1" aria-label="Slide 2"></button> <button type="button" data-bs-target="#my" data-bs-slide-to="2" aria-label="Slide 3"></button> </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active"> <img src="https://images.pexels.com/photos/356056/pexels-photo-356056.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" class="d-block w-100"> </div>
                            <div class="carousel-item"> <img src="https://images.pexels.com/photos/270694/pexels-photo-270694.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100"> </div>
                            <div class="carousel-item"> <img src="https://images.pexels.com/photos/7974/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&w=500" class="d-block w-100"> </div>
                        </div> <button class="carousel-control-prev" type="button" data-bs-target="#my" data-bs-slide="prev">
                            <div class="icon"> <span class="fas fa-arrow-left"></span> </div> <span class="visually-hidden">Previous</span>
                        </button> <button class="carousel-control-next" type="button" data-bs-target="#my" data-bs-slide="next">
                            <div class="icon"> <span class="fas fa-arrow-right"></span> </div> <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <p class="dis my-3 info">Subscribe your MILLARS Investments.Set live price alerts, get research alerts and more. Get access now... </p>
                    <p class="fw-bold">Synopsis </p>
                    <p class="dis mb-3 different"> Synopsis

                        This strategy is designed for those investors who would like to take advantage of the opportunities available in the market to make quick gains while keeping a strict stop loss.To Recommend young companies which carry potential to grow exponentially and can create wealth in the medium to long term. The essence is to spot young companies and watch them grow.</p>

                </div>
            </div>


            <div class="box-2">
                <div class="box-inner-2">
                    <div>

                        <p class="fw-bold">Millars Payment Details</p>
                        <p class="dis mb-3">Complete your purchase by providing your payment details</p>
                    </div>


                    <div class="selected-strategy">
                        <!--MILARS Seleced-->
                        <div id="divMLSelected" class="selected-box bg-blue-light margin-b-15">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6"> <b class="fw-600 font-size-14 display-inline">Advisory Fees</b>
                                    <i class="fa fa-info-circle"></i>

                                    <br><b class="fw-600 font-size-14 display-inline">Inclusive of GST%</b>
                                </div>

                                @foreach($list as $item)
                                <div class="col-xs-6 col-sm-6 text-right">
                                    <b class="fw-400 font-size-14">
                                        Rs. <span id="lblAdvisoryFeeAnnual">{{$item->totalamount}}</span><br>
                                        <span class="font-size-13">6 Month</span></b>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="col-md-12 float-none no-pad margin-t-20  margin-b-20">
                        <b>The amount of Rs. <span id="lblPayableAmt6Months">{{$item->totalamount}}</span>
                            is payable in every 6 months.</b>
                    </div>
                    <br>

                    <div class="d-flex flex-column dis">

                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <div class="d-flex align-items-center">
                                <p class="pe-2">Advisory Fees <span class="d-inline-flex align-items-center justify-content-between bg-light px-2 couponCode">
                                        <span id="code" class="pe-2"></span></span> </p>
                            </div>
                            <p><span class="lblPayableAmt6Months">Rs.</span>{{$item->advisoryfees}}</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <p>GST%<span>(18%)</span></p>
                            <p><span class="lblPayableAmt6Months">Rs.</span>{{$item->gst}}</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <p class="fw-bold">Total Pay</p>
                            <p class="fw-bold"><span class="lblPayableAmt6Months">Rs.</span>{{$item->totalamount}}</p>
                        </div>
                        @endforeach

                        <!--<button type="submit" class="btn btn-primary mt-2">Subscribe</button>-->
                        <br><br> <button id="rzp-button1" class="btn btn-primary mt-2">Pay</button>
                    </div>
                </div>
            </div>

    </form>
    </div>
    </div>
    </div>
    <br><br><br>



    @include('user/footer')
    <!--razerpay-->
    <!--<div id="app">
        <main class="py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-3 col-md-offset-6">
                        @if($message = Session::get('error'))
                            <div class="alert alert-danger alert-dismissible fade in" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <strong>Error!</strong> {{ $message }}
                            </div>
                        @endif
                            <div class="alert alert-success success-alert alert-dismissible fade show" role="alert" style="display: none;">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <strong>Success!</strong> <span class="success-message"></span>
                            </div>
                        {{ Session::forget('success') }}
                        <div class="card card-default">
                            <div class="card-header">
                               
                            </div>

                            <div class="card-body text-center">
                                <div class="form-group mt-1 mb-1">
                                <label for="amount">Amount</label><br><br>
                              
                                <button id="rzp-button1" class="btn btn-success btn-lg">Pay</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
    var options = {
    "key": "rzp_test_rNnbkxK7Il7CVn", // Enter the Key ID generated from the Dashboard
    "amount": "2500000", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "",
    "description": "Test Transaction",
    "image": "https://example.com/your_logo",
    "order_id": "", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "handler": function (response){
        alert(response.razorpay_payment_id);
        alert(response.razorpay_order_id);
        alert(response.razorpay_signature)
    },
    "prefill": {
        "name": "",
        "email": "",
        "contact": ""
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
rzp1.on('payment.failed', function (response){
        alert(response.error.code);
        alert(response.error.description);
        alert(response.error.source);
        alert(response.error.step);
        alert(response.error.reason);
        alert(response.error.metadata.order_id);
        alert(response.error.metadata.payment_id);
});
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script>
    <script src="../js/checkout.js"></script>
  -->
    <!--razerpayend-->
</body>

</html>