<?php

    $dbServer = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $database = "blueline_vacine";

    $conn = mysqli_connect($dbServer, $dbUser, $dbPass, $database) or die(mysqli_error($conn));

?>