<?php
       require ('common.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Contact Us|DREAMSTIME</title>
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
        <div id="cent">
         <div class="container">
                <div class="row">
                    <div class="col-xs-10">
                        <h4><b>LIVE SUPPORT</b></h4>
                        <p><b>24 hours| 7 days a week| 365 days a year Live Technical support</b><br>
                        If you have any issues, you can contact us through our support system or on 01522 706672 anytime and we will do our best to assist you. Alternatively if you require a support contract to provide technical assistance, contact us today to discuss your requirements. With remote support available we can connect quickly to your computers to reduce the time required to address any issues.</p>
                    </div> 
                    <div class="col-xs-2 "><img src="img2/image5.jpg" class="img-responsive img-circle" alt="responsive"> </div>
                    </div><div class="row">
                    <div class="col-xs-8">
                        <h4><b>CONTACT US</b></h4>
                        <form>
                        <div class="form-group">
                            <label for="Name">Name</label>
                            <input type="text" class="form-control" id="Name" name="Name">
                        </div>
                        <div class="form-group">
                            <label for="Email">Email:</label>
                            <input type="text" class="form-control" id="Email" name="Email">
                        </div>
                        <div class="form-group">
                            <label for="Message">Message:</label>
                            <textarea type="text" class="form-control" id="Message" rows="6" name="Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div> 
                    <div class="col-xs-4">
                        <h4><b>COMPANY INFORMATION:</b></h4>
                        <p>500 Lorem Ipsum Dolor st,<br><br>22-55-09-2 St Amet,Lorem,<br><br>USA<br><br>Phone:(00)222 555 888<br><br>Fax:(000)000 000 00 0<br><br>Email: info@mycompany.com<br><br>Facebook,Twitter</p>
                    </div> 
                </div>
            </div>
        </div>
        <?php
       include('footer.php');
       ?>
    </body>
</html>

