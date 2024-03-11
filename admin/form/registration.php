<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>
<body>
    <!-- Registration Form  -->
    <div class="container shadow">
        <div class="heading text-center mt-4"><h1>Admin Registration</h1></div>
        <form action="login.php" method="POST" enctype="multipart/form-data">
            <div class="fiels">
                <label for="" class="fw-bold fs-6 text-dark">Full Name</label>
                <input type="text" name="name" placeholder="Enter Admin Name" required>
            </div>
            <br>

            <div class="fiels">
                <label for="" class="fw-bold fs-6 text-dark">Email</label>
                <input type="email" name="email" placeholder="Enter Admin Email" required>
            </div>
            <br>

            <div class="fiels">
                <label for="" class="fw-bold fs-6 text-dark">Mobile</label>
                <input type="number" name="number" placeholder="Enter Mobile Number" required>
            </div>
            <br>

            <div class="fiels">
                <label for="" class="fw-bold fs-6 text-dark">Password</label>
                <input type="password" name="password" placeholder="Enter Password" required>
            </div>
            
            <button type="submit" class="btn mt-4 bg-primary fw-bold fs-6 text-light mt-3" name="register">Register</button>
            <br> 
            <div class="mt-4">
                <a href="login.php" class="fw-bold fs-5 text-decoration-none">Admin LogIn</a>
            </div>

        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>