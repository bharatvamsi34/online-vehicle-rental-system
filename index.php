
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Car Rental</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<style>
ul {
	
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
}

li {
  float: center;
}

li a {
  display: block;
  padding: 8px;
  background-color: #dddddd;
}
</style>
</head>
<body>

	<section class="">
		<?php
			include 'header.php';
		?>
		<!-- <ul >
						<li><a href="index.php">Home</a></li>
						<li><a href="index2.php">Rent Cars</a></li>
						<li><a href="index1.php">Rent Bikes</a></li>
						<li><a href="#">About</a></li>
					</ul> -->


			<section class="caption">
				<h2 class="caption" style="text-align: center">SELF RIDE VEHICLES RENTALS</h2>
				<h3 class="properties" style="text-align: center">Select - Book - Ride</h3>
			</section>
	</section><!--  end hero section  -->
	

	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
			
			<?php
						// include 'includes/config.php';
						// $sel = "SELECT * FROM cars WHERE status = 'Available'";
						// $rs = $conn->query($sel);
						// while($rws = $rs->fetch_assoc()){
			?>
			<h1 align:center> Best Site For Renting Desired Vehciles</h1> 
				<!-- <li>
					<a href="book_car.php?id=<?php echo $rws['car_id'] ?>">
						<img class="thumb" src="cars/<?php echo $rws['image'];?>" width="300" height="200">
					</a>
					<span class="price"><?php echo 'INR.'.$rws['hire_cost'];?></span>
					<div class="property_details">
						<h1>
							<a href="book_car.php?id=<?php echo $rws['car_id'] ?>"><?php echo 'Vehcile type>'.$rws['car_type'];?></a>
						</h1>
						<h2>Car Name/Model: <span class="property_size"><?php echo $rws['car_name'];?></span></h2>
					</div>
				</li> -->
			<?php
				//}
			?>
			</ul>
		</div>
	</section>	<!--  end listing section  -->

	<footer>
		<div class="wrapper footer">
			<ul>
				<li class="links">
					<ul>
						<li>OUR COMPANY</li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Policy</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li>OTHERS</li>
						<li><a href="#">...</a></li>
						<li><a href="#">...</a></li>
						<li><a href="#">...</a></li>
						<li><a href="#">...</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li>OUR CAR TYPES</li>
						<li><a href="#">Mercedes</a></li>
						<li><a href="#">Range Rover</a></li>
						<li><a href="#">Landcruisers</a></li>
						<li><a href="#">Others.</a></li>
					</ul>
				</li>

				<?php include_once "includes/footer.php"; ?>