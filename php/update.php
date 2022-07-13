<?php
  
    if(isset($_POST['update']))
	  {  
          include('config_1.php'); 
		  session_start();
		                                          
	      $fname = $_POST['usernameF'];
          $lname = $_POST['usernameL'];
		  $Uname = $_POST['usernameU'];
          $emil = $_POST['email1'];
          $phne= $_POST['phone1'];
		  $pwd1  = $_POST['pwd1'];
		  $pwd2  = $_POST['pwd2'];
          $pwd3  = $_POST['pwd3'];
		  
		   $sql1 = "select User_name,Password from user where User_name ='$_SESSION[logsession]'";
           $result1= $conn->query($sql1);
		   $row1 = $result1 -> fetch_assoc();
		  
		  $encpwd = password_verify($pwd1,$row1['Password']);
		  
		  if(empty($pwd1)||empty($pwd2)||empty($pwd3)) { 		  

	      $sql= "update user SET
		              First_name='$fname',   
                      Last_name='$lname',
					  User_name='$Uname',
                      Email='$emil',
                      Phone= '$phne'
					  
					  where User_name='$_SESSION[logsession]'";

          $conn->query($sql);
		  header("location: register.php"); 
		  
		  } 
		  
           elseif(($encpwd == true)&&($pwd2==$pwd3))
		   {
			 $encpwd1 = password_hash($pwd2,PASSWORD_DEFAULT);
			  
			  $sql= " update user SET
		              First_name='$fname',   
                      Last_name='$lname',
					  User_name='$Uname',
                      Email='$emil',
                      Phone= '$phne',
		              Password='$encpwd1'
					  
					  where User_name='$_SESSION[logsession]'"; 
					  
				 $conn->query($sql);
		         header("location: login.php"); 
			   
		   } else{
			   
			     header("location: userprofile.php?Password_ERROR!!!");
				
		   }         
       
	   }
	   
	else
	   {
	   header("location: login.php?Error_occurd...!");
	   exit();
     }
	 


	 
	 ?>