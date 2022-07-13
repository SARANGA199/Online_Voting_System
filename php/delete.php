	<?php
	include('config_1.php'); 
	session_start();
	if(isset($_POST['delete']))
	{
	$sql1= "delete from user where User_name ='$_SESSION[logsession]'";
	$conn->query($sql1);
	}
	header("Location:login.php");
	?>