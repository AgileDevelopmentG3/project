<?php
$OneHour = 60*60;
session_set_cookie_params($OneHour);
session_start();     


if(isset($_SESSION['SubBoxID']))
{
	$dsn = "mysql:host=us-cdbr-azure-central-a.cloudapp.net;dbname=as_bf1259e0fe71a2a";
	$username = "bfdbdc3c11a396";
	$password = "1c82948e";

	$BoxID = $_SESSION['SubBoxID'];
	
	try	
	{
		$db = new PDO($dsn, $username, $password);
		
		$query = "SELECT * FROM `tblComicBoxItems` WHERE BoxNumber = :BoxID";
		
		
		$statement = $db->prepare($query);
		$statement -> bindValue(':BoxID', $BoxID);
		$statement->execute();
		$Comics = $statement->fetchAll();
		$statement->closeCursor();
	
		echo ('<ol>');
		if (count($Comics) > 0)
		{
			foreach ($Comics as $Comic)
			{				
				echo ('<li>');
				echo ($Comic['ComicTitle']);
				echo ('</li>');
			}
		}
		else 
		{
			echo ("You have no subscriptions!");
		}
		echo ('</ol>');
	}
	catch(PDOException $e)
	{
		echo 'ERROR: ' . $e->getMessage();
	}
}


?>