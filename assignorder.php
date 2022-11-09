<?php
    include('mysqli_connect.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Foodilite</title>
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
        ini_set('display_errors', 1);
        error_reporting(E_ALL);
        if($_SERVER['REQUEST_METHOD']=="POST");
        {
            $id=$_POST['id'];
            $query3="select * from orders where order_id='$id'";
            $result1=mysqli_query($dc,$query3);
            $v1=mysqli_num_rows($result1);
            if($v1==1)
            {
            $email=$_POST['email'];
            $query="select * from employee where email_id='$email'";
            $result=mysqli_query($dc,$query);
            $v=mysqli_num_rows($result);
            if($v==1)
            {
            while($row=mysqli_fetch_array($result))
            {
            $c1=$row['name'];
            $c2=$row['ph_no'];
            $query2="update orders set agentname='$c1' , phonenumber='$c2' where order_id='$id'";
                mysqli_query($dc,$query2);
                
                    echo "<script>alert('Assigned successfully..')</script>";
                    echo  "<script>window.location='assignorder.html'</script>";
            }
            }
            else
            {
                if($v==0)
                {
                echo "<script>alert('No employee with given email id...')</script>";
                echo  "<script>window.location='assignorder.html'</script>";
                }
            }
            }
            else
            {
                if($v1==0)
                {
                    print "<p>Order id doesn't exists...</p>";
                    print "<p><a href=\"totalorders.php\">click here</a> to check orders";
                    /*echo "<script>alert('order id doesn't exists...')</script>";
                    echo  "<script>window.location='lo.html'</script>";*/
                }
            }
        }
    ?>
</body>
</html>