<?php
if (isset($_GET["id"])) {
    $id = $_GET["id"];
} else {
    $id = " Not Found";
} ?>

<?php

    $con = mysqli_connect("localhost:3308", "root", "", "officesinformations");
    if (!$con) {
        die(" Connection Error ");
    }
    $in = mysqli_query(
        $con,
        "delete from `posts` where id=$id"
    );
    if ($in) {
        header("location:index.php");
    } else {
        die("error" . mysqli_error($con));
    }
 ?>