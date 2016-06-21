<?php 
$id=$_REQUEST['id'];
	$title="";
	$question="";
	$description="";
	$code="";
	$date="";

if($id==1){
 $title="Programming Question #1";
 $question="I am having trouble with this course.";
 $description="I think I am in wrong court.";
 $code="alert(This is a messeage)";
 $date="June 3, 2016";
}
elseif($id==2){
 $title="Programming Question #2";
 $question="What is the use of Laravel.";
 $description="I think I am in wrong court.";
 $code="alert(This is a messeage)";
 $date="June 5, 2016";
}

?>

<!DOCTYPE html>
<html>
  <head> 
    <title> <?php echo $title;?>  </title>

  </head>

  <body>
    <h1>  <?php echo $question;?> </h1>
   
    <pre> <?php echo $code;?> </pre>
 	
 	<p> Question Date: <?php echo $date;?></p>

  </body>
</html>

