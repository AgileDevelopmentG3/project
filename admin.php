<?php
global $Title;
global $ReleaseDate;
global $Mature;

global $Email;
global $BoxNumber;


   if(isset($_POST['txtComicTitle'])) 
   	$Title=$_POST['txtComicTitle'];
   
   
   if(isset($_POST['dtReleaseDate'])) 
   	$ReleaseDate=$_POST['dtReleaseDate'];
   
   
   if(isset($_POST['cbxMature'])) 
   	$Mature=$_POST['cbxMature'];
   
   
   if(isset($_POST['txtEmail'])) 
   	$Email=$_POST['txtEmail'];
   
   
   if(isset($_POST['txtBoxNumber'])) 
   	$BoxNumber=$_POST['txtBoxNumber'];
   
   
$dsn = "mysql:host=us-cdbr-azure-central-a.cloudapp.net;dbname=as_bf1259e0fe71a2a";
$username = "bfdbdc3c11a396";
$password = "1c82948e";

try	
{
		$db = new PDO($dsn, $username, $password);
		$query = "INSERT INTO `tblnewreleases` VALUES (0, :Title, :ReleaseDate, :Mature)";
		
		$Title = $_POST['txtComicTitle'];
		$ReleaseDate = $_POST['dtReleaseDate'];
		$Mature = $_POST['cbxMature'];
		
		$statement = $db->prepare($query);
		$statement -> bindvalue(':Title' , $Title);
		$statement -> bindvalue(':ReleaseDate' , $ReleaseDate);
		$statement -> bindvalue(':Mature' , $Mature);
		$statement -> execute();
		
		$statement -> closeCursor();

}
catch(PDOException $e)
{
	echo 'ERROR: ' . $e->getMessage();
}
?>