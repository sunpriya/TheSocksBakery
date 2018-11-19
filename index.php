<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Dog Service</title>
</head>
<body>
	<h1 style="text-align: center;">Services For Pet Dogs</h1>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		
		  <ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		  </ol>

		 
		  <div class="carousel-inner">
		    <div class="item active">
		      <img src="images\1.jpg" class="image_style" >
		    </div>

		    <div class="item">
		      <img src="images\2.jpg"  class="image_style" >
		    </div>

		    <div class="item">
		      <img src="images\3.jpg" class="image_style" >
		    </div>
		  </div>

		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right"></span>
		    <span class="sr-only">Next</span>
		  </a>
	</div>
	<h1 style="text-align: center;">To List Your Services..</h1>
		<center><a href="detail.php" class="btn btn-success butt" ><p style="font-size: 30px;">Click Here</p></a></center>
	<div>

	
	<?php
	if(!isset($_SESSION["photos"]))
		$_SESSION["photos"]=array();

	if(isset($_FILES["photo"]["tmp_name"]))
	{
	$filename    = $_FILES["photo"]["tmp_name"];
    $destination = "uploads/" . $_FILES["photo"]["name"]; 
    move_uploaded_file($filename, $destination); //save uploaded picture in your directory

    $_SESSION["photos"][] = $destination;

   }

	if(!isset($_SESSION["names"]))
		$_SESSION["names"]=array();

	if(!isset($_SESSION["city"]))
		$_SESSION["city"]=array();

	if(!isset($_SESSION["country"]))
		$_SESSION["country"]=array();

	if(!isset($_SESSION["service"]))
		$_SESSION["service"]=array();

	if(!isset($_SESSION["price"]))
		$_SESSION["price"]=array();

	if(!isset($_SESSION["photo"]))
		$_SESSION["photo"]=array();

	if(isset($_POST["yourname"]))
		$_SESSION["names"][]=$_POST["yourname"];

	if(isset($_POST["city"]))
		$_SESSION["city"][]=$_POST["city"];

	if(isset($_POST["country"]))
		$_SESSION["country"][]=$_POST["country"];

	if(isset($_POST["service"]))
		$_SESSION["service"][]=$_POST["service"];

	if(isset($_POST["price"]))
		$_SESSION["price"][]=$_POST["price"];


	$len=count($_SESSION["names"]);
	
	for($i=0;$i<$len;$i++)
	{
	?>
	<div >
		<?php 
		if($i==0)
		{
			?>
			<h2>SERVICES</h2>
			<?php
		}
		?>
	<div id="name"><?php echo $i+1 ;echo "<br>"; ?> <b>Name:</b>
		<?php
		echo $_SESSION["names"][$i];
		echo "<br>";
		?>
	</div>
	<div id="city"><b>City:</b>
		<?php
		echo $_SESSION["city"][$i];
		echo "<br>";
		?>
	</div>
	<div id="country"><b>Country:</b>
		<?php
		echo $_SESSION["country"][$i];
		echo "<br>";
		?>
	</div>
	<div id="service"><b>Service:</b>
		<?php
		echo $_SESSION["service"][$i];
		echo "<br>";
		?>
	</div>
	<div id="price"><b>Price:</b>
		<?php
		echo $_SESSION["price"][$i];
		echo "<br>";
		?>
		<div id="img"><b>Image:</b>
  			<img src="<?php echo $_SESSION["photos"][$i]; ?>" alt="picture" class="img_display"/>
		</div>
		<?php
		echo "<br>";
		?>
	</div>
	<?php
	}
?>
</div>
</body>
</html>

