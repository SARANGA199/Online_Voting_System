<?php
	include_once 'config_1.php';
?>

<?php
	$fname = $_POST["first_name"];
	$lname = $_POST["last_name"];
	$uname = $_POST["txtbox1"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$paswd = $_POST["pass1"];
	$repaswd= $_POST["pass2"];
	$gender = $_POST["rdiobtn"];
	
	if(empty($fname)||empty($lname)||empty($uname)||empty($email)||empty($phone)||empty($paswd))
	     {
		  header("location: register.php?Error!!!EmptyFields");
	      exit();
	     }
		 
		elseif($paswd != $repaswd){
		header("location: register.php?Error!!!PasswordsMismatched");
	    exit(); 
		}
		
	else{
	  
	  $sql= "select User_name from user where User_name ='$uname'";
	  $result= $conn->query($sql);
	  
	  	if(mysqli_num_rows($result)>0)
	{
		
	    header("location: register.php?Error!!!UsernameAlreadyExists_TryDifferentOne");   
	    exit();
	}
	
		else
		{
		 
			$encpwd = password_hash($paswd,PASSWORD_DEFAULT);
	
			$sql = "INSERT INTO user(First_name,Last_name,User_name,Email,Phone,Password,Status,Gender)
			VALUES ('$fname','$lname','$uname','$email','$phone','$encpwd','genaral','$gender')";
	
	if(mysqli_query($conn,$sql)){
		echo "<script>alert('Record added successfully');</script>";
	}else{
		echo "<script>alert('ERROR: could not execute the sql statement');</script>";
	}
	header("location: login.php");
		}
	}
	
?>