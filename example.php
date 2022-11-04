<?php
    session_start();
  include('functions.php');
  include('mysqli_connect.php');
  $v=$_POST['email'];
  $query="select * from customer where email_id='$v'";
  $result=mysqli_query($dc,$query);
  $row=mysqli_fetch_array($result);
  if(isset($row['customer_id']))
  {
  $_SESSION['details'][0]=array(
    'email'=>$_POST['email'],
    'customer_id'=>$row['customer_id']
  );
  }
  include('mysqli_connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Main Page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css">
  <link rel="icon" href="favicon-32x32.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="cart.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Shalimar&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>
  <?php
    ini_set('display_errors',1);
    error_reporting(E_ALL);
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
    $v1=$_POST['email'];
    $v2=$_POST['password'];
    $query2="select count(email_id) as count from customer where email_id='$v1'";
    $v3=mysqli_query($dc,$query2);
    $row2=mysqli_fetch_array($v3);
    $query= "select password from customer where email_id='$v1'";
    $result=mysqli_query($dc,$query);
    $row = mysqli_fetch_array($result);
    //print "$v3";
    if($row2['count']==0)
    {
      include('body3.html');
    }
    else if($row['password']==$v2)
    {
        include('body5.php');
    }
    else
    {
      include('body4.html');
    }
    print mysqli_error($dc);
      print mysqli_connect_error();
    }
  ?>
</body>
</html>