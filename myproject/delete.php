<?php
include 'config.php';
$id=$_GET['id'];

mysqli_query($link,"delete from TABLE1 WHERE id=$id" );


?>
<script type="text/javascript">
	window.location="Registration_Form.php";
</script>