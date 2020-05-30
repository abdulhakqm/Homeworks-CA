<?php 

if (isset($_POST['submit']) ){
  
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $phone = $_POST['phone'];


        $contact = nl2br($firstname.",".$lastname.",".$phone);
        
       
        $handle = fopen('../data/member.csv','a+');
                
        fputcsv($handle, explode(',', $contact ));
                
        fclose($handle);
                   
       

    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = '../index.php';
    header("Location: http://$host$uri/$extra");
        
}


  
 