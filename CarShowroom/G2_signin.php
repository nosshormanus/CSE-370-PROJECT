<?php
//connecting with database

require_once('DBconnect.php');

//check input form

if(isset($_POST['uid']) && isset ($_POST['pass'])){
	
	// query to check username password
	
	$i = $_POST['uid'];
	$p = $_POST['pass'];
	$sql = "select * from userdetails where id = '$i' and password = '$p'";
	
	// query execute
	
	$res = mysqli_query($conn, $sql);
	
	
	//check return set
	if( mysqli_num_rows($res)!=0){
		echo "All okay enter";
	header("Location: J_details.php");	
}
else{
	echo "Incorect";
	
	header ("Location: G2_usersignup.php");
}

	
}


?>