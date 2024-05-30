<?php
require_once "./db-con.php";
require_once "./includes/helpers.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // upload image
    $data = uploadImage("services", $_FILES['image'], 3, "listing");

    if ($data['errors'] === false) {
        // save info into db
        $name = $data['result'];

        $query = "INSERT INTO `listing`( `name`,`description`,`featured`,`price`,`address`,`images`) 
            VALUES ('$_POST[list]','$_POST[description]','$_POST[feature]','$_POST[price]','$_POST[address]','$name') ";

        if (mysqli_query($con, $query)) {
            header("Location:listing.php");
        } else {
            echo "<div class='alert alert-danger mt-2 uploadingErr'>Query Failed</div>";
        }
    } else {

        echo  "<div class='alert alert-danger mt-2 uploadingErr'> $data[result]</div>";
    }
}


?>
