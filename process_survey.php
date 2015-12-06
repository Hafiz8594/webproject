<?php
	include 'common.php';
	include 'db.php';

	dbConnect('animal_kingdom');

	$name = $_POST['name'];
	$email = $_POST['email'];
	$animal = $_POST['animal'];
	$comment = $_POST['comment'];
	$rating = $_POST['rating'];

	$sql = "INSERT INTO survey (name, email, animal, rating, comment) VALUES ('$name', '$email', '$animal', '$rating', '$comment')";

	$result = mysql_query($sql)
				or die('Error querying database');

?>