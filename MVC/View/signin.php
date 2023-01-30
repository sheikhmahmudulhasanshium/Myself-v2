<html>  
    <head>
    <h1> <center>Sign-in Page</center></h1>
    <?php include "C:\\xampp\htdocs\Myself\Myself-v2\MVC\Controller\user_controller.php"; ?>
    </head>  
    <body bgcolor="#6488E7">
        
        <table align="center">
            <tr><td>Please enter the following information to <b>Sign-in :</b></td></tr>
            <tr>
                <td>
                   <h5> <?php echo $err_db;?> </h5>
                    <form action="login.html" method="POST">
                        <label for="fname">First Name:   </label><br>
                        <input type="text" id="fname" name="fname" placeholder="Enter first name here....." value="<?php echo $fname?>">
                        <span><?php echo $err_fname?></span>
                        <br>
                        <label for="lname">Last Name:   </label><br>
                        <input type="text" id="lname" name="lname" placeholder="Enter last name here....." ><br>
                        <label for="fname">User Name:   </label><br>
                        <input type="text" id="uname" name="uname" placeholder="Enter user name here....."><br>
                        <label for="email">Email Address:   </label><br>
                        <input type="text" id="email" name="email" placeholder="Enter email address here...."><br>
                        <label for="password">Enter Password: </label><br>
                        <input type="text" id="e_password" name="password" placeholder="Enter password here...."><br> 
                        <label for="password">Password: </label><br>
                        <input type="text" id="c_password" name="c_password" placeholder="Confirm password here...."><br>
                        
                    </form>
                </td>
            </tr>
            <tr>
                <td>
                    <!--a href="login.html" --><input type="submit" name="sign_up" value="Sign Up" ><!--/a-->
                    <!--a href="homepage.php" --><input type="submit" value="Cancel" ><!--/a-->
                </td>
                
            </tr>
        </table>

    </body>
</html>
