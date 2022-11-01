<?php
session_start();
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
            <h5 class="mb-0">Cart - 2 items</h5>
          </div>
          <div class="card-body">
            <!-- Single item -->
            <div class="row">
              <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                <!-- Image -->
                <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                  <img src="product-images\stater-7.jpg" class="w-100" alt="" />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                  </a>
                </div>
                <!-- Image -->
              </div>

              <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                <!-- Data -->
                <p><strong>STATER 1</strong></p>
                <button type="button" class="btn btn-primary btn-sm me-1 mb-2" data-mdb-toggle="tooltip"
                  title="Remove item">
                  <span class="material-icons"> delete</span>
                </button>
                <!-- Data -->
              </div>

              <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <!-- Quantity -->
                <div class="d-flex mb-4" style="max-width: 300px">
                  <div class="form-outline">
                    <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control" />
                    <label class="form-label" for="form1">Quantity</label>
                  </div>
                </div>
                <!-- Quantity -->

                <!-- Price -->
                <p class="text-start text-md-center">
                  <strong>RS250</strong>
                </p>
                <!-- Price -->
              </div>
            </div>
            <!-- Single item -->

            <hr class="my-4" />

            <!-- Single item -->
            <div class="row">
              <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                <!-- Image -->
                <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                  <img src="product-images\stater-8.jpg"class="w-100" />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                  </a>
                </div>
                <!-- Image -->
              </div>

              <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                <!-- Data -->
                <p><strong>Stater-2</strong></p>
                <button type="button" class="btn btn-primary btn-sm me-1 mb-2" data-mdb-toggle="tooltip"
                  title="Remove item">
                  <span class="material-icons"> delete</span>
                </button>
                <!-- Data -->
              </div>

              <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <!-- Quantity -->
                <div class="d-flex mb-4" style="max-width: 300px">
                  <div class="form-outline">
                    <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control" />
                    <label class="form-label" for="form1">Quantity</label>
                  </div>
                </div>
                <!-- Quantity -->

                <!-- Price -->
                <p class="text-start text-md-center">
                  <strong>RS250</strong>
                </p>
                <!-- Price -->
              </div>
            </div>
            <!-- Single item -->
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
