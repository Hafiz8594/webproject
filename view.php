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

	<?php include 'nav.php' ?>
	
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