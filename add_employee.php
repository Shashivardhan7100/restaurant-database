<?php
  include('mysqli_connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="cart.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shalimar&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
    $salary=$_POST['salary'];
     $query1="select count(email_id) as count from employee where email_id='$email'"; 
     $result=mysqli_query($dc,$query1);
     $row=mysqli_fetch_array($result);
    $query="insert into employee(name,ph_no,email_id,address,gender,birthdate,password,salary) values ('$name','$ph_no','$email','$address','$gender','$birthdate','$password',$salary)";
    if(($row['count']==0))
    {
    if(mysqli_query($dc,$query))
      {
        echo "<script>alert('Employee added successfully...')</script>";
          echo "<script>window.location='admin.html'</script>";
        /*include('admin.html');*/
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
          echo "<script>alert('Already Employee exists with this email_id...!')</script>";
          echo "<script>window.location='add_employee.html'</script>";
      /*print "<h4><p>Already registered with this email ID</p></h4>";
      print "<p>You can<a href=\"login.html\" > Login </a>here</p>";*/
    }
      //include('example.html');
    }
    else
    {
      echo "<script>alert('password didn't match with confirmed password..')</script>";
          echo "<script>window.location='add_employee.html'</script>";
      /*print "<h3><p >password didn't match with confirmed password</p></h3>";
      print "<p ><a href=\"register.html\">Register</a> here</p>";*/
    }
     ?>
</body>
</html>