<?php
       require ('common.php');
       ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Lifestyle Store</title>
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
        <div id="cente">        
        <div class="container">
            <div class="row row_style">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>Forgot Password</h4>
                        </div>
                         <div class="modal-body">
                             <form action="forgot_script.php" method="POST"  >
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Email">
                    </div>
                        <button class="btn btn-primary">Submit</button>
                    </form>
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

