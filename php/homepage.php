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
	  
	<br>

	<div class="slideshow-container">

	<div class="mySlides fade">
		<img src="../images/slide1.jpg" style="width:100%">
	</div>

	<div class="mySlides fade">
		<img src="../images/slide2.jpg" style="width:100%">
	</div>

	<div class="mySlides fade">
		<img src="../images/slide3.jpg" style="width:100%">
	</div>

	</div>
	
	<br>

	<div style="text-align:center">
		<span class="slidedot"></span> 
		<span class="slidedot"></span> 
		<span class="slidedot"></span> 
	</div>
	<script>showSlides1()</script>
	  	  
	  
	  <center>
	  <br>
	  <div class="txtshadow">
	  <div class="blinktxt">
		<h1><blink>Voting has started</blink></h1>
	  </div>
	  </div>
	  <br>
		<a href="register.php"><img src=../images/register.png width="10%" height="10%"></a>
		<a href="login.php"><img src=../images/login1.png width="10%" height="10%"></a>
		
		<br><br>
		
		<div class="position2">
		<a href="vote.php"><img src=../images/vote.png width="40%" height="20%"></a>
		</div>

		<br><br>
		
	  </center>



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