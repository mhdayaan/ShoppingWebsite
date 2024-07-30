<div class="navbar navbar-inverse navbar-fixed-top">
             <div class="container">
                 <div class="navbar-header">
                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                     </button>
                     <a href="index.php" class="navbar-brand">
                        DREAMSTIME
                     </a>
                 </div>
                 <div class="collapse navbar-collapse" id="mynavbar">
                  <ul class="nav navbar-nav navbar-right">  
 <?php
 if (isset($_SESSION["email"])) {
 ?>
 <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
 <li><a href = "setting.php"><span class = "glyphicon glyphicon-user"></span>Settings</a></li>
 <li><a href = "logout.php"><span class = "glyphicon glyphicon-log-out"></span> Logout</a></li>
 <?php
 } else {
 ?>
                     <li>
                         <a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
                     </li>
                     <li>
                         <a href=<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"></button><span class="glyphicon glyphicon-log-in"></span> Login</a>
                     </li>
                     <li>
                         <a href="aboutus.php"><span class="glyphicon glyphicon-tasks"></span> About Us</a>
                     </li>
                     <li>
                         <a href="contactus.php"><span class="glyphicon glyphicon-phone"></span> Contact Us</a>
                     </li>
<?php
 }
 ?>
     
                  </ul>
                 </div>
             </div>             
        </div>
        <!-- Modal -->
        <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="row>"
                            <h4 class="modal-title" id="exampleModalLabel"><b>LOGIN</b></h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                    </div>
                    <div class="modal-body">
                        <form action="login_script.php" method="POST"  >
                        <p>Don't have an account?<a href="signup.php"> Register</a></p>
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="password" placeholder="Password">
                    </div>
                    <button class="btn btn-primary">Login</button><br>
                    <a href="forgot_password.php">Forgot Password?</a> 
                    </form>
                    </div>
                </div>
            </div>
        </div>

