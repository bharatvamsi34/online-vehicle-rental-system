<!DOCTYPE html>

		<?php
            include 'header.php';
            include 'menu.php';
			include 'includes/config.php';
		?>
        <?php
					if(isset($_POST['send'])){
						//echo "succcess";
						
						session_start();
						$gov="shareef@gmail.com";//$_SESSION['uname'];

						echo '1'.$gov.'  ';
						$message = $_POST['message'];
						echo '2'.$message.'  ';
						$qry2= "SELECT * FROM `subscribers` WHERE emailid='$gov'";
						echo '3'.$qry2.'  ';
						$result2 = $conn->query($qry2);
						if($result2 === TRUE){
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
					echo ' last '." unsuccess ";
				?>