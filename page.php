<?php $msg = "Here's A Message"?>

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
    <!--</div>-->
    
    <!--<div id="AdminPage">-->
            
        <div class="row">
            <div class="col-md-6">
                <!--Form for New Releases-->
                <form class="form-horizontal" method="post" action="admin.php">				
								
                    <div id="ReleaseCaption"><?=$msg?></div>		
				        <div id="ReleaseFormFields">
                            <div class="form-group">
                                <label for="txtComicTitle">Comic Title</label>
                                <input type="text" name="txtComicTitle" id="txtComicTitle" />			
                            </div>
                            <div class="form-group">
                                <label for="dtReleaseDate">Release Date</label>
                                <input type="date" name="dtReleaseDate" id="dtReleaseDate"/>
                            </div>
                            <div class="form-group">
                                <label for="cbxMature">Mature</label>
                                <input type="checkbox" name="cbxMature" id="cbxMature"/>
                            </div>
                        </div> <!--End of FormFields-->				
				
                        <div id="ReleaseFormButtons">
                            <input type="submit" value="Submit"/>
                            <input type="reset"/>
                        </div> <!--End of FormButtons-->				
                </form>	
            </div>
                
            <div class="col-md-6">
                <!--Form for Box Numbers-->			
                <form method="post" action="admin.php">				
								
                    <div id="BoxCaption"><?=$msg?></div>		
                    <div id="BoxFormFields">
                        <div>
                            <label for="txtEmail">Email</label>
                            <input type="email" name="txtEmail" id="txtEmail" />
                        </div>
                        <div>
                            <label for="txtConfirmEmail">Confirm Email</label>
                            <input type="email" name="txtConfirmEmail" id="txtConfirmEmail" />
                        </div>
                        <div>
                            <label for="txtBoxNumber">Box Number</label>
                            <input type="number" name="txtBoxNumber" id="txtBoxNumber" />
                        </div>
                    </div> <!--End of FormFields-->				
				
                    <div id="BoxFormButtons">
                        <input type="submit" value="Submit"/>
                        <input type="reset"/>
                    </div> <!--End of FormButtons-->				
                </form>
            </div>
        </div>
    </div>
<!--</div>-->	
</body>
</html>