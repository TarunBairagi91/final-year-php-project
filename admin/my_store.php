<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Deshboard</title>
    <!-- boostrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- font awesome icon CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

</head>
<body>
<?php
    session_start();
    if(!$_SESSION['admin_registration']){
        header('location:form/login.php');
    }
?>

       <!-- navbar start -->
       <nav class="navbar bg-dark">
        <div class="container-fluid text-white">
            <a class="navbar-brand text-white" href="/ecom/admin/my_store.php"><h1>MyStore</h1></a>
        
        <span>
            <i class="fas fa-user-shield"></i>
            <b>Hello <i><?php echo $_SESSION['admin_registration'];?></i> |</b>
            <i class="fas fa-sign-out-alt"></i>
            <a href="/ecom/admin/form/login.php" class="text-decoration-none text-white"><b>Logout | </b></a>
            <i class="fas fa-user"></i>
            <a href="../userpanal/index.php" class="text-decoration-none text-white"><b>Userpanel</b></a>
        </span>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- Dashboard -->
    <div>
        <h2 class="text-center m-2">Dashboard</h2>
    </div>

    <div class="col-md-6 bg-success text-center p-1 m-auto">
        <a href="./category/category.php" class="text-decoration-none text-white fs-4 fw-bold px-4">Add Category</a>
        <a href="./post/post.php" class="text-decoration-none text-white fs-4 fw-bold px-4">Add Post</a>
        <a href="user.php" class="text-decoration-none text-white fs-4 fw-bold px-4">Users</a>
    </div>

</body>
</html>