<?php 
require 'engine.php';

$thisUser = $_GET['id'];
$sqlDelete = "DELETE FROM members WHERE id='$thisUser';";

$queryDelete = mysqli_query($conn , $sqlDelete);

mysqli_close($conn);

header("Location: index.php");