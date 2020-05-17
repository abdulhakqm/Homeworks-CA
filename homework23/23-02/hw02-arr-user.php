<?php 
    $conditions = ["rain", "sunshine", "clouds", "hail", "sleet", "snow", "wind"];

    function makeCheckbox($condition) {
        for ($i=0 ; $i < count($condition) ; $i++){
            echo "<label for=".$condition[$i].">".ucwords($condition[$i])."</label>";
            echo "<input type=\"checkbox\" id=".$condition[$i]." name=\"weather[]\" value=".$condition[$i].">";

        }
    };

    function weatherList($weatherLoop){
        echo "<li>".$weatherLoop."</li>";
        
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
   
<?php if (!isset($_POST['submit'])):?>
    <form action="#" method="POST">
    <label for="city">Enter city</label>
    <input type="text" id="city" name="city">
    <label for="month">Enter Month</label>
    <input type="text" id="month" name="month">
    <label for="year">Enter Year</label>
    <input type="text" name="year" id="year">
    <br>
    <?php makeCheckbox($conditions) ?>

    <button type="submit" name="submit">Search</button>
    
    </form>
<?php else: ?>

    <?php 
        if (isset($_POST['weather']) && !empty($_POST['city']) && !empty($_POST['month']) && !empty($_POST['year'])){
            $userInfo = array ($_POST['city'], $_POST['month'], $_POST['year']);
            echo "In ". ucwords($userInfo[0])." in the month of ". ucwords($userInfo[1])."". $userInfo[2].", you observed the following weather :";

            
        }
    ?>
    <ul>
        <?php foreach ($_POST['weather'] as $key => $value){
            echo "<li>".$value."</li>";
        }   ?>
    </ul>
    <a href="http://localhost/homework23/23-02/hw02-arr-user.php" > Back </a>

    <?php endif ?>
  
    
</body>
</html>