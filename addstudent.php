<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>List of Student</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	    <div class="container">
        <br>
        <h1 class="text-white bg-dark text-center">List Of Student</h1>

        <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
        	<thead class="bg-dark text-white">
        		<th>ID</th>
        		<th>Full Name</th>
        		<th>Email Id</th>
        		<th>Phone Number</th>
        		<th>Image</th>
        		<th width="2%" >Edit</th>
        		<th >Delete</th>
        	</thead>

        	<tbody>
        		<?php

        		$con = mysqli_connect('localhost','root'); 
        		mysqli_select_db($con,'test_db');

        		if(isset($_POST['submit'])){

        			$username = $_POST['username'];
        			$email = $_POST['email'];
        			$phone = $_POST['phone'];
        			$files = $_FILES['file'];


        			$filename = $files['name'];
        			$fileerror = $files['error'];
        			$filetemp = $files['tmp_name'];

        			$fileext = explode('.', $filename);
        			$filecheck = strtolower(end($fileext));

        			$fileextstored = array('png','jpg','jpeg');
        			if(in_array($filecheck, $fileextstored)){
        				$destinationfile = 'upload/'.$filename;
        				move_uploaded_file($filetemp,$destinationfile);

        				$sql = "INSERT INTO `student`(`NAME`, `EMAIL`, `PHONE`, `IMAGE`) VALUES ('$username','$email','$phone','$destinationfile')";
        				$query = mysqli_query($con,$sql);

        				$displaysql = "select * from student";
        				$displayquery = mysqli_query($con,$displaysql); 
        				//$row = mysqli_num_rows($displayquery);

        				while ($result = mysqli_fetch_array($displayquery)) {
        					?>
        					<tr>
        						<td><?php echo $result['ID']; ?></td>
        						<td><?php echo $result['NAME']; ?></td>
        						<td><?php echo $result['EMAIL']; ?></td>
        						<td><?php echo $result['PHONE']; ?></td>
        						<td><img src="<?php echo $result['IMAGE']; ?>" height= "100px" width= "100px" > </td>
        						<td> <a href="edit.php?id=<?php echo $result['ID']; ?>">Edit  </a></td>
        						<td> <a href="delete.php?id=<?php echo $result['ID']; ?>">Delete</a></td>
        						


        					</tr>



        					<?php
        				
        				}
        			}else{
        				echo "Extension is not matching";
        			}
        		}

        		?>


        	</tbody>
        	
        </table></div>

    </div>

</body>
</html>