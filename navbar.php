<nav class="navbar navbar-expand-lg navbar-dark position-sticky-top fixed-top" style="background-color:#050A30">
  <a class="navbar-brand" href="mainbody.php"><img class="title-logo"src="img/logo.png" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item " >
        <a class="our-logo nav-link" href="mainbody.php" style="font-size:1.25rem">Menu</a>
      </li>
      <li class="nav-item ">
            <?php
            if(isset($_SESSION['cart']))
            {
                $count=count($_SESSION['cart']);
                print "<a class=\"our-logo nav-link\" href=\"cart.php\" style=\"font-size:1.25rem\">Cart($count)</a>";
            }
            else
            {
                $count=0;
                print "<a class=\"our-logo nav-link\" href=\"cart.php\" style=\"font-size:1.25rem\">Cart($count)</a>";
            }
            ?>

      </li>
      <li class="nav-item " >
        <a class="our-logo nav-link" href="reservation.php" style="font-size:1.25rem">REservations</a>
      </li>
      <li class="nav-item">
        <a class="our-logo nav-link" href="orders.php" style="font-size:1.25rem">Orders</a>
      </li>
      <li class="nav-item">
        <a class="our-logo nav-link" href="logout.php" style="font-size:1.25rem">SIGNout</a>
      </li>
    </ul>
  </div>
</nav>
