<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoty Page</title>
</head>
<body>
<?php include 'header.php';?>
<div class="container-fluid">
    <div class="col-md-12">
    <div class="row">

    <?php 
            include 'config.php';
            
            if(isset($_GET['cat_id'])){
                $category_id = $_GET['cat_id'];
            }

            $query = "SELECT * FROM `ecom_post` WHERE cat_id=$category_id";
            $result = mysqli_query($con,$query) or die("Query Failed. : Categoty");
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "
            <div class='col-md-6 col-lg-4 m-auto mb-3'>
            <form action='insertcart.php' method='POST'>
            <div class='card m-auto' style='width: 18rem;'>
                <form action='post.php' method='POST'>
                    <input type='hidden' name='postID' value='$row[post_id]'>
                    <a href='./post.php?postID={$row['post_id']}' class='text-decoration-none'><img src='../admin/post/$row[image]' class='card-img-top' alt='product image' width='100px' height='300px'></a>
                </form>
                <div class='card-body text-center'>
                    
                    <p class='card-text text-danger fs-5 fw-bold'>";?>RS: <?php echo number_format($row['price'],2);?><?php echo"</p>
                    <input type='hidden' name='pname' value='$row[title]'>
                    <input type='hidden' name='pprice' value='$row[url]'>
                    <input type='number' name='pquantity' value='min='1' max = '20' ' placeholder = 'Quantity'>
                    <input type='submit' name='addCart' class='btn btn-success mt-3 text-white fw-bold w-100' value='Add to cart''>
                </div>
            </div>
            </form>
            </div>
            ";
                }
            }
            else{
                echo '
                <div class="d-flex align-items-center justify-content-center vh-100">
                <div class="text-center">
                    <h1 class="display-1 fw-bold">404</h1>
                    <p class="fs-3"> <span class="text-danger">Opps!</span> Post not found.</p>
                    <p class="lead">
                        The page you’re looking for doesn’t exist.
                      </p>
                    <a href="index.php" class="btn btn-primary">Go Home</a>
                </div>
            </div>
                ';
            }
        ?>

    </div>
    </div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
