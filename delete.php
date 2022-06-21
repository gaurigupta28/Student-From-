<?php

$con = mysqli_connect('localhost','root'); 
mysqli_select_db($con,'test_db');

$id = $_GET['id'];
$sql = "delete from student where ID=$id";

$query = mysqli_query($con,$sql);

if($query){
	?>
	<script>
		alert("Deleted Successfully");
	</script>s
	<?php
}
else{
	?>

	<script>
		alert("Not Deleted");
	</script>
	<?php
}

header("location:index.php");




?>