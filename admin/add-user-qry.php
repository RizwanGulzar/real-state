<?php
require_once "./db-con.php";
require_once "./includes/helpers.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    // upload image
    $data = uploadImage("services", $_FILES['image'], 3, "user");


    if ($data['errors'] === false) {
        // save info into db
        $name = $data['result'];

        $query = "INSERT INTO `user_data` (`name`, `email`, `password`,`mobile`, `image`) 
        VALUES ('$_POST[user_name]','$_POST[email]','$_POST[password]','$_POST[mobile]','$name')";

       

        if (mysqli_query($con, $query)) {
header("location:user.php");
        } else {
            echo "<div class='alert alert-danger mt-2 uploadingErr'>Query Failed</div>";
        }
    } else {

        echo  "<div class='alert alert-danger mt-2 uploadingErr'> $data[result]</div>";
    }
}


?>
