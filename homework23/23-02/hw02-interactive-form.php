<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(empty($_POST['city'])):?>
    <form action="#" method="POST">
    <h3>Enter your favourite City</h3>
    <input type="text" name="city">
    <button name="submit">Submit</button>
    </form>

    <?php else : ?>
    <?php 
    echo "Your favourite city is ".$_POST['city'];
    ?>
    <?php endif ?>

</body>
</html>