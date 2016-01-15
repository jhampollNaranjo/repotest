<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="../controller/controller.php" method="post">
		name<input type="text" name="name" >
		last name<input type="text"  name="last_name">
		age<input type="text"  name="age">
		<input type="hidden" name="submitted" value="TRUE">
		<input type="submit"   value="enviar">

	</form>
	
</body>
</html>