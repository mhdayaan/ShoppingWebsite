<?php
 require ('common.php');
       ?>
<!DOCTYPE html>
<html>
    <head>  
        <title>HOME|DREAMSTIME</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
         <!-- j-Query library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
     <body>
        <?php
       include('header.php');
       include('Check-if-added.php');
       ?>
        <div id="cen">
        <div class="container">
             <div class="jumbotron">
                 <h1>Welcome to our Dreamstime Store!</h1>
                 <p>We have the best Television, Laptops and much more Products for you. No need to hunt around, we have all in one place.</p>
             </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                     <div class="thumbnail">
                         <img src="img2/images8jpg.jpg" class="img-responsive img-thumbnail" alt="responsive">
                    <div class="caption">
                        <center><br><h3>Samsung 4K UHD TV</h3>
                            
                        <p>Price Rs.180000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href='login.php' role="button" class="btn btn-primary btn-block">BuyNow</a></p>
                        <?php
                        } else {
                        //We have created a function to check whether this particular product is addedto cart or not.
                        if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart !=0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } 
                       else {
                        ?>
                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php
                        }
                        }
                       ?>
                        </center>
                    </div>
                    </div>
                </div> 
                <div class="col-md-3 col-sm-6">
                     <div class="thumbnail">
                         <img src="img2/image9.jpg" class="img-responsive img-thumbnail" alt="responsive">
                    <div class="caption">
                        <center><h2>LG UHD TV</h2>
                        <p>Price Rs.140000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">BuyNow</a></p>
                        <?php
                        } else {
                        //We have created a function to check whether this particular product is addedto cart or not.
                        if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart !=0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                        ?>
                        <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php
                        }
                        }
                        ?> 
                        </center>
                    </div>
                    </div>
                </div> 
                <div class="col-md-3 col-sm-6">
                     <div class="thumbnail">
                         <img src="img2/image7.jpg" class="img-responsive img-thumbnail" alt="responsive">
                    <div class="caption">
                        <center><h2>LG LED TV</h2>
                        <p>Price Rs.90000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">BuyNow</a></p>
                        <?php
                        } else {
                        //We have created a function to check whether this particular product is addedto cart or not.
                        if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart !=0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                        ?>
                        <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php
                        }
                        }
                        ?> 
                        </center>
                    </div>
                    </div>
                </div> 
                <div class="col-md-3 col-sm-6">
                     <div class="thumbnail">
                         <img src="img2/image10.jpg" class="img-responsive img-thumbnail" alt="responsive">
                    <div class="caption">
                        <center><h2>INSIGNIA 4K TV</h2>
                        <p>Price Rs.145000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">BuyNow</a></p>
                        <?php
                        } else {
                        //We have created a function to check whether this particular product is addedto cart or not.
                        if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart !=0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                        ?>
                        <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php
                        }
                        }
                        ?>  
                        </center>                        
                    </div>
                    </div>
                </div> 
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                     <div class="thumbnail">
                         <img src="img2/image11.jpg" class="img-responsive img-thumbnail" alt="responsive">
                    <div class="caption">
                        <center><h4>iPhone 11 Pro</h4>
                            <p>Price Rs.135000.00</p><br>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">BuyNow</a></p>
                        <?php
                        } else {
                        //We have created a function to check whether this particular product is addedto cart or not.
                        if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart !=0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                        ?>
                        <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php
                        }
                        }
                        ?>
                        </center>
                    </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                     <div class="thumbnail">
                         <img src="img2/image12.jpg" class="img-responsive img-thumbnail" alt="responsive">
                    <div class="caption">
                        <center><h4>Samsung Galaxy S20</h4>
                        <p>Price Rs.130000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">BuyNow</a></p>
                        <?php
                        } else {
                        //We have created a function to check whether this particular product is addedto cart or not.
                        if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart !=0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                        ?>
                        <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php
                        }
                        }
                        ?> 
                        </center>
                    </div>
                    </div>
                </div> 
                <div class="col-md-3 col-sm-6">
                     <div class="thumbnail">
                    <img src="img2/image13.jpg" class="img-responsive img-thumbnail" alt="responsive">
                    <div class="caption">
                        <center><br><h1>One Plus 7Pro</h1>
                            <p>Price Rs.56000.00</p><br><br>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">BuyNow</a></p>
                        <?php
                        } else {
                        //We have created a function to check whether this particular product is addedto cart or not.
                        if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart !=0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                        ?>
                        <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php
                        }
                        }
                        ?>
                        </center>
                    </div>
                    </div>
                </div> 
                <div class="col-md-3 col-sm-6">
                     <div class="thumbnail">
                         <img src="img2/image14.jpg" class="img-responsive img-thumbnail" alt="responsive">
                    <div class="caption">
                        <center><h2>Samsung Galaxy S10 Lite</h2>
                        <p>Price Rs.56000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">BuyNow</a></p>
                        <?php
                        } else {
                        //We have created a function to check whether this particular product is addedto cart or not.
                        if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart !=0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                        ?>
                        <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php
                        }
                        }
                        ?> 
                        </center>
                    </div>
                    </div>
                </div> 
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                     <div class="thumbnail">
                    <img src="img2/image15.jpg" class="img-responsive img-thumbnail" alt="responsive">
                    <div class="caption">
                        <center><h3>HP Gaming Pavilion</h3>
                            <p>Price Rs.76000.00</p><br>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">BuyNow</a></p>
                        <?php
                        } else {
                        //We have created a function to check whether this particular product is addedto cart or not.
                        if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart !=0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                        ?>
                        <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php
                        }
                        }
                        ?> 
                        </center>
                    </div>
                    </div>
                </div> 
                <div class="col-md-3 col-sm-6">
                     <div class="thumbnail">
                    <img src="img2/image16.jpg" class="img-responsive img-thumbnail" alt="responsive">
                    <div class="caption">
                        <center><h2>Samsung Notebook 9 Pro</h2>
                        <p>Price Rs.120000.00</p>
                        <br>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">BuyNow</a></p>
                        <?php
                        } else {
                        //We have created a function to check whether this particular product is addedto cart or not.
                        if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart !=0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                        ?>
                        <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php
                        }
                        }
                        ?>
                        </center>
                    </div>
                    </div>
                </div> 
                <div class="col-md-3 col-sm-6">
                     <div class="thumbnail">
                    <img src="img2/image17.jpg" class="img-responsive img-thumbnail" alt="responsive">
                    <div class="caption"><br>
                        <center><h2>Dell Inspiron 15</h2>
                        <p>Price Rs.85000.00</p>
                        <br>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">BuyNow</a></p>
                        <?php
                        } else {
                        //We have created a function to check whether this particular product is addedto cart or not.
                        if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart !=0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                        ?>
                        <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php
                        }
                        }
                        ?>
                        </center>
                    </div>
                    </div>
                </div> 
                <div class="col-md-3 col-sm-6">
                     <div class="thumbnail">
                         <img src="img2/image18.jpg" class="img-responsive img-thumbnail" alt="responsive">
                    <div class="caption">
                        <center><h3>Macbook pro</h3>
                            <p>Price Rs.360000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">BuyNow</a></p>
                        <?php
                        } else {
                        //We have created a function to check whether this particular product is addedto cart or not.
                        if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart !=0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                        ?>
                        <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php
                        }
                        }
                        ?>   
                        </center>
                    </div>
                    </div>
                </div> 
            </div>
         <div class="row">
                <div class="col-md-3 col-sm-6">
                     <div class="thumbnail">
                         <img src="img2/image20.jpg" class="img-responsive img-thumbnail" alt="responsive">
                    <div class="caption">
                        <center><h3>Bosch Front Load</h3>
                            
                            <p>Price Rs.31950.00</p><br>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">BuyNow</a></p>
                        <?php
                        } else {
                        //We have created a function to check whether this particular product is addedto cart or not.
                        if (check_if_added_to_cart(13)) { //This is same as if(check_if_added_to_cart !=0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } 
                       else {
                        ?>
                        <a href="cart-add.php?id=13" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php
                        }
                        }
                       ?>
                        </center>
                    </div>
                    </div>
                </div> 
                <div class="col-md-3 col-sm-6">
                     <div class="thumbnail">
                         <img src="img2/image19.jpg" class="img-responsive img-thumbnail" alt="responsive">
                    <div class="caption">
                        <center><h3>Samsung Front Load</h3>
                        <p>Price Rs.105900.00</p>
                        <br>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">BuyNow</a></p>
                        <?php
                        } else {
                        //We have created a function to check whether this particular product is addedto cart or not.
                        if (check_if_added_to_cart(14)) { //This is same as if(check_if_added_to_cart !=0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                        ?>
                        <a href="cart-add.php?id=14" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php
                        }
                        }
                        ?> 
                        </center>
                    </div>
                    </div>
                </div> 
                <div class="col-md-3 col-sm-6">
                     <div class="thumbnail">
                         <img src="img2/image22.jpg" class="img-responsive img-thumbnail" alt="responsive">
                    <div class="caption">
                        <center><h3>Wirlpool Top Load</h3>
                            <p>Price Rs.90000.00</p><br>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">BuyNow</a></p>
                        <?php
                        } else {
                        //We have created a function to check whether this particular product is addedto cart or not.
                        if (check_if_added_to_cart(15)) { //This is same as if(check_if_added_to_cart !=0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                        ?>
                        <a href="cart-add.php?id=15" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php
                        }
                        }
                        ?> 
                        </center>
                    </div>
                    </div>
                </div> 
                <div class="col-md-3 col-sm-6">
                     <div class="thumbnail">
                         <img src="img2/image21.jpg" class="img-responsive img-thumbnail" alt="responsive">
                    <div class="caption">
                        <center><h2>LG Top Load</h2>
                        <p>Price Rs.45000.00</p>
                        <br>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">BuyNow</a></p>
                        <?php
                        } else {
                        //We have created a function to check whether this particular product is addedto cart or not.
                        if (check_if_added_to_cart(16)) { //This is same as if(check_if_added_to_cart !=0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                        ?>
                        <a href="cart-add.php?id=16" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php
                        }
                        }
                        ?>  
                        </center>                        
                    </div>
                    </div>
                </div> 
            </div>
         <div class="row">
                <div class="col-md-3 col-sm-6">
                     <div class="thumbnail">
                         <img src="img2/image24.jpg" class="img-responsive img-thumbnail" alt="responsive">
                    <div class="caption">
                        <center><h2>LG 1.5 Ton</h2>
                            
                        <p>Price Rs.35000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">BuyNow</a></p>
                        <?php
                        } else {
                        //We have created a function to check whether this particular product is addedto cart or not.
                        if (check_if_added_to_cart(17)) { //This is same as if(check_if_added_to_cart !=0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } 
                       else {
                        ?>
                        <a href="cart-add.php?id=17" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php
                        }
                        }
                       ?>
                        </center>
                    </div>
                    </div>
                </div> 
                <div class="col-md-3 col-sm-6">
                     <div class="thumbnail">
                         <img src="img2/image26.jpg" class="img-responsive img-thumbnail" alt="responsive">
                    <div class="caption">
                        <center><h2>Samsung 1.5 Ton</h2>
                        <p>Price Rs.40000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">BuyNow</a></p>
                        <?php
                        } else {
                        //We have created a function to check whether this particular product is addedto cart or not.
                        if (check_if_added_to_cart(18)) { //This is same as if(check_if_added_to_cart !=0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                        ?>
                        <a href="cart-add.php?id=18" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php
                        }
                        }
                        ?> 
                        </center>
                    </div>
                    </div>
                </div> 
                <div class="col-md-3 col-sm-6">
                     <div class="thumbnail">
                         <img src="img2/image25.jpg" class="img-responsive img-thumbnail" alt="responsive">
                    <div class="caption">
                        <center><h2>OGENERAL 1.5 Ton</h2>
                            <p>Price Rs.42000.00</p><br>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">BuyNow</a></p>
                        <?php
                        } else {
                        //We have created a function to check whether this particular product is addedto cart or not.
                        if (check_if_added_to_cart(19)) { //This is same as if(check_if_added_to_cart !=0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                        ?>
                        <a href="cart-add.php?id=19" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php
                        }
                        }
                        ?> 
                        </center>
                    </div>
                    </div>
                </div> 
                <div class="col-md-3 col-sm-6">
                     <div class="thumbnail">
                         <img src="img2/image27.jpg" class="img-responsive img-thumbnail" alt="responsive">
                    <div class="caption">
                        <center><h1>Dikin 1.5 Ton</h1>
                        <p>Price Rs.45000.00</p>
                        <br>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">BuyNow</a></p>
                        <?php
                        } else {
                        //We have created a function to check whether this particular product is addedto cart or not.
                        if (check_if_added_to_cart(20)) { //This is same as if(check_if_added_to_cart !=0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                        ?>
                        <a href="cart-add.php?id=20" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php
                        }
                        }
                        ?>  
                        </center>                        
                    </div>
                    </div>
                </div> 
            </div>
         <div class="row">
                <div class="col-md-3 col-sm-6">
                     <div class="thumbnail">
                         <img src="img2/image32.jpg" class="img-responsive img-thumbnail" alt="responsive">
                    <div class="caption">
                        <center><h3>Samsung Microwave Oven</h3>
                            
                        <p>Price Rs.18000.00</p>
                        <br>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">BuyNow</a></p>
                        <?php
                        } else {
                        //We have created a function to check whether this particular product is addedto cart or not.
                        if (check_if_added_to_cart(21)) { //This is same as if(check_if_added_to_cart !=0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } 
                       else {
                        ?>
                        <a href="cart-add.php?id=21" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php
                        }
                        }
                       ?>
                        </center>
                    </div>
                    </div>
                </div> 
                <div class="col-md-3 col-sm-6">
                     <div class="thumbnail">
                         <img src="img2/image28.jpg" class="img-responsive img-thumbnail" alt="responsive">
                    <div class="caption">
                        <center><h2>LG Microwave Oven</h2>
                        <p>Price Rs.18000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">BuyNow</a></p>
                        <?php
                        } else {
                        //We have created a function to check whether this particular product is addedto cart or not.
                        if (check_if_added_to_cart(22)) { //This is same as if(check_if_added_to_cart !=0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                        ?>
                        <a href="cart-add.php?id=22" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php
                        }
                        }
                        ?> 
                        </center>
                    </div>
                    </div>
                </div> 
                <div class="col-md-3 col-sm-6">
                     <div class="thumbnail">
                         <img src="img2/image31.jpg" class="img-responsive img-thumbnail" alt="responsive">
                    <div class="caption">
                        <center><h2>IFB Microwave Oven</h2>
                        <p>Price Rs.9500.00</p>
                        <br>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">BuyNow</a></p>
                        <?php
                        } else {
                        //We have created a function to check whether this particular product is addedto cart or not.
                        if (check_if_added_to_cart(23)) { //This is same as if(check_if_added_to_cart !=0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                        ?>
                        <a href="cart-add.php?id=23" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php
                        }
                        }
                        ?> 
                        </center>
                    </div>
                    </div>
                </div> 
                <div class="col-md-3 col-sm-6">
                     <div class="thumbnail">
                         <img src="img2/image30.jpg" class="img-responsive img-thumbnail" alt="responsive">
                    <div class="caption">
                        <center><h2>Bosch Microwave Oven</h2>
                        <p>Price Rs.14500.00</p>
                        <br>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">BuyNow</a></p>
                        <?php
                        } else {
                        //We have created a function to check whether this particular product is addedto cart or not.
                        if (check_if_added_to_cart(24)) { //This is same as if(check_if_added_to_cart !=0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                        ?>
                        <a href="cart-add.php?id=24" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php
                        }
                        }
                        ?>  
                        </center>                        
                    </div>
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


