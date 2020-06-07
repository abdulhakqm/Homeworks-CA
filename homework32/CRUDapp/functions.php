<?php
require 'engine.php';

if (isset($_POST['firstname']) && isset($_POST['lastname'])) {
    $firstname = $_POST['firstname'];
    $lastname =  $_POST['lastname'];
    $dateNow = date('Y-m-d');

    $sqlInsert = "INSERT INTO members ('id,firstname,lastname,created_at') VALUES (NULL,'$firstname','$lastname','$dateNow');";

    $action = mysqli_query($conn , $sqlInsert);
    mysqli_close($conn);

    header("Location: index.php");
}

