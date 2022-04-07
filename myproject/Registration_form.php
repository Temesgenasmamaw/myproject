<?php 
include "config.php";

if (isset($_POST['insert'])) {
	# code...

	mysqli_query($link,"insert into TABLE1 VALUES(NULL,'$_POST[fname]','$_POST[lname]','$_POST[email]') ");
}

if (isset($_POST['update'])) {
	# code...
	mysqli_query($link,"update TABLE1 set fname='$_POST[fname]',lname='$_POST[lname]',email='$_POST[email]' WHERE id='$_POST[id]' ");
}

if (isset($_POST['delete'])) {
	# code...
	mysqli_query($link,"delete from TABLE1 WHERE id='$_POST[id]' " );
}

if (isset($_POST['search'])) {
	# code...
	$data=searching();
	$d=mysqli_query($link,"select * from TABLE1 WHERE id=$data[0]" );
if ($d) {
	# code...
	while($rows = mysqli_fetch_array($d)){
		echo "<br><br>";echo "<br><br>";
		
		echo  "<h2>Here is your search result</h2>";
		echo "<br><br>";
		echo "id: ".$id=$rows['id'];echo "<br><br>";
		echo "Name: ".$fname=$rows['fname'];echo "<br><br>";
		echo "Lname: ".$lname=$rows['lname'];echo "<br><br>";
		echo "Email: ".$email=$rows['email'];echo "<br><br>";
	}
}
	

}


function searching(){
	$get=array();
	$get[0]=$_POST['id'];
	$get[1]=$_POST['fname'];
	$get[2]=$_POST['lname'];
	$get[3]=$_POST['email'];
	return $get;
}

 ?>





<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
  <link rel="stylesheet" type="text/css" href="register.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<form action="Registration_form.php" method="post">
<input type="text" name="id" placeholder="id"><br><br>
Name<input type="text" name="fname" pattern="[a-zA-Z]+" required="insert only letter" ><br><br>
Lname<input type="text" name="lname" ><br><br>
Email<input type="text" name="email" ><br><br>



<input type="submit" name="insert" value="Add">
<input type="submit" name="update" value="update">
<input type="submit" name="delete" value="delete">
<input type="submit" name="search" value="search">


</form>
<div>
	<table border='1px' cellspacing="0">
	<thead>
		<tr>
		<td>id</td>
		<td>Name</td>
		<td>Lname</td>
		<td>email</td>
		<td>Edit</td>
		<td>Delete</td>
			
		</tr>
	</thead>
	<tbody>
	    <?php 
         
          $result=mysqli_query($link,'SELECT * FROM TABLE1');

        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['fname'] . "</td>";
                echo "<td>" . $row['lname'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
            
                echo "<td>"; ?><a href="edit.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-success">Edit</button></a> <?php echo"</td>";
                echo "<td>"; ?><a href="delete.php?id=<?php echo $row['id'];?>"><button type="button" id="del" class="btn btn-danger" style="color: red">Delete</button></a> <?php echo"</td>";

                            
                
               
            echo "</tr>";
        }
       

	    ?>

	</tbody>


	</table>


</div>

</body>
</html>