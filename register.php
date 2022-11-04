<?php
  require('mysqli_connect.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="favicon-32x32.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shalimar&display=swap" rel="stylesheet">
  </head>
  <body>
    <?php
    ini_set('display_errors',1);
    error_reporting(E_ALL);
    if(($_SERVER['REQUEST_METHOD']=='POST')&&($_POST['password']==$_POST['confirm_password']))
    {
    $name=$_POST['name'];
    $birthdate=$_POST['birthdate'];
    $gender=$_POST['gender'];
    $ph_no=$_POST['ph_no'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirm_password=$_POST['confirm_password'];
     $query1="select count(email_id) as count from customer where email_id='$email'"; 
     $result=mysqli_query($dc,$query1);
     $row=mysqli_fetch_array($result);
    $query="insert into customer(first_name,ph_no,email_id,address,gender,b_date,password) values ('$name','$ph_no','$email','$address','$gender','$birthdate','$password')";
    if(($row['count']==0))
    {
    if(mysqli_query($dc,$query))
      {
        include('login.html');
      }
      else
      {
      //print "<p>NOPe</p>";
      print mysqli_error($dc);
      print mysqli_connect_error();
      }
    }
    else
    {
      print "<h4><p>Already registered with this email ID</p></h4>";
      print "<p>You can<a href=\"login.html\" > Login </a>here</p>";
    }
      //include('example.html');
    }
    else
    {
      print "<h3><p >password didn't match with confirmed password</p></h3>";
      print "<p ><a href=\"register.html\">Register</a> here</p>";
    }
     ?>
  </body>
</html>
