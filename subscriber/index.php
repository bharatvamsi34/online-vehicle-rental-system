<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Admin Home</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<script type="text/javascript">
		function sureToApprove(id){
			if(confirm("Are you sure you want to delete this message?")){
				window.location.href ='delete_msg.php?id='+id;
			}
		}
	</script>
</head>
<body>
<!-- Header -->
<div id="header">
	<div class="shell">
		
		<?php
		   // session_start();
			include 'menu.php';
			include 'includes/config.php';
			
		?>
		</div>
		<!-- End Main Nav -->
	</div>
</div>

<div id="container">
	<div class="shell">
		
		<div class="small-nav">
			<a href="index.php">Dashboard</a>
			<span>&gt;</span>
			Your Vehicles
		</div>
		
		<br />
		
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<section class="listings">
		<div class="wrapper">
		<!-- <h2 style="text-decoration:underline">Message Admin Here</h2> -->
			<ul class="properties_list">
			<form  method="post">
				<table>
					<tr>
						<td style="color: #003300; font-weight: bold; font-size: 24px">Enter Your Message Here:</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>
							<textarea name="message" placeholder="Enter Message Here" class="txt"></textarea>
						</td>
					</tr>
					<tr>
						<td><input type="submit" name="send" value="Send Message"></td>
					</tr>
				</table>
			</form>
				<?php
					if(isset($_POST['send'])){
						//echo "succcess";
						
						session_start();
						
						$gov=$_SESSION['uname'];

						echo '1'.$gov.'  ';
						$message = $_POST['message'];
						echo '2'.$message.'  ';
						$qry2= "SELECT * FROM `subscribers` WHERE emailid='$gov'";
						echo '3'.$qry2.'  ';
						//$result2 = $conn->query($qry2);
						//$result2 === TRUE);
						if($conn->query($qry2))
						{
							echo " subscribers query executed ";
						}
						$bh=$result2->fetch_assoc();
						$ud=$bh['sname'];
						echo '4'.$ud.'  ';
						$qry = "INSERT INTO `smessage`(`msg_id`, `sname`, `message`, `time`) VALUES (null,'$ud','$message',NOW())";
							$result = $conn->query($qry);

							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Message Successfully Send\");
											window.location = (\"index.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Message Not Send. Try Again\");
											window.location = (\"index.php\")
											</script>";
							}//('$message','$_SESSION[email]',NOW());
					}
					// echo ' last '." unsuccess ";
				?>
			</ul>
		</div>
	</section>	<!--  end listing section  -->

			
			<!-- Sidebar -->
			<div id="sidebar">
				
				<!-- Box -->
				<div class="box">
					
					<!-- Box Head -->
					<div class="box-head">
						<h2>Management</h2>
					</div>
					<!-- End Box Head-->
					
					<div class="box-content">
						<a href="#" class="add-button"><span>Send Messages</span></a>
						<div class="cl">&nbsp;</div>
						
						<p class="select-all"><input type="checkbox" class="checkbox" /><label>select all</label></p>
						<p><a href="#">Delete Selected</a></p>
						
						
					</div>
				</div>
				<!-- End Box -->
			</div>
			<!-- End Sidebar -->
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>
</div>
<!-- End Container -->

<!-- Footer -->
<div id="footer">
	<div class="shell">
		<span class="left">&copy; <?php echo date("Y");?> - projectworlds</span>
		<span class="right">
			Design by <a href="http://projectworlds.in">projectworlds</a>
		</span>
	</div>
</div>
<!-- End Footer -->
	
</body>
</html>