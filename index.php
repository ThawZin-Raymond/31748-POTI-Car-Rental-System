<?php
session_start();
if(!isset($_SESSION['shoppingcart'])){
	$_SESSION['shoppingcart']=0;
	$_SESSION['count']=0;
}
?>

<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript" src="my.js"></script>
		<title>Car Rental Center</title>
		
		<link rel = "stylesheet" href = "mystyle.css">
		
	</head>
	
	<body>
		<div class="top_bar">
			<div class="header_bar">
				<div class="header">
					<b>Hertz-UTS</b>
				</div>
				<div align="center" class="header">
					<h1>Car Rental Center</h1>
				</div>
				
			</div>
		</div>
					
		<div class="main_body">
			<table class="main_table" align ="center" border="2" width="80%">
				<tr>
					<td class="image_details">
						<img border="0" src="images/Camry.jpg" class="img"><br>
						<h3><a class="title">Toyota-Camry-2013</a></h3>
						<a class="category">Mileage: 10,000 kms</a><br>
						<a class="category">Fuel Type: petrol</a><br>
						<a class="category">Seats: 5</a><br>
						<a class="category">Price Per Day: $250</a><br>
						<a class="category">Availability: True</a><br>
						<a class="category"> The 2013 Camry is definitely a good used midsize car . The Camry is consistently one of the best-selling used cars because it has great reliability, lots of interior space, and a good price. The Camry is available with two capable engine choices that both deliver good fuel economy.</a>
						
						</td>
						
					<td  class="image_details" >
						<img border="0" src="images/X-trail.jpg" class="img"><br>
						<h3><a class="title">Nissan-XTrail-2018</a></h3>
						<a class="category">Mileage: 25,000 kms</a><br>
						<a class="category">Fuel Type: petrol</a><br>
						<a class="category">Seats: 5</a><br>
						<a class="category">Price Per Day: $230</a><br>
						<a class="category">Availability: True</a><br>
						<a class="category">The current model Nissan X-Trail is the third-generation of the popular soft-roader and was initially unveiled in 2013</a>
						</td>
					<td class="image_details" >
						<img border="0" src="images/Golf.jpg" class="img"><br>
						<h3><a class="title">Volkswagen-Golf-2018</a></h3>
						<a class="category">Mileage: 50,000 kms</a><br>
						<a class="category">Fuel Type: petrol</a><br>
						<a class="category">Seats: 4</a><br>
						<a class="category">Price Per Day: $180</a><br>
						<a class="category">Availability: True</a><br>
						<a class="category">The 2021 Volkswagen Golf has lively handling, great cargo space, and a high-end cabin, but its infotainment system is disappointing and its acceleration could be better on the highway.</a>
						</td>
					<td class="image_details" >
						<img border="0" src="images/Civic.jpg" class="img"><br>
						
						<h3><a class="title">Honda-Civic-2018</a></h3>
						<a class="category">Mileage: 30,000 kms</a><br>
						<a class="category">Fuel Type: petrol</a><br>
						<a class="category">Seats: 4</a><br>
						<a class="category">Price Per Day: $200</a><br>
						<a class="category">Availability: False</a><br>
						<a class="category">The Honda Civic ranks in the top third of the highly competitive compact car class. The Civic has excellent driving dynamics, refined engines, great safety scores, and an interior that is both upscale and roomy.</a></td>
					
						</td>
				<tr>
					<td class="addtocart_td" align="center">
						<form method="POST" action = cart.php onsubmit = "return ValidateAvailability()">
						<input type="hidden" id="ava[0]" name="ava" value="true">
						<input type="hidden" id="Model_year" name="Model_year" value="2013">
						<input type="hidden" id="Brand" name="Brand" value="Toyota">
						<input type="hidden" id="Model" name="Model" value="Camry">
						<input type="hidden" id="Price_per_day" name="Price_per_day" value="250">
						<input type="submit" id="Addcart" name="submit" value="Add to cart"></form>
					</td>
					<td class="addtocart_td" align="center">
						<form method="POST" action = cart.php onsubmit = "return ValidateAvailability1()">
						<input type="hidden" id="ava[1]" name="ava" value="true">
						<input type="hidden" id="Model_year" name="Model_year" value="2018">
						<input type="hidden" id="Brand" name="Brand" value="Nissan">
						<input type="hidden" id="Model" name="Model" value="X-trail">
						<input type="hidden" id="Price_per_day" name="Price_per_day" value="230">
						<input type="submit" id="Addcart" name="submit" value="Add to cart"></form>
					</td>
					<td class="addtocart_td" align="center">
						<form method="POST" action = cart.php onsubmit = "return ValidateAvailability2()">
						<input type="hidden" id="ava[2]" name="ava" value="true">
						<input type="hidden" id="Model_year" name="Model_year" value="2018">
						<input type="hidden" id="Brand" name="Brand" value="Volkswagen">
						<input type="hidden" id="Model" name="Model" value="Golf">
						<input type="hidden" id="Price_per_day" name="Price_per_day" value="180">
						<input type="submit" id="Addcart" name="submit" value="Add to cart"></form>
					</td>
					<td class="addtocart_td" align="center">
						<form method="POST" action = cart.php onsubmit = "return ValidateAvailability3()">
						<input type="hidden" id="ava[3]" name="ava" value="false">
						<input type="hidden" id="Model_year" name="Model_year" value="2018">
						<input type="hidden" id="Brand" name="Brand" value="Honda">
						<input type="hidden" id="Model" name="Model" value="Civic">
						<input type="hidden" id="Price_per_day" name="Price_per_day" value="200">
						<input type="submit" id="Addcart" name="submit" value="Add to cart"></form>
					</td>
				</tr>
				</tr>
					<td class="image_details" >
						<img border="0" src="images/320i.jpg" class="img"><br>
						<h3><a class="title">BMW-320i-2014</a></h3>
						<a class="category">Mileage: 23,000 kms</a><br>
						<a class="category">Fuel Type: petrol</a><br>
						<a class="category">Seats: 5</a><br>
						<a class="category">Price Per Day: $300</a><br>
						<a class="category">Availability: True</a><br>
						<a class="category"> The 2014 BMW 3 Series has terrific power and a smooth ride with nimble handling. Inside, you’ll find more user-friendly tech and rear-seat room than most rivals.</a>
		
					</td>
					<td class="image_details" >
						<img border="0" src="images/Cherokee.jpg" class="img"><br>
						<h3><a class="title">Jeep-Cherokee-2018</a></h3>
						<a class="category">Mileage: 15,000 kms</a><br>
						<a class="category">Fuel Type: petrol</a><br>
						<a class="category">Seats: 6</a><br>
						<a class="category">Price Per Day: $220</a><br>
						<a class="category">Availability: False</a><br>
						<a class="category">The 2018 Jeep Cherokee ranks near the back of the competitive compact SUV class. It has an upscale interior, great off-road performance, and balanced handling. It’s held back by its below-average predicted reliability rating and safety scores.</a>
		
					</td>
					<td class="image_details" >
						<img border="0" src="images/Captiva.jpg" class="img"><br>
						<h3><a class="title">Holden-Captiva-2009</a></h3>
						<a class="category">Mileage: 60,000 kms</a><br>
						<a class="category">Fuel Type: petrol</a><br>
						<a class="category">Seats: 4</a><br>
						<a class="category">Price Per Day: $150</a><br>
						<a class="category">Availability: True</a><br>
						<a class="category">This is what David Morley liked most about this particular version of the Holden Captiva: Sold well, so plenty of choice., High and mighty driving position.</a>
					</td>
					<td class="image_details" >
						<img border="0" src="images/GLC.jpg" class="img"><br>
						<h3><a class="title">Benz-GLC-2015</a></h3>
						<a class="category">Mileage: 40,000 kms</a><br>
						<a class="category">Fuel Type: petrol</a><br>
						<a class="category">Seats: 5</a><br>
						<a class="category">Price Per Day: $320</a><br>
						<a class="category">Availability: True</a><br>
						<a class="category">It's the first time Mercedes-Benz has offered its competitor to the Audi Q5 in right-hand drive, its new C-Class-based SUV range entering an important and popular segment in the Australian new car market.</a>
						
					</td>
				<tr>
					<td class="addtocart_td" align="center">
						<form method="POST" action="cart.php" onsubmit="return ValidateAvailability4();">
						<input type="hidden" id="ava[4]" name="ava" value="true">
						<input type="hidden" id="Model_year" name="Model_year" value="2014">
						<input type="hidden" id="Brand" name="Brand" value="BMW">
						<input type="hidden" id="Model" name="Model" value="320i">
						<input type="hidden" id="Price_per_day" name="Price_per_day" value="300">
			
						<input type="submit" id="submit" name="submit" value="Add to cart">
						</form>
					</td>
					<td class="addtocart_td" align="center">
						<form method="POST" action = cart.php onsubmit = "return ValidateAvailability5()">
						<input type="hidden" id="ava[5]" name="ava" value="false">
						<input type="hidden" id="Model_year" name="Model_year" value="2018">
						<input type="hidden" id="Brand" name="Brand" value="Jeep">
						<input type="hidden" id="Model" name="Model" value="Cherokee">
						<input type="hidden" id="Price_per_day" name="Price_per_day" value="220">
						<input type="submit" id="Addcart" name="submit" value="Add to cart">
						</form>
					</td>
					<td class="addtocart_td" align="center">
						<form method="POST" action = cart.php onsubmit = "return ValidateAvailability6()">
						<input type="hidden" id="ava[6]" name="ava" value="true">
						<input type="hidden" id="Model_year" name="Model_year" value="2009">
						<input type="hidden" id="Brand" name="Brand" value="Holden">
						<input type="hidden" id="Model" name="Model" value="Captiva">
						<input type="hidden" id="Price_per_day" name="Price_per_day" value="150">
						<input type="submit" id="Addcart" name="submit" value="Add to cart">
						</form>
					</td>
					<td class="addtocart_td" align="center">
						<form method="POST" action = cart.php onsubmit = "return ValidateAvailability7()">
						<input type="hidden" id="ava[7]" name="ava" value="true">
						<input type="hidden" id="Model_year" name="Model_year" value="2015">
						<input type="hidden" id="Brand" name="Brand" value="Benz">
						<input type="hidden" id="Model" name="Model" value="GLC">
						<input type="hidden" id="Price_per_day" name="Price_per_day" value="320">
						<input type="submit" id="Addcart" name="submit" value="Add to cart"></form>
					</td>
					
				</tr>
				<tr>
					<td class="image_details" >
						<img border="0" src="images/Jimny.jpg" class="img"><br>
						<h3><a class="title">Suzuki-Jimny-2019</a></h3>
						<a class="category">Mileage: 50,000 kms</a><br>
						<a class="category">Fuel Type: petrol</a><br>
						<a class="category">Seats: 4</a><br>
						<a class="category">Price Per Day: $260</a><br>
						<a class="category">Availability: True</a><br>
						<a class="category"> The Suzuki Jimny, despite being small and a bit impractical, has always been held in fond regard by drivers who recognise its abilities. It is not a car that follows fashions or trends.</a>
					</td>
					<td class="image_details" >
						<img border="0" src="images/Sonata.jpg" class="img"><br>
						<h3><a class="title">Hyundai-Sonata-2015</a></h3>
						<a class="category">Mileage: 50,000 kms</a><br>
						<a class="category">Fuel Type: petrol</a><br>
						<a class="category">Seats: 5</a><br>
						<a class="category">Price Per Day: $180</a><br>
						<a class="category">Availability: False</a><br>
						<a class="category">The 2015 Hyundai Sonata's #3 ranking is based on its score within the 2015 Affordable Midsize Cars category. It is the winner of our 2015 Best Midsize Car for the Money award and the winner of our 2015 Best Midsize Car for Families award.</a>
						
					</td>
				</tr>
				<tr >
					<td class="addtocart_td" align="center">
						<form method="POST" action = cart.php onsubmit = "return ValidateAvailability8()">
						<input type="hidden" id="ava[8]" name="ava" value="true">
						<input type="hidden" id="Model_year" name="Model_year" value="2019">
						<input type="hidden" id="Brand" name="Brand" value="Suzuki">
						<input type="hidden" id="Model" name="Model" value="Jimny">
						<input type="hidden" id="Price_per_day" name="Price_per_day" value="260">
						<input type="submit" id="Addcart" name="submit" value="Add to cart">
						</form>
					</td>
					<td class="addtocart_td" align="center">
						<form method="POST" action =cart.php onsubmit = "return ValidateAvailability9()">
						<input type="hidden" id="ava[9]" name="ava" value="false">
						<input type="hidden" id="Model_year" name="Model_year" value="2015">
						<input type="hidden" id="Brand" name="Brand" value="Hyundai">
						<input type="hidden" id="Model" name="Model" value="Sonata">
						<input type="hidden" id="Price_per_day" name="Price_per_day" value="180">
						<input type="submit" id="Addcart" name="submit" value="Add to cart">　
						</form>
					</td>
				</tr>
			
			</table>
		</div>
		<div >
			<a  href="cart.php" align="center" class="button" >Cart</a>
		</div>
		
		
	</body>
	
</html>