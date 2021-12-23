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

  a.btn.btn-info.add-new {
    margin-left: 78%;
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
            <h3>Stock</h3>
          </div>
          <div class="container">
            <br /><br />
            <form action="/tableedit" method="post">
              {{csrf_field()}}
              <input type="date" name="from" value="{{date('y-m-d')}}"> &nbsp;
              <input type="date" name="to" value="{{date('y-m-d')}}"> &nbsp;
              <input type="submit" class="view" value="search">
            </form><br><br>

            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Stock Data</h3>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  @csrf
                  <table id="editable" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>company</th>
                        <th>Yesterday price</th>
                        <th>Today Price</th>
                        <th>Reco. Date</th>
                        <th>Profit Booked</th>
                        <th>Duration</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($list as $row)
                      <?php
                      $a = (float)$row->y_price;
                      $b = (float)$row->t_price;
                      $profitbooked = ($b - $a) / 100;
                      ?>
                      <tr>
                        <td>{{$row->id}}</td>
                        <td><img src="{{asset('uploads/images/'. $row->image)}}"></td>
                        <td>{{$row->y_price}}</td>
                        <td>{{$row->t_price}}</td>
                        <td>{{$row->date}}</td>
                        <td><?php echo $profitbooked; ?> % </td>
                        <td>{{$row->duration}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </section>


  <script type="text/javascript">
    $(document).ready(function() {
      $.ajaxSetup({
        headers: {
          'X-CSRF-Token': $("input[name=_token]").val()
        }
      });
      $('#editable').Tabledit({
        url: '{{route("tabledit.action")}}',
        dataType: "json",
        columns: {
          identifier: [0, 'id'],
          editable: [

            [2, 'y_price'],
            [3, 't_price'],
            [4, 'date'],
            [6, 'duration']
          ]
        },
        restoreButton: false,
        onSuccess: function(data, textStatus, jqXHR) {
          if (data.action == 'delete') {
            $('#' + data.id).remove();

          }
        }
      });

    });
  </script>
</body>

</html>