<html>
    <head>
        <?php include 'Controller/user_controller.php';?>
    </head>
    <body bgcolor="#6488E7">
        <h1> <center>Sign-in Page</center></h1>
        <table align="center">
            <tr><td>Please enter the following information to <b>Sign-in :</b></td></tr>
            <tr>
                <td>
                    <form action="" method="post">
                        <label for="fname">First Name:   </label><br>
                        <input type="text" id="fname" name="fname" placeholder="Enter first name here....." value='<?php echo $fname;?>'><br>
                        <label for="lname">Last Name:   </label><br>
                        <input type="text" id="lname" name="lname" placeholder="Enter last name here....." value="<?php echo $lname;?>"><br>
                        <label for="fname">User Name:   </label><br>
                        <input type="text" id="uname" name="uname" placeholder="Enter user name here....."><br>
                        <label for="email">Email Address:   </label><br>
                        <input type="text" id="email" name="email" placeholder="Enter email address here...."><br>
                        
                        <label for="password">Enter Password: </label><br>
                        <input type="text" id="e_password" name="password" placeholder="Enter password here...."><br> 
                        <label for="password">Password: </label><br>
                        <input type="text" id="c_password" name="password" placeholder="Confirm password here...."><br>
                        
                    </form>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="login.html" ><input type="submit" value="Confirm" ></a>
                    <a href="homepage.php" ><input type="button" value="Cancel" ></a>
                </td>
                
            </tr>
        </table>

    </body>
</html>