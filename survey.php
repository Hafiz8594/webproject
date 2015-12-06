<!DOCTYPE HTML>
<html>

	<?php
	include 'common.php';
	include 'db.php';
	?>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/JavaScript" src="script.js"></script>
		<title>Animal Kingdom Survey</title>
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
		</header><br />

		<div id="centercol">
			<h4>Customer Satisfaction Survery</h4>

			<form method="post" action="process_survey.php" id="form" name="form">

				<fieldset>
					<legend>Personal Info</legend>
						<label>Name:</label> <input type="text" name="name" id="name"/><br />
						<label>Email:</label> <input type="text" name="email" id="email"/><br />
				</fieldset>

				Please select your favorite animal: 
					<?php
						dbConnect('animal_kingdom');
						$sql = "SELECT name FROM animals";
						$query = mysql_query($sql);
						echo "<select name='animal' id='animal'>";
							echo "<option value=''>Select an animal</option>";
							while($query_item = mysql_fetch_array($query)){
								echo "<option value='$query_item[name]'>".htmlspecialchars($query_item["name"])."</option>";
							}
						echo "</select>";
					?><br />

				<br />
				<br />
				Please rate your Animal Kingdom experience from 1 - 5: <input type="text" name="rating" id="rating"/>
				<br />

				<br />
				<br />
				Please describe your experience in a few words:<br />
				<textarea name="comment" id="comment"></textarea>

				<br />
				<br />
				<input type="submit" value="Submit" onclick="return validateForm(this.form)">
				<button type="reset" value="Reset">Reset</button>

			</form>


		</div>

		<br />
		<footer>
			Thank you for visiting Hafiz's Animal Kingdom. We hope to see you again soon!
		</footer>

	</body>

</html>