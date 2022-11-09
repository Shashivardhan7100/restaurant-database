<?php
    session_start();
    include('mysqli_connect.php');
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
            $email=$_POST['email'];
            $password=$_POST['password'];
            $_SESSION['details'][0]=array(
                'email' => $email,
                'password' => $password
            );
            $query="select * from employee where email_id='$email'";
            $result=mysqli_query($dc,$query);
            $num=mysqli_num_rows($result);
            if($num==1)
            {
                $row=mysqli_fetch_array($result);
                if($row['password']==$password)
                {
                    echo "<script>alert('logged in successfully...')</script>";
                    echo  "<script>window.location='our_agent.php'</script>";
                }
                else
                {
                    echo "<script>alert('Wrong password try again...!')</script>";
                    echo  "<script>window.location='agentlogin.html'</script>";
                }
            }
            else if($num==0)
            {
                print "<p>You don't belong to our company</p>";
            }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>Foodilite</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="favicon-32x32.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shalimar&display=swap" rel="stylesheet">
</head>
<body>
    
</body>
</html>