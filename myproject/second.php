
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form method="POST"  action="<?php $_SERVER['PHP_SELF'];?>">
	User_Name:  <input type="text" name="user" placeholder="Enter your name"><br><br>
	Password:  <input type="Password" name="mypass" placeholder="Enter password"><br><br>
	<input type="submit" > <br><br><br>

</form>
<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
	
    $u=$_POST['user'];
    $p=$_POST['mypass'];

		if (empty($u)||empty($p)) {
		echo "no data";
	}
	else{
		echo "user name:$u<br>";echo "<br>";
     echo "password:$p<br>";
	}
	

	echo '<br><br><br>';
}
echo $_SERVER['SERVER_PORT'];echo('<br>')

?>


</body>
</html>


<?php
$city=array('Addis Ababa','Bahir Dar','Gondar','Markos');

foreach ($city as $value) {
	echo "$value<br>";
}
$sum=0;
$num=array(1,2,3,4,5);
for ($i=0; $i <count($num) ; $i++) { 
	$sum+=$num[$i];
}
echo "$sum<br>";



?>