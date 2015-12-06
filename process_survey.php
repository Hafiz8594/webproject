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


	// echo'<table border=1>
	// <tr><th>Name</th><th>Comment</th><th>Rating</th></tr>';

	// // Create SQL statement
	// $query2 = "SELECT * FROM survey_data";
	// // Execute SQL statement
	// if (!($result2 = @ mysqli_query ($dbc, $query2)))
	//   echo 'Error querying database...';
	// // Display results
	// while ($row = @ mysqli_fetch_array($result2))
	//   echo "<td>{$row["name"]}</td>
	// <td>{$row["comment"]}</td>
	// <td>{$row["rating"]}</td></tr>";

?>