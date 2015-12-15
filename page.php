<?php $msg = "";
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
    
	<div class="container">
		<h1 style="text-align: center">Administration Page</h1>
    </div>
        <div class="container">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-1">
                <!--Form for New Releases-->
                <form class="bottom-spacer" method="post" action="admin.php">				
				        <div id="ReleaseFormFields">
                            <div class="form-group">
                                <label for="txtComicTitle" class="control-label">Comic Title</label>
                                <input type="text" name="txtComicTitle" id="txtComicTitle" class="form-control" />
                            </div>
                            
                            <div class="form-group">
                                <label for="dtReleaseDate" class="control-label">Release Date</label>
                                <input type="date" name="dtReleaseDate" id="dtReleaseDate" class="form-control"/>
                            </div>
                            
                            <div class="form-group">
                                <div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" class="checkbox" name="cbxMature" id="cbxMature" /> Mature</label>
                                    </div>
                                </div>
                            </div>
                            
                        </div> <!--End of FormFields-->				
				
                        <div class="pull-right" id="ReleaseFormButtons">
                            <input class="btn btn-reset" type="reset"/>
                            <input class="btn btn-go" type="submit" value="Submit"/>
                        </div> <!--End of FormButtons-->				
                </form>	
            </div>
                
            <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-2 col-md-4 col-md-offset-2">
                <!--Form for Box Numbers-->			
                <form class="bottom-spacer" method="post" action="admin.php">				
	
                    <div id="BoxFormFields">
                        <div class="form-group">
                            <label class="control-label" for="txtEmail">Email</label>
                            <input class="form-control" type="email" name="txtEmail" id="txtEmail" />
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label" for="txtConfirmEmail">Confirm Email</label>
                            <input class="form-control" type="email" name="txtConfirmEmail" id="txtConfirmEmail" />
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label" for="txtBoxNumber">Box Number</label>
                            <input class="form-control" type="number" name="txtBoxNumber" id="txtBoxNumber" />
                        </div>
                    </div> <!--End of FormFields-->				
				
                    <div class="pull-right" id="BoxFormButtons">
                        <input class="btn btn-reset" type="reset"/>
                        <input class="btn btn-go" type="submit" value="Submit"/>
                    </div> <!--End of FormButtons-->				
                </form>
            </div>
        </div>
    </div>
<!--</div>-->	
</body>
</html>