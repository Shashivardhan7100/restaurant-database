<?php
  if(!session_start())
  {
    session_start();
  }
?>
<?php
    include('mysqli_connect.php');
    require_once('functions.php');

    if(isset($_POST['add']))
    {
      if(isset($_SESSION['cart']))
      {
        //setcookie($_POST['product_id'],$_POST['quantity']);
        //setcookie(100*$_POST['product_id'],$_POST['cost']);

        $v1 =($_POST['cost'])*($_POST['quantity']);
        $v2 =($_POST['quantity']);
        $item_array_id=array_column($_SESSION['cart'],"product_id");
        if(in_array($_POST['product_id'],$item_array_id))
        {
          foreach($item_array_id as $key=>$value)
          {
              if($value==$_POST['product_id'])
              {
                $_SESSION['req1'][$_POST['product_id']]['product_id']+=$_POST['quantity'];
                $_SESSION['qtotal'][0]['totalquantity']+=$v2;
                $_SESSION['total'][0]['totalamount']+=$v1;
              }
          }
          /*echo "<script>alert('Product is already added to the cart')</script>";
          echo "<script>window.location='mainbody.php'</script>";*/
        }
        else
        {
          $count=count($_SESSION['cart']);
          $item_array=array(
            'product_id'=>$_POST['product_id'],
          );
          $_SESSION['req1'][$_POST['product_id']]=array(
            'product_id'=>$_POST['quantity'],
          );
          $_SESSION['req2'][$_POST['product_id']]=array(
            'product_id'=>$_POST['cost']
          );
          $_SESSION['cart'][$count]=$item_array;
          //$_SESSION['quantity'][$_POST['product_id']]=$item_array2;
          $_SESSION['qtotal'][0]['totalquantity']+=$v2;
          $_SESSION['total'][0]['totalamount']+=$v1;
        }

      }
      else
      {
        $item_array=array(
          'product_id'=>$_POST['product_id'],
        );
        $_SESSION['req1'][$_POST['product_id']]=array(
          'product_id'=>$_POST['quantity'],
        );
        $_SESSION['req2'][$_POST['product_id']]=array(
          'product_id'=>$_POST['cost']
        );

        $_SESSION['cart'][0]=$item_array;
        $v1 =($_POST['cost'])*($_POST['quantity']);
        $v2 =($_POST['quantity']);
        //$_SESSION['quantity'][$_POST['product_id']]=$item_array2;
        $_SESSION['qtotal'][0]=array(
          'totalquantity'=>$v2
        );
        $_SESSION['total'][0]=array(
          'totalamount'=>$v1
        );
      }
    }
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
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  </head>
  <body style="background-image:url('https://images.pexels.com/photos/6985260/pexels-photo-6985260.jpeg?auto=compress&cs=tinysrgb&w=400');background-size:cover;background-repeat:no-repeat">
    <?php
      require('navbar.php');
    ?>
<?php
    ini_set('display_errors',1);
    error_reporting(E_ALL);
    $query="select * from menu";
    $result=mysqli_query($dc,$query);
    $num=mysqli_num_rows($result);
    $v=1; ?>

    <?php
    while(($row=mysqli_fetch_array($result))&&($v<=$num))
    {

?>

    <?php if($v==1){ ?>
        <div class="our-row row">
        <div class="shashi">
  <h1 style="color:white">DISHES</h1>
    </div>
   <?php }?>
   <?php if($v==9){ ?>
        <div class="our-row row">
        <div class="shashi">
  <h1 style="color:white">DESSERTS</h1>
    </div>
   <?php }?>
   <?php if($v==17){ ?>
        <div class="our-row row">
        <div class="shashi">
  <h1 style="color:white">DRINKS</h1>
    </div>
   <?php }?>
   <?php if($v==25){ ?>
        <div class="our-row row">
        <div class="shashi">
  <h1 style="color:white">STATERS</h1>
    </div>
   <?php }?>
   <?php if($v==33){ ?>
        <div class="our-row row">
        <div class="shashi">
  <h1>STATERS</h1>
    </div>
   <?php }?>
        <?php oncard ($row['img'],$row['item_name'],$row['cost'],$row['item_id']) ?>

  <?php
  if($v==8||$v==16||$v==24||$v==32)
  {
  print "</div>";
  }
   $v++; }

?>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
