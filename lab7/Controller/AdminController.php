<?php
	require_once 'Model/db_config.php';
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$email="";
	$err_pass="";
	$err_db="";
	$hasError=false;
	if(isset($_POST["login"])){
		if(empty($_POST["name"])){
			$err_name="Name Required";
			$hasError=true;
		}else{
			$name=$_POST["name"];
		}
		if(empty($_POST["uname"])){
			$err_uname="Username Required";
			$hasError=true;
		}else{
			$uname=$_POST["uname"];
		}
		if(!$hasError){
			$rs = insertUser($name,$uname,$_POST["email"],$_POST["pass"]);
			
			if($rs === true){
				header("Location: login.php");
			}
			$err_db = $rs;
			
		}
	}
	else if (isset($_POST["login"])){
		if(empty($_POST["uname"])){
			$err_uname="Username Required";
			$hasError=true;
		}else{
			$uname=$_POST["uname"];
		}
		if(empty($_POST["pass"])){
			$err_pass="Password Required";
			$hasError=true;
		}else{
			$pass=$_POST["pass"];
		}
		if(!$hasError){
			
			if(authenticateUser($_POST["uname"],$_POST["pass"])){
				session_start();
				$_SESSION["loggeduser"] = $_POST["uname"];
				header("Location: dashboard.php");
			}
			$err_db = "Username password invalid";
		}
	}
	
	function insertUser($name,$uname,$pass){
		$query  = "insert into users values (NULL,'$name','$uname','$pass')";
		return execute($query);	
	}
	function authenticateUser($uname,$pass){
		$query ="select * from users where username='$uname' and password='$pass'";
		$rs = get($query);
		if(count($rs)>0){
			return true;
		}
		return false;
		
	}
	
?>