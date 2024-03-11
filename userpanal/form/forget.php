<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <!-- boostrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> 

</head>
<body>

        
<div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-6">
                    <div class="card shadow">
                        <div class="card-body">
                            <form action="forget1.php" method="POST" enctype="multipart/form-data">
                            <h3 class="card-title text-center text-dark fw-bold fs-2">Email Verification!</h3>
                            <div class="field text-center">
                                <input type="email" name="email" class="form-control" placeholder="Enter Email...">
                                <button class="btn btn-warning mt-3 fw-bold" name="forget" type="submit">Send </button>
                            </div>
                            <a href="../index.php" class="w-100 btn-block btn btn-success mt-3">Go Home</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

