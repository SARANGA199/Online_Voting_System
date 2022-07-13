<?php
	include_once 'config_1.php';
?>



 <!DOCTYPE html>
<html >
   <head>
         <title>Edit Feedback</title>
         <link rel="stylesheet" href="../css/styles1.css">
         <script src="../js/myScript1.js"></script>
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

<br><br><br>
<?php

if(isset($_POST['sub']))
{
	$state = $_POST["Type"];
  $Name = $_POST["nme"];
  $Title = $_POST["subject"];
  $message = $_POST["Fmessage"];

	$sql1 = "SELECT * FROM feedback where User_name='$uname' ";
	$result1 =$conn-> query($sql1);
	 if(mysqli_num_rows($result1)>0){

      echo "<script>alert('You already add a Feedback !');</script>";
	 }
	 else {

  $sql = "INSERT INTO  feedback(User_name,F_status,U_name,f_subject,f_message)
	VALUES ('$uname','$state','$Name','$Title', '$message')";

  if(mysqli_query($conn,$sql)){
    echo "<script>alert('Record added successfully');</script>";
  }else{
    echo "<script>alert('ERROR: could not execute the sql statement');</script>";
  }
}
}





?>
 <?php

 echo "<center>";
 $sql1 = "SELECT * FROM feedback where User_name='$uname' ";
 $result1 =$conn-> query($sql1);
 $row1=$result1->fetch_assoc();


				if($type =='genaral')
				{
                  echo '
                         <div class="newform6">
 						            <div class="feed-title">
 						              <h1>EDIT FEEDBACK</h1>
 						              <br><br><br><br>
 						            </div>

 						             <form action="updatenew.php" method="post" >

												  <input type="text" class="input-new"  value = "'.$row1['U_name'].'"  required name="nme"><br>

 						              <input type="text" class="input-new"  value = "'.$row1['f_subject'].'" name="subject"><br>

 						              <textarea class="input-new textarea-new"  required   name="Fmessage" >'.$row1['f_message'].'</textarea><br><br>


 						                <button type="submit" class="button-new" name="sub"  >Save</button>
				&nbsp &nbsp &nbsp
														<button type="submit" class="button-new"   name="sub1"  >Delete</button>


 						           </form>
 						         </div>
 						</center>
				<br><br><br>';}

?>

<!---------------------------------------------->
<center>
<div class="feed-title">
	<h1>FEEDBACKS</h1>
	<br><br><br><br>
</center>
</div>


<center>
<table class="table12" >
 <tr class="trt">
	 <th class="tht">NAME</th>
	 <th class="tht">FEEDBACK</th>


 </tr>
 <?php
 $sql = "SELECT * FROM feedback ";
 $result = mysqli_query($conn,$sql);

 if($result)
 {

	 while($row=mysqli_fetch_assoc($result))
	 {
		 $sta = $row['F_status'];
			$nm=$row['U_name'];
			$sub=$row['f_subject'];
			$mes=$row['f_message'];
			$fid=$row['Feedback_ID'];

		 echo "<tr>
                  <form action='updatenew.php' method='post'>
				 <td class='tdt'><b>$nm</b></td>
				 <td class='tdt'><b>Feedback Type</b> :$sta<br>
							<b>Feedback Title</b>:$sub<br>
							<b>Description </b>: $mes <br>
							<form methoaction='updatenew.php'>";
							if($type =='admin')
							{
							echo"
							<button type='submit' class='button-new' value='".$row['Feedback_ID']."'  name='sub2' onclick='".$row['Feedback_ID']."' >Delete</button>
							";}
							echo"
							</td>
					</form>			


			 </tr>";

	 }
 }
 else{
	 echo"No data";
 }

 ?>
	<?php mysqli_close($conn); ?>



</table>

</center>





<!--</div>-->

<br><br><br><br>
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
