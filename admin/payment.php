<?php

require "db.php";

//read data
if ($_SERVER['REQUEST_METHOD'] === "GET") 
{
	if (isset($_GET['id'])) 
	{
		$sql = "SELECT * FROM payment WHERE id = ".$_GET['id'];
		$result = $con-> query($sql);

		header("HTTP/1.1 200 OK");
		echo json_encode($result-> fetch_assoc());
	}
	else
	{
		$sql = "SELECT * FROM payment";
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

//insert data
if ($_SERVER['REQUEST_METHOD'] === "POST") 
{
	$orderid  = $_POST['orderid ']; 
	$total	  = $_POST['total']; 
	$payment  = $_POST['payment'];
	$tableNo  = $_POST['tableNo'];
	$date 	  = date('d-m-y h:i:s');
	$status   = $_POST['status'];
	$waiterId = $_POST['waiterId'];

	$sql = "INSERT INTO payment(orderid,total,payment,dateTime,status,waiterId ) VALUES ('$orderid ','$total','$payment','$date','$status','waiterId')";

	if($con-> query($sql) === TRUE)
	{
		header("HTTP/1.1 200 OK");
		echo json_encode(array('message' => 'success', ));
	}
	else
	{
		header("HTTP/1.1 403 ERROR");
		echo json_encode(array('message' => 'error'));
	}
}

?>