<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Contact page</h1>
	<?php 	if (!isset($a)){
				$a = 2;	
			}  
	?>
	<form action="received_contact.php" method="GET">
		<label>
			Nombre: 
			<input type="text" name="name">
			<br/><br/>
		</label>
		<label>
			Email: 
			<input type="text" name="email">
			<br/><br/>
		</label>
		<label>
			Comentario: 
			<textarea name="comment"></textarea>
			<br/><br/>
		</label>
		<input type="submit" name="submit"> 
	</form>
	<a href="../index.php">Index</a>
</body>
</html>