<?php 
    if (file_exists('inc/functions.inc.php')){
        include('inc/functions.inc.php');
    }
   

    if (isset($_GET['id'])){
        $id = $_GET['id'];
       
    }else {
        $id = "";
    } 

    cookieSet($_POST);

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="all.css">
    <script src="assets/js/all.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script defer src="assets/js/script.js"></script>

    
    <title><?php echo getTitle($id, $titles); ?></title>
    <style>
        .rounded {
            background-color: white !important;
        }
    </style>
</head>
<body>
    
        <?php include('inc/navigation.inc.php'); ?>

        <?php 
 
        switch ($id){
            case 'index':
                include('pages/index.inc.php');
                $footer = true;
                break;
            case 'about':
                include('pages/about.inc.php');
                $footer = true;
                break;    
            case 'contact':
                include('pages/contact.inc.php');
                $footer = false;
                break;
            case 'login':
                include('pages/login.inc.php');
                $footer = false;
                break;

            default :
                include('pages/index.inc.php');
                $footer = true;
            break;
        }


        ?>

        <?php if($footer) {
        include 'inc/footer.inc.php';
            }
        ?>
</body>