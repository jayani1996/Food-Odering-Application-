<?php

require "../db.php";

//read data
if ($_SERVER['REQUEST_METHOD'] === "GET") 
{
	if (isset($_GET['id'])) 
	{
		$sql = "SELECT * FROM waiter WHERE waiterId  = ".$_GET['id'];
		$result = $con-> query($sql);

		header("HTTP/1.1 200 OK");
		echo json_encode($result-> fetch_assoc());
	}
	else
	{
		$sql = "SELECT * FROM waiter";
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
	$name 	= $_POST['name']; 
	$address 	= $_POST['address'];
	$tel 		= $_POST['tel'];
	$username 	= $_POST['username'];
	$password 	= $_POST['password'];
	
	$sql = "INSERT INTO waiter(name,address,tel,username,password) VALUES ('$name','$address',$tel','$username','$password')";

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
		$updateId 		= $_GET['id'];
		$updatename 	= $_GET['name']; 
		$updateaddress	= $_GET['address'];
		$updatetel 		= $_GET['tel'];
		$updateusername = $_GET['username'];
		$updatepassword = $_GET['password'];

		
		$sql = "UPDATE waiter SET name='$updatename', address='$updateaddress', tel='$updatetel', username='$updateusername', password='$updatepassword', WHERE waiterId = '$updateId'";

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
if ($_SERVER['REQUEST_METHOD'] === "DELETE") //OK
{
	if (isset($_GET['id'])) 
	{
		$Id = $_GET['id'];
		
		$sql = "DELETE FROM waiter WHERE waiterId = '$Id'";

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