<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
		$name = $_GET["name"];
		$email = $_GET["email"];
		$comment = $_GET["comment"];

		echo $name."<br/>";
		echo $email."<br/>";
		echo $comment."<br/>";

	 ?>
	 <a href="contact.php">Back</a>
</body>
</html>