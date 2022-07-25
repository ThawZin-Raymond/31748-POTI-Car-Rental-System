<!DOCTYPE html>
<html>
    <head>
        <script src="my.js"></script>
        <link rel = "stylesheet" href = "mystyle.css">
    </head>
    <body>
        <div class='header'><h1 align="center">Thank you for your order with us</h1></div>

        <h2>Order Details: </h2>         
        
    </body>
</html>

<?php
session_start();
echo "Total price: $".$_SESSION["total_price"];
$a=0;
echo "<table border='1' align='center' width='80%'>";
echo "<tr>";
echo "<td>Thumbnails</td>";
echo "<td>Vehicle-Brand and Model</td>";
echo "<td>Rental Days</td>";
echo "<td>Price</td>";
while($a<$_SESSION['count']){
          $modelimage = $_SESSION["Model"][$a];
          echo "<tr>";
          echo "<td><img img class='cart_img' border='0' src='images/$modelimage.jpg'></td>";
          echo "<td>".$_SESSION["year"][$a]."-".$_SESSION["brand"][$a]."-".$_SESSION["Model"][$a]."</td>";
          echo "<td>".$_SESSION["days"][$a]."</td>";
          echo "<td>".$_SESSION["price"][$a]."</td>";
          echo "</tr>";
           $a+=1;
}
        echo "</table>";
?>
<p style="text-align:center;"><a href="index.php" class="button">Return to Our Homepage</a></p>
