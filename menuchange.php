<?php
    include('mysqli_connect.php');
?>

<?php
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        ini_set('display_errors', 1);
        error_reporting(E_ALL);
        $name=$_POST['name'];
        $query="select * from menu where item_name='$name'";
        $result=mysqli_query($dc,$query);
        $num=mysqli_num_rows($result);
        //$image=$_POST['image'];
        if($num==1)
        {
        
        if(!empty($_POST['price']))
        {
            $price=$_POST['price'];
            if(!empty($_POST['image']))
            {
                $image=$_POST['image'];
                $query1="update menu set cost='$price' and img='$image' where item_name='$name' ";
                if(mysqli_query($dc,$query1))
                {
                echo "<script>alert('Menu is updated...')</script>";
                echo  "<script>window.location='menuchange.html'</script>";
                }
            }
            else
            {
                $query2="update menu set cost='$price' where item_name='$name' ";
                if(mysqli_query($dc,$query2))
                {
                echo "<script>alert('Menu is updated...')</script>";
                echo  "<script>window.location='menuchange.html'</script>";
                }
            }
        }
        else if(!empty($_POST['image']))
        {
            $image1=$_POST['image'];
            $query3="update menu set img='$image1' where item_name='$name' ";
            if(mysqli_query($dc,$query3))
            {
            echo "<script>alert('Menu is updated...')</script>";
            echo  "<script>window.location='menuchange.html'</script>";
            }
        }
        else
        {
            /*print "<p>No change...</p>";
            print "<p><a href=\"menuchange.html\">click here</a> to change menu</p>";*/
            echo "<script>alert('No change in menu...')</script>";
            echo  "<script>window.location='menuchange.html'</script>";
        }
        }
        else
        {
            echo "<script>alert('Item not found in menu...')</script>";
            echo  "<script>window.location='menuchange.html'</script>";
        }
    }
    ?>

<!DOCTYPE html>
<html lang="en">
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
    
</body>
</html>