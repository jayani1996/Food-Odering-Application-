<?php

require "../db.php";

//read data
if ($_SERVER['REQUEST_METHOD'] === "GET") 
{
	if (isset($_GET['id'])) 
	{
		$sql = "SELECT * FROM menu WHERE menuId  = ".$_GET['id'];
		$result = $con-> query($sql);

		header("HTTP/1.1 200 OK");
		echo json_encode($result-> fetch_assoc());
	}
	else
	{
		$sql = "SELECT * FROM menu";
		$result = $con-> query($sql);

		$records = array();
		while ($row = $result-> fetch_assoc()) 
		{
			$records[] = $row;
		}

		header("HTTP/1.1 200 OK");
		echo json_encode($records);
	}
}



?>