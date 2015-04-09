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

		<script type="text/javascript" src="https://www.google.com/jsapi"></script>
		<script type="text/javascript">

		      // Load the Visualization API and the piechart package.
		      google.load('visualization', '1.0', {'packages':['corechart']});

		      // Set a callback to run when the Google Visualization API is loaded.
		      google.setOnLoadCallback(drawChart);

		      // Callback that creates and populates a data table,
		      // instantiates the pie chart, passes in the data and
		      // draws it.
		      function drawChart() {

			// Create the data table.
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Status');
			data.addColumn('number', 'Available');
			data.addRows([
			  ['Available', 50],
			  ['Taken', 350],
			]);

			// Set chart options
			var options = {'width':400, 'height':300, 'backgroundColor':'transparent'};

			// Instantiate and draw our chart, passing in some options.
			var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
			chart.draw(data, options);
		      }
		</script>	




		
		 <script src="https://maps.googleapis.com/maps/api/js"></script>
		    <script>
		      function initialize() {
			var mapCanvas = document.getElementById('map-canvas');
			var mapOptions = {
			  center: new google.maps.LatLng(38.434684, -78.861557),
			  zoom: 18,
			  mapTypeId: google.maps.MapTypeId.SATELLITE 
			}
			var map = new google.maps.Map(mapCanvas, mapOptions)
		      }
		      google.maps.event.addDomListener(window, 'load', initialize);
		    </script>
	

		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.js"></script>

	</head>
	<body>
		

		<div class="nav">
			<ul class="nav nav-pills">
				<li role="presentation"><a href="index.html">Home</a></li>
				<li role="presentation" class="active"><a href="Right_now.html">Right Now</a></li>
				<li role="presentation"><a href="#">Projected</a></li>
				<li role="presentation"><a href="aboutus2.html">About Us</a></li>
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
  							<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true" style="width:636px">
   			 				Select Lot
   			 				<span class="caret"></span>
 			 				</button>
				 				 <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1" style="width:636px">
				   				 	<li role="presentation"><a role="menuitem" tabindex="-1" href="showlot.php?lot=D2">D2</a></li>
				   					<li role="presentation"><a role="menuitem" tabindex="-1" href="showlot.php?lot=C10">C10</a></li>
				    				<li role="presentation"><a role="menuitem" tabindex="-1" href="showlot.php?lot=C11">C11</a></li>
				    				<li role="presentation"><a role="menuitem" tabindex="-1" href="showlot.php?lot=C12">C12</a></li>
				  				</ul>
						</div>


				<!--<div id="map2" style="postion: relative; background-image: url(lotimage_<?php echo $thislot;?>.PNG); background-repeat;no-repeat; width:636px; height:364px"> -->			
					<!--div that hold the google map-->
					<div id="map-canvas"></div>
					

					<p id="spots" style="width:40px;padding:2px;background-color:red;font-weight:bold;font-size:22px;color:white;">	
					<?php echo $available_number_of_spots;?>

					<!--Div that will hold the pie chart-->
    					<div id="chart_div"></div>

					

					</p>
				
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
