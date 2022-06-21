<!DOCTYPE html>
<html>

<?php
       
       $con = mysqli_connect('localhost','root'); 
       mysqli_select_db($con,'test_db');

       
        ?> 
<head>
    <title>Edit Details </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php 
    $query = 'SELECT * FROM student
              WHERE ID ='.$_GET['id'];
            $result = mysqli_query($con, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $name= $row['NAME'];
                $email=$row['EMAIL'];
                $phone=$row['PHONE'];
                $file=$row['IMAGE'];
             
              }
              
              $id = $_GET['id'];
         
?>

    <div class="container">
        <br>
        <h1 class="text-white bg-dark text-center">Edit Details</h1>
        <div class="col-lg-8 m-auto d-block">
        <form action="update.php" method="post" enctype="multipart/form-data">


            <div class="form-group">
                <label for="user">Full Name: </label>
                <input type="text" name="username" id="user" value="<?php echo $name; ?>" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="email">Email Id: </label>
                <input type="text" name="email" id="email" value="<?php echo $email; ?>" class="form-contro\" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone: </label>
                <input type="tel" name="phone" id="phone" value="<?php echo $phone; ?>" class="form-control" required>
            </div>

    
            <div class="form-group">
                <label for="file">Upload Image: </label>
                <input type="file" name="file" id="file" value=<img src="<?php echo $file; ?>" height= "100px" width= "100px class="form-control" required>


            </div>

            <input type="submit" name="submit" class="btn btn-success">


        </form>
        </div>

        

    </div>
</body>

</html>