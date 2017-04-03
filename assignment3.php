<?php 
	include 'ChildClass.php';
	$first=new ParentClass("Brandon", "Torchia", "CS", "PGH");
	$second=new ChildClass("Ryan", "Torchia", "Criminal Justice", "PGH");

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment 3</title>

	<link rel="stylesheet" href="assignment3.css">
</head>
<body>
  <h1>Object Oriented PHP!!</h1>
  <p>Here is some info about me</p>
  <?= $first; ?>
  <p>Here is info about my brother</p>
  <?= $second; ?>
  <p>He changed majors in college</p>
  <?= $second->setMajor('Marketing'); ?>
  <?= $second; ?>
  <p>He decided to move</p>
  <?= $second->setHomeTown('NYC'); ?>
  <?= $second; ?>
</body>
</html>