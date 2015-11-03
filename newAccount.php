<?php
//$email = $_POST['inputEmail'];
//$userPass = $_POST['inputPassword'];





$dsn = "mysql:host=us-cdbr-azure-central-a.cloudapp.net;dbname=as_bf1259e0fe71a2a";
$username = "bfdbdc3c11a396";
$password = "1c82948e";


try	
{
	$db = new PDO($dsn, $username, $password);
	
	$query = "SELECT * FROM `tblcustomer` WHERE Email = :Email";
	
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