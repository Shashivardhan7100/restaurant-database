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
  </head>
<<<<<<< HEAD:reservation.php
  <body>
    <?php
        include('navbar.php');
    ?>
=======
  <body style="background-image:url(https://lavalavabeachclub.com/kauai/wp-content/gallery/outdoor-dining/LLBC-Kauai-Side-Beach-Seating.jpg);background-size:cover;background-repeat:no-repeat">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark position-sticky-top fixed-top">
  <a class="navbar-brand" href="#"><img class="title-logo"src="img/logo.png" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="our-logo nav-link" href="main.html">Menu</a>
      </li>
      <li class="nav-item ">
        <a class="our-logo nav-link" href="cart.html">Cart(0)</a>
      </li>
      <li class="nav-item">
        <a class="our-logo nav-link" href="#">Orders</a>
      </li>
      <li class="nav-item">
        <a class="our-logo nav-link" href="#">LogOut</a>
      </li>
    </ul>
  </div>
</nav>
>>>>>>> 0e0820294b2b4f0abe6428b3f00e9398fe661c21:reservation.html
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100" style="margin-top: 100px;">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-9 col-xl-7">
          <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-5">
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5"style="display:flex; justify-content: center;">TABLE RESERVATIONS</h3>
              <form action="reservation.php" method="post">
                <div class="row">
                  <!--<div class="col-md-6 mb-4">
  
                    <div class="form-outline">
                        <input type="email" id="emailAddress" name="email" class="form-control form-control-lg" required />
                        <label class="form-label" for="emailAddress"style="display:flex; justify-content: center;font-weight: 400;color:black">Email</label>
                    </div>
  
                  </div>-->
                  <div class="col-md-6 mb-4 d-flex align-items-center">
  
                    <div class="form-outline">
                        <input type="number" id="price" name="price" class="form-control form-control-lg" />
                        <label class="form-label" for="price"style="display:flex; justify-content: center;font-weight: 400;color:black">Total Members</label>
                      </div>      
                  </div>
                </div>
                <div class="row" style="display:flex; justify-content: center;">
                    <select class="select" style="text-align: center;width:170px;height:40px;border-width:3px;font-weight: 400;color:black">
                        <option value="" disabled="disabled" selected="selected">select Your Slot</option>
                        <option value="1">2PM-4PM</option>
                        <option value="2">4PM-6PM</option>
                        <option value="3">6PM-8PM</option>
                        <option value="4">8PM-10PM</option>
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