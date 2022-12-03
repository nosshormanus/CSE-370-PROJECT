<?php
	
	$mysql_host = 'localhost';
	$mysql_user = 'root';
	$mysql_password = '';

	$link = mysqli_connect($mysql_host,$mysql_user,$mysql_password);

	if(mysqli_connect_error())
	{
		die('cannot connect');
	}
	else
	{
		mysqli_select_db($link,'car');
	}

?>