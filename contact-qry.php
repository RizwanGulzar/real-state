<?php
require_once "./admin/db-con.php";
require_once "./admin/includes/helpers.php";

$query = "INSERT INTO `contact-us`( `name`,`email`,`subject`,`message`) 
VALUES ('$_POST[yname]','$_POST[email]','$_POST[subject]','$_POST[message]') ";
       

        if (mysqli_query($con, $query)) {

header("location:contact.php");
        } else {
            echo "<div class='alert alert-danger mt-2 uploadingErr'>Query Failed</div>";
        }
?>
