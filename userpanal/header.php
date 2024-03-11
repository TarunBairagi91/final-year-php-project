<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <!-- boostrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- font awesome icon CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

</head>
<body>
<?php 
    session_start();
    $count = 0;
    if(isset($_SESSION['cart'])){
        $count = count($_SESSION['cart']);
    }
    ?>
    <!-- navbar start -->
    <nav class="navbar bg-success">
        <div class="container-fluid text-white">
            <a class="navbar-brand text-white"><img src="./image/logo.png" alt="web logo" height="40px"></a>
        
        <div class="d-flex">
            <a href="index.php" class="text-white text-decoration-none pe-2 fs-5"><i class="fas fa-home pe-1"></i>Home</a>

            <a href="viewCart.php" class="text-white text-decoration-none pe-2 fs-5"><i class="fas fa-shopping-cart pe-1"></i>Cart <sup>(<?php echo $count; ?>)</sup> |</a>

            <span class="text-white pe-2">
                <i class="fas fa-user-shield pe-1"></i><big>Hello, 
                    <?php 
                        if(isset($_SESSION['user'])){
                            echo $_SESSION['user'].' |';

                            echo "
                            <a href='form/logout.php' class='text-white text-decoration-none pe-2 fs-5'><i class='fas fa-sign-in-alt pe-1'></i> Logout |</a> 
                            ";
                        }
                        else
                        {
                            echo "
                            <a href='form/login.php' class='text-white text-decoration-none pe-2 fs-5'><i class='fas fa-sign-in-alt pe-1'></i> Login |</a> 
                            ";  
                        }
                    ?>    
                </big>
                <a href="../admin/my_store.php" class="text-white text-decoration-none pe-2 fs-5">Admin</a>
            </span>
            </div>
    </nav>
    </div>

    </div>
    <!-- navbar end -->
    <div class="bg-dark font-monospace">
        <?php 
            include 'config.php';
            
            if(isset($_GET['cat_id'])){
                $category_id = $_GET['cat_id'];
            }
            
            $query = "SELECT * FROM `ecom_category`";
            $numcat=1;
            $result = mysqli_query($con,$query) or die("Query Failed. : Categoty");
            if(mysqli_num_rows($result)){
                $active = "";
               
        ?>
        <ul class="list-unstyled d-flex justify-content-center slide">
            <?php
                while($row = mysqli_fetch_assoc($result)){

                    if(isset($_GET['cat_id'])){
                        if($row['cat_id'] ==$category_id){
                            $active = 'active bg-success';
                        }
                        else{
                            $active = "";
                        }
                    } 
                        if($numcat%11==0) {echo "</ul> <ul class='list-unstyled d-flex justify-content-center slide'>" ;}                
                        echo "<li><a href='category.php?cat_id={$row['cat_id']}' class='{$active} text-decoration-none text-light fw-bold fs-5 mt-4 px-4'>{$row['title']}</a></li>";
                   $numcat++; 
                   }?>
        </ul>
        <?php  } ?>
    </div>
</body>
</html>