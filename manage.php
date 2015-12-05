<!DOCTYPE hmtl>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Hafiz's Animal Kingdom</title>

	<!-- THIS IS MY INTERNAL STYLESHEET!!! -->
	<style>
		h2 {
			color: #218868; /* OVERRIDES THE COLOR PROPERTY (RED) SPECIFIED IN THE EXTERNAL STYLE SHEET */
			text-transform: uppercase;
		}

		div.main_content {

		}
	</style>
	<!-- END OF INTERNAL STYLE SHEET!!! -->

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
		</ul>
	</header>
	<center><br/><br />
		Select an action to perform on the animal database:<br /><br/>
		<button onClick = "location.href='newanimal.php'" style="width: 200px; height: 60px" type="button">Add</button><br />
		<button onClick = "location.href='deleteanimal.php'" style="width: 200px; height: 60px" type="button">Delete</button><br />
		<button onClick = "location.href='modifyanimal.php'" style="width: 200px; height: 60px" type="button">Update</button><br />
	</center>
	

</body>

</html>