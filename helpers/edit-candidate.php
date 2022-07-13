<?php
session_start();

$category = $_SESSION["logsession"];
$name = $age = $description = $filename = $imageName = '';
$candidate = 0;


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $candidate = test_input($_POST["candidate_to_edit"]);
    $name = test_input($_POST["edit_name"]);
    $age = test_input($_POST["edit_age"]);
    $description = test_input($_POST["edit_description"]);

    $target_dir = "../images/";
    $target_file = $target_dir . basename($_FILES["edit_candidate_image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $target_file = $target_dir . $name . '.' . $imageFileType;
    $imageName = $name . '.' . $imageFileType;

    $check = getimagesize($_FILES["edit_candidate_image"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
        die('<h2 style="color: red">File is not an image.</h2>');

    }

    if ($_FILES["edit_candidate_image"]["size"] > 500000) {
        $uploadOk = 0;
        die('<h2 style="color: red">Sorry, your file is too large.</h2>');

    }

    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        $uploadOk = 0;
        die('<h2 style="color: red">Sorry, only JPG, JPEG, PNG files are allowed.</h2>');

    }

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";

    } else {
        $temp = explode(".", $_FILES["edit_candidate_image"]["name"]);
        $filename = round(microtime(true)) . '.' . end($temp);
        if (!move_uploaded_file($_FILES["edit_candidate_image"]["tmp_name"], $target_file)) {
            die('<h2 style="color: red">Sorry, there was an error uploading your file.</h2>');
        }
    }

}

include '../html/config_1.php';
$query = 'UPDATE candidate SET name = \''. $name .'\', age = ' . $age . ', description = \'' . $description . '\', image_url = \'' . $imageName .'\' WHERE id = ' . $candidate;

if (!mysqli_query($conn,$query)) {
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


