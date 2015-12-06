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

	<!-- THIS IS MY INTERNAL STYLESHEET!!! -->
	<style>
		h2 {
			color: #218868; /* OVERRIDES THE COLOR PROPERTY (RED) SPECIFIED IN THE EXTERNAL STYLE SHEET */
			text-transform: uppercase;
		}
	</style>
	<!-- END OF INTERNAL STYLE SHEET!!! -->
	<script type="text/javascript">
		function processDelete(){
			//document.forms["animalselect"].reset();
			document.forms["animalselect"].submit();
			setTimeout(function () { window.location.reload(); }, 30);
			alert("The animal has been succesfully deleted from the database.");
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
			<li><a href="files.html">External Files</a></li>
		</ul>
	</header><br /><br />
	Select the animal you would like to delete: 
	
	<form style="display: inline;" name="animalselect" method="post" action="processdelete.php">
		<?php
			dbConnect('animal_kingdom');
			$sql = "SELECT name FROM animals";
			$query = mysql_query($sql);
			echo "<select name='names'>";
				echo "<option value=''>Select an animal</option>";
				while($query_item = mysql_fetch_array($query)){
					echo "<option value='$query_item[name]'>".htmlspecialchars($query_item["name"])."</option>";
				}
			echo "</select>";
		?><br /><br />
		<input type="button" value="Delete" onclick="processDelete()">
	</form>

</body>
</html>