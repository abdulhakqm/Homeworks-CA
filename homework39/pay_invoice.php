<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    
    <title>Document</title>

    
</head>
<body>

    <div class="container p-2">
        <form class="border rounded px-3 col-md-5 m-auto " action="index.php" method="POST">
            <div class="text-center border-bottom">
                <h3 class="p-2">Pay Invoice</h3>
            </div>
            <div class="mt-3">
            <h4>Website Developer</h4>
            <p>Payment amount</p>
            <h1 class="mb-3">$100.00</h1>
            </div>

            <div class="form-group">
                <label for="inputAddress">Company Name</label>
                <input type="text" class="form-control" name="company" placeholder="Your Company Name">
            </div>
            <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" name="address" placeholder="Your Bussines Address">
            </div>
           
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputEmail4">City</label>
                <input type="email" class="form-control" id="inputEmail4" name="city">
                </div>
                <div class="form-group col-md-6">
                <label for="inputPassword4">Country</label>
                <input type="password" class="form-control" id="inputPassword4" name="country">
                </div>
            </div>
            <div class="form-group">
                <label for="postal">Postal Code</label>
                <input type="text" class="form-control" name="postal" placeholder="Postal">
            </div>
            

            <button type="submit" class="btn btn-success w-100 mb-2">Pay $100.00</button>
        </form>
    
    </div>

   



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
</body>
</html>