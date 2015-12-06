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
		function processModify(){
			//document.forms["animalselect"].reset();
			document.forms["animalmodify"].submit();
			document.forms["animalmodify"].reset();
			//setTimeout(function () { window.location.reload(); }, 10);
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
	Select to view all animals, or by species: 
	<form style="display: inline;" name="viewanimals" method="post" action="processview.php">
		<?php
			dbConnect('animal_kingdom');
			$sql = "SELECT DISTINCT species FROM animals";
			$query = mysql_query($sql);
			echo "<select name='species'>";
				echo "<option value='*'>All</option>";
				while($query_item = mysql_fetch_array($query)){
					echo "<option value='$query_item[species]'>".htmlspecialchars($query_item["species"])."</option>";
				}
			echo "</select>";
			?>
			<input type="submit" value="View Animals">

</body>


</html>