<?php

require_once('DBconnect.php');


if(isset($_POST['fn'])&& isset($_POST['v'])){
	$a = $_POST['fn'];	
	$c = $_POST['v'];
	
	
	$sql = "DELETE FROM `cars` WHERE $a='$c';";
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_affected_rows($conn)){
	         
		header("Location:G3_feedback.php");
	}
	else{
		 header("Location:G3_operation_failed.php");
		
	}
	
}


?>