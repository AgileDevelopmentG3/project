
<?php
GLOBAL $Email;
GLOBAL $Userpassword;
$OneHour = 60*60;
session_set_cookie_params($OneHour);
session_start();           


   if(isset($_POST['txtEmail'])) 
   	$Email=$_POST['txtEmail'];
   
   if(isset($_POST['txtUserPassword'])) 
   	$Userpassword=$_POST['txtUserPassword'];
   
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

$dsn = "mysql:host=us-cdbr-azure-central-a.cloudapp.net;dbname=as_bf1259e0fe71a2a";
$username = "bfdbdc3c11a396";
$password = "1c82948e";


try	
{
	$db = new PDO($dsn, $username, $password);
	
	$query = "SELECT * FROM `tblcustomer` WHERE Email = :Email and Password = :Userpassword";
	
	$Email = $_POST['txtEmail'];
	$Userpassword = $_POST['txtUserPassword'];
	
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
			$FirstName = $User['FirstName'];
			echo 'Welcome, ' .  $FirstName . '!';
			$_SESSION['FirstName'] = $FirstName;
			$_SESSION['CustomerID'] = $User['CustomerID'];
			$_SESSION['SubBoxID'] = $User['subboxID'];
			$_SESSION['Username'] = $User['Email'];
			
			//$_SESSION['BoxID'] = ;
			header( "refresh:3;url=index.php");
			$db=null;
		}
	}
	else 
	{
		echo("Login Failed, Wrong Password or account does not exist. </br>");
		echo('<a href="index.php">Return to home page</a> or <a href="createprofile.php">Sign Up</a>');
		//header( "refresh:1;url=createprofile.php" );
	}
			$db=null;
}
catch(PDOException $e)
{
	echo 'ERROR: ' . $e->getMessage();
			$db=null;
}
?>