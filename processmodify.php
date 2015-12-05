<?php
include 'common.php';
include 'db.php';

dbConnect('animal_kingdom');

$sql = "UPDATE animals SET species = '$_POST[species]', diet = '$_POST[diet]' WHERE name = '$_POST[names]'";

$result = mysql_query($sql);

if(!$result){
			message('A database error occured in processing your submission.\n' .
					'If this error persists, please contact you@example.com.');
}

message('The animal has been successfully updated in the database.');

?>