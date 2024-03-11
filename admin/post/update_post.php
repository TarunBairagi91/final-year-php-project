<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post update</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

    <?php
    $id = $_GET['id'];
    include 'config.php';
    $record = mysqli_query($con,"SELECT * FROM `ecom_post` WHERE post_id=$id");
    $data = mysqli_fetch_array($record);
    ?>

        <!-- post update form -->
    <div class="container">
        <div class="row">
            <div class="col-md-8 shadow m-auto border mt-3 bg-white p-3 font-monospaces">

            <form action="update.php" method="POST" enctype="multipart/form-data">
            <div class="text-center mb-2">
            <h2>Update Post</h2>
            </div>
            <div class="mb-2">
                <label for="" class="fw-bold fs-6 text-dark form-label">Title</label>
                <input type="text" name="title"  class="form-control" value="<?php echo $data['title'];?>" placeholder="Enter Post Title">
            </div>
            <br>

            <div class="mb-2">
                <label for="" class="fw-bold fs-6 text-dark form-label">Content</label><br>
                <input type="text" name="content"  class="form-control" value="<?php echo $data['content'];?>" placeholder="Enter Post Content">
            </div>
            <br>

            <div class="mb-2">
                <label for="" class="fw-bold fs-6 text-dark form-label">URL</label>
                <input type="text" name="url"  class="form-control" value="<?php echo $data['url'];?>" placeholder="Enter Post URL">
            </div>
            <br>
            
            <div class="mb-2">
                <label for="" class="fw-bold fs-6 text-dark form-label">Product Price</label>
                <input type="text" name="price" class="form-control" value="<?php echo $data['price'];?>" placeholder="Enter Product Price">
            </div>
            <br>

            <div class="mb-2">
                <label for="" class="fw-bold fs-6 text-dark form-label">Select Category</label>
                <select name="cat_id" id=""  class="form-control">
                    <?php
                        include 'config.php';
                        $record = mysqli_query($con, 'SELECT * FROM ecom_category');
                        while ($row = mysqli_fetch_array($record))
                            echo "<option value='$row[cat_id]' require selected>$row[title]</option>"
                    ?>
                </select>
            </div>
            <br>

            <div class="mb-2">
                <label for="" class="fw-bold fs-6 text-dark form-label">Choose Product Image</label><br>
                <input type="file" name="image"  class="form-control">
            </div>
            <br>

            <div class="button">
                <input type="hidden" name="post_id" value="<?php echo $data['post_id'] ?>">
                <button  type="submit" name="update_post" class="btn bg-danger fs-4 fw-bold my-3 form-control text-white" >Update Post</button>
            </div>
            

        </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>