<?php 
include('Select.php');  

  $servername = "localhost";
  $username = "root";
  $password = "";

  $conn = mysqli_connect($servername, $username, $password);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
 
  $dbCreate = "CREATE DATABASE DB3403";
  if (mysqli_query($conn, $dbCreate)) {
  echo "Database created successfully";
  }

  $conn = mysqli_connect($servername, $username, $password, 'DB3403');

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $tableCreate = "CREATE TABLE users (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    username VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    browser VARCHAR(30) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
  if (mysqli_query($conn, $tableCreate)) {
    echo "Table Users created successfully";
  }
    
  if (isset($_POST['submit'])){

    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $browser = $_POST['selector'];

    $sql = "INSERT INTO users (firstname, username, email, browser)
    VALUES ('$name', '$username', '$email', '$browser')";
  
    if (!mysqli_query($conn, $sql)) {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);    
    } else {
      $last_id = mysqli_insert_id($conn);
    }
  }
 


    mysqli_close($conn);









?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Class Select - Browsers</title>
 </head>
 <body>
 <h2>User Registration - Browser</h2>
 
 
<?php if (!isset($_POST['submit'])): ?>
 
<form method="post" action="">
<p>Name:<br />
<input type="text" name="name" size="60" />  </p>
<p>Username:<br />
<input type="text" name="username" size="60" /></p>
<p>Email:<br />
<input type="text" name="email" size="60" /></p>
<p>Browser:
 
 
<?php

$newObj->makeSelect(); 

?>
</p>
<input type="submit" name="submit" value="Go" />
 
</form>
 
<?php else :?>

<?php
  $feedback = "Your id is :<h3>" .$last_id."</h3>";
  echo $feedback;

?>

<?php endif  ?>

 </body>
 </html>
 