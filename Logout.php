<?php	
	session_start();
	session_destroy();	
	unset($_SESSION);
	header( "refresh:0;url=index.php");
?>