<?php
//connecting with database

require_once('DBconnect.php');

//check input form

if(isset($_POST['mid']) && isset ($_POST['mpass'])){
	
	// query to check username password
	
	$v = $_POST['mid'];
	$q = $_POST['mpass'];
	$sql = "select * from mechanicdetails where id = '$v' and password = '$q'";
	
	// query execute
	
	$res = mysqli_query($conn, $sql);
	
	
	//check return set
	if( mysqli_num_rows($res)!=0){
		echo "All okay enter";
	header("Location: G4_mechanics.php");	
}
else{
	echo "Incorect";
	
	header ("Location: G2_mechanicsignup.php");
}

	
}


?>