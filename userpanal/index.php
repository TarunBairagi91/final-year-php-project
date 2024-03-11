<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <!-- boostrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    
<?php include 'header.php';?>

<!-- post page -->
<div class="container-fluid">
    <div class="col-md-12">
    <div class="row">
<!-- ASC DESC -->
    <?php 
            include 'config.php';
            
            $query = "SELECT * FROM `ecom_post` ORDER BY Price ASC";
            $result = mysqli_query($con,$query) or die("Query Failed. : Categoty");
            if(mysqli_num_rows($result)){
                while($row = mysqli_fetch_assoc($result)){
                    echo "
            <div class='col-md-6 col-lg-4 m-auto mb-3'>
            <form action='insertcart.php' method='POST'>
            <div class='card m-auto' style='width: 18rem;'>
                <form action='post.php' method='GET'>
                    <input type='hidden' name='postID' value='$row[post_id]'>
                    <input type='hidden' name='cat_id' value='$row[cat_id]'>
                    <a href='./post.php?postID={$row['post_id']}' class='text-decoration-none'><img src='../admin/post/$row[image]' class='card-img-top' alt='product image' width='100px' height='300px'></a>
                </form>
                <div class='card-body text-center'>
                    
                    <p class='card-text text-danger fs-5 fw-bold'>";?>RS: <?php echo number_format($row['price'],2);?><?php echo"</p>
                    <input type='hidden' name='title' value='$row[title]'>
                    <input type='hidden' name='price' value='$row[price]'>
                    <input type='number' name='pquantity' value='min='1' max = '20' ' placeholder = 'Quantity'>
                    <input type='submit' name='addCart' class='btn btn-success mt-3 text-white fw-bold w-100' value='Add to cart''>
                </div>
            </div>
            </form>
            </div>
            ";
                }
            }
        ?>
    <!-- card start -->
    </div>
    </div>
</div>

<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
