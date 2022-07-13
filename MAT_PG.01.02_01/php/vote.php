
<!DOCTYPE html>
<html >
   <head>
         <title>Vote</title>
         <link rel="stylesheet" href="../css/styles6.css">
         <script src="../js/myScript6.js"></script>
   </head>
  <body>
    <!-- Header start -->
  
  <?php
	include('header.php');
  ?>
  
  <!-- Header end -->
<br><br><br>
<center>
      <div class="newform1">
<h1 style="color:#ff5050"><center>Most Popular Actor </center></h1> 
   <form  method="post" id="formnew1" action="Addvote.php">
   <br>
   <form action="#" method="post">
    <div class="cont" style="width:40%" >

  <input type="radio"  name="first1" id="first1"  value="1">
  <label for="first1">Roshan Ranawana</label><br>
  <input type="radio"  name="first1" id="first2" value="2">
  <label for="first2">Hemal Ranasinghe</label><br>
  <input type="radio"  name="first1" id="first3" value="3">
  <label for="first3">Thumindu Dodantenna</label><br>
  <input type="radio"  name="first1" id="first4" value="4">
  <label for="first4">Ranjan Ramanayake</label><br>
  <input type="radio"  name="first1" id="first5" value="5">
    <label for="first5">Pubudu Chaturanga</label>
<br><br>

  <input type="submit" onclick="myFunction1()" class="button-new"  name="btn100" style="top:110% " style="left:50px"  id="btn1" value="VOTE">
<p id="btn1">  </p>
</div>
</form>
</div>
  </center>
    <br><br><br><br><br><br>
    <br><br><br>

<center>

  <div class="newform2">
<h1 style="color:#ff5050"><center>Most Popular Actress </center></h1>
<form  method="post" id="formnew2" action="Addvote2.php">
<br>
<form action="#" method="post">
<div class="contB"style="width:40%">

  <input type="radio"  name="first2" id="first6"  value="6" >
  <label for="first6">Oshadhi Hewamadduma</label><br>
<input type="radio"  name="first2" id="first7"  value="7">
<label for="first7">Rithu Akarsha</label><br>
<input type="radio"  name="first2" id="first8"  value="8">
<label for="first8">Tharuka Wanniarachchi</label><br>
<input type="radio"  name="first2" id="first9"  value="9">
<label for="first9">Geethma Bandara</label><br>
<input type="radio"  name="first2" id="first10"  value="10">
<label for="first10">Roshel Rogers</label>
<br><br>

  <input type="submit" onclick="myFunction2()" class="button-new"  name="btn110" style="top:110% " style="left:50px" id="btn2" value="VOTE"> 
  <p id="btn2"> </p>

</div>
</form>
</div>
</center>
  <br><br><br><br><br><br>
   <br><br><br>

<center>
<div class="newform3">
  <h1 style="color:#ff5050"><center>Most Popular Singer </center></h1>
  <form  method="post" id="formnew3" action="Addvote3.php">
  <br>
  <form action="#" method="post">
<div class="contC"style="width:40%">

<input type="radio"  name="first3" id="first11"  value="11">
<label for="first11">Sanuka wikcramasinghe</label><br>
<input type="radio"  name="first3" id="first12"  value="12">
<label for="first12">Chamara weerasinghe</label><br>
<input type="radio"  name="first3" id="first13"  value="13">
<label for="first13">Nadeemal Perera</label><br>
<input type="radio"  name="first3" id="first14"  value="14">
<label for="first14">Shihan Mihiranga</label><br>
<input type="radio"  name="first3" id="first15"  value="15">
<label for="first15">Nilan Hettiarachchi</label>
<br><br>
<input type="submit"  onclick="myFunction3()" class="button-new"  name="btn120" style="top:110% " style="left:50px"  id="btn3" value="VOTE">
<p id="btn3"> </p>

</div>
</form>
</div>
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
