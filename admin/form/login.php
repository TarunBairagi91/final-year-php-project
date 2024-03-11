<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn Form</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>
<body>
    <!-- Registration Form  -->
    <?php
        // echo "Inside this method!"
        if(isset($_POST['register'])){
            // echo "Inside a if condition";
            $con = mysqli_connect('localhost','root','','ecom');
            $admin_name = $_POST['name'];
            $admin_email = $_POST['email'];
            $admin_number = $_POST['number'];
            $admin_password = password_hash($_POST['password'],PASSWORD_BCRYPT); 

            // echo $admin_name," ",$admin_email," ",$admin_number," ",$admin_password;

            // Insert data in database
            $query ="INSERT INTO admin_registration(username,email,mobile,admin_password) VALUES ('$admin_name','$admin_email','$admin_number','$admin_password')";

            mysqli_query($con,$query);
        }
    ?>

    <!--LogIn Form  -->

    <div class="container mt-4 ">
        <div class="row shadow">
            <div class="col-md-6 m-auto mt-4">

        <div class="heading text-center text-dark"><h1>Admin LogIn</h1></div>
        <form class="mt-4" action="login1.php" method="POST" enctype="multipart/form-data">
            <div class="fiels">
                <label for="" class="fw-bold fs-6 text-dark">UserName</label>
                <input type="text" name="username" placeholder="Enter Username" required>
            </div>
            <br>

            <div class="fiels">
                <label for="" class="fw-bold fs-6 text-dark">Password</label>
                <input type="password" name="password" placeholder="Enter Password" required>
            </div>
            <br>

            <button type="submit" name="login" class="btn fw-bold fs-6 mb-3 bg-primary text-light" >LogIn</button>
            <br>

            <div class="register mb-4">
                <a href="registration.php" class="fw-bold fs-5 text-decoration-none">Admin Registration</a>
            </div>
        </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>