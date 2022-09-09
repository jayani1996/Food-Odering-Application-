<?php

require "../db.php";

//read data
if ($_SERVER['REQUEST_METHOD'] === "GET") 
{
	if (isset($_GET['menuId'])) 
	{
		$sql = "SELECT * FROM orders WHERE orderId  = ".$_GET['id'];
		$result = $con-> query($sql);

		header("HTTP/1.1 200 OK");
		echo json_encode($result-> fetch_assoc());
	}
	else
	{
		$sql = "SELECT * FROM orders";
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
	$oderMenuId = $_POST['oderMenuId ']; 
	$qty		= $_POST['qty']; 
	$price		= $_POST['price'];
	$tableNo 	= $_POST['tableNo'];
	$orderDate 	= date('d-m-y h:i:s');;

	$sql = "INSERT INTO orders(oderMenuId,qty,price,tableNo,orderDate) VALUES ('$oderMenuId ','$qty','$price','$tableNo','$orderDate')";

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