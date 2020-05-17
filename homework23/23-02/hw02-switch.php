<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>23-02-01</title>
</head>
<body>
 
<?php if (empty($_POST['days'])): ?>
    <form action="" method="POST">
        <h3>Please select a day of the week</h3>
        <select name="days">
            <option value="select" selected ></option>
            <option value="monday">Monday</option>
            <option value="tuesday">Tuesday</option>
            <option value="wednesday">Wednesday</option>
            <option value="thursday">Thursday</option>
            <option value="friday">Friday</option>
            <option value="saturday">Saturday</option>
        </select>
        <button type="submit" name="submit">Go</button><br>
        

    </form>
<?php else:?>
    <?php 

    $value = $_POST['days'];
    switch ($value){
        case "monday":
            echo "Laugh on Monday, laugh for danger.";
            break;
        case "tuesday":
            echo "Laugh on Tuesday, kiss a stranger.";
            break;
        case "wednesday":
            echo "Laugh on Wednesday, laugh for a letter.";
            break;
        case "thursday":
            echo "Laugh on Thursday, something better.";
            break;
        case "friday":
            echo "Laugh on Friday, laugh for sorrow.";
            break;
        case "saturday":
            echo "Laugh on Saturday, joy tomorrow.";
            break;
        default:
          echo "Please choose a day!";
    }

    
?>
      
    <?php endif ?>

   
    

</body>
</html>