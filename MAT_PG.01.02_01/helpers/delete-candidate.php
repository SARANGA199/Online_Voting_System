<?php
session_start();

$category = $_SESSION["logsession"];
$name = $age = $description = $filename = $imageName = '';
$candidate = 0;


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $candidate = test_input($_POST["candidate_to_delete"]);
}

include '../html/config_1.php';
$query = 'DELETE FROM candidate WHERE id = ' . $candidate;

if (!mysqli_query($conn,$query)) {
    echo mysqli_error($conn);
    echo '<h2 style="color: red">Error saving changes</h2>';
} else {
    echo '<h2 style="color: green">Changes Successfully saved</h2>
          <a href="../html/actor.php"><button style="height: 30px; width: 120px; font-size: 20px; color: red">Home</button></a> ';
}
mysqli_close($conn);

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data =  addslashes($data);
    return $data;
}


