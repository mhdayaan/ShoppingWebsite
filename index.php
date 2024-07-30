<?php
require('common.php');
if (isset($_SESSION['email'])) {
 header('location: home.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>DREAMSTIME</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
       include('header.php');
       ?>
        <div id="banner_image">
             <div class="container">
                 <div id="inner-banner-image">
                 <div id="banner_content">
                     <h1>Welcome to Dreamstime Shopping</h1>
                     <p>50% off on Electronics</p>
                     <a href="home.php" class="btn btn-danger btn-lg active">
                        Shop Now 
                     </a>
                 </div>
                 </div>
             </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-4">
                     <div class="thumbnail">
                         <img src="img2/image3.jpg" class="img-responsive img-thumbnail" alt="responsive">
                    <div class="caption">
                        <center><h2>Televisions</h2>
                            <br>
                            <a href="home.php" class="btn btn-primary btn-block">
                        Order Now 
                     </a></center>
                    </div>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="thumbnail">
                    <img src="img2/image2.jpg" class="img-responsive img-thumbnail" alt="responsive">
                    <div class="caption">
                        <center><h2>Smart phones</h2>
                            <a href="home.php" class="btn btn-primary btn-block">
                        Order Now 
                     </a></center><br>
                    </div>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="thumbnail">
                        <img src="img2/image1.jpg" class="img-responsive img-thumbnail" alt="responsive">
                    <div class="caption">
                        <center><h3>Laptops</h3>
                        <a href="home.php" class="btn btn-primary btn-block">
                        Order Now 
                     </a></center>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4">
                     <div class="thumbnail">
                         <img src="img2/image19.jpg" class="img-responsive img-thumbnail" alt="responsive">
                    <div class="caption">
                        <center><h2>Washing Machines</h2>
                        <a href="home.php" class="btn btn-primary btn-block">
                        Order Now 
                     </a></center>
                    </div>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="thumbnail">
                    <img src="img2/image23.jpg" class="img-responsive img-thumbnail" alt="responsive">
                    <div class="caption">
                        <center><h2>Air Conditioning</h2>
                        <a href="home.php" class="btn btn-primary btn-block">
                        Order Now 
                     </a></center>
                    </div>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="thumbnail">
                    <img src="img2/image29.jpg" class="img-responsive img-thumbnail" alt="responsive">
                    <div class="caption">
                        <center><h2>Ovens</h2>
                        <a href="home.php" class="btn btn-primary btn-block">
                        Order Now 
                     </a></center>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
       include('footer.php');
       ?>
    </body>
</html>