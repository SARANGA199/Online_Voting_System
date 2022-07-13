<?php
   	include_once 'config_1.php';

?>

<?php

   $ded = $_POST["delete"];
   echo $ded;
   $sql= "delete from award where Award_ID ='$ded'";
   if(mysqli_query($conn,$sql)){
		echo "Delete successfull!!";
		header("location: Adisplay.php");
		
	}else{
		
		
		echo "<script>alert('ERROR: could not execute the sql statement');</script>";
	}
?>