<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 bg-white card shadow font-monospace border m-auto mt-5">
                
                <p class="text-center text-danger fs-3 fw-bold my-3">User Login</p>
                <form action="login1.php" method="POST">
                    <div class="mb-3">
                        <label for="">Username</label>
                        <input type="text" name="name" placeholder="Enter User Name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="">Password</label>
                        <input type="password" name="password" placeholder="Enter Password" class="form-control" required>
                    </div>

                    <div class="mb-4">
                        <button name='submit' class="w-100 bg-danger fs-5 text-white fw-bold btn">Login</button>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <a href="forget.php" class="text-decoration-none pe-2">Forgot Password</a>
                       <a href="registration.php" class="text-decoration-none pe-2">Registration</a>
                    </div>

                </form>
                
            </div>
        </div>
    </div>
</body>
</html>


