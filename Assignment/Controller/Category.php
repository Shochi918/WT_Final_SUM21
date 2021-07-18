<?php  
     include 'Model/db_config.php';

     $name="";
     $err_name="";
     $err_db="";

     $hasError = false;

     if(isset($_POST["Submit"]))
     {
     	if(empty($_POST["text"]))
     	{
     		$err_name="Name Required";
            $hasError = true;
     	}

     	else
     	{
     		$name=$_POST["text"];
     	}

     	if(!$hasError)
     	{
     		$rs= insertCatagory("$name");
     		var_dump($rs);
     	}
     }

    
     function allCatagories()
     {
     	$query= "select * from catagory";
     	return $rs= get($query);
     }

?>