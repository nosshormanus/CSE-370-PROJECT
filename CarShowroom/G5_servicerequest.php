<?php
  include('G5_serviceconnection.php');

  if (array_key_exists('submit', $_POST)) {
    $Vehicle_name = $_POST['Vehicle-name'];
    $Car_brand = $_POST['Car-brand'];
    $Car_Model = $_POST['Car-model'];
    $License_number = $_POST['License-number'];
    $Problem_description = $_POST['Problem-description'];


    $query ="INSERT INTO `service-requests` (`Vehicle Name`,`Car Brand`, `Car Model`, `License Number`, `Problem Description`) VALUES('$Vehicle_name','$Car_brand','$Car_Model','$License_number','$Problem_description');";

    mysqli_query($link,$query);
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>House Of Cars Showroom Website</title>
    <style>
    body{
    	font-family:"Comic Sans MS" , sans-serif;
	background-color: white;
    	margin:0px;

    }
    header{

font-family: "Comic Sans MS" , sans-serif;
text-align: center;
background-image: url("https://drive.google.com/uc?export=view&id=1oQKRT-4my66uEFAkZkVJlsHLmML90uaZ");
        	color: white;
        	padding:65px;
        	font-size: 23px;

        }
        footer{

font-family: "Comic Sans MS" , sans-serif;
text-align: center;
background-image: url("https://drive.google.com/uc?export=view&id=1EX5lbvUu4YrKmP1BMtIc0gfCMxsE_bzv");
        	color:white;
			margin-top:10%;
        	padding:30px;
        	font-size: 20px;


        }
 nav{
background-color: lightgrey;
overflow: hidden;

}
  nav ul{
  	list-style: none;
  	padding: 0px;
  	margin: 0px;

  }
  nav ul li{
  	float: left;

  }
  nav ul li a{
  	text-decoration: none;
  	color:black;
  	padding: 10px 25px;
  	display: inline-block;
  	font-size: 18px;

  }
  nav ul li a:hover{
  	background-color: yellow;
  }
  nav ul li a.active{
  	background-color: grey;
  }

  aside{
  	background-color: lightyellow;
  	float: left;
  	width: 200px;
  	text-align: center;
  	height:200px;
  	overflow-y: scroll;
}

aside ul{
	list-style-type: none;
	padding: 0px;
	margin: 0px;

}
aside ul li a{
	text-decoration: none;
	color:black;
	padding:10px 20px;
	display: block;

}
aside ul li a:hover{
	background-color:yellow;
	color:black;
}
section{
	margin-left: 200px;
	border-left: 2px solid grey;
	padding: 10px;

}
details{
background-color: lightgrey;
margin: 5px;
padding: 10px;
border-radius: 50px;


}
.title{
	background-image: url("https://drive.google.com/uc?export=view&id=1gTPxe82wXyg1QuIFEAlZAS7KhnlVFH85");
  width: 100%;
  padding: 12px 20px;
  margin-top: 40px;
  text-align:center;
  text-transform: Uppercase;
  font-weight: 800;
  font-size: 30px;
}

.form_design{

    margin-top: 50px;
	margin-bottom: 50px;
	margin-left: 25%;
	width: 50%;
}

.service-form
{
  margin-top: 50px;
  margin-bottom: 50px;
  margin-left: 25%;
  width: 50%;
  background-color: #34495E;
  padding: 20px;

}

#service-text
{
  color:#A9CCE3;
}

input[type=text], input[type=password]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border-radius: 15px;
}

input[type=button], input[type=submit], input[type=reset] {
  background-color: grey;
  border: none;
  border-radius: 10px;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  margin-left: 40%;
}



    </style>


</head>
<body>
<!-- main header -->
<header>
	<h1>House Of Cars Showroom</h1>
	<p style="color:white;">"A site which can make your dream car real"</p>
</header>
<!-- main nav -->
<nav>
	<ul>
	<li><a href="index.php">Home</a></li>
	<li><a href="G5_servicerequest.php">Service Request</a></li>
	<li><a href="G2_mechaniclogin.php">Mechanics</a></li>
	<li><a href="G2_userlogin.php">View Cars</a></li>
	<li><a href="G2_adminlogin.php">Admin Panel</a></li>



</ul>
</nav>

<!-- contents -->
<div class="title">Make Service Request</div>
<form class="service-form" method="post">
<div id="service-text">Vehicle name:<input type="text" name="Vehicle-name" placeholder="Type vehicle name">
  <p>Car Brand:
    <select name="Car-brand">
      <option>BMW</option>
      <option>Chiron Super Sport</option>
      <option>Ferrari</option>
      <option>Tesla</option>
    </select> 
  </p>
  <p>Car Model:<input type="text" name="Car-model" placeholder="Type vehicle model"></p>
  <p>License Number:<input type="text" name="License-number" placeholder="Type Licence number"></p>
  <p>Problem Description:<input type="text" name="Problem-description" placeholder="Describe your problem"></p>
  <input type="submit" name="submit"></div>
</form>

<div class="title"><a href="G5_serviceretrieve.php">Service requests</a></div>


<!-- main footer -->
<footer>
<h2 style="color:blue;">Copyright &copy;2022 , House Of Cars Showroom</h2>
<p style="color:red;">All rights are reserved.</p>
<small style="color:blue;">Developed & maintained by Showmen,Shuvo,Shakib,Abdullah,Omar</small>
</footer>



</body>
</html>
