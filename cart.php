<?php
session_start();
include('mysqli_connect.php');
include('functions.php');

    if(isset($_POST['remove']))
    {
        if($_GET['action']=='remove')
        {
          foreach($_SESSION['cart'] as $key=>$value)
          {
            if($value["product_id"]==$_GET['id'])
            {
              unset($_SESSION['cart'][$key]);
              foreach($_SESSION['req1'][$_GET['id']] as $key=>$value)
              {
                $v1=$value;
              }
              foreach($_SESSION['req2'][$_GET['id']] as $key=>$value)
              {
                $v2=$value;
              }
              $_SESSION['qtotal'][0]['totalquantity']-=$v1;
              $_SESSION['total'][0]['totalamount']-=($v2)*($v1);
              unset($_SESSION['req1'][$_GET['id']]);
              unset($_SESSION['req2'][$_GET['id']]);
              echo "<script>alert('product has been removed from cart')</script>";
              echo  "<script>window.location='cart.php'</script>";
            }
          }
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
  </head>
  <body>
      <?php
      require('navbar.php');
      ?>
      <section class="h-100 gradient-custom">
  <div class="container py-5">
    <div class="bucket row d-flex justify-content-center my-4">
      <div class="col-md-8">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">

            <?php
            if(isset($_SESSION['cart']))
            {
                $count=count($_SESSION['cart']);
                print "cart - $count";
            }
            else
            {
                $count=0;
                print "cart - $count";
            }
            ?>

               items</h5>
          </div>
          <div class="card-body">
            <?php
                if(isset($_SESSION['cart']))
                {
                $product_id=array_column($_SESSION['cart'],'product_id');
                $query="select * from menu";
                $result=mysqli_query($dc,$query);
                while($row=mysqli_fetch_assoc($result))
                {
                  foreach($product_id as $id)
                  {
                    if($row['item_id']==$id)
                    {
                        if(isset($_SESSION['req1'][$id]))
                        {
                        foreach($_SESSION['req1'][$id] as $key=>$value)
                        {
                          $v=$value;
                        }
                        createcart($row['img'],$row['item_name'],$row['cost'],$row['item_id'],$v);
                        }
                    }
                  }
                }
                if(count($_SESSION['cart'])==0)
                {
                print "<br>";
                print "<p><h5>Cart is Empty</h5></p>";
                }
              }
              else
              {
                print "<br>";
                print "<p><h5>Cart is Empty</h5></p>";
              }
            ?>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">Summary</h5>
          </div>
          <div class="card-body">
            <ul class="list-group list-group-flush">
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                Products
                <span ><p id="qtotal"><?php
                $v=0;
                if(isset($_SESSION['qtotal']))
                {

                  foreach($_SESSION['qtotal'][0] as $key=>$value)
                  { $v= $value;
                  }
                  print "$v";
                }
                else
                {
                  print "$v";
                }
                ?></p></span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                Cash On Delivery
                <span class='material-icons'>done</span>
              </li>
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                <div>
                  <strong>Total amount</strong>
                </div>
                <span><strong id="gtotal"><?php
                $v=0;
                if(isset($_SESSION['total']))
                {
                  $v=$_SESSION['total'][0]['totalamount'];
                  print "$v RS";
                }
                else
                {
                  print "$v RS";
                }
                ?></strong></span>
              </li>
            </ul>
            <form action="orders.php" method="post">
            <button type="submit" class="btn btn-primary btn-lg btn-block">
              ORDER
            </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--<script>
  var gt=0;
  var qt=0;
  var iprice=document.getElementByClassName('iprice');
  var iquantity=document.getElementByClassName('iquantity');
  var gtotal=document.getElementById('gtotal');
  var qtotal=document.getElementById('qtotal');
  function subtotal()
  {
    gt=0;
    qt=0;
    for( i=0;i<iprice.length;i++)
    {
      gt+=(iprice[i].value)*(iquantity[i].value);
      qt+=(iquantity[i].value);
    }

    gtotal.innerText=gt;
    qtotal.innerText=qt;
  }
  subtotal();
  </script>-->

  </body>
</html>
