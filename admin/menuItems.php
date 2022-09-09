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

//insert data
if ($_SERVER['REQUEST_METHOD'] === "POST") 
{
	$menuName 	= $_POST['menuName']; 
	$menuImg 	= $_POST['menuImg'];///image eka yanne ne
	$image		= "../img/".$menuImg;
	$description= $_POST['description']; 
	$price		= $_POST['price'];
	$status 	= $_POST['status'];
	$categoryId =$_POST['categoryId'];

	$sql = "INSERT INTO menu(menuName,menuImg,description,price,status,categoryId) VALUES ('$menuName','$image','$description','$price','$status','$categoryId')";

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
		$updateId 			= $_GET['id'];
		$updateMenuName 	= $_POST['menuName']; 
		$updateMenuImg 		= $_POST['menuImg'];
		$updateDescription	= $_POST['description']; 
		$updatePrice		= $_POST['price'];
		$updateStatus 		= $_POST['status'];
		$updateCategoryId 	=$_POST['categoryId '];
		
		$sql = "UPDATE menu SET
				menuName='$updateMenuName',
				menuImg='$updateMenuImg',
				description='$updateDescription',
				price='$updatePrice',
				status=$updateStatus,
				categoryId='$updateCategoryId' 
				WHERE menuId = '$updateId' ";

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
		
		$sql = "DELETE FROM menu WHERE menuId = '$Id'";

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