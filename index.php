<!DOCTYPE html>
<html>
<head>
    <title>Student Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <div class="container">
        <br>
        <h1 class="text-white bg-dark text-center">Register/New User</h1>
        <div class="col-lg-8 m-auto d-block">
        <form action="addstudent.php" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label for="user">Full Name: </label>
                <input type="text" name="username" id="user" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="email">Email Id: </label>
                <input type="text" name="email" id="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone: </label>
                <input type="tel" name="phone" id="phone" class="form-control" required>
            </div>

    
            <div class="form-group">
                <label for="file">Upload Image: </label>
                <input type="file" name="file" id="file" class="form-control" required>
            </div>

            <input type="submit" name="submit" class="btn btn-success">


        </form>
        </div>

        

    </div>
</body>

</html>