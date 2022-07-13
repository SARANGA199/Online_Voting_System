<!DOCTYPE html>
<html >
   <head>
         <title>Log-In page</title>
         <link rel="stylesheet" href="../css/styles.css">
         <script src="../js/myScript.js"></script>
   </head>
  <body>
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
        	<a  href="#">Log-in</a>
       	</div>
      	<br>
	        <div class = "button2">
	          <a  href="register.php">Register</a>
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
	  
<!-- Log-In -->

<br><br>

	<div class="logform">
        <h1>Log-In</h1><br>
		<img src = "../images/login.png" width = "150px" height = "150px">
	</div>
	<div class="main1">
    <form method="POST" action="loginval.php">

	<h2 class="name">Username </h2>
	<input class="txtbox1" type="text" name="usrname">
	<h2 class="name">Password </h2>
	<input class="txtbox1" type="password" name="psword"> 
	<br>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
	<span class="psword">Register <a href="register.html">Here</a></span>
	<div class="btposition">
		<button type="submit" name="logsub" id="submit">Log-In</button>
		<button type="button" class="cancelbtn"><a href="homepage.html">Cancel</a></button>
	</div>
	<br>
	
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
