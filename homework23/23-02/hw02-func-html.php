<?php

    $months = array(
        "january" => "31 days",
        "february" => "28 days ,if leap year 29", 
        "march" => "31 days",
        "april" => "30 days",
        "may" => "31 days",
        "june" => "30 days",
        "july" => "31 days",
        "august" => "31 days",
        "september" => "30 days",
        "octomber" => "31 days",
        "november" => "30 days",
        "december" => "31 days",
    );


    function makeOption($key){
            echo "<option value=" .$key. ">" .$key. "</option>";
     
    };


   

   function response($month , $number ){

        echo "The month of ". ucfirst($month). " has " . $number."days.";
        echo "<a href=\"http://localhost/homework23/23-02/hw02-func-html.php\" > Back </a>";
   }


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <?php if (!isset($_POST['submit'])): ; ?>

    <form action="#" method="POST">
        <label for="select">Select Month</label>
        <select name="selector" id="select">
            <?php foreach ($months as $key => $value){
                makeOption($key);
            } ?>
        </select>
        <button type="submit" name="submit">Go!</button>
    </form>

    <?php else :?>
            
            <?php
                foreach ($months as $key => $value){
                    if ($key == $_POST['selector']){
                        response($key , $value);
                    }
                    
                }
                
                
                ?>

    <?php endif ?>
                

            
</body>


</html>