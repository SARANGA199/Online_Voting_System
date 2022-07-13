<!DOCTYPE html>
<html>
<head>
    <title>Award Feaster</title>
    <link rel="stylesheet" href="../css/styles3.css">
    <script src="../js/myScript3.js"></script>
    <?php
    session_start();

    include 'config_1.php';
    $candidate_query = 'SELECT * FROM candidate WHERE category_id = ' . $_SESSION["logsession"];
    $candidates = mysqli_query($conn, $candidate_query);
    mysqli_close($conn);

    $filtered_candidates = array();
    if (mysqli_num_rows($candidates) > 0) {
        while ($candidate = mysqli_fetch_assoc($candidates)) {
            $filtered_candidates[$candidate["id"]] = array("name" => $candidate["name"], "age" => $candidate["age"], "description" => $candidate["description"]);
        }
    }

    $cookie_name = "popular_actor";
    setcookie($cookie_name, json_encode($filtered_candidates), time() + (86400 * 30), "/");
    ?>
    <script src="../js/data.js"></script>
    <script>
        function getCandidates() {
            var name = 'popular_actor' + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return JSON.parse(c.substring(name.length, c.length).replaceAll('+', ' '));
                }
            }
            return undefined;
        }

        function fillDetails(event) {
            document.getElementsByName("edit_name")[0].value = candidates[event.target.value].name;
            document.getElementsByName("edit_age")[0].value = candidates[event.target.value].age;
            document.getElementsByName("edit_description")[0].value = candidates[event.target.value].description;
        }
    </script>
    <style>
        td {
            padding: 5px;
            text-align: right;
        }

        input, select {
            width: 100%;
            font-size: 20px;
        }

        label {
            font-size: 20px;
        }
    </style>
</head>
<body>
<header>
    <div class="headerimg">
        <img src="../images/logo1.png" width="150px" height="150px">
    </div>

    <div class="user1">
        <img src="../images/ava.png" width="80px" height="80px">
    </div>

    <div class="user2">
        <div class="button1">
            <h2> Guest User </h2>
        </div>
        <br>
        <div class="button2">
            <a href="#">Log-In</a>
        </div>
        <br>
        <div class="button2">
            <a href="#">Register</a>
        </div>
    </div>


    <table class="countdownContainer">
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
        <a href="#" class="time1">VOTE NOW</a>
    </center>


    <div class="menu-bar">
        <ul>
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Awards</a></li>
            <li><a href="#">Candidates</a>
                <div class="sub-menu-1">
                    <ul>
                        <li><a href="actor.php">Most Popular Actor</a></li>
                        <li><a href="actress.php">Most Popular Actress</a></li>
                        <li><a href="singer.php">Most Popular Singer</a></li>
                    </ul>
            </li>
            <li><a href="#">Result</a></li>
            <li><a href="#">Help</a>


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


<br><br><br><br>

<h2 style="margin: -50px auto 20px; width: 300px">Modify Popular <?php
    if ($_SESSION["logsession"] == 1) {
        echo 'Actor';
    } else if ($_SESSION["logsession"] == 2) {
        echo 'Actress';
    } else {
        echo 'Singer';
    }

    ?></h2>

<div class="main">

    <div class="row">

        <div style="margin-right: 20px; float: left; width: 400px; border: 1px solid black; border-radius: 5px; background: rgba(255, 255, 255, 0.8); padding: 10px">
            <form action="../helpers/edit-candidate.php" method="post" enctype="multipart/form-data">
                <h2>Edit Candidate Details</h2><br/>
                <p style="font-size: 20px">Select candidate and edit details.</p>
                <hr/>
                <br/>
                <table>
                    <tr>
                        <td><label>Candidate:</label></td>
                        <td>
                            <select onchange="fillDetails(event)" name="candidate_to_edit">
                                <option>Select a Candidate</option>
                                <script>
                                    const candidates = getCandidates();
                                    const keys = Object.keys(candidates);
                                    for (let key of keys) {
                                        document.writeln('<option value="' + key + '">' + candidates[key].name + '</option>');
                                    }
                                </script>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 75px"><label style="font-size: 20px">Name:</label></td>
                        <td><input name="edit_name" type="text"/></td>
                    </tr>
                    <tr>
                        <td><label>Age: </label></td>
                        <td><input name="edit_age" type="text"/></td>
                    </tr>
                    <tr>
                        <td><label>Image: </label></td>
                        <td><input type="file" name="edit_candidate_image"/></td>
                    </tr>
                    <tr>
                        <td><label>Description:</label></td>
                    </tr>
                </table>
                <textarea style="font-size: 20px; width: 100%" name="edit_description" rows="5" cols="30"></textarea>
                <br/><br/>
                <button style="height: 30px; width: 70px; color: white; background: red; font-size: 20px; float: right"
                        type="submit">Save
                </button>
            </form>
        </div>

        <div style="margin-right: 20px; float: left; width: 400px; border: 1px solid black; border-radius: 5px; background: rgba(255, 255, 255, 0.8); padding: 10px">
            <form action="../helpers/add-candidate.php" method="post" enctype="multipart/form-data">
                <h2>Add Candidate</h2><br/>
                <p style="font-size: 20px">Fill details add a new candidate to this category.</p>
                <hr/>
                <br/>
                <table>
                    <tr>
                        <td style="width: 75px"><label style="font-size: 20px">Name:</label></td>
                        <td><input name="add_name" type="text"/></td>
                    </tr>
                    <tr>
                        <td><label>Age: </label></td>
                        <td><input name="add_age" type="text"/></td>
                    </tr>
                    <tr>
                        <td><label>Image: </label></td>
                        <td><input type="file" name="add_candidate_image"/></td>
                    </tr>
                    <tr>
                    <tr>
                        <td><label>Description:</label></td>
                    </tr>
                </table>
                <textarea style="font-size: 20px; width: 100%" name="add_description" rows="5" cols="30"></textarea>
                <br/><br/>
                <button onclick="printCookie()"
                        style="height: 30px; width: 70px; color: white; background: red; font-size: 20px; float: right"
                        type="submit">Add
                </button>
            </form>
        </div>

        <div style="float: left; width: 400px; border: 1px solid black; border-radius: 5px; background: rgba(255, 255, 255, 0.8); padding: 10px">
            <form action="../helpers/delete-candidate.php" method="post">
                <h2>Delete Candidate</h2><br/>
                <p style="font-size: 20px">Select candidate and click delete to delete from the system.</p>
                <hr/>
                <br/>
                <label style="font-size: 20px">Select Candidate:
                    <select style="font-size: 20px; width: 214px;" name="candidate_to_delete">
                        <script>
                            for (let key of keys) {
                                document.writeln('<option value="' + key + '">' + candidates[key].name + '</option>');
                            }
                        </script>
                    </select>
                </label>
                <br/>
                <br/>
                <button style="height: 30px; width: 70px; color: white; background: red; font-size: 20px; float: right"
                        type="submit">Delete
                </button>
            </form>
        </div>

    </div>

</div>

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
                        <h3 class="credit" style="color:#ff5050">Created by OVS Team</h3>
                    </center>
                </div>
            </div>
        </div>
    </div>
</html>
