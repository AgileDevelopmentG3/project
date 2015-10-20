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
	
	$Email = $_POST['inputEmail'];
	$Userpassword = $_POST['inputPassword'];
	
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
	else 
	{	
		$query = "INSERT INTO tblcustomer (email, password) VALUES(:Email, :Userpassword)";
		$statement = $db->prepare($query);
		$statement -> bindValue(':Email', $Email);
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