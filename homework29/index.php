<?php

    include('php/functions.php');
   
    $read = 'data/member.csv'; 
    $newC = fopen($read , 'a+');
        while(!feof($newC)){
            $contactArr[] = fgetcsv($newC);
    }
    fclose($newC);

    

   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <script src="https://kit.fontawesome.com/1e5f569bf8.js" crossorigin="anonymous"></script>

    <title>Contacts</title>
</head>
<body>
    <div class="col-md-4 offset-md-4 bg-dark mt-5 rounded p-2 container" >
        <div class="search p-1">
            <i class="fas fa-search px-3"></i> 
            <input type="text" placeholder="Search Contact">
        </div>    

        <div class="main">

        <div class="footer">
                <div class="nenfooter">
                    <div class="footerClass port-item" data-toggle="collapse" data-target="#createCon">
                    <div><i class="fas fa-plus-circle"></i></div>
                    <div>Create Contact</div>
                    </div>
                    <div class="footerClass port-item" data-toggle="collapse" data-target="#contacts">
                        <div><i class="fas fa-address-book"></i></div>
                        <div>Contacts</div>
                    </div>
                </div>              
                
            </div>




            <div class="glass">
                    
                    
                <div class="contacts collapse show" id="contacts">
                           
                            <?php  foreach($contactArr as $key => $value){?>

                            <?php if (!is_bool($value)){ ?>

                            <div class="created d-flex mb-2 rounded">
                                <div class="p-3">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="p-2 ">
                                    <h4><?php echo ucwords($value[0])." ".ucwords($value[1]); ?> </h4>
                                    <small><?php echo $value[2]; ?></small>
                                </div>
                            

                            </div>
                            <?php } ?>
                            <?php }?>
                            
                            
                    
                </div>





            <div class="addContact text-light collapse" id="createCon">
                <form action="php/functions.php" method="POST" class="form-group">
                    
                

                    <div class="d-flex justify-content-between">
                    <h3>Create contact</h3>
                    <button type="submit" name="submit" class="btn btn-success" >Save</button>
                    </div>
                    <label for="firstname">Firstname</label>
                    <input name="firstname" type="text" class="form-control w-100 mb-3" placeholder="Enter First Name" id="firstname">
                    <label for="lastname">Lastname</label>
                    <input name="lastname" type="text" class="form-control w-100 mb-3" placeholder="Enter Last Name" id="lastname">
                    <label for="phone">Phone Number</label>
                    <input name="phone" type="text" class="form-control w-100 mb-3" placeholder="Enter Phone Number" id="phone">
                    
                   
              
                </form>
            </div>
            
            </div>

            
        </div>
    </div>






<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script>
        $('.port-item').click(function () {
            $('.collapse').collapse('hide');
        })
    </script>

</body>
</html>