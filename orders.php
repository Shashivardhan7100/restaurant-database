<?php
    session_start();
    include('functions.php');
    include('mysqli_connect.php');
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
    $v1=$_SESSION['total'][0]['totalamount'];
    if($v1!=0)
    {
    $v2=date('d/m/y H:i:s');
    $v3=$_SESSION['details'][0]['customer_id'];
    $query="insert into orders(order_bill,ordered_date,customer_id) value ('$v1','$v2','$v3')";
    if(mysqli_query($dc,$query))
    {
        echo "<script>alert('ordered successfully...')</script>";
        echo "<script>window.location='orders.php'</script>";
    }
    else
    {
        print mysqli_error($dc);
    }
    }
    else
    {
        echo "<script>alert('product is not added to the cart...')</script>";
        echo "<script>window.location='mainbody.php'</script>";
    }
  }
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
  </head>
  <body style="background-image:url('https://images.pexels.com/photos/6985260/pexels-photo-6985260.jpeg?auto=compress&cs=tinysrgb&w=400');background-size:cover;background-repeat:no-repeat">
    <?php
      include('navbar.php');
    ?>
    <!--<nav class="navbar navbar-expand-lg navbar-dark bg-dark position-sticky-top fixed-top">
        <a class="navbar-brand" href="#"><img class="title-logo"src="img/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
              <a class="our-logo nav-link" href="main.html">Menu</a>
            </li>
            <li class="nav-item ">
              <a class="our-logo nav-link" href="cart.html">Cart(0)</a>
            </li>
            <li class="nav-item">
              <a class="our-logo nav-link" href="#">Orders</a>
            </li>
            <li class="nav-item">
              <a class="our-logo nav-link" href="#">LogOut</a>
            </li>
          </ul>
        </div>
      </nav>-->
      <div class="container"style=" margin-top : 100px;">
        <h1 class="text-center"style="font-family: 'Shalimar', cursive; font-weight:900;color:white">ORDERS</h1>
        <div class="mx-auto">
        <table class="table dhee"style=" margin-top : 50px; background-color:grey;font-weight:500">
  <thead class="thead-dark" >
    <tr>
      <th scope="col">DATE</th>
      <th scope="col">ORDER_ID</th>
      <th scope="col">STATUS</th>
      <th scope="col">COST</th>
      <th scope="col">AGENT NAME</th>
      <th scope="col">PHONE NUMBER</th>
    </tr>
  </thead>
  <tbody >
    <?php
        $v=$_SESSION['details'][0]['customer_id'];
        $query="select * from orders where customer_id='$v'";
        $result=mysqli_query($dc,$query);
        $number=mysqli_num_rows($result);
        if($number!=0)
        {
         
        while($row=mysqli_fetch_array($result))
        {
            
            $i=date("Y/m/d");
            orders($i,$row['order_id'],$row['ocurrent_status'],$row['order_bill'],$row['agentname'],$row['phonenumber']);
            
        }
        }
        else
        {
          //orders section is empty
        }
    ?>
  </tbody>
</table>
</div>
        </div>
  </body>
</html>
