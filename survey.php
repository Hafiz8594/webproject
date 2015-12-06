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

	<body onload="welcome();">


		<header>
			<h1>Animal Kindgom Survey</h1>
		</header>

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
				<button type="button" onClick="window.open(process_survey.php)">View Comments</button>
				<input type="submit" value="Submit" onclick="return validateForm(this.form)">
				<button type="reset" value="Reset">Reset</button>

			</form>


		</div>

		<br />
		<footer>
			JavaScript can be found here: <a href="script.js">script.js</a><br />
			Stylesheet can be found here: <a href="style.css">style.css</a>
		</footer>

	</body>

</html>