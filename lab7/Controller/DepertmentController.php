<?php
	require_once 'Model/db_config.php';
	$db_err="";
	if(isset($_POST["add_depertment"])){
		
		$rs = insertdepertment($_POST["name"]);
		if($rs === true){
			header("Location: alldepertment.php");
		}
		$db_err = $rs;
	}
	else if (isset($_POST["edit_student"])){
		
		$rs = updatedepertment($_POST["name"],$_POST["id"]);
		if($rs === true){
			header("Location: allstudent.php");
		}
		$db_err = $rs;
	}
	
	function insertdepertment($name){
		$query = "insert into depertment values (NULL,'$name')";
		return execute($query);
	}
	function getAlldepertment(){
		$query = "select * from depertment";
		$rs = get($query);
		return $rs;
	}
	function getdepertment($id){
		$query = "select * from depertment where id=$id";
		$rs = get($query);
		return $rs[0]; //to pass only 1 instance
	}
	function updatedepertment($name,$id){
		$query = "update depertment set name= '$name' where id = $id";
		return execute($query);
	}
?>