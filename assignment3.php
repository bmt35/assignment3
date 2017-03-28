<?php 
	include 'ChildClass.php';
	$first=new ParentClass("B", "T", "CS", "PGH");
	$second=new ChildClass("L", "Z", "BIO", "PHIL");

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment 3</title>

	<link rel="stylesheet" href="assignment3.css">
</head>
<body>
  <h1>hi</h1>
  <p>here is some info about me</p>
  <?= $first; ?>
  <p>Here info about my child</p>
  <?= $second; ?>
  <p>Changing majors</p>
  <?= $second->setMajor('CHEM'); ?>
  <p>Here info about my child</p>
  <?= $second; ?>
  <p>I have decided to move</p>
  <?= $second->setHomeTown('NYC'); ?>
  <?= $second; ?>
	
</body>
</html>