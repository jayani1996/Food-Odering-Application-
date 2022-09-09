<?php

$con = new mysqli('localhost','root','','ovinmo');

if ($con-> connect_error) {
	die("DB Connection Error");
}
?>