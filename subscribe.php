<?php	

$Comics = null;
		
	if(isset($_GET['cboPublisher']))
	{			
		$PublisherID = $_GET['cboPublisher'];
		$Comics = getComicByPublisher($PublisherID);
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
	
function getComicByPublisher($PublisherID)
{
	
	try	
	{
		$dsn = "mysql:host=us-cdbr-azure-central-a.cloudapp.net;dbname=as_bf1259e0fe71a2a";
		$username = "bfdbdc3c11a396";
		$password = "1c82948e";
		$db = new PDO($dsn, $username, $password);
		
		if(isset($_GET['chkMature']))
		{			
			//$query = "SELECT * FROM `tblSubComic` WHERE PublisherID = :PublisherID and IsMature = 1";	
			$query = "SELECT * FROM `tblSubComic` WHERE PublisherID = :PublisherID";		
			$statement = $db->prepare($query);
			$statement -> bindValue(':PublisherID', $PublisherID);
			$statement->execute();
			return $statement->fetchAll();
			$statement->closeCursor();	
		}
		else 
		{
			//$query = "SELECT * FROM `tblSubComic` WHERE PublisherID = :PublisherID and IsMature = 0";		
			$query = "SELECT * FROM `tblSubComic` WHERE PublisherID = :PublisherID";		
			$statement = $db->prepare($query);
			$statement -> bindValue(':PublisherID', $PublisherID);
			$statement->execute();
			return $statement->fetchAll();
			$statement->closeCursor();	
		}
		
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
						<select id="cboPublisher" name="cboPublisher">
							
<?php 
	if (count($Publishers) > 0)
	{
		foreach ($Publishers as $Publisher)
		{
			//$ValueReplace = str_replace(" ", " ",  $Publisher['PublisherName']);
			echo('<option value='.$Publisher['PublisherID'].'>'.$Publisher['PublisherName'].'</option>');
		}
	}
?>		
</select>

						<input type="submit" value="Filter"></input>

					</div>
						<label for="chkMature">Include Mature Titles</label>
						<input type="checkbox" name="chkMature" id="chkMature">
					<div>
<?php					
	if ($Comics != null && count($Comics) > 0)
	{		
		echo ('<select  size="15" multiple="multiple" >');
	
		foreach ($Comics as $Comic)
		{
			echo('<option value='.$Comic['ComicID'].'>'.$Comic['Description'].'</option>');	
			//echo('<input type="checkbox" name="'.$Comic['Description']. '" id="'.$Comic['Description'].'" />');			
			//echo('<input type="checkbox" value="'.$Comic['Description'].'">'.$Comic['Description'].'</input>');
			//echo "<br>";
		}		
		
		echo("</select>");
	}				
?>

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