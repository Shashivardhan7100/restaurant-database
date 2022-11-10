<?php
  session_start();
  include('mysqli_connect.php');
  include('functions.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ORDERS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="cart.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shalimar&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  <body style="background-image:url('https://images.pexels.com/photos/6985260/pexels-photo-6985260.jpeg?auto=compress&cs=tinysrgb&w=400');background-size:cover;background-repeat:no-repeat">
  <nav class="navbar navbar-expand-lg navbar-dark position-sticky-top fixed-top" style="background-color:#050A30;">
      <a class="navbar-brand" href="admin.html"><img style="width: 250px;"src="img/logo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
            <a class="our-logo nav-link" href="admin.html">Menu_Status</a>
          </li>
          <li class="nav-item ">
            <a class="our-logo nav-link" href="menuchange.html">Menu_Change</a>
          </li>
          <li class="nav-item">
            <a class="our-logo nav-link" href="totalorders.php">Orders</a>
          </li>
          <li class="nav-item ">
            <a class="our-logo nav-link" href="assignorder.html">Assign_Order</a>
          </li>
          <li class="nav-item ">
            <a class="our-logo nav-link" href="allreservations.php">Resevations</a>
          </li>
          <li class="nav-item ">
            <a class="our-logo nav-link" href="add_employee.html">Add_Employee</a>
          </li>
        </ul>
      </div>
    </nav>
      <div class="container"style=" margin-top : 100px;">
        <h1 class="text-center"style="font-family: 'Shalimar', cursive; font-weight:900;color:white">Your Reservations</h1>
        <div class="mx-auto">
        <table class="table dhee"style=" margin-top : 50px; background-color:grey;font-weight:500">
  <thead class="thead-dark" >
    <tr>
    <th scope="col">Reservation-ID</th>
      <th scope="col">DATE</th>
      <th scope="col">CUSTOMER NAME</th>
      <th scope="col">SLOT</th>
      <th scope="col">STATUS</th>
    </tr>
  </thead>
  <tbody >
    <?php
        $query="select * from table_reg";
        $result=mysqli_query($dc,$query);
        $i=date("Y/m/d");
        while($row=mysqli_fetch_array($result))
        {
            slots2($row['reg_id'],$i,$row['customer_name'],$row['slot'],$row['tcurrent_status']);
        }
    ?>
  </tbody>
</table>
</div>
        </div>
  </body>
</html>
