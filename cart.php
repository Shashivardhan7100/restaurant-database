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
      require_once('navbar.php');
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
                      createcart($row['img'],$row['item_name'],$row['cost'],$row['item_id']);
                    }
                  }
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
                <span>2</span>
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
                <span><strong>RS500</strong></span>
              </li>
            </ul>

            <button type="button" class="btn btn-primary btn-lg btn-block">
              ORDER
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  </body>
</html>
