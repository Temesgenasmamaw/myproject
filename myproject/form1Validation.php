<!DOCTYPE html>
<html>
<head>
	<title>validation form</title>
</head>
<body>
<form method="POST" action="<?php $_SERVER['PHP_SELF'];?> ">
	Name:<input type="text" name="Name">
	Email:<input type="email" name="Email">
	Gender:
	<input type="radio" name="gender">Male
	<input type="radio" name="gender">Female



</form>

<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
	
}



?>


</body>
</html>