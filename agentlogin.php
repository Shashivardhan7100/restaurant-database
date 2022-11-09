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
                    echo  "<script>window.location='our_agent.html'</script>";
                }
                else
                {
                    echo "<script>alert('Wrong password try again...!')</script>";
                    echo  "<script>window.location='agentlogin.html'</script>";
                }
            }
            else
            {
                echo "<script>alert('Employee doesn't exists...!')</script>";
                echo  "<script>window.location='agentlogin.html'</script>";
            }
    }
?>