<?php
	include_once 'config_1.php';
?>


 <!DOCTYPE html>
<html >
   <head>
         <title>Feedback</title>
         <link rel="stylesheet" href="../css/styles1.css">
         <script src="../js/myScript1.js"></script>
   </head>
  <body>
		<?php
		include ('header.php');
	?>
<br><br><br>
<center>

          <div class="newform">
            <div class="feed-title">
              <h1>FEEDBACK</h1>
              <br><br><br><br>
            </div>

             <form action="addfeedback.php" method="post" id="Fform">
             <input type="text" class="input-new" placeholder="Name" required name="nme">
                      
              <select class="newlist" name="Type" >

                     <option value="Positive">Positive Feedback</option>
                     <option value="Negative" required>Negative Feedback</option>
              </select><br>

              <input type="text" class="input-new" placeholder="Subject" name="subject"><br>

              <textarea class="input-new textarea-new" placeholder="Message here" required  name="Fmessage" ></textarea><br><br>

              <input type="checkbox" name="verify"  id="verify" onclick="enablenew()" > Confirm <br>

                <button type="submit" class="button-new1" name="sub" id="sub1" disabled>Submit</button>


           </form>
		            <a  href="addfeedback.php" class="time2" style="left:65%" >Edit feedback</a>
</center>
<br><br><br>

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
                <a class ="text" style="color:white;" href="Award.html">Awards</a>
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
