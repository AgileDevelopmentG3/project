<?php
$OneHour = 60*60;
session_set_cookie_params($OneHour);
session_start(); 

if(isset($_POST['subs']))
{
	$dsn = "mysql:host=us-cdbr-azure-central-a.cloudapp.net;dbname=as_bf1259e0fe71a2a";
	$username = "bfdbdc3c11a396";
	$password = "1c82948e";
	
	$NewSubs = $_POST['subs'];
	$BoxID = $_SESSION['SubBoxID'];
	
	
	try	
	{
		$db = new PDO($dsn, $username, $password);
		
		foreach($NewSubs as $ComicTitle)
		{
			echo($ComicTitle);
								
			$query = "INSERT INTO tblComicBoxItems (ComicTitle, BoxNumber ) VALUES (:ComicTitle,:BoxID)";		
			
			$statement = $db->prepare($query);
			$statement -> bindValue(':BoxID', $BoxID);
			$statement -> bindValue(':ComicTitle', rawurldecode($ComicTitle));
			$statement->execute();
		}
		
		$db = null;

	}
	catch(PDOException $e)
	{
		echo 'ERROR: ' . $e->getMessage();
		$db = null;
	}
}
	//header( "refresh:0;url=mysubs.php");
?>