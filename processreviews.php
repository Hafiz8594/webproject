<?php
include 'common.php';
include 'db.php';
?>

<!DOCTYPE HTML>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Hafiz's Animal Kingdom</title>
</head>

<body>

	<?php include 'nav.php' ?>

	<center>
	<?php 

		dbConnect('animal_kingdom');
		echo'<table border=1>
		<tr><th>Name</th><th>Favorite Animal</th><th>Rating</th><th>Comment</th></tr>';

		// Create SQL statement
		if($_POST["reviews"] == "*"){
			$sql = "SELECT * FROM survey";
		} else {
			$sql = "SELECT * FROM survey WHERE rating = '$_POST[reviews]'";
		}
		// Execute SQL statement
		if (!($result = @ mysql_query ($sql)))
		  echo 'Error querying database...';
		// Display results
		while ($row = @ mysql_fetch_array($result))
		  echo "<tr><td>{$row["name"]}</td>
		<td>{$row["animal"]}</td>
		<td>{$row["rating"]}</td>
		<td>{$row["comment"]}</td></tr>";
	?>
	</center>
</body>
</html>