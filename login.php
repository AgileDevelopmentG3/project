<?php
GLOBAL $Email;
GLOBAL $Userpassword;

   if(isset($_POST['Email'])) 
   	$Email=$_POST['Email'];
   
   if(isset($_POST['Userpassword'])) 
   	$Userpassword=$_POST['Userpassword'];
   
/**
$username = "b433d07cc3f105";
$password = "9ebd4e78";
$dsn = "mysql:host=http://jq1kzb1a60.database.windows.net/;dbname=AgileGroup3DB";
/**
$username = "root";
$password = "";
$dsn = "mysql:host=localhost;dbname=phcdb";
//$db2= new PDO ( \"sqlsrv:server = tcp:jq1kzb1a60.database.windows.net,1433; Database = AgileGroup3DB\", \"AgileGroup3\", \"\");

/**
$username = "root";
$password = "";
$dsn = 'mysql:host=localhost;dbname=phcdb';
/**/

$dsn = "mysql:host=us-cdbr-azure-central-a.cloudapp.net;dbname=AgileGroup3DB";
$username = "bc81427516cc2c";
$password = "451af133";


try	
{
	$db = new PDO($dsn, $username, $password);
	
	$query = "SELECT * FROM `tblcustomer` WHERE Email = :Email and Password = :Userpassword";
	
	$Email = $_POST['Email'];
	$Userpassword = $_POST['Userpassword'];
	
	$statement = $db->prepare($query);
	$statement -> bindValue(':Email', $Email);
	$statement -> bindValue(':Userpassword', $Userpassword);
	$statement->execute();
	$Users = $statement->fetchAll();
	$statement->closeCursor();

	if (count($Users) > 0)
	{
		foreach ($Users as $User)
		{
			echo 'Welcome, ' .  $User['FirstName'] . '!';
		}
	}
	else 
	{	
		echo("Invalid Email and/or Password");
	}
}
catch(PDOException $e)
{
	echo 'ERROR: ' . $e->getMessage();
}
?>