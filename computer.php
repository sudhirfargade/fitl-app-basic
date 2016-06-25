<?php 
// Defing REQUEST variable

 $comp=$_REQUEST['comp'];
 
 //
 if($comp=='desktop'){
 	$computer=array(
 			'title'=>'Welcome to Desktop Show room',
 			'type'=>'Desktop Computer',
 			'company'=>'Dell',
 			'configuration'=>'Processor I3, RAM 4GB, Hard Disk 1 TB',
 		);
 }
 elseif($comp='laptop'){
 	$computer=array(
 			'title'=>'Welcome to Laptop Show room',
 			'type'=>'Laptop Computer',
 			'company'=>'Lenevo',
 			'configuration'=>'Processor I3, RAM 4GB, Hard Disk 1 TB DVD writer',
 		);
 }
 else{
 	$computer=array(
 			'title'=>'',
 			'type'=>'',
 			'company'=>'',
 			'configuration'=>'',
 		);
 }

?>

<!DOCTYPE html>
<html>
<head>
 <title> <?php echo $computer['title']; ?> </title>
</head>
<body>
 <h1> <?php echo $computer['type']; ?> </h1>
 <p> <?php echo $computer['company']; ?> </p>
 <p> <?php echo $computer['configuration']; ?> </p>
</body>
</html>