<?php
//$Comics = null;
		if(isset($_GET['cboPublisher']))
		{			
			$PublisherName = $_GET['cboPublisher'];
		}

	try	
	{
		$dsn = "mysql:host=us-cdbr-azure-central-a.cloudapp.net;dbname=as_bf1259e0fe71a2a";
		$username = "bfdbdc3c11a396";
		$password = "1c82948e";

		$db = new PDO($dsn, $username, $password);
		
		$query = "SELECT DISTINCT PublisherID, PublisherName FROM `tblSubComic`";
		
		$statement = $db->prepare($query);
		$statement->execute();
		$Publishers = $statement->fetchAll();
		$statement->closeCursor();	
		
	}
	catch(PDOException $e)
	{
		echo 'ERROR: ' . $e->getMessage();
		$statement->closeCursor();	
		$db = null;
		exit();
	}
	
function getComicByPublisher($Publisher)
{
	
	try	
	{
		$db = new PDO($dsn, $username, $password);
		
		$query = "SELECT * FROM `tblSubComic` WHERE PublisherName = :Publisher";
		
		$statement = $db->prepare($query);
		$statement -> bindValue(':Publisher', $Publisher);
		$statement->execute();
		$Comics = $statement->fetchAll();
		$statement->closeCursor();	
		
	}
	catch(PDOException $e)
	{
		echo 'ERROR: ' . $e->getMessage();
		$statement->closeCursor();	
		$db = null;
		exit();
	}

}

?>

<html>
<head>
<link href="../Styles/FormLayout.css" rel="stylesheet" type="text/css" />
<style type="text/css">
	
	#caption{
		text-align:center;
		font-family:Arial, Helvetica, sans-serif;
		font-weight:bold;
		font-size:14px;
	}
</style>
</head>
<body>
	<div id="Container">
		<h1 style="text-align: center">Subscribe to Comics</h1>		
		<div id="OrderForm">			
			<form name="SubForm" id="SubForm" method="get" action="">					
				<div id="FormFields">
					<div>
						<label for="cboPublisher">Publisher</label>
						<select id="cboPublisher" name="cboPublisher" onchange="SubForm.submit();
							getComicByPublisher(<?=$PublisherName?>);">
							
<?php 
	if (count($Publishers) > 0)
	{
		foreach ($Publishers as $Publisher)
		{ 
			echo('<option value=<'.$Publisher['PublisherName']. '>'.$Publisher['PublisherName'] .'</option>');
		}
	}
?>		
</select>
					</div>
					<div>
<?php					
	if (isset($Comics) && count($Comics) > 0)
	{

		
		foreach ($Comics as $Comic)
		{
						echo ('<label for="'.$Comic['Description']. '">'.$Comic['Description'].'</label>'); 
						echo('<input type="checkbox" name="'.$Comic['Description']. '" id="'.$Comic['Description'].'" />');
		}
	}				
?>
						<label for="lstComics">Comics</label>
						<input type="checkbox" name="" id="" />
						</div>
				</div> <!--End of FormFields-->	
				
				<div id="FormButtons">
					<input type="button" value="Subscribe"/>
					<input type="reset"/>
				</div> <!--End of FormButtons-->
			</form>	
		</div>
	</div>	
</body>
</html>	