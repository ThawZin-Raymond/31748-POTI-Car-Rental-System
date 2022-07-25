<?php
session_start();
$_SESSION["total_price"]=0;
$a=0;
if (isset($_POST["quantity"])){
 while($a<$_SESSION["count"]){
     
    $price=$_SESSION["price"][$a];

    $days=$_POST["days".$a];
    $_SESSION["total_price"]+=$price * $days;
    $_SESSION["days"][$i] = $days;
    $a+=1;
   }
}
    echo "<div class='header'><h2 align='center'>Checkout</h2></div>";

    echo "You are required to pay: $".$_SESSION["total_price"];
    
?>


<!DOCTYPE html>
<html>
    <head>
        <script type="text/javascript" src="my.js"></script>
        <link rel = "stylesheet" href = "mystyle.css">
    </head>
    <body>
            <table width = "50%">
              
                <form method = "POST" action="orderDetails.php" onsubmit = "return validationContact()">
                    <h1> Customer Details and Payment</h1>
                    <tr>
                        <td>Full Name<span style="color:red">*</span>: </td>
                        <td><input type="text" name="Namevalue" id="name" size="20"></td>
                    </tr>
                    <tr>
                        <td>Email<span style="color:red">*</span>: </td>
                        <td><input type="text" name="Emailvalue" id="email" size="20"></td>
                    </tr>
                    <tr>
                        <td>Address<span style="color:red">*</span>: </td>
                        <td><input type="text" name="Addressvalue" id="address" size="20"></td>
                    </tr>
                    
                    <tr>
                        <td>City<span style="color:red">*</span> :</td>
                        <td><input type="text" name="City" id="city" size="20"></td>
                    </tr>
                    <tr>
                        <td>State<span style="color:red">*</span>: </td>
                        <td><input type="text" name="State" id="state" size="20"></td>
                    </tr>
                    <tr>
                        <td>Country<span style="color:red">*</span>: </td>
                        <td><input type="text" name="Country" id="country" size="20"></td>
                    </tr>
                    <tr>
                        <td>Postcode<span style="color:red">*</span>: </td>
                        <td><input type="text" name="post" id="post" size="20"></td>
                    </tr>
                    <tr>
                        <td>Payment Method<span style="color:red">*</span>:</td>
                        <td><select name="dowpdown">
	                        <option value="1">Creditcard</option>
	                        <option value="2">Mastercard</option>
	                       </select></td>
                    </tr>
                    
                   <tr>
                       <td><p> <input type="submit" id="book" value="Booking"></p></td>
                   </tr>
                   <tr>
                        <td>
                           <button class="button" type="button"><a href="cart.php">Back to the Cart</a></button>
                           <button class="button" type="button"><a href="index.php">Back to Selection</a></button> 
                        </td>
                   </tr>
                    
                     
    
                </form>
            </table>
    </body>
</html>

