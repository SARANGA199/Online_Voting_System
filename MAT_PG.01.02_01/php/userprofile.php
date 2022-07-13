<!DOCTYPE html>
<html >
   <head>
         <title>Award Feaster</title>
         <link rel="stylesheet" href="../css/styles.css">
         <script src="../js/myScript.js"></script>
		 
   </head>
  <body>
  
   <!-- Header start -->
  
  <?php
	include('header.php');
  ?>
  
  <!-- Header end -->
	  
<br><br><br><br><br><br><br>

<center>
<div class = "userd">
	<img src = "../images/ava2.png" width = "110px" height = "100px">
	</div><br><br>
<strong><h1 class="toplain">USER DETAILS<h1></strong>
</center>
<br><br>

<center>
<div id="pinfor" class="contents">
    <h1 class="headinfo">personal infomation</h1>
	<?php 
	echo'<div class="profile tabshow">
			<form action="update.php" method="POST">
			<br> <br><h2>First name</h2>
			<input type = "text" class ="input" name = "usernameF" value = '.$row['First_name'].'>
			<br> <br><h2>Last name</h2>
			<input type = "text" class ="input" name = "usernameL" value = '.$row['Last_name'].'>
			<br> <br><h2>User name</h2>
			<input type = "text" class ="input" name = "usernameU" value = '.$row['User_name'].'>
			<br> <br><h2>Phone number</h2>
			<input type = "text" class ="input" pattern="[0-9]{10}" name = "phone1" title="Please Enter 10 Digits" value = '.$row['Phone'].'>
			<br> <br><h2>Email</h2>
			<input type = "email" class ="input" name = "email1" value ='.$row['Email'].'>';
			?>
			<button name="btnchge1" id="btnchge1" onclick="return pw1()">Change Password </button>
			<br> <br><h2> Current Password</h2>
		    <input type="password" name="pwd1" id="pwd1" class = "input" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
		    title="Must contain at least one digit, one uppercase character one lowercase character and at least 10 characters" required disabled> <br> <br>
			
			<h2>New Password<h2>
		   <input type="password" name="pwd2" id="pwd2" class ="input" required disabled ><br> <br>
	
		   <h2>Re Enter New Password<h2>
		   <input type="password" name="pwd3" id="pwd3" class ="input" required disabled >
		    <br>
			<input type="submit" name="update" id="update" class="btn2" value="Update" >

			</form>
			<form action="delete.php" method="POST">
			<div class="tab">
			<br>
			<h4>Delete your account permenetly</h4>
			<input type="submit" name="delete" id="delete" class="btn2" value="Delete Account">
			</div>
			</form>
		</div>
</div>

</center>

<script>
"openinfor()";
</script>

<br><br><br><br><br><br><br><br>

	
    <footer>
        <div class="main-content">
          <div class="box">


  <h2 style="color:#ff5050;">About us</h2>
  <div class="content">
  <hr width=15%>
  <br>
  <p>
  This is an online voting system for award nomination.The purpose behind our design is to provide people a user freindly voting system.Our platform also provides information about candidates and awards.</p>
  </div>
</div>

  <div class="center box">
            <h2 style="color:#ff5050;">Quick links</h2>
  <div class="content">
  <hr width=15%>

              <br>
                <a class ="text" style="color:white;" href="#">Awards</a>
                <br><br>

  <div>
              <br>
                <a class ="text" style="color:white;" href="#">Candidates</a>
                <br><br>
              </div>
  <div >
              <br>
                <a class ="text" style="color:white;" href="#">Results</a>
              </div>
  </div>
  </div>


  <div class="right box">
  <h2 style="color:#ff5050;">
  Contact us</h2>
  <div class="content">
  <hr width=15%>

<br><br>
  <b>Email :-</b> OVS2020@outlook.com
  <br><br><br>
  <b> Hotline:-</b>+94772456789
  <div class="bottom"><br><br>
  <center>
            <h3 class="credit" style="color:#ff5050">Created by  OVS Team<h3>
          </center>
  </div>
</div>
</div>
  </body>
</html>


