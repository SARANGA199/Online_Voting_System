<?php
	include_once 'config_1.php';
	
	if (isset($_POST['btn120'])) {
	$id = $_POST['first3'];
	
	$sql = "SELECT * FROM votes WHERE id = $id";
	$result = $conn->query($sql);

	$currentCount = 0;
	
	if($result->num_rows>0){
	 while($row = $result->fetch_assoc()){
       $currentCount = $row['vote'];
	 }
	}
	++$currentCount;
	$conn->query("UPDATE votes SET vote=$currentCount WHERE id=$id");
}

	
?>


<!DOCTYPE html>
<html >
   <head>
         <title>Vote</title>
         <link rel="stylesheet" href="../css/styles6.css">
         <script src="../js/myScript6.js"></script> 
   </head>
  <body>
  <header>
           	<?php
		include ('header.php');
	      ?>
	  </header>
<br><br><br>


 <center>

   <h1 style="color:#ff5050"><center> RESULTS</center></h1>
    <h1 style="color:#ff5050"><center>The Most Popular Singer</center></h1>
	<br><br><br>
</center>
<style>
* {box-sizing: border-box}

.container6 {
   position:relative;
   left:25%;
  width: 50%;
  background-color: black;
}

.skills6 {
	float:center;
  text-align: right;
  padding-top: 10px;
  padding-bottom: 10px;
  color: white;
}
.ded{
	position:relative;
	top:10%;
}


</style>


<?php


$sql = "SELECT * FROM votes WHERE id>10";

$result = $conn->query($sql);

if($result->num_rows>0){
  ?>
<div class="newform3">;
<?php
$c =3;
 while($row = $result->fetch_assoc()){
	 $cname=$row['name'];
	 $count=$row['vote'];

   echo " 
           <div><center><b><h2>$cname</h2><br>

           </center></b>
		   <div class='container6'>
           <div class='skills6 $cname'>$count%</div>
		   <style>
		   
		   .$cname {width:$count%; background-color: red;}
		   </style>
                  
           </div></div>
     <br><br><br><br><br>";


}
}
 




?>
<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 20%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>
 
 <div class="row">
  <div class="column">
    <img src="../images/chamara.jpg" alt="chamara" style="width:100%">
	<p>Chamara Weerasinghe</p>
  </div>
  <div class="column">
    <img src="../images/sanuka.jpg" alt="sanuka" style="width:100%">
	<p>Sanuka Wikcramasinghe</p>
  </div>
  <div class="column">
    <img src="../images/shihan.jpg" alt="shihan" style="width:100%">
	<p>Shihan Mihiranga</p>
  </div>
  <div class="column">
    <img src="../images/nadeemal.jpg" alt="nadeemal" style="width:100%">
	<p>Nadeemal Perera</p>
  </div>
  <div class="column">
    <img src="../images/nilan.jpg" alt="nilan" style="width:100%">
	<p>Nilan Hettiarachchi</p>
  </div>
</div>


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
