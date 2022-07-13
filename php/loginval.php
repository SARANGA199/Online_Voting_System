<?php
  
    include_once 'config_1.php';

     if(isset($_POST['logsub']))
	  {
		  $username =$_POST['usrname'];
		  $pwd = $_POST['psword'];
	  
		
       if(empty($username)||empty($pwd))
	     {
			
		 header("location: login.php?Error..!EmptyFields");
	     exit();
	     }
		 
	     else{ 
	  
	     $sql1= "select User_name from user where User_name ='$username' "; 
	     $result1= $conn->query($sql1); 
	     
		 $sql2= "select Password from user where User_name ='$username' ";
		 $result2= $conn->query($sql2); 
		 }
		 
		 if((mysqli_num_rows($result1)>1)||(mysqli_num_rows($result1)==0))
			{
			  ?>
			 <script>alert('User Account Not Found');
			 document.location='login.php'
			 </script>
		 <?php 
			}
			
		     
	    $sql = "select User_name,Password from user where User_name ='$username'";
        $result= $conn->query($sql);
		$row = $result -> fetch_assoc();
		
		$encpwd = password_verify($pwd,$row['Password']);
		
	     if($encpwd == true)
		 {
			 session_start();
			 
			 $_SESSION['logsession'] = $row['User_name'];
			 header('location: userprofile.php?login='.$_SESSION['logsession']);

		 }
		 else{
			  ?>
			 <script>alert('Invalid Username Or Password');
			 document.location='login.php'
			 </script>
		 <?php 
			 
		 }
			 
		 
	 } 
	else{
           header("location: login.php?Error_occurd...!");
	       exit();
       }
	


?>