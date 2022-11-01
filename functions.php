<?php
function oncard($image,$name,$cost,$productid)
{
$example="
<div class=\"our-cols col-lg-3\"> 
<form action=\"practice.php\" method=\"post\">
  <div class=\"ganesh-cards card\" style=\"width: 18rem;\">
  <img class=\"card-img-top\" src= \"$image\" alt=\"Card image cap\">
  <div class=\"card-body\">
  <h5 class=\"card-title\">$name</h5>
  <p>PRICE: $cost</p>
  <input type=\"submit\" name='add' class=\"btn btn-primary\" value=\"Add To Cart\">
  <input type='hidden' name='product_id' value='$productid'>
  </div> 
    </div>
    </form>
    </div>";

    print "$example";
}

function createcart()
{
    $file="
    <div class=\"row\">
    <div class=\"col-lg-3 col-md-12 mb-4 mb-lg-0\">
      <!-- Image -->
      <div class=\"bg-image hover-overlay hover-zoom ripple rounded\" data-mdb-ripple-color=\"light\">
        <img src=\"product-images\stater-7.jpg\" class=\"w-100\" alt=\"\" />
        <a href=\"#!\">
          <div class=\"mask\" style=\"background-color: rgba(251, 251, 251, 0.2)\"></div>
        </a>
      </div>
      <!-- Image -->
    </div>

    <div class=\"col-lg-5 col-md-6 mb-4 mb-lg-0\">
      <!-- Data -->
      <p><strong>STATER 1</strong></p>
      <button type=\"button\" class=\"btn btn-primary btn-sm me-1 mb-2\" data-mdb-toggle=\"tooltip\"
        title=\"Remove item\">
        <span class=\"material-icons\"> delete</span>
      </button>
      <!-- Data -->
    </div>

    <div class=\"col-lg-4 col-md-6 mb-4 mb-lg-0\">
      <!-- Quantity -->
      <div class=\"d-flex mb-4\" style=\"max-width: 300px\">
        <div class=\"form-outline\">
          <input id=\"form1\" min=\"0\" name=\"quantity\" value=\"1\" type=\"number\" class=\"form-control\" />
          <label class=\"form-label\" for=\"form1\">Quantity</label>
        </div>
      </div>
      <!-- Quantity -->

      <!-- Price -->
      <p class=\"text-start text-md-center\">
        <strong>RS250</strong>
      </p>
      <!-- Price -->
    </div>
  </div>
  <!-- Single item -->

  <hr class=\"my-4\" />
    ";
    print "$file";
}
?>