<?php
	include_once 'config_1.php';
  session_start();
?>
<?php

if(isset($_POST['sub'])){


    $Name = $_POST["nme"];
  $Title = $_POST["subject"];
  $message = $_POST["Fmessage"];

  $sql = "UPDATE feedback SET
        U_name = '$Name',
       f_subject = '$Title',
       f_message = '$message'
       where User_name  = '$_SESSION[logsession]'  ";

$conn->query($sql);

}


if(isset($_POST['sub1'])){
$sql = "DELETE  FROM feedback where User_name  = '$_SESSION[logsession]' ";

$conn->query($sql);
}
header("location:homepage.php");



if(isset($_POST['sub2'])){
$sql = "DELETE  FROM feedback where User_name  = '$_SESSION[logsession]' ";

$conn->query($sql);
}
header("location:homepage.php");


$but5 = $_POST["sub2"];
   echo $but5;
   $sql= "delete from feedback where Feedback_ID ='$but5'";
   if(mysqli_query($conn,$sql)){
		header("location: homepage.php");
		
	}else{
		
		
		echo "<script>alert('ERROR: could not execute the sql statement');</script>";
	}







 ?>
