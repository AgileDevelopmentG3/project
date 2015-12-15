<?php
$OneHour = 60*60;
session_set_cookie_params($OneHour);
session_start();     
?>


<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>POWER HOUSE COMICS</title>
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
    <link href="css/main.css" rel="stylesheet">
</head>
<body>
	<div id="Container">
		<h1 style="text-align: center">Your Subscriptions</h1>		
		
            
			<form name="SubForm" id="SubForm" method="get" action="">					
				<div id="FormFields">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">
					<div class="form-group">
						<a href="subscribe.php">Subscribe to more comics here!</a>
					</div>
						</div>
					</div>
				</div>
			</form>
	</div>
						

<?php

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
			sort($Comics);
			foreach ($Comics as $Comic)
			{				
				echo ('<li class="list-group-item">');
				echo ($Comic['ComicTitle']);
				echo ('</li>');
			}
		}
		else 
		{
			echo ("You have no subscriptions!");
		}
		echo ('</ol>');
	
		$db = null;
	}
	catch(PDOException $e)
	{
		echo 'ERROR: ' . $e->getMessage();
		$db = null;
	}
}
else 
{
	echo "Please Log In to access your subscriptions";	
}
?>











