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
</head>
<body>
<section class="">
		<?php
			include 'header.php';
		?>

			<section class="caption">
				<h2 class="caption" style="text-align: center">Find You Dream Cars For Hire</h2>
				<h3 class="properties" style="text-align: center">Range Rovers - Mercedes Benz - Landcruisers</h3>
			</section>
	</section><!--  end hero section  -->

	
	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
			<?php
						include 'includes/config.php';
						$sel = "SELECT * FROM cars WHERE car_id = '$_GET[id]'";
						$rs = $conn->query($sel);
						$rws = $rs->fetch_assoc();
			?>
				<li>
					<a href="book_car.php?id=<?php echo $rws['car_id'] ?>">
						<img class="thumb" src="cars/<?php echo $rws['image'];?>" width="300" height="200">
					</a>
					<span class="price"><?php echo 'INR.'.$rws['hire_cost'];?></span>
					<div class="property_details">
						<h1>
							<a href="book_car.php?id=<?php echo $rws['car_id'] ?>"><?php echo 'Car Make>'.$rws['car_type'];?></a>
						</h1>
						<h2>Car Name/Model: <span class="property_size"><?php echo $rws['car_name'];?></span></h2>
					</div>
				</li>
				<h3>Proceed to Hire <?php echo $rws['car_name'];?>. </h3>
				<?php
					if(!$_SESSION['email'] && (!$_SESSION['pass'])){
				?>
				<form method="post">
					<table>
						<tr>
							<td>Full Name:</td>
							<td><input type="text" name="fname" required></td>
						</tr>
						<tr>
							<td>Phone Number:</td>
							<td><input type="text" name="phone" required></td>
						</tr>
						<tr>
							<td>Email Address:</td>
							<td><input type="email" name="email" required></td>
						</tr>
						<tr>
							<td>ID Number:</td>
							<td><input type="text" name="id_no" required></td>
						</tr>
						<tr>
							<td>Gender:</td>
							<td>
								<select name="gender">
									<option> Select Gender </option>
									<option> Male </option>
									<option> Female </option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Location:</td>
							<td><input type="text" name="location" required></td>
						</tr>
						<!-- <tr>
							<td>Date of Hiring:</td>
							<td><input type="date" name="Hdate" required></td>
						</tr> -->
						<tr>
							<td colspan="2" style="text-align:right"><input type="submit" name="save" value="Submit Details"></td>
						</tr>
					</table>
				</form>
				<?php
					 } else
						{session_start();
							$carid = $_GET[id];
							$_SESSION['carid'] = $carid;
						?>
							<form action="pay.php" method=post>
					 			<table>
					 			<tr>
					 		<td>Date of Hiring:</td>
					 		<td><input type="date" name="Hdate" required></td>
					 	</tr>
					 	</table>
					 			<input type="submit" value="Click to book" name="hire">
					 		</form>	
					 		<?php
					 	}
				?>
				<?php
						if(isset($_POST['save'])){
							// session_start();
							include 'includes/config.php';
							$fname = $_POST['fname'];
							$id_no = $_POST['id_no'];
							$gender = $_POST['gender'];
							$email = $_POST['email'];
							$phone = $_POST['phone'];
							$location = $_POST['location'];
							// $_SESSION['pass'] = $id_no;
							// $_SESSION['email'] = $email;
							//  $carid = $_GET[id];
							//  $_SESSION['carid'] = $carid;
							// $sdate=$_POST['Hdate'];
							
							$qry = "INSERT INTO `client`(`client_id`, `fname`, `email`, `id_no`, `phone`, `location`, `gender`, `car_id`, `status`, `mpesa`) 
									VALUES (null,'$fname','$email','$id_no','$phone','$location','$gender',0,'No bookings','')";

							$result = $conn->query($qry);
							// INSERT INTO client (fname,id_no,gender,email,phone,location,car_id,status)
							// VALUES('$fname','$id_no','$gender','$email','$phone','$location',null,'Not yet booked')
							// INSERT INTO `client`(`client_id`, `fname`, `email`, `id_no`, `phone`, `location`, `gender`, `car_id`, `status`, `mpesa`) 
							// VALUES (null,'$fname','$email','$id_no','$phone','$location','$gender',0,'No bookings','')
							// $selt = "SELECT * FROM client WHERE id_no = '$id_no'";
							// $rst = $conn->query($selt);
							// $rtemp = $rst->fetch_assoc();
							// $cid=$rtemp['client_id'];

							// $qry1 = "INSERT INTO `hire`(`hire_id`, `client_id`, `car_id`,`Hdate`, `status`) VALUES (null,$cid,'$_GET[id]','$sdate','pending')";



							// $result2 = $conn->query($qry1);

							// if($rst == TRUE)
							// {
							// 	echo "client id vachindhi";

							// }
							// if($result2 == TRUE)
							// {
							// 	echo "<script type = \"text/javascript\">
							// 				alert(\"insert ayyindhi sachindhi\");
							// 				window.location = (\"pay.php\")
							// 				</script>";
							// 	echo "";

							// }

							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Successfully Registered. Proceed to pay\");
											window.location = (\"account.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Registration Failed. Try Again\");
											window.location = (\"book_car.php\")
											</script>";
							}
						}
						
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