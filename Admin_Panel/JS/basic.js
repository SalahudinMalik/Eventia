function fun(){
var seat = document.getElementById("seats").value;
var city = document.getElementById("select_city").value;
var cprice = 0; 
if(seat == 0){
	alert("Invalid number of Seat");
}
else{
	if(city == "Karachi")
	{
		cprice = 1000;
	}
	else if(city == "Lahore"){
	 	cprice = 1200;
	}
	else if(city == "Islamabad"){
		cprice = 1500;
	}
	seat = seat *cprice;
	if(cprice != 0)
	{
	 alert("Total cost is " + seat);
	}
	}
}