<?php
require_once "./db-con.php";
require_once "./includes/helpers.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // upload image
    $data = uploadImage("services", $_FILES['image'], 3, "services");

    if ($data['errors'] === false) {
        // save info into db
        $name = $data['result'];

        $query = "INSERT INTO `services`( `name`,`description`,`image`) 
            VALUES ('$_POST[service]','$_POST[description]','$name') ";

        if (mysqli_query($con, $query)) {
            header("Location:services.php");
        } else {
            echo "<div class='alert alert-danger mt-2 uploadingErr'>Query Failed</div>";
        }
    } else {

        echo  "<div class='alert alert-danger mt-2 uploadingErr'> $data[result]</div>";
    }
}


?>
