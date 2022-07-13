<!DOCTYPE html>
<html>
<head>
    <title>Award Feaster</title>
    <link rel="stylesheet" href="../css/styles3.css">

    <script src="../js/myScript3.js"></script>
</head>
<body>
<!-- Header start -->

<?php
include('header.php');
$_SESSION["logsession"] = 3;
?>

<!-- Header end -->


<br><br><br><br>


<body>

<div class="main">
    <center>
        <h1>Most Popular Singer of the Year</h1>
    </center>


    <h2 style="margin-left: 30px">Nominees</h2>


    <div class="row">

        <div class="row">

            <?php

            include 'config_1.php';
            $candidateQuery = 'SELECT * FROM candidate WHERE category_id = 3';

            $candidates = mysqli_query($conn, $candidateQuery);
            mysqli_close($conn);

            if (mysqli_num_rows($candidates)) {
                while ($candidate = mysqli_fetch_assoc($candidates)) {
                    echo '
                    <div class="column" style="position:relative">
                        <div class="content">
                        
                            <img src="../images/' . $candidate["image_url"] . '"  style="width:100%" alt="image">

                            <div style="text-align: center">
                                <h3>' . $candidate["name"] . '</h3>
                                <h4>Age' . $candidate["age"] . ' </h4>
                                <br />
                                <h4>' . $candidate["description"] . ' </h4>
                            </div>
                            <br />   
                            
                        </div>
                    </div>';
                }
            }

            ?>

        </div>

    </div>


</div>


<br>
<div style="margin: 75px auto; width: fit-content">
    <a href="actress.php" class="previous">&laquo; Previous</a>
    <a href="modify-data.php" class="next">Modify Details</a>
</div>
<br>
</body>


<!-- FOOTER -->
<footer>
    <div class="main-content">
        <div class="box">


            <h2 style="color:#ff5050;">About us</h2>
            <div class="content">
                <hr width=15%>
                <br>
                <p>
                    This is an online voting system for award nomination.The purpose behind our design is to provide
                    people a user freindly voting system.Our platform also provides information about candidates and
                    awards.</p>
            </div>
        </div>

        <div class="center box">
            <h2 style="color:#ff5050;">Quick links</h2>
            <div class="content">
                <hr width=15%>

                <br>
                <a class="text" style="color:white;" href="#">Awards</a>
                <br><br>

                <div>
                    <br>
                    <a class="text" style="color:white;" href="#">Candidates</a>
                    <br><br>
                </div>
                <div>
                    <br>
                    <a class="text" style="color:white;" href="#">Results</a>
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
                        <h3 class="credit" style="color:#ff5050">Created by OVS Team<h3>
                    </center>
                </div>
            </div>
        </div>
</body>
</html>
