<?php	
$OneHour = 60*60;
session_set_cookie_params($OneHour);
session_start(); 
$Comics = null;
		
	if(isset($_GET['Publisher']))
	{			
		$PublisherName = rawurldecode($_GET['Publisher']);
		$Comics = getComicByPublisher($PublisherName);
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
	
function getComicByPublisher($PublisherName)
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
			$query = "SELECT * FROM `tblSubComic` WHERE PublisherName = :PublisherName";		
			$statement = $db->prepare($query);
			$statement -> bindValue(':PublisherName', $PublisherName);
			$statement->execute();
			return $statement->fetchAll();
			$statement->closeCursor();	
		}
		else 
		{
			//$query = "SELECT * FROM `tblSubComic` WHERE PublisherID = :PublisherID and IsMature = 0";		
			$query = "SELECT * FROM `tblSubComic` WHERE PublisherName = :PublisherName";		
			$statement = $db->prepare($query);
			$statement -> bindValue(':PublisherName', $PublisherName);
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
    <div class="background-red shove-down">
	<div class="container">
		<h1 style="text-align: center">Subscribe to Comics</h1>		
    </div>
        </div>
    <div class="container">
            
			<form name="SubForm" id="SubForm" method="get" action="">					
				<div id="FormFields">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">
					<div class="form-group">
						<label for="Publisher">Publisher</label>
                            <?php 
                            
                        	if (count($Publishers) > 0)
                            {
                                	$PublishersList = '<select class="form-control" id="Publisher" name="Publisher">';		
                                foreach ($Publishers as $Publisher)
                                {
                                	if(isset($_GET['Publisher']))
                                	{
                                		if($Publisher['PublisherName'] == rawurldecode($_GET['Publisher']))
                                		{
										$PublishersList.='<option value='.rawurlencode($Publisher['PublisherName']).' 										selected>'.$Publisher['PublisherName'].'</option>';      
                                		}                                	
										else
										{
											$PublishersList.='<option value='.rawurlencode($Publisher['PublisherName']).'>'.$Publisher['PublisherName'].'</option>';	
										}   
                                	}                                	
									else
									{
										$PublishersList.='<option value='.rawurlencode($Publisher['PublisherName']).'>'.$Publisher['PublisherName'].'</option>';	
									}                                    	
                                }		
									$PublishersList.="</select>";								
                                    echo("$PublishersList");
                            }
                            ?>
                        <div class="pull-right button-top-space"><input class="btn btn-go" type="submit" value="Filter"></input></div>
					</div>
                </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                    <div class="form-group">
                        <div class="checkbox">
                        	<?php
                                	if(isset($_GET['Mature']))
									{
										echo ('<label><input type="checkbox" class="checkbox" name="Mature" id="Mature" checked="checked"/> Include Mature 												Titles</label>');
									}
									else
									{
										echo ('<label><input type="checkbox" class="checkbox" name="Mature" id="Mature" /> Include Mature Titles</label>');
									}
                            
                        	?>
                        </div>
                    </div>
                
			</form>	

                </div>
                </div>
				</div> <!--End of FormFields-->	
			<form name="SubmitSubForm" id="SubmitSubForm" method="post" action="addsubs.php">						
				<div>
                        <?php					
                            if ($Comics != null && count($Comics) > 0)
                            {		
                                echo ('<select class="form-control button-bottom-space" name="subs[]" size="15" multiple="multiple" >');

                                foreach ($Comics as $Comic)
                                {
                                    echo('<option value='.rawurlencode($Comic['Description']).'>'.$Comic['Description'].'</option>');	
                                    //echo('<input type="checkbox" name="'.$Comic['Description']. '" id="'.$Comic['Description'].'" />');			
                                    //echo('<input type="checkbox" value="'.$Comic['Description'].'">'.$Comic['Description'].'</input>');
                                    //echo "<br>";
                                }		

                                echo("</select>");
                            }				
                        ?>

				    </div>
								<div class="row">
                    <div class="col-md-4 col-md-offset-4">
				<div class="pull-right" id="FormButtons">
					<input class="btn btn-reset" type="reset"/>
                    <input class="btn btn-go" type="submit" value="Subscribe"/>
				</div> <!--End of FormButtons-->
                    </div>
			</form>

        </div>
		
        
	</div>	
</body>
</html>	

<?php
$db = null;
?>