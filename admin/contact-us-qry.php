<?php
require_once "./db-con.php";
require_once "./includes/helpers.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    // upload image
    $data = uploadImage("services", $_FILES['image'], 3, "contact");

echo ("sdflfjsfg"); exit;
    if ($data['errors'] === false) {
        // save info into db
        $name = $data['result'];

        $query = "INSERT INTO `user_data` (`name`, `email`, `subject`,`message`,) 
        VALUES ('$_POST[yname]','$_POST[email]','$_POST[subject]','$_POST[message]',)";

       

        if (mysqli_query($con, $query)) {
header("location:contact.php");
        } else {
            echo "<div class='alert alert-danger mt-2 uploadingErr'>Query Failed</div>";
        }
    } else {

        echo  "<div class='alert alert-danger mt-2 uploadingErr'> $data[result]</div>";
    }
}


?>
