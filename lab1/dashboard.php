<?php
    #session_start() 
    if(!isset($_COOKIE['loggeduser']))
    {
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align="center">Welcome <?php echo $_COOKIE['loggeduser']; ?></h1>
    <a href="add_product.php">Add product</a>
	 <a href="">All product</a>
	 <a href="">All Catagories</a>

</body>
</html>