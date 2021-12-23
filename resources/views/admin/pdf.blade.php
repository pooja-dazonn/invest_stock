<!DOCTYPE html>
<html lang="en">

<html>

<title>Download pdf</title>

<body>
  <div class="panel-heading">
    <h3 class="panel-title" style="text-align: center">Stock Data</h3>
  </div>
  <table width="100%" style="border:1">
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
      @foreach($customer_data as $customer)
      <?php
      $a = (float)$customer->y_price;
      $b = (float)$customer->t_price;

      $profitbooked = ($b - $a) / 100;

      ?>

      <tr>
        <td>{{$customer->id}}</td>
        <td>{{$customer->image}}</td>
        <td>{{$customer->y_price}}</td>
        <td>{{$customer->t_price}}</td>
        <td>{{$customer->date}}</td>
        <td><?php echo $profitbooked; ?> % </td>
        <td>{{$customer->duration}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>

</html>