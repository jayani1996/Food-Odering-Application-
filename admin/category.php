<?php

require "../db.php";

//read data
if ($_SERVER['REQUEST_METHOD'] === "GET") 
{
	if (isset($_GET['id'])) 
	{
		$sql = "SELECT * FROM category WHERE catId  = ".$_GET['id'];
		$result = $con-> query($sql);

		header("HTTP/1.1 200 OK");
		echo json_encode($result-> fetch_assoc());
	}
	else
	{
		$sql = "SELECT * FROM category";
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
	$catName = $_POST['categoryName']; 
	//echo $catName;
	$sql = "INSERT INTO category(catName) VALUES ('$catName')";

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

//update data
if ($_SERVER['REQUEST_METHOD'] === "PUT") 
{
	if (isset($_GET['id'])) 
	{
		$updateId = $_GET['id'];
		$updateName = $_GET['catName'];
		//$updateImg = $_GET['catImage']);
		//$updateStatus = $_GET['status'];
		
		$sql = "UPDATE category SET catName='$updateName' WHERE catId = '$updateId'";

		if($con->query($sql) === true){
                header("HTTP/1.1 200 ok");
                echo json_encode(array('message' => 'Success'));
            }
            else{
                header("HTTP/1.1 200 Error");
                echo json_encode(array('message' => 'Error'));
            }
		
	}
}

//delete data
if ($_SERVER['REQUEST_METHOD'] === "DELETE") 
{
	if (isset($_GET['id'])) 
	{
		$Id = $_GET['id'];
		
		$sql = "DELETE FROM category WHERE catId = '$Id'";

		if($con->query($sql) === true){
                header("HTTP/1.1 200 ok");
                echo json_encode(array('message' => 'Success'));
            }
            else{
                header("HTTP/1.1 200 Error");
                echo json_encode(array('message' => 'Error'));
            }
		
	}
}


?>