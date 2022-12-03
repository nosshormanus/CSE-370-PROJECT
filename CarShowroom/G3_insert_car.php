<?php

require_once('DBconnect.php');


if(isset($_POST['id']) && isset($_POST['man']) && isset($_POST['pro']) && isset($_POST['mod']) && isset($_POST['clo']) && isset($_POST['pri']) && isset($_POST['fe']) && isset($_POST['ye'])){
	
	$a = $_POST['id'];	
	$b = $_POST['man'];
	$c = $_POST['pro'];
	$d = $_POST['mod'];
	$e = $_POST['clo'];
	$f = $_POST['pri'];
	$g = $_POST['fe'];
	$h = $_POST['ye'];
	
	$sql = " INSERT INTO cars VALUES( '$a', '$b','$c', '$d', '$e', '$f','$g','$h') ";
	
	
	$result = mysqli_query($conn, $sql);
	
	
	if(mysqli_affected_rows($conn)){
	         
		header("Location:G3_feedback.php");
	}
	else{
		
		header("Location:G3_operation_failed.php");
	}
	
}


?>