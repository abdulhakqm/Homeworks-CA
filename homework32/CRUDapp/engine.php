<?php 

$conn = mysqli_connect('localhost', 'root', '', 'members');

if(!$conn) {
    die('Database connection error!');
}