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
	  	  <?php
	   $user1 = $_SESSION['logsession'];
	   $sql = "SELECT Status from user where User_name='$user1'";
	   $result = $conn->query($sql);
	   $row = $result->fetch_assoc();
	   
	   $type = $row['Status'];
	 
	 ?>

  <br><br><br><br>
  <center>
  <h1 class="Ahead">AWARDS</h1></center>
  <br><br><br><br>
  <?php
	$sql = "select * from award";
	$result = mysqli_query($conn,$sql);
	
	if($result)
	{
		
		while($r=mysqli_fetch_assoc($result))
		{
			$AVID=$r['Award_ID'];
			$name=$r['Award_name'];
			$description=$r['A_Description'];
			$link=$r['A_image_link'];
			echo "<center>
                 <h1>$name</h1>
                    <br>";

              echo "<div class='award'>
                <img src='$link'  class='image'>
                <div class='top-award'><p>$description </p>
                </div>
                </div>
				<br>";
				if($type =='admin')
				{
				echo"
				<form method='post' action = Aupdate.php><div class='btn-group'><button class ='btn5' type='submit' value ='$AVID' name='update' onclick='$AVID'>Update $name</button></form>
				<form method='post' action = submitdelete.php><button class ='btn5' type='submit'  value ='".$r['Award_ID']."' name='delete' onclick='".$r['Award_ID']."'>Delete $name</button></div></form></div>
				</center>";}
		}

		
	}
	else{
		echo"0 result";
	}

			 if($type =='admin')
			 {
	 echo'<form method="POST" name="test" action="addawards.php">
     <input type="submit" class="btn5" name="Submit"  value="+add award" >
			 </form>';
			 }
  ?>
    
				
				

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
