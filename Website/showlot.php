<?php $host="localhost";
$thislot= $_GET['lot'];
$port=3306;
$socket="";
$user="root";
$password="hellocheckin";
$dbname="Parking";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 

$query = "SELECT * FROM Parking.lot Where lot_name= '$thislot'";


if ($stmt = $con->prepare($query)) {
    $stmt->execute();
    $stmt->bind_result($field1, $field2, $field3, $available_number_of_spots, $field5, $field6, $field7);
    $i=1;
    while ($stmt->fetch()) {
        #printf("%s, %s, %s, %s, %s, %s, %s,\n", $field1, $field2,$field3, $available_number_of_spots, $field5, $field6, $field7);
    $i=$i+1;
    }
    $stmt->close();
}


?>
<!---<H4>Lot Selected: <?php echo $thislot;?></H4>
<H4>Available Number of Spots: <?php echo $available_number_of_spots;?></H4>--->

<!DOCTYPE html>
<html>
	<head>
		<title>ParkJMU</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css.map">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css.map">
		<link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css" rel="stylesheet">
		<link rel="stylesheet" href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css">
		<link rel="Stylesheet" href="main.css">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.js"></script>
	</head>
	<body>
		

		<div class="nav">
			<ul class="nav nav-pills">
				<li role="presentation"><a href="index.html">Home</a></li>
				<li role="presentation" class="active"><a href="Right_now.html">Right Now</a></li>
				<li role="presentation"><a href="#">Projected</a></li>
			</ul>
		</div>


		<div class="jumbotron">
			<div class="container">

				<h1>Right Now</h1>
				<p>See the status of any lot...right now!</p>
			</div>
		</div>

		<div class="map">
			<div class="container">



				<div id="dropdown" class="dropdown">
  							<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true" style="width:800px">
   			 				Select Lot
   			 				<span class="caret"></span>
 			 				</button>
				 				 <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1" style="width:800px">
				   				 	<li role="presentation"><a role="menuitem" tabindex="-1" href="showlot.php?lot=D2">D2</a></li>
				   					<li role="presentation"><a role="menuitem" tabindex="-1" href="showlot.php?lot=C10">C10</a></li>
				    				<li role="presentation"><a role="menuitem" tabindex="-1" href="showlot.php?lot=C11">C11</a></li>
				    				<li role="presentation"><a role="menuitem" tabindex="-1" href="showlot.php?lot=C12">C12</a></li>
				  				</ul>
						</div>


				<div id="map2" style="postion: relative; background-image: url(lotimage_<?php echo $thislot;?>.PNG); background-repeat;no-repeat; width:636px; height:364px"> 
				<!---<img Style="position:absolute; TOP:300px; LEFT:400px; WIDTH:800px; HEIGHT:550px" src="Right_now_mock_pic.png"> -->


					<p id="spots" style="width:40px;padding:2px;background-color:red;font-weight:bold;font-size:22px;color:white;">	
					<?php echo $available_number_of_spots;?>
					</p>
				</div>
			</div>
		</div>



			<div class="about">
			<div class="container">
				<div class="panel panel-default" style="width: 1200px">
					<div class="panel-heading">
		    			<h3 class="panel-title">Contact us</h3>
		  					</div>
		 						<div class="panel-body">
		 							<ul>
		 								<li>email@emailhost.com</li>
										<li><a href="http://www.jmu.edu/parking/"> JMU Parking Services</a></li>
							
		 							</ul>
		    						
		    						<ul id="face" class="pull-right">
		    							<li><a href="https://www.facebook.com/">Like us on facebook!</a></li>
		    						</ul>
		 						</div>
							</div>
					</div>
				</div>
			</div>
		</div>

	</body>
</html>
