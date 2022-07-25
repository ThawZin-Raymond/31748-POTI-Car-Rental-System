<!DOCTYPE html>
<html>
    <head>
        <script type="text/javascript" src="my.js"></script>
        <link rel = "stylesheet" href = "mystyle.css">
    </head>
</html>


<?php
session_start();
if (isset($_POST["Model_year"])){
      $year= $_POST["Model_year"];
      $brand=$_POST["Brand"];
      $model=$_POST["Model"];
      $price = $_POST["Price_per_day"];
      $quantity =1;
      $_SESSION["price"][$_SESSION["count"]]=$price;
      $_SESSION["year"][$_SESSION["count"]]=$year;
      $_SESSION["brand"][$_SESSION["count"]]=$brand;
      $_SESSION["Model"][$_SESSION["count"]]=$model;
      $_SESSION["quantity"][$_SESSION["count"]]=$quantity;
      $_SESSION["count"]+=1;
  
 
}

if(isset($_GET["delete"])){
     $delete = $_GET["delete"];
     for($a=$delete;$a<$_SESSION["count"];$a++){
     $_SESSION["price"][$a]=$_SESSION["price"][$a+1];
     $_SESSION["year"][$a]=$_SESSION["year"][$a+1];
     $_SESSION["brand"][$a]=$_SESSION["brand"][$a+1];
     $_SESSION["Model"][$a]=$_SESSION["Model"][$a+1];
        }
    $_SESSION["count"]=$_SESSION["count"]-1;
    }   
    if($_SESSION["count"]==0){
    $act ="index.php";
    }
    else{
    $act="checkout.php";
    }
echo "<form method='POST' action='$act' onsubmit='return ValidationCart();'>";

echo "<div class='header'><h2 align='center'>Cart</h2></div>";
echo "<table class='cart_table'border='2' align='center' width='90%'>";
echo "<tr>";
echo "<td>Thumbnails</td>";
echo "<td>Vehicle-Brand and Model</td>";
echo "<td>Price Per Day</td>";
echo "<td>Rental Days</td>";
echo "<td>Action</td></tr>";
$a=0;
while($a<$_SESSION['count']){
          $modelimage = $_SESSION["Model"][$a];
          echo "<tr>";
          echo "<td><img class='cart_img' src='images/$modelimage.jpg'></td>";
          echo "<td>".$_SESSION["year"][$a]." - ".$_SESSION["brand"][$a]." - ".$_SESSION["Model"][$a]. "</td>";
          echo "<td>".$_SESSION["price"][$a]."</td>";
          echo "<td><input type='text' id='days".$a."' name='days$a' value='1'>";
          echo "<td><a href='cart.php?delete=$a'><img border='0' width=100px height=50px src='images/remove.png'></a></td>";
          echo "</tr>";
           $a+=1;
}
        echo "</table>";

echo "<input type='hidden' id='count' value='".$_SESSION['count']."'>";
echo "<input type='hidden' id='quantity' name='quantity' value='".$_SESSION['count']."'>";
echo "<input type='submit' value='Proceeding to the Checkout' name='submit'>";
echo "</form>";

echo "<a href='index.php' class='button'>Back to the Selection</a>";

?>
