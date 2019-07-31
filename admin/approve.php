<?php
	include '../includes/config.php';
	$id = $_REQUEST['id'];
	$query = "UPDATE client SET status = 'Approved' WHERE client_id = '$id'";
	$query2 = "UPDATE hire SET status = 'Approved' WHERE client_id = '$id'";
	$result = $conn->query($query);
	$result2 = $conn->query($query2);
	if($result === TRUE && $result2 === TRUE){
		echo 'Request has Successfully been Approved';
	?>
		<meta content="4; client_requests.php" http-equiv="refresh" />
	<?php
	}
?>
