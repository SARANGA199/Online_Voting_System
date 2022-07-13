


<?php
	include_once 'config_1.php';
?>

<?php
	$Aw_id = $_POST["award_ID"];
	$name = $_POST["Awrd_name"];
	$discription = $_POST["Awrd_description"];
	$image = $_POST["limk"];
	$Ad_id = $_POST["Admin_ID"];
	
	
	
	$sql ="insert into award(Award_ID,Award_name,A_Description,Admin_ID,A_image_link)values('$Aw_id','$name','$discription','$Ad_id','$image')";
	
	if(mysqli_query($conn,$sql)){
		echo "<script>alert('ERROR: could not execute the sql statement');</script>";
		header("location: Adisplay.php");
		
	}else{
		
		echo "<script>alert('Record added successfully');</script>";
	}
	
?>