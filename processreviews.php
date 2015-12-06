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

	<header>
		<h1>Welcome to Hafiz's Animal Kingdom!</h1>
		<ul class="main_nav">
			<li><a href="index.html">Home</a></li>
			<li><a href="manage.php">Manage Animals</a></li>
			<li><a href="view.php">View Animals</a></li>
			<li><a href="survey.php">Take Survey</a></li>
			<li><a href="reviews.php">View Reviews</a></li>
			<li><a href="files.html">External Files</a></li>
		</ul>
	</header><br /><br />

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