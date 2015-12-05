<!DOCTYPE HTML>
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
	</style>
	<!-- END OF INTERNAL STYLE SHEET!!! -->

	<script type="text/javascript">
	function submitForm(){
		var name = document.forms["animal_form"]["name"];
		var species = document.forms["animal_form"]["species"];
		var diet = document.forms["animal_form"]["diet"];
		if(name.value == "" || species.value == "" || diet.value == ""){
			alert("Please fill in all values.");
			return false;
		} else {
			document.forms["animal_form"].submit();
		    document.forms["animal_form"].reset();
			return true;
		}
	}
	</script>

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
	
	<br/><br />
		Please fill out all the details to add a new animal into the Animal Kingdom database.<br /><br/>
	<form name="animal_form" method="post" action="processnewanimal.php">
		<label>Name:</label><input type="text" name="name" required><br />
		<label>Species:</label><input type="text" name="species" required><br />
		<label>Diet:</label><input type="text" name="diet" required><br/><br/>
		<input type="button" value="Add" onclick="submitForm()">
	</form>
</body>
</html>