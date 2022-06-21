<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php

       $con = mysqli_connect('localhost','root'); 
       mysqli_select_db($con,'test_db');

			$id = $_POST['ID'];
			$name = $_POST[''];
		    $email = $_POST['email'];
			$phone = $_POST['phone'];
			$file = $_POST['file'];
		
	   
		
	 			$query = 'UPDATE people set NAME ="'.$name.'",
					EMAIL ="'.$email.'", PHONE="'.$phone.'",
					IMAGE="'.$file.'" WHERE
					ID ="'.$id.'"';
					$result = mysqli_query_array($con, $query) or die(mysqli_error($con));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "addstudent.php";
		</script>
 </body>
</html>