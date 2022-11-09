<?php
  session_start();
  include('mysqli_connect.php');
  include('functions.php');
  if($_SERVER['REQUEST_METHOD']=="POST")
  {
      $name=$_POST['name'];
      $total=$_POST['total'];
      $slot=$_POST['slot'];
      $id=$_SESSION['details'][0]['customer_id'];
      $query="insert into table_reg(customer_name,total_members,slot,customer_id) values ('$name','$total','$slot','$id')";
      if(mysqli_query($dc,$query))
      {
        echo "<script>alert('Registered successfully...')</script>";
              echo  "<script>window.location='reservation.php'</script>";
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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Shalimar&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
  <body style="background-image:url('https://images.pexels.com/photos/6985260/pexels-photo-6985260.jpeg?auto=compress&cs=tinysrgb&w=400');background-size:cover;background-repeat:no-repeat">
    <?php
        require('navbar.php');
    ?>
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100" style="margin-top: 100px;">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-9 col-xl-7">
          <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-5">
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5"style="display:flex; justify-content: center;">TABLE RESERVATIONS</h3>
              <form action="reservation.php" method="post">
                <div class="row">
                  <div class="col-md-6 mb-4">
  
                    <div class="form-outline">
                        <input type="text" id="emailAddress" name="name" class="form-control form-control-lg" required />
                        <label class="form-label" for="emailAddress"style="display:flex; justify-content: center;font-weight: 400;color:black">Name</label>
                    </div>
  
                  </div>
                  <div class="col-md-6 mb-4 d-flex align-items-center">
  
                    <div class="form-outline">
                        <input type="number" id="price" name="total" class="form-control form-control-lg" />
                        <label class="form-label" for="price"style="display:flex; justify-content: center;font-weight: 400;color:black">Total Members</label>
                      </div>      
                  </div>
                </div>
                <div class="row" style="display:flex; justify-content: center;">
                    <select class="select" name="slot" style="text-align: center;width:170px;height:40px;border-width:3px;font-weight: 400;color:black">
                        <option disabled="disabled" selected="selected">select Your Slot</option>
                        <option value="2PM-4PM">2PM-4PM</option>
                        <option value="4PM-6PM">4PM-6PM</option>
                        <option value="6PM-8PM">6PM-8PM</option>
                        <option value="8PM-10PM">8PM-10PM</option>
                      </select>
                </div>
  
                <div class="mt-4 pt-2 "style="display:flex; justify-content: center;">
                  <input class="btn btn-primary btn-lg " type="submit" value="BOOK YOUR SLOT" />
                </div>
  
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>