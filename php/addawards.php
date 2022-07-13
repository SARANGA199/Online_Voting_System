<?php
	include_once 'config_1.php';
?>
<!DOCTYPE html>
<html >
   <head>
         <title>Registration page</title>
         <link rel="stylesheet" href="../css/styles4.css">
         <script src="../js/myScript4.js"></script>
   </head>
  <body>
  		<?php
		include ('header.php');
	?>

  <br><br>
  
  

	<br>
	<div class="Addawardform">
    <h1>Add awrd details</h1><br>
	<img src = "../images/reg2.png" width = "150px" height = "150px">
	</div>
	<div class="main">    
        <form method="POST" action="submitaAddawards.php">
                <h2 class="name"> Awrd ID </h2>
					<input class="txtbox1" type="text" name="award_ID" required><br>

				<h2 class="name">Awrd Name </h2>
				<input class="txtbox1" type="text" name="Awrd_name" required>
				<h2 class="name">Awrd description</h2>
				<textarea class="txtbox2"  name="Awrd_description" cols="50" rows="8" required></textarea>
				<h2 class="name">Awrd image link</h2 required>
				<input class="txtbox1" type="text" name="limk">
				<h2 class="name">Admin ID</h2>
				<input class="txtbox1" type="text" name="Admin_ID" required>
				
				
				
				<div class = "btposition">
				<button  class ="btn5" type="submit">Add awrd</button>
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
