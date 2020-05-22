<?php 


if (isset($_POST['submit']) && !empty($_POST['name'])  && !empty($_POST['email'])  && !empty($_POST['message'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $string = $name. "\n". $email. "\n". $message . "\n \n"; 
   
    echo "<h2>Your message was sent and saved and we will contact you soon via email.</h2>";

   
}

$file = "EXAMPLE_requests.txt";
if (file_exists($file) && is_writable($file)){

    file_put_contents($file, $string , FILE_APPEND);
}