//index.php
function ValidateAvailability(){
	
		var valid= document.getElementById("ava[0]").value;
	   
		if (valid == "true"){
			alert("Successfully added to cart");
	    return true;	
		}else if(valid =="false"){
			alert("Sorry,this car is unavailable now, Please try other cars.");
		return false;}
		
}

function ValidateAvailability1(){
	
		var valid1= document.getElementById("ava[1]").value;
		
	    if (valid1 == "true"){
			alert("Successfully added to cart");
	    return true;	
		}else if(valid1 =="false"){
			alert("Sorry,this car is unavailable now, Please try other cars.");
		return false;}
}
		
function ValidateAvailability2(){
	
		var valid2= document.getElementById("ava[2]").value;

	    if (valid2 == "true"){
			alert("Successfully added to cart");
	    return true;	
		}else if(valid2 =="false"){
			alert("Sorry,this car is unavailable now, Please try other cars.");
		return false;}
}
		
function ValidateAvailability3(){
	
		var valid3= document.getElementById("ava[3]").value;
	    
	    if (valid3 == "true"){
			alert("Successfully added to cart");
	    return true;	
		}else if(valid3 =="false"){
			alert("Sorry,this car is unavailable now, Please try other cars.");
		return false;}
}
		
function ValidateAvailability4(){
	
		var valid4= document.getElementById("ava[4]").value;	
    
	    if (valid4 == "true"){
			alert("Successfully added to cart");
	    return true;	
		}else if(valid4 =="false"){
			alert("Sorry,this car is unavailable now, Please try other cars.");
		return false;}

}

function ValidateAvailability5(){
	
		var valid5= document.getElementById("ava[5]").value;
	   
	    if (valid5 == "true"){
			alert("Successfully added to cart");
	    return true;	
		}else if(valid5 =="false"){
			alert("Sorry,this car is unavailable now, Please try other cars.");
		return false;}
}
function ValidateAvailability6(){
	
		var valid6= document.getElementById("ava[6]").value;
	   
	    if (valid6 == "true"){
			alert("Successfully added to cart");
	    return true;	
		}else if(valid6 =="false"){
			alert("Sorry,this car is unavailable now, Please try other cars.");
		return false;}
}

function ValidateAvailability7(){
	
		var valid7= document.getElementById("ava[7]").value;
	   
	    if (valid7 == "true"){
			alert("Successfully added to cart");
	    return true;	
		}else if(valid7 =="false"){
			alert("Sorry,this car is unavailable now, Please try other cars.");
		return false;}
}

function ValidateAvailability8(){
	
		var valid8= document.getElementById("ava[8]").value;
	   
	    if (valid8 == "true"){
			alert("Successfully added to cart");
	    return true;	
		}else if(valid8 =="false"){
			alert("Sorry,this car is unavailable now, Please try other cars.");
		return false;}
}
		
function ValidateAvailability9(){
	
		var valid9= document.getElementById("ava[9]").value;
	 
	    if (valid9 == "true"){
			alert("Successfully added to cart");
	    return true;	
		}else if(valid9 =="false"){
			alert("Sorry,this car is unavailable now, Please try other cars.");
		return false;}
}

//cart.php
		

function ValidationCart(){
	var quantity = document.getElementById("quantity").value;
	var count=document.getElementById("count").value;
	
	var text="Days";
	if (quantity == 0){
		alert("You have not been selected any cars in the list.");
		return true;
	}
	for ( var i=0;i<=count;i++){
	
		var days = document.getElementById(text+i).value;
		if (days <= 0){
			alert("day must be greater than 0");
			return false;
		}
	}
		return true;
		
}
		
//checkout.php

function validationContact(){
	var name = document.getElementById("name").value;
	var email = document.getElementById("email").value;
	var address=document.getElementById("address").value;
	var city=document.getElementById("city").value;
	var state=document.getElementById("state").value;
	var country=document.getElementById("country").value;
	var post=document.getElementById("post").value;
	var email_regExp = RegExp(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/);
	
	
if( name ==""){
	alert("Please complete your name");
	return false;
}
if (email_regExp.exec(email)==null || email_regExp.exec(email) == ""){
    alert("Please check your email or complete it");
	return false;
 }

if (address ==""){
	alert("Please complete your address");
	return false;
}
if (city ==""){
	alert("Please complete your City");
	return false;
}
if (state ==""){
	alert("Please complete your State");
	return false;
}
if (country ==""){
	alert("Please complete your Country");
	return false;
   } 
 if(post==""){
     alert("Please complete your PostCode");
     return false;
 }
return true;
} 


