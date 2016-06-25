<?php 
$id=$_REQUEST['id'];


if($id==1){
$article=array(
		'title'=>'New Course is launched',
		'heading'=>'New Course Announcment.',
		'description'=>'Course is based on Animation technology which will help you to grow in industry.',
		'article'=>'Today Media InfoTech launched new course. This Course based on Animation technology which will help you to grow in industry. Keep in touch for more Announcments.',
		'keywords'=>'Course, Media InfoTech, Animation Technology',
	);
}

elseif($id==2){ 
	$article=array(
		'title'=>'Learn C Programming',
		'heading'=>'Admissions Open for C Programming',
		'description'=>'Main objective of this course is to teach basics of C programming to student',
		'article'=>'Today Media InfoTech launched new course. This Course based on Animation technology which will help you to grow in industry. Keep in touch for more Announcments.',
		'keywords'=>'C programming, Course, Media InfoTech',
		);
}

else{
		$article=array(
		'title'=>'',
		'heading'=>'',
		'description'=>'',
		'article'=>'',
		'keywords'=>'',
		);
}
?>


<!DOCTYPE html>
<html>
<head>
  <title> Media InfoTech Todays article : <?php echo $article['title']?> </title>
</head>

<body>
 <h1> <?php echo $article['heading']?></h1>
 <h3> <?php echo $article['description']?> </h3>
 <p> <?php echo $article['article']?> </p>
 <pre> <?php echo $article['keywords']?> </pre>
</body>
</html>