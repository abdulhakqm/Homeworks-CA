<?php 
include('functions.php');
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
    
   
    <?php 
  
            makeSelect(months) ;
       
    ?>
    <button type="submit" name="submit">Go</button>
       
    </form>
    <?php else : ?>
    
    <?php message(); ?>

    <?php endif ?>
  
</body>
</html>