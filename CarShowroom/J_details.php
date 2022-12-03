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

  <section id = "section1">
		<div class="title" align="center"> CAR List </div><br><br>
    <body>
    <nav class="navbar navbar-inverse">
     <div class="container-fluid">
      <h3 style="color: #4d0000;" align='center'>Find your dream here</h3>
      </div>
     </nav>
     <div class="container">
      <h3 style="text-align: center;font-weight: bold;"></h3>
      <div class="row">
      <from class="from-horizontal" action="index=php" method="POST">
      <div class="form-group">
    		<h3> Search according to your Expectation</h3>
      <lebel class="col-lg-2 control-label">Name</label>
      <div class="col-lg-4">
      <input type="text" class="from-control" name="name" placeholder="Name">
      </div>
      </div>

    	<div class="from-group">
      <label class="col-lg-2 control-label">Brand</label>
      <div class="col-lg-4">
      <select class="course">
     <option>Select</option>
     <option>BMW</option>
     <option>Chiron Super Sport</option>
     <option>Ferrari</option>
    </select>
    </div>
    </div>

    <div class="from-group">
    <label class="col-lg-2 control-label">Price</label>
    <div class="col-lg-4">
    <select class="course">
    <option>Select</option>
    <option><2000000</option>
    <option><5000000</option>
    <option><10000000</option>
    </select>
    </div>
    </div>

<table width="100%">
	<a><th>Car List</th></a>

</table>
<br>


 <div style="margin-left:5%; margin-right:5%; margin-top:50px; margin-bottom:50px;text-align:center;background: #19e600">
<br>


   <table width="100%">

            <tr>

                <th >Model</th>
				<th>Price</th>

            </tr>

		<div style="margin-left:3%; margin-right:3%">
		 <img src="https://images.carandbike.com/car-images/large/maruti-suzuki/alto-800/maruti-suzuki-alto-800.webp?v=37" width="600" height="380" ></a>
<img align="right" src="https://images.carandbike.com/car-images/large/hyundai/creta/hyundai-creta.webp?v=57" width="600" height="380">





			<?php
			require_once("DBconnect.php");
			$sql = "SELECT * FROM cars";
			$result = $conn-> query($sql);
			if($result-> num_rows > 0){


				while($row = $result-> fetch_assoc()){
				echo "<tr><td>".$row["Model"]."</td><td>".$row["Price"]."</td></tr>";

				}
				echo "</table>";
			}
else{
	echo "nothing";
}
	$conn-> close();
			?>





		</table>







<!-- main footer -->
<footer>
<h2 style="color:blue;">Copyright &copy;2022 , House Of Cars Showroom</h2>
<p style="color:red;">All rights are reserved.</p>
<small style="color:blue;">Developed & maintained by Showmen,Shuvo,Shakib,Abdullah,Omar</small>
</footer>


</body>
</html>
