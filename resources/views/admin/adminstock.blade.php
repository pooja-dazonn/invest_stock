<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://markcell.github.io/jquery-tabledit/assets/js/tabledit.min.js"></script>

</head>
<style>
  .panel.panel-default {
    width: 93%;
  }

  button.btn.btn-success {
    width: 80%;
    margin-left: 18%;
  }
</style>

<body>
  @include('admin/sidebar')
  <!--main content start-->
  <section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12 main-chart">
          <div class="border-head">
            <h3>Stocks</h3>
          </div>
          <div class="container">
            <br />
            <br />
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Add Stocks</h3>
              </div><br>
              <form action="" method="POST" enctype="multipart/form-data">

                @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
                @csrf

                <div class="form-group row">
                  <label for="inputimages" class="col-sm-2 col-form-label">Company</label>
                  <div class="col-sm-10">
                    <input type="file" name="image" class="form-control" id="image">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputprice" class="col-sm-2 col-form-label">Yesterday Price</label>
                  <div class="col-sm-10">
                    <input type="text" name="y_price" class="form-control" id="inputprice">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputprice" class="col-sm-2 col-form-label">Today Price</label>
                  <div class="col-sm-10">
                    <input type="text" name="t_price" class="form-control" id="inputprice">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputdate" class="col-sm-2 col-form-label">Reco. Date</label>
                  <div class="col-sm-10">
                    <input type="date" name="date" class="form-control" id="inputdate">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputduration" class="col-sm-2 col-form-label">Duration</label>
                  <div class="col-sm-10">
                    <input type="text" name="duration" class="form-control" id="inputduration">
                  </div>
                </div>

                <button type="submit" class="btn btn-success">Submit</button><br><br>
              </form>
            </div>
            <!-- /.col-lg-8 -->
          </div>
          <!-- .animated -->
        </div>
      </div>
      </div>
    </section>
  </section>

</body>

</html>