<?php
include 'common.php';
include 'db.php';

dbConnect('animal_kingdom');

$sql = "SELECT COUNT(*) FROM animals WHERE name = '$_POST[name]'";
$result = mysql_query($sql);

if(!$result){
			message('A database error occured in processing your submission.\n' .
					'If this error persists, please contact you@example.com.');
}

if(@mysql_result($result,0,0) > 0){
			message('An animal already exists in the database with the chosen name. Please use the modify or delete options instead.');
}

$sql = "INSERT INTO animals SET
		name = '$_POST[name]',
		species = '$_POST[species]',
		diet = '$_POST[diet]'";
if (!mysql_query($sql))
	error('Numero Dos: A database error occurred in processing your '.
	'submission.\nIf this error persists, please '.
	'contact you@example.com.');

message("The new animal has been successfully registered in the database.");
?>