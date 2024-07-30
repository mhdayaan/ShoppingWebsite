<?php
require ('common.php');
?>
<!DOCTYPE html>
<html>
    <head>  
        <title>Setting|DREAMSTIME</title>
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
       ?>
        <div id="c">
        <div class="container">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                     <h1>Change Password</h1>
                     <form method="POST" action="change_script.php">                        
                        <div class="form-group">
                            <input type="text" class="form-control" name="New password" placeholder="New password">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="Re-type New Password" placeholder="Re-type New Password">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block" value=”submit”>Submit</button>
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

