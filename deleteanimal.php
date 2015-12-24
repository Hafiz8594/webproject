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
	<?php include 'nav.php' ?>

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