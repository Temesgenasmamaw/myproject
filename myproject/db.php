<?php
$link= new mysqli("localhost","root","","myDB");
if ($link->connect_error) {
	die("connection failed".$link->connect_error);
}

if ($_SERVER["REQUEST_METHOD"]=="POST") {
	if (!empty($_POST['fname'])|| !empty($_POST['dept'])|| !empty($_POST['emails'])) {
///inserting value

$sql = $link->prepare("INSERT INTO student (firstname, lastname, email)
VALUES (?,?,?)");
$sql->bind_param("sss",$_POST['fname'],$_POST['dept'],$_POST['emails']);
$sql->execute();

}}

$link->close();
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST" action="mydb.php">
	Name:        <input type="text" name="fname"><br><br>
	Dept:  <input type="text" name="dept"><br><br>
	Email:  <input type="text" name="emails"><br><br>
	Id to Update:  <input type="number" name="id"><br><br>
	<input type="submit" name="register">
 
</form>


</body>
</html>