<?php
	include 'C:\\xampp\htdocs\Myself\Myself-v2\MVC\Model\db_config.php';
	
	$fname="";
	$err_fname="";
    $lname="";
	$err_lname="";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$err_db="";
	$hasError=false;
	if(isset($_POST["sign_up"])){
		if(empty($_POST["fname"])){
			$hasError  = true;
			$err_fname = "First Name Required";
		}
		else{
			$fname = $_POST["fname"];
		}
        if(empty($_POST["lname"])){
			$hasError  = true;
			$err_fname = "Last Name Required";
		}
		else{
			$fname = $_POST["lname"];
		}
		if(empty($_POST["uname"])){
			$hasError  = true;
			$err_uname = "Username Required";
		}
		else{
			$uname = $_POST["uname"];
		}
		//do others
		if(!$hasError){
			$rs = insertUser($fname,$lname,$uname,$_POST["email"],$_POST["pass"]);
			if($rs === true){
				header("Location: login.html");
			}
			$err_db = $rs;
		}
	}
	elseif(isset($_POST["btn_login"])){
		
		if(empty($_POST["uname"])){
			$hasError  = true;
			$err_uname = "Username Required";
		}
		else{
			$uname = $_POST["uname"];
		}
		if(empty($_POST["pass"])){
			$hasError  = true;
			$err_pass = "Password Required";
		}
		else{
			$pass = $_POST["pass"];
		}
		//do others
		if(!$hasError){
			if(authenticateUser($uname,$pass)){
				header("Location: dashboard.php");
			}
			$err_db  = "Username and password invalid";
		}
		
	}
	function insertUser($fname,$lname,$uname,$email,$pass){
		$query = "insert into users values (NULL,'$fname','$lname','$uname','$email','$pass')";
		return execute($query);
		
	}
	function authenticateUser($uname,$pass){
		$query = "select * from users where username='$uname' and password='$pass'";
		$rs = get($query);
		if(count($rs) > 0){
			return true;
		}
		return false;
		
	}
	function checkUsername($uname){
		$query = "select name from users where username='$uname'";
		$rs = get($query);
		if(count($rs) > 0){
			return true;
		}
		return false;
		
	}
?>