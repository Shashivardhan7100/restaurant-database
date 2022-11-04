<body>
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
  <h1 style="color:white">STATERS</h1>
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