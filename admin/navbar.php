<!-- boostrap CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<!-- font awesome icon CDN -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>


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
            <b class="fs-4">Hello - <i><?php echo $_SESSION['admin_registration'];?></i> </b>
        </span>
        </div>
    </nav>
    <!-- navbar end -->