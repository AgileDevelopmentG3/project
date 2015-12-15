<?php

	$dsn = "mysql:host=us-cdbr-azure-central-a.cloudapp.net;dbname=as_bf1259e0fe71a2a";
	$username = "bfdbdc3c11a396";
	$password = "1c82948e";

if(isset($_POST['txtEmail']) && isset($_POST['txtBoxNumber'])) 
{
   	$Email=$_POST['txtEmail'];
   	$BoxNumber=$_POST['txtBoxNumber'];
	   
	   

	
	try	
	{
			$db = new PDO($dsn, $username, $password);
			$query = "UPDATE `tblcustomer` SET SubBoxID = :BoxNumber 
			WHERE Email = :Email" ;
						
			$statement = $db->prepare($query);
			$statement -> bindvalue(':Email' , $Email);
			$statement -> bindvalue(':BoxNumber' , $BoxNumber);
			$statement -> execute();
			
			 header( "refresh:0;url=page.php");
			$db=null;
	}
	catch(PDOException $e)
	{
		echo 'ERROR: ' . $e->getMessage();
			$db=null;
	}
}

if(isset($_POST['txtComicTitle']) && isset($_POST['dtReleaseDate'])) 
{
   	$Title=$_POST['txtComicTitle'];
   	$ReleaseDate=$_POST['dtReleaseDate'];
   
	if(isset($_POST['cbxMature']))
	{
		$Mature = 1;
	}
	else
	{
		$Mature = 0;
	}
	
	try	
	{
			$db = new PDO($dsn, $username, $password);
			$query = "INSERT INTO `tblnewreleases` (newReleaseID, Description, releaseDate, mature) 
			VALUES (0, :Title, :ReleaseDate, :Mature)";
			
			$Title = $_POST['txtComicTitle'];
			$ReleaseDate = $_POST['dtReleaseDate'];
			//$Mature = $_POST['cbxMature'];
			
			$statement = $db->prepare($query);
			$statement -> bindvalue(':Title' , $Title);
			$statement -> bindvalue(':ReleaseDate' , $ReleaseDate);
			$statement -> bindvalue(':Mature' , $Mature);
			$statement -> execute();
			
			//$statement -> closeCursor();
			//echo "$Mature";
			 header( "refresh:0;url=page.php");
			$db=null;
	}
	catch(PDOException $e)
	{
		echo 'ERROR: ' . $e->getMessage();
		$db=null;
	}
	
   
}

?>