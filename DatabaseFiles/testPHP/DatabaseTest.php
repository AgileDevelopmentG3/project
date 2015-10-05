<?php

$servername = "localhost";
$username = "root";
$password = "";


/**
$servername = "us-cdbr-azure-northcentral-a.cleardb.com";
$username = "b433d07cc3f105";
$password = "9ebd4e78";
$dbname = "phcDB";
/**/
// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

echo("</br></br>");

mysqli_close($conn);

$dsn = 'mysql:host=localhost;dbname=phcdb';

$db = new PDO($dsn, $username, $password);
$Email = "e@mail.com";
$password = "password";
$query = "SELECT * FROM `tblcustomer` WHERE Email = :Email and Password = :password";

$statement = $db->prepare($query);
$statement -> bindValue(':Email', $Email);
$statement -> bindValue(':password', $password);
$statement->execute();
$Users = $statement->fetchAll();
$statement->closeCursor();

foreach ($Users as $User)
{
	echo 'Welcome, ' .  $User['FirstName'] . '!';
}


/**
$sql = "SELECT * FROM `tblcustomer` WHERE `Email` = \'E@mail.com\'";

$result = mysqli_query($conn, $sql);
$rows = mysqli_num_rows($result);
if ($rows > 0) 
{
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["CustomerID"]. " - Name: " . $row["FirstName"]. " " . $row["LastName"]. "<br>";
    }
} 
else {
    echo "0 results";
}
mysqli_close($conn);
/**/

?>
