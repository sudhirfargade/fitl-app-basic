<?php 
$id=$_REQUEST['id'];
	
  //Left side of = sign call Key and right side calls value


  //Sets the empty varibales using array
  $object=array(
      'title'=>'',
      'question'=>'',
      'description'=>'',
      'code'=>'',
      'date'=>'',
    );

  //database connection credential
  $servername='localhost';
  $username='homestead';
  $password='secret';

  //create connection
  $connection = new mysqli($servername, $username, $password);

  //check of connection error
  if($connection->connect_error){
    echo 'Connection Failed: ' . $connection->connect_error;
    exit;
  }

  //otherwise connection successful message
  //echo 'Connected Successfully';

  //connect to "fitl" database
  $connection->select_db('fitl');

  //Query to select the object
  $sql = 'select * FROM questions WHERE id = ' . $id;


  //Execute the query
  $result = $connection->query($sql);


  //Check for and retrive the array
    if($result->num_rows > 0)
      $object = $result->fetch_assoc();
    // echo '<pre>';
    //print_r($object);
    //echo '</pre>';

?>

<!DOCTYPE html>
<html>
  <head> 
    <title> <?php echo $object['title'];?>  </title>

  </head>

  <body>
    <h1> <?php echo $object['question'];?> </h1>
    <h3>  <?php echo $object['description']?> </h3>
   
    <pre> <?php echo $object['code'];?> </pre>
 	
 	<p> Question Date: <?php echo $object['submitted_at'];?> </p>

  </body>
</html>

