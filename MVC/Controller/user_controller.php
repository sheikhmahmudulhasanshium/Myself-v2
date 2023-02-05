<?php
	include 'C:\\xampp\htdocs\Myself\Myself-v2\MVC\Model\db_config.php';
	
	$fname="";
	$err_fname="";
    $lname="";
	$err_lname="";
	$uname="";
	$err_uname="";
	$email = "";
	$err_email = "";
	$pass="";
	$err_pass="";
	$c_pass = "";
	$err_c_pass = "";
	$err_db="";
	$hasError=false;
	
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		//https://www.javatpoint.com/form-validation-in-php
		//string validation
		if(empty($_POST["fname"]))
		{
		$err_fname = "First Name is required";
		}
		else
		{
			$fname=input_validator($_POST["fname"]);
			// check if name only contains letters and whitespace  
			if (!preg_match("/^[a-zA-Z ]*$/",$fname)) 
			{  
                $err_fname = "Only alphabets and white space are allowed (fname)"; 
				
			}
			//check string length
		
			$length = strlen($fname);
				
			if($length>20)
			{
				$err_fname="First name must be maximum 20 characters.";
			}	
		}
			
		if(empty($_POST["lname"]))
		{
		$err_lname = "Last Name is required";
		}
		else
		{
			$lname=input_validator($_POST["lname"]);
			// check if name only contains letters and whitespace  
			if (!preg_match("/^[a-zA-Z ]*$/",$lname)) 
			{  
                $err_lname = "Only alphabets and white space are allowed (lname)"; 
			}
			//check string length
			

			$length = strlen($lname);
		
			if($length>20)
			{
				$err_fname="Last name must be maximum 20 characters.";
			}
			
		}
		if(empty($_POST["uname"]))
		{
		$err_uname = "User Name is required.";
		}
		else
		{
			$uname = input_validator($_POST["uname"]);
			$length = strlen($uname);
			if($length>30)
			{
				$err_uname = "username must be maximum 30 characters.";
			}
			if(preg_match("/\\s/",$uname))
			{
			$err_uname = "Username must not contain any space";
			}
			//check either the first character is number or not
			$first_char = $uname[0];
			if(preg_match("/^[0-9]*$/",$first_char))
			{
				$err_uname="Username must not contain a number in the first character.";
			}
		}

		if(empty($_POST["email"]))
		{
		$err_email = "Email Address is required.";
		}
		else{
		$email = input_validator($_POST["email"]);
		// check that the e-mail address is well-formed  
			 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
                $err_email = "Invalid email format";  
            }  
		}

		if(empty($_POST["pass"]))
		{
		$err_pass = "Password is required.";
		}
		else 
		{
			$pass = input_validator($_POST["pass"]);
			$length = strlen($pass);
			if($length > 20 && $length < 7)
			{
				$err_pass = "Password must be atleast 8 character and atmost 20 character long";
			}
			
			//check special character
			$special_character = '/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/';

			if(!preg_match($special_character,$pass))
			{
				$err_pass="Password must contain a special character eg: !,~,&";
			}
			if(!preg_match("/^[A-Z]/",$pass))
			{
			$err_pass = "Password must contain a Uppercase letter  eg: A, B";
			}
			if(!preg_match("/^[a-z]/",$pass))
			{
				$err_pass = "Password must contain a Lowercase letter  eg: a, b";
			}
			
			if(!preg_match("/^[1-9]/",$pass))
			{
				$err_pass = "Password must contain a number";
			}
			
		}
	}
	function input_validator($data)
	{
		
		$data=trim($data);
		$data=stripcslashes($data);
		$data=htmlspecialchars($data);
	return $data;
	}
	
?>