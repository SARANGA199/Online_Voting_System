<!DOCTYPE html>
<html >
   <head>
         <title>Registration page</title>
         <link rel="stylesheet" href="../css/styles.css">
         <script src="../js/myScript.js"></script>
   </head>
  <body>
  
    <!-- Header start -->
 <header>
       <div class = "headerimg">
       <img src = "../images/logo1.png" width = "150px" height = "150px">
       </div>

       <div class = "user3">
	<img src = "../images/avatar.png" width = "80px" height = "80px">
	</div>

	       <div class = "user2">
        	<div class = "button1">
            	<h2> Guest User </h2>
         	</div>
	        <br>
	       <div class = "button2">
        	<a  href="login.php">Log-in</a>
       	</div>
      	<br>
	        <div class = "button2">
	          <a  href="#">Register</a>
	         </div>
	       </div>


    <table class="countdownContainer" >
        <tr class="info">
           <td colspan="4">Voting Countdown</td>
         </tr>
                <tr class="info">
                <td id="days">120</td>
                <td id="hours">4</td>
                <td id="minutes">12</td>
                <td id="seconds">22</td>
        </tr>
        <tr>
         <td>Days</td>
         <td>Hours</td>
        <td>Minutes</td>
         <td>Seconds</td>
      </tr>
    </table>

  <script> countdown()</script>

  <center>
        <a  href="#" class="time1" >VOTE NOW</a>
  </center>


      <div class="menu-bar">
        <ul>
             <li class="active"><a  href="#">Home</a></li>
             <li><a  href="#">Awards</a></li>
            <li><a  href="#">Candidates</a>
                 <div class="sub-menu-1">
                  <ul>
                       <li><a href="#">Most Popular Actor</a></li>
                       <li><a href="#">Most Popular Actress</a></li>
                      <li><a href="#">Most Popular Singer</a></li>
             </ul>
      </li>
                 <li><a  href="#">Result</a></li>
                <li><a  href="#">Help</a>


        <div class="sub-menu-1">
            <ul>
                <li><a href="#">Guideline</a></li>
                <li><a href="#">Q&A</a></li>
                <li><a href="#">Feedback</a></li>

            </ul>

      </li>
    </ul>
      </div>
	  </header>
  <!-- Header end -->

  <br><br>
  
  
	<div class="reglog">
	<br>
	<h3>Already have an account?</h3>
				<div class = "btposition2">
				<button type="button" ><a href="login.php">Log-In</button></a>
				</div>
	</div>
	<br>
	<div class="registerform">
    <h1>Registration For Voting</h1><br>
	<img src = "../images/reg2.png" width = "150px" height = "150px">
	</div>
	<div class="main">    
        <form method="POST" onsubmit="return checkPassword()" action = "userdetails.php">
            <div id="name">
                <h2 class="name">Name </h2>
					<input class="firstname" type="text" name="first_name" required><br>
					<label class="firstlabel">first name</label>
					<input class="lastname" type="text" name="last_name"><br>
					<label class="lastlabel">last name</label>
            </div>
				<h2 class="name">User Name </h2>
				<input class="txtbox1" type="text" name="txtbox1" required>
				<h2 class="name">Email</h2>
				<input class="email1" type="email" name="email">
				<h2 class="name">Phone</h2 required>
				<input class="number" type="text" name="phone" required>
				<label class="pnumber">Ex : 0761234567</label>
				<h2 class="name">Password </h2>
				<input class="txtbox1" type="password" name="pass1" id="pwd1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
				<h2 class="name">Re-enter Password </h2>
				<input class="txtbox1" type="password" name="pass2" id="pwd2" required> 
				<h2 id="coustomer">Select your gender</h2>
				<label class="radio">
                <input class="radio-one" type="radio" checked="checked" name="rdiobtn" value="Male">
                <span class="checkmark"></span>
                Male</label>
    
				<label class="radio">
                <input class="radio-two" type="radio" name="rdiobtn" value="Female">
                <span class="checkmark"></span>
                Female</label>
				
				<div class = "btposition">
				<button type="submit">Register</button>
				</div>
        </form>
	</div>
	
<br><br>

<!-- FOOTER -->


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
			<h2 style="color:#ff5050;">Contact us</h2>
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
