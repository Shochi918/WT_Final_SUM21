<?php  
     include 'Controller/Category.php';
?>

<html>
<head>
	<title>Add Student</title>
</head>
<body>
      <form action="" method="post">
      	     <h3" align="center">Name</h3>
      	     <div align="center">
      	     	   <input type="text" name="text" size="50" value="<?php echo $name; ?>">

      	     	   <span>
                         <?php echo $err_name;?>   
                   </span>
      	     </div><br>

      	     <div align="center">
      	     	   <input type="submit" name="Submit" value="Submit">
      	     </div><br>

      	     <?php echo $err_db; ?>
      	     	 	  
      	    
      </form>
</body>
</html>