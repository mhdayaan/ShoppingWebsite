<?php
       require ('common.php');
?>
<!DOCTYPE html>
<html>
    <head>  
        <title>Sign Up|DREAMSTIME</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link rel="stylesheet" href="index.css" type="text/css"/>

        <!-- j-Query library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
       include('header.php');
       ?>
        <div id="cent">
        <div class="container">
            <div class="row">
                <div class="col-xs-5 col-xs-offset-2">
                     <img src="img2/image6.jpg" class="img-responsive" alt="responsive">
                </div>
                     <div class="col-xs-4">
                     <h1>SIGN UP</h1>
                     <form method="POST" action="signup_script.php">
                         <div class="form-group">
                            <input type="text" class="form-control" name="firstname" placeholder="First Name">
                        </div>
                         <div class="form-group">
                            <input type="text" class="form-control" name="secondname" placeholder="Second Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="contact" placeholder="Contact">
                        </div>
                         <center><button type="submit" class="btn btn-warning" value=”signup_submit”>SIGN UP</button></center>
                     </form>
                     </div>
               </div>
        </div>
        </div>
       <?php
       include('footer.php');
       ?>
    </body>
</html>