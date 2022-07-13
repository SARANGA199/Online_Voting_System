<?php
	session_start();
?>

<header>
       <div class = "headerimg">
       <img src = "../images/logo1.png" width = "150px" height = "150px">
       </div>



	   <div class = "user2">

	   <?php
			if(isset($_SESSION['logsession']))
			{
				$uname=$_SESSION['logsession'];
				include_once('config_1.php');
				$sql = "SELECT * FROM user where User_name ='$uname'";
				$result = $conn->query($sql);
				$row = $result->fetch_assoc();
				
				echo'
				 <div class = "user1">
				<img src = "../images/ava2.png" width = "80px" height = "80px">
				</div>
	   			<div class = "button1">
				<h2>'.$row['User_name'].'</h2>
				</div>
				<br>
				<div class = "button2">
				<a  href="logout.php">Log-Out</a>
				</div>
				';
			}
			else{
				echo'
				<div class = "user1">
				<img src = "../images/avatar.png" width = "80px" height = "80px">
				</div>
				<div class = "button1">
				<h2> Guest User </h2>
				</div>
				<br>
				<div class = "button2">
				<a  href="login.php">Log-In</a>
				</div>
				<br>
				<div class = "button2">
				<a  href="register.php">Register</a>
				</div>
				
				';
			}
	   ?>

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
        <a  href="vote.php" class="time1" >VOTE NOW</a>
  </center>


      <div class="menu-bar">
        <ul>
             <li class="active"><a  href="homepage.php">Home</a></li>
             <li><a  href="Adisplay.php">Awards</a></li>
			 <li><a  href="#">Candidates</a>
                 <div class="sub-menu-1">
                  <ul>
                       <li><a href="actor.php">Most Popular Actor</a></li>
                       <li><a href="actress.php">Most Popular Actress</a></li>
                       <li><a href="singer.php">Most Popular Singer</a></li>
				  </ul>
				  </div>
			 </li>
             <li><a  href="#">Result</a>
				  <div class="sub-menu-1">
                  <ul>
                       <li><a href="Addvote.php">Most Popular Actor results</a></li>
                       <li><a href="Addvote2.php">Most Popular Actress results</a></li>
                       <li><a href="Addvote3.php">Most Popular singer results</a></li>
				  </ul>
				  </div>
			 </li>
             <li><a  href="#">Help</a>
				 <div class="sub-menu-1">
                  <ul>
					   <li><a href="guideline.php">Guideline</a></li>
					   <li><a href="FAQ.php">Q&A</a></li>
					   <li><a href="Feedback.php">Feedback</a></li>
				  </ul>
			 </li>
                  </ul>
			      </div>
	  </div>
  </header>