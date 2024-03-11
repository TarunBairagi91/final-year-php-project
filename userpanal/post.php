<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post detail</title>
</head>
<body>
<?php include 'header.php';?>
<div class="container-fluid">
    <div class="col-md-12">
    <div class="row">

    <?php 
            include 'config.php';
            
            if(isset($_GET['postID'])){
                $post_id = $_GET['postID'];
            }

            $query = "SELECT * FROM `ecom_post` WHERE post_id=$post_id";
            $result = mysqli_query($con,$query) or die("Query Failed. : Categoty");
            if(mysqli_num_rows($result)){
                while($row = mysqli_fetch_assoc($result)){
                    echo "
                    <div class='container'>
                    <div class='row'>
                        <div class='col-md-10 m-auto'>
                        <form action='insertcart.php' method='POST'>
                        <div class='shadow-lg p-3 mb-5 bg-light rounded'>
                            <h3 class='text-dark fw-bold'>$row[title]</h3>
                            <div class='text-center'>
                            <img src='../admin/post/$row[image]' class='img-fluid' alt='product image' width='500px'>
                            </div>  
                            <span class='text-dark fw-bold fs-5'>$row[title]</span>
                            <p class='text-dark'>$row[content]</p>
                            <br>
                            <p class='card-text text-dark fs-5 fw-bold'>";?>RS: <?php echo number_format($row['price'],2);?><?php echo"</p>
                            <input type='hidden' name='title' value='$row[title]'>
                            <input type='hidden' name='price' value='$row[price]'>
                            <input type='number' name='pquantity' class='form-control' value='min='1' max = '20' ' placeholder = 'Quantity'>
                            <input type='submit' name='addCart' class='btn btn-success mt-3 text-white fw-bold w-100' value='Add to cart''>
                        </div>
                        </div>
                    </div>
                    </form>
                    </div>
                    ";
                }
            }
        ?>
    </div>
    </div>
</div>

<?php include 'footer.php'; ?>
</body>
</html>

