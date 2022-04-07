<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "sampe1");
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Attempt insert query execution
$sql = "INSERT INTO persons (first_name, last_name, email) VALUES
            ('John', 'Rambo', 'johnrambo@mail.com'),
            ('Clark', 'Kent', 'clarkkent@mail.com'),
            ('John', 'Carter', 'johncarter@mail.com'),
            ('Harry', 'Potter', 'harrypotter@mail.com')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
/*

<?php
$link= new mysqli("localhost","root","","myDB");
if ($link->connect_error) {
	die("connection failed".$link->connect_error);
}

if ($_SERVER["REQUEST_METHOD"]=="POST") {
	if (empty($_POST['id'])) { 
		echo "enter your id to update";
}else{

   $f=$_POST['fname'];
    $l=$_POST['dept'];
     $e=$_POST['emails'];
      $i=$_POST['id'];

//inserting value  ,lastname=$l,email=$i
	$sql="UPDATE student set firstname= $f where id=$i";

if ($link->query($sql)) 
	echo "updated";
else
echo "not updated";


}
$link->close();
}


?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST" action="mydb.php">
    Id to Update: <input type="number" name="id"><br><br>
	Name:        <input type="text" name="fname"><br><br>
	Dept:  <input type="text" name="dept"><br><br>
	Email:  <input type="text" name="emails"><br><br>
	
	<input type="submit" name="register">
 
</form>


</body>
</html>
*/
?>







