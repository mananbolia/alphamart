<!DOCTYPE html>
<html>
<head>
	<title>AlphaMArt</title>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css" type="text/css">
<style type="text/css">
.mb{
		border:1px solid black;border-radius: 5px;
		box-shadow: 7px 7px 5px rgba(0, 0, 0, .5);
		background-color: white;
		width:600px;
		height:450px;
		padding-top: 20px;
		color:black;
	}
	.button1 {
		background-color: #4CAF50;
		color: white;
		font-size: 20px;
		height:40px;
		width:200px;
		border:1px solid black;border-radius: 5px;
		box-shadow: 7px 7px 5px rgba(0, 0, 0, .5);
	}
	.mb2{
		height:30px;
		width:300px;
		border-radius: 3px;
	}
</style>
</head>
<body style="background-color: #e7e7e7;">
	<?php
        require 'header.php';
        $password="";
    ?>
<br><br><br><br><center>
	<div class="container">
	<div class="mb">
		<img src="img/aboutus.gif" height="150px" width="200px">
	<form action="fgtpass.php" method="post">
	<h2>Please enter your email:</h2><br>
    <input type="email" class="mb2" name="email" placeholder="Enter Email"><br><br>
    <input type="submit" class="button1" placeholder="Get password">
</form>
<?php
	ini_set( "display_errors", 0);
    require 'connection.php';
    $email=$_POST['email'];
    $getpass="select * from users where email='$email'";
    $result=mysqli_query($con,$getpass) or die(mysqli_error($con));
    $count = mysqli_num_rows($result);
	$r = mysqli_fetch_assoc($result);

	$password = $r['password'];
	if($password!=""){
		echo "<h3><br><center>Your Password is: ".$password."</center></h3>";
	}
?></div></center>
</div>
</div>
</body>
</html>