<?php $msg = "Here's A Message"?>

<html>
<head>
<link href="../Styles/FormLayout.css" rel="stylesheet" type="text/css" />
<style type="text/css">
	
	#caption{
		text-align:center;
		font-family:Arial, Helvetica, serif;
		font-weight:bold;
		font-size:14px;
		color:red;
	}
</style>
</head>
<body>
	<div id="Container">
		
		<h1 style="text-align: center">Administration Page</h1>
		
		<div id="AdminPage">
			<!--Form for New Releases-->
			<form method="post" action="admin.php">				
								
			<div id="ReleaseCaption"><?=$msg?></div>		
				<div id="ReleaseFormFields">
					<div>
						<label for="txtComicTitle">Comic Title</label>
						<input type="text" name="txtComicTitle" id="txtComicTitle" />						
					</div>
					<div>
						<label for="dtReleaseDate">Release Date</label>
						<input type="date" name="dtReleaseDate" id="dtReleaseDate"/>
					</div>
					<div>
						<label for="cbxMature">Mature</label>
						<input type="checkbox" name="cbxMature" id="cbxMature"/>
					</div>
				</div> <!--End of FormFields-->				
				
				<div id="ReleaseFormButtons">
					<input type="submit" value="Submit"/>
					<input type="reset"/>
				</div> <!--End of FormButtons-->				
			</form>	
			
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
</body>
</html>