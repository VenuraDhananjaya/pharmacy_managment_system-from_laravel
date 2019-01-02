function signupcheck()
	{	var x = document.forms["signup"]["username"].value.length;
		var y = document.forms["signup"]["nic"].value.length;
		var z = document.forms["signup"]["mobile"].value.length;
		var w = document.forms["signup"]["email"].value;
		var v = document.forms["signup"]["password1"].value;
		var u = document.forms["signup"]["password2"].value;		
		

		if (x ==0 || x<5){
			alert("Please Insert Your Name");
			return false;
		}
		else if (y==0 || y<10 || y>10){
			alert("Please Insert A Valid NIC Number");
			return false;
		}
		else if (z==0 || z<10 || z>10){
			alert("Please Insert A Valid Mobile Number ");
			return false;
		}
		else if (w==""){
			alert("Please Insert Your Email ");
			return false;
		}
		else if (v=="") {
			alert("Please Insert a Password");
			return false;
		}
		else if (v != u) {
			alert("Passwords Do Not Match");
			return false;
		}

		else{
			alert("Rejistration Succesfull. Please Login to Contiune");
		}
		
	}


function logincheck()
	{	var x = document.forms["login"]["nic"].value;
		var y = document.forms["login"]["password"].value;		
		

		if (x == ""){
			alert("Please Insert Your NIC Number");
			return false;
		}
		else if (y==""){
			alert("Please Insert Your Password");
			return false;
		}
		else{
			alert("Login Succesfull. Welcome!!");
		}
		
	}

function admincheck()
	{	var x = document.forms["adminform1"]["name"].value;
		var y = document.forms["adminform1"]["nic"].value.length;
		var v = document.forms["adminform1"]["password1"].value;
		var u = document.forms["adminform1"]["password2"].value;		
		

		if (x == ""){
			alert("Please Insert Your Name");
			return false;
		}
		else if (y==0 || y<10 || y>10){
			alert("Please Insert A Valid NIC Number");
			return false;
		}
		else if (v=="") {
			alert("Please Insert a Password");
			return false;
		}
		else if (v != u) {
			alert("Passwords Do Not Match");
			return false;
		}

		else{
			alert("Rejistration Succesfull. Please Login to Contiune");
		}
		
	}

function medcheck()
	{	var x = document.forms["medicine"]["id"].value;
		var y = document.forms["medicine"]["name"].value;
		var z = document.forms["medicine"]["brandname"].value;
		var w = document.forms["medicine"]["mg"].value;
		var v = document.forms["medicine"]["bnum"].value;
		var u = document.forms["medicine"]["amount"].value;	
		var s = document.forms["medicine"]["expdate"].value;		
		

		if (x == ""){
			alert("Please Insert Medicine ID");
			return false;
		}
		else if (y==""){
			alert("Please Insert Medicne Name");
			return false;
		}
		else if (z==""){
			alert("Please Insert Medicne Brand Name");
			return false;
		}
		else if (w==""){
			alert("Please Insert The Dosage ");
			return false;
		}
		else if (v=="") {
			alert("Please Insert The Batch Number");
			return false;
		}
		else if (u==0) {
			alert("Please enter a valid amount");
			return false;
		}
		else if (s=="") {
			alert("Please enter a valid Date");
			return false;
		}

		else{
			alert("Insertion Succesfull");
		}
		
	}

// function checkLength(){
//     var textbox = document.getElementByName("nic");
//     if(textbox.value.length != 10 && textbox.value.length < 10){
//         alert("Please Enter a Valid NIC");
//     }
// }


// function signupcheck()
// 	{	var x = document.forms["signup"]["username"].value;
// 		var y = document.forms["signup"]["nic"].value;
// 		var z = document.forms["signup"]["mobile"].value;
// 		var w = document.forms["signup"]["email"].value;
// 		var v = document.forms["signup"]["password1"].value;
// 		var u = document.forms["signup"]["password2"].value;		
		

// 		if (x == ""){
// 			alert("Please Insert Your Name");
// 			return false;
// 		}
// 		else if (y==""){
// 			alert("Please Insert Your NIC Number");
// 			return false;
// 		}
// 		else if (){
// 			alert("Please Insert Your NIC Number");
// 			return false;
// 		}
// 		else if (z==""){
// 			alert("Please Insert Your Mobile Number ");
// 			return false;
// 		}
// 		else if (w==""){
// 			alert("Please Insert Your Email ");
// 			return false;
// 		}
// 		else if (v=="") {
// 			alert("Please Insert a Password");
// 			return false;
// 		}
// 		else if (v != u) {
// 			alert("Passwords Do Not Match");
// 			return false;
// 		}

// 		else{
// 			alert("Rejistration Succesfull. Please Login to Contiune");
// 		}
		
// 	}