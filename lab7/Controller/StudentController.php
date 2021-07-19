<?php
	require_once "Model/db_config.php";
	
	$err_db="";
	if(isset($_POST["add_student"])){
	
		
		$rs = insertstudent($_POST["dept_id"],$_POST["name"],$_POST["id"],$_POST["dob"],$_POST["credit"],$_POST["cgpa"]);
		if($rs === true){
			header("Location: allstudent.php");
		}
		$err_db = $rs;
		
	}
	
	function insertstudent($dept_id,$name,$id,dob,$credit,$cgpa){
		$query = "insert into student values (NULL,'$name','$dob',$dept_id,$credit,'$cgpa')";
		return execute($query);
	}
	function updatestudent($dept_id,$name,$id,dob,$credit,$cgpa){
		$query = "update student set name='$name',dept_id='$dept_id', id=$id, dob=$dob, credit=$credit, cgpa='$cgpa' where id=$id";
		return execute($query);
	}
	
	
	function getstudent($id){
		$query = "select * from student where id = $id";
		$rs = get($query);
		return $rs[0];
	}
?>