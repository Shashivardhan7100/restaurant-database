
<?php
function oncard($image,$name,$cost,$productid)
{
$example="
<div class=\"our-cols col-lg-3\">
<form action=\"mainbody.php\" method=\"post\">
  <div class=\"ganesh-cards card\" style=\"width: 18rem;\">
  <img class=\"card-img-top\" src= \"$image\" alt=\"Card image cap\">
  <div class=\"card-body\">
  <h5 class=\"card-title\">$name</h5>
  <p>PRICE: $cost RS</p>
  <div style=\"margin-bottom:10px\">
  <input type=\"int\" name=\"quantity\" placeholder=\"Quantity\" required style=\"width:108px\">
  </div>
  <input type=\"submit\" name='add' class=\"btn btn-primary\" value=\"Add To Cart\">
  <input type='hidden' name='product_id' value='$productid'>
  <input type='hidden' name='cost' value='$cost'>
  </div>
    </div>
    </form>
    </div>";

    print "$example";
}

function createcart($image,$name,$cost,$id,$quantity)
{
    $file="
    <div class=\"row\">
    <div class=\"col-lg-3 col-md-12 mb-4 mb-lg-0\">
      <!-- Image -->
      <div class=\"bg-image hover-overlay hover-zoom ripple rounded\" data-mdb-ripple-color=\"light\">
        <img src=\"$image\" class=\"w-100\" alt=\"\" />
        <a href=\"#!\">
          <div class=\"mask\" style=\"background-color: rgba(251, 251, 251, 0.2)\"></div>
        </a>
      </div>
      <!-- Image -->
    </div>

    <div class=\"col-lg-5 col-md-6 mb-4 mb-lg-0\">
      <form action=\"cart.php?action=remove&id=$id\" method=\"post\">
      <!-- Data -->
      <p><strong>$name</strong></p>
      <button type=\"submit\" name=\"remove\" class=\"btn btn-primary btn-sm me-1 mb-2\" data-mdb-toggle=\"tooltip\"
        title=\"Remove item\">
        <span class=\"material-icons\"> delete</span>
      </button>
      <!-- Data -->
      </form>
    </div>

    <div class=\"col-lg-4 col-md-6 mb-4 mb-lg-0\">
      <!-- Quantity -->
      <div class=\"d-flex mb-4\" style=\"max-width: 300px\">
        <div class=\"form-outline\">
       <div >
        <label style=\"width:108px;text-align:center\" >$quantity</label>
        </div>
          <label class=\"form-label\" for=\"form1\" style=\"margin-left:22px\">Quantity</label>
        </div>
      </div>
      <!-- Quantity -->

      <!-- Price -->
      <p class=\"text-start text-md-center\">
        <strong>$cost<input type=\"hidden\" class=\"iprice\" value=\"$cost\"> RS</strong>
      </p>
      <!-- Price -->
    </div>
  </div>
  <!-- Single item -->

  <hr class=\"my-4\" />
    ";

    print "$file";
}

function orders($sno,$order_id,$order_status,$cost,$agentname,$phonenumber)
{
  $v2= "
  <tr>
      <th scope=\"row\">$sno</th>
      <td>$order_id</td>
      <td>$order_status</td>
      <td>$cost</td>
      <td>$agentname</td>
      <td>$phonenumber</td>
    </tr>
    ";
    print "$v2";
}

function table($i,$id,$Uname,$Unumber,$address,$cost)
{
    $tables="
    <tr>
      <th scope=\"row\">$i</th>
      <td>$id</td>
      <td>
        <form action=\"our_agent.php\" method=\"post\">
          <select name=\"status\" style=\"background-color: grey;\">
            <option value=\"order status\"style=\"color:white;\">order status</option>
            <option value=\"Rejected\"  value=\"rejected\" style=\"color:red\">Rejected</option>
            <option value=\"Accepted\"  value=\"accepted\" style=\"color:green\">Accepted</option>
            <option value=\"On My Way\"  value=\"On My Way\"  style=\"color:orange\">On My Way</option>
            <option value=\"delivered\"  value=\"delivered\" style=\"color:green\"><span style=\"color:green\">delivered</span></option>
          </select>
          <input class=\"btn btn-primary btn-sm \" type=\"submit\" value=\"Submit\" />
          <input type=\"hidden\" value=\"$id\" name=\"id\">
        </form>
      </td>
      <td>$Uname</td>
      <td>$Unumber</td>
      <td>$address</td>
      <td>$cost</td>
    </tr>
    ";

    print "$tables";
}

function table2($i,$id,$status,$Uname,$Unumber,$address,$cost)
{
    $tables="
    <tr>
      <th scope=\"row\">$i</th>
      <td>$id</td>
      <td>$status</td>
      <td>$Uname</td>
      <td>$Unumber</td>
      <td>$address</td>
      <td>$cost</td>
    </tr>
    ";

    print "$tables";
}


?>
