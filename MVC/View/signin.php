<html>  
    <head>
    <h1> <center>Sign-in Page</center></h1>
    <?php include "C:\\xampp\htdocs\Myself\Myself-v2\MVC\Controller\user_controller.php"; ?>
    </head>  
    <body bgcolor="#6488EE">
        
        <table align="center">
            <tr><td>Please enter the following information to <b>Sign-in :</b></td></tr>
            <tr>
                <td>
                   <h5> <?php echo $err_db;?> </h5>
                    <form action="" method="post" >
                        <label for="fname">First Name:   </label><br>
                        <input type="text" id="fname" name="fname" placeholder="Enter first name here....." value="<?php echo $fname;?>"><br>
                        <span class="warning"><?php echo $err_fname?><br></span>
                        
                        <label for="lname">Last Name:   </label><br>
                        <input type="text" id="lname" name="lname" placeholder="Enter last name here....." value="<?php echo $lname;?>"><br>
                        <span class="warning"><?php echo $err_lname?><br></span>
                        
                        <label for="fname">User Name:   </label><br>
                        <input type="text" id="uname" name="uname" placeholder="Enter user name here....." value="<?php echo $uname;?>"><br>
                        <span class="warning"><?php echo $err_uname?><br></span>

                        
                        <label for="email">Email Address:   </label><br>
                        <input type="text" id="email" name="email" placeholder="Enter email address here...."  value="<?php echo $email;?>"><br>
                        <span class="warning"><?php echo $err_email?><br></span>

                        <label for="password">Enter Password: </label><br>
                        <input type="text" id="pass" name="pass" placeholder="Enter password here...." value="<?php echo $pass;?>"><br> 
                        <span class="warning"><?php echo $err_pass?><br></span>

                        <label for="password">Confirm Password: </label><br>
                        <input type="text" id="c_password" name="c_password" placeholder="Confirm password here...." value="<?php echo $c_pass;?>"><br>
                        <span class="warning"><?php echo $err_c_pass?><br></span>


                        
                    
                </td>
            </tr>
            <tr>
                <td>
                    <!--a href="login.html"--><input type="submit" name="sign_up" value="Sign Up" ><!--/a-->
                    
                    </form>
                    <a href="homepage.php" ><input type="submit" value="Cancel" ></a>
                </td>
                
            </tr>
        </table>

    </body>
</html>
