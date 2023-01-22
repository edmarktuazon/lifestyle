<?php  

if (isset($_POST['message'])) {
	include 'db_conn.php';
	
	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$message = validate($_POST['message']);

	if (empty($message)) {
		header("Location:share.php");
	}else {

		$sql = "INSERT INTO message_form (message) VALUES('$message')";
		$res = mysqli_query($conn, $sql);

		if ($res) {
			echo "
			<script>
				alert('Your message has been sent!');
				window.location.href='index.php';</script>";
		}else {
			echo "Your message could not be sent!";
		}
	}

}else {
	header("Location:share.php");
}

?>