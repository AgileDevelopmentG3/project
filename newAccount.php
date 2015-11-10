<?php
//$email = $_POST['inputEmail'];
//$userPass = $_POST['inputPassword'];


$PhonePattern = "/^\(\d\d\d\)\d\d\d-\d\d\d\d$/";
include ('StateArray.php');

if(empty($_POST['first-name'])==TRUE)
{
	echo("<h1>Error In First Name Field<h1>");
	//header('Location:createprofile.php');
	exit();	
}
else 
{
$FirstName = $_POST['first-name'];
}

if(empty($_POST['last-name'])==TRUE)
{
	echo("<h1>Error In Last Name Field<h1>");
	exit();		
}
else 
{
$LastName = $_POST['last-name'];	
}

if(empty($_POST['email'])==TRUE)
{
	echo("<h1>Error In Email Field<h1>");
	exit();		
}
else if (strpos($_POST['email'],'@')===false)
{
	echo("<h1>Error In Email Field<h1>");
	exit();		
}
else if (strpos($_POST['email'],'.')===false)
{
	echo("<h1>Error In Email Field<h1>");
	exit();		
}
else 
{
$Email = $_POST['email'];
}

if(empty($_POST['phone'])==TRUE)
{
	echo("<h1>Error In Phone Field<h1>");
	exit();		
}
else if(!preg_match($PhonePattern,  $_POST['phone'])) // RegEx /^\d\d\d\d\d\d\d\d\d\d$/
{
	echo("<h1>Error in Phone Field<h1>");
	//header('Location:createprofile.php');
	exit();		
}
else 
{
$Phone = $_POST['phone'];
}

if(empty($_POST['address1'])==TRUE)
{
	echo("<h1>Error In Address1 Field<h1>");
	exit();		
}
else 
{
$Address1 = $_POST['address1'];
}

if(empty($_POST['city'])==TRUE)
{
	echo("<h1>Error In City Field<h1>");
	exit();		
}
else 
{
$City = $_POST['city'];
}

if(empty($_POST['state'])==TRUE)
{
	echo("<h1>Error In state Field<h1>");
	exit();		
}
else if(!in_array($_POST['state'], $StateCodes))
{
	echo("<h1>Error In state Field<h1>");
	exit();	
}
else 
{
$State = $_POST['state'];
}

if(empty($_POST['zip'])==TRUE)
{
	echo("<h1>Error In Zip Code Field<h1>");
	exit();		
}
else if(!is_numeric($_POST['zip']))
{
	echo("<h1>Error In Zip Code Field<h1>");
	exit();		
}
else if(strlen($_POST['zip']) != 5)
{
	echo("<h1>Error In Zip Code Field<h1>");
	exit();		
}
else 
{
$Zip = $_POST['zip'];
}

if(empty($_POST['password'])==TRUE)
{
	echo("<h1>Error In Password Field<h1>");
	exit();		
}
else 
{
$Userpassword = $_POST['password'];
}

if(empty($_POST['re-password'])==TRUE)
{
	echo("<h1>Error In Re-Password Field<h1>");
	exit();		
}
else if($_POST['password'] !== $_POST['re-password'])
{	
	echo("<h1>Error with Password and Re-Password Fields<h1>");
	exit();	
}
else 
{
$ReUserpassword = $_POST['re-password'];
}

$Address2 = $_POST['address2'];

/***********************************************************************************/

$dsn = "mysql:host=us-cdbr-azure-central-a.cloudapp.net;dbname=as_bf1259e0fe71a2a";
$username = "bfdbdc3c11a396";
$password = "1c82948e";


try	
{
	$db = new PDO($dsn, $username, $password);
	
	$query = "SELECT * FROM `tblcustomer` WHERE Email = :Email";
	/**
	$Email = $_POST['email'];
	$FirstName = $_POST['first-name'];
	$LastName = $_POST['last-name'];
	$Phone = $_POST['phone'];
	$Address1 = $_POST['address1'];
	$Address2 = $_POST['address2'];
	$City = $_POST['city'];
	$State = $_POST['state'];
	$Zip = $_POST['zip'];
	$Userpassword = $_POST['password'];
	$ReUserpassword = $_POST['re-password'];
	/**/
	$statement = $db->prepare($query);
	$statement -> bindValue(':Email', $Email);
	//$statement -> bindValue(':Userpassword', $Userpassword);
	$statement->execute();
	$Users = $statement->fetchAll();
	$statement->closeCursor();

	if (count($Users) > 0)
	{
		
		echo("<h3>Email already registered.</h3>");
		/**
		 foreach ($Users as $User)
		{
			echo 'Welcome, ' .  $User['FirstName'] . '!';
		}
		/**/
	}
	else if($Userpassword != $ReUserpassword)
	{
		echo("<h3>Passwords did not match.<h3>");
	
	}
	else 
	{	
		$query = "INSERT INTO tblcustomer (email, firstname, lastname,
						phone, addressline1, addressline2, city, state, zip, password) 
				VALUES(:Email, :Firstname, :Lastname, :Phone, :Addressline1, :Addressline2, 
						:City, :State, :Zip, :Userpassword)";
		$statement = $db->prepare($query);
		$statement -> bindValue(':Email', $Email);
		$statement -> bindValue(':Firstname', $FirstName);
		$statement -> bindValue(':Lastname', $LastName);
		$statement -> bindValue(':Phone', $Phone);
		$statement -> bindValue(':Addressline1', $Address1);
		$statement -> bindValue(':Addressline2', $Address2);
		$statement -> bindValue(':City', $City);
		$statement -> bindValue(':State', $State);
		$statement -> bindValue(':Zip', $Zip);
		$statement -> bindValue(':Userpassword', $Userpassword);
		$statement->execute();
		$statement->closeCursor();
		echo("<h2> Account Created Successfully</h2>");
	}
}
catch(PDOException $e)
{
	echo 'ERROR: ' . $e->getMessage();
}

?>