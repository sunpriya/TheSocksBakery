<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>Details</title>
<script type="text/javascript">

function validate(){

	var phone=document.form1.phone.value;
	var name=document.form1.yourname.value;
	var email=document.form1.email.value;
	var city=document.form1.city.value;
	var country=document.form1.country.value;
	var price=document.form1.price.value;
	var numeric=/^[0-9]+$/;
	var en=/^[A-Za-z0-9]+\@[A-Za-z0-9\-]+\.[a-zA-z]{2,4}$/;

	if(name==""||name==null)
		{
			alert("Name field empty");
			return false;
		}
	else if(!email.match(en))
		{
			alert("Inavlid email");
			return false;
		}
	else if(isNaN(price))
		{
			alert("Inavlid price");
			return false;
		}
	else if(isNaN(phone))
		{
			alert("Inavild phone number");
			return false;
		}
		else
			return true;
}

</script>
</head>
<body style="margin-left: 500px;">
<h1>Enter Your Details</h1>

<form name="form1" action="index.php" method="post" enctype="multipart/form-data" onsubmit="return validate();">
<p>
	<b>Full Name:</b> <input TYPE="TEXT" SIZE="50" name="yourname">
</p>
<p>
	<b>Email:</b><input type="Email" name="email">
</p>
<p>
	<b>Address:</b> <input TYPE="TEXT" SIZE="30" NAME="address">

</p>
<p>
	<b>Phone: </b> <input TYPE="TEXT" SIZE="15" NAME="phone">
</p>
<p>
	<b>City:</b><input type="TEXT" name="city">
</p>
<p>
	<b>Country:</b><input type="TEXT" name="country">
</p>
<p>
	<b>Which Service You Are Offering?</b>
		<input type="radio" name="service" value="hostel" > Dog Hostel
  		<input type="radio" name="service" value="walking"> Dog Walking
   </p>
<p>
	<b>Price:</b>
	<input type="text" name="price">
</p>
<p>
	<b>Description About You and Your Service:</b>
	<input type="text" name="describe">
</p>
<p>
	
	<table>	<tr><td><b>Upload a Photo</b>:</td>
	
        <td><input type="file" name="photo" id="photo"></td>
        
    </tr>
    </table>
</p>
<p><input TYPE="SUBMIT" value="Submit"  >
</form>
</body>
</html>