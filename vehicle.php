<?php
//for following program execution use url like 
// http://fitl-app-basic.local/vehicle.php?type=truck
 	$type=$_REQUEST['type'];


 if($type=='car'){

 	//create array of vehicle
 	$vehicle=array(
 			'title'=>'Car Information page',
 			'make'=>'Bajaj Automobiles',
 			'model'=>'Baleno',
 			'year'=>'2015',
 		); 
 }
 elseif ($type=='truck') {
 	$vehicle=array(
 		'title'=>'Truck information page',
	 	'make'=>'Tata Automobiles Pvt. Ltd.',
	 	'model'=>'Jumbo Truck',
	 	'year'=>'2012',
 	);
 }
 else{
 //sets empty variables in else using array
 	$vehicle=array(
 			'make'=>'',
 			'model'=>'',
 			'year'=>'',
 		);
 }

 ?>



<!DOCTYPE html>
<html>
 <head> 
 	<title> <?php echo $vehicle['title'];?> </title>
 </head>

 <body>
 	<h1> <?php echo $vehicle['make'];?> </h1>
 	<p> <?php echo $vehicle['model'];?> </p>
 	<p> <?php echo $vehicle['year'];?> </p>
 </body>
</html>