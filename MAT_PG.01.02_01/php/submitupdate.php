<?php
   	include_once 'config_1.php';

?>
<?php
	$val = $_POST["update"];
	
	$name = $_POST["Award_name"];
	$discription = $_POST["Awrd_description"];
	$image = $_POST["limk"];
	$Ad_id = $_POST["Admin_ID"];
	
	$sql= "update award set
			Award_name='$name',
			A_Description='$discription',
			A_image_link='$image',
			Admin_ID='$Ad_id'
			where Award_ID = '$val'";
	
	
	if(mysqli_query($conn,$sql)){
		echo "update added successfull!!";
		header("location: Adisplay.php");
		
	}else{
		
		
		echo "<script>alert('ERROR: could not execute the sql statement');</script>";
	}
	
?>	