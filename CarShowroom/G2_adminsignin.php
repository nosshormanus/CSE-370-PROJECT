<?php
//connecting with database

require_once('DBconnect.php');

//check input form

if(isset($_POST['aid']) && isset ($_POST['apass'])){
	
	// query to check username password
	
	$e = $_POST['aid'];
	$f = $_POST['apass'];
	$sql = "select * from admin where id = '$e' and password = '$f'";
	
	// query execute
	
	$res = mysqli_query($conn, $sql);
	
	
	//check return set
	if( mysqli_num_rows($res)!=0){
		echo "All okay enter";
	header("Location: G3_Selectaction.php");	
}
else{
	echo "Incorect";
	
	header ("Location: index.php");
}

	
}


?>