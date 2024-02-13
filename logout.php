<?php	
	session_start();
	
	$_SESSION["userId"] = null;
	
	echo "<script type='text/javascript'>";
	echo "alert('YOU HAVE BEEN LOGGED OUT!')";
	echo "</script>";
	echo "<meta http-equiv='refresh' content='0; url=login.php'>";			
		
	

?>