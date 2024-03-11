<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update date</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<?php
    $id = $_GET['id'];
    include 'config.php';
    $record = mysqli_query($con,"SELECT * FROM `ecom_category` WHERE cat_id=$id");
    $data = mysqli_fetch_array($record);
    ?>
        <!-- category update form -->
    <div class="container">
        <div class="row">
            <div class="col-md-8 shadow m-auto border mt-3 bg-white p-3 font-monospaces">
            <form action="update_data.php" method="POST" enctype="multipart/form-data">
            <div class="text-center">
            <h2>Update Category</h2>
            </div>
            <div class="mb-2">
                <label for="" class="fw-bold fs-6 text-dark form-label">Title</label>
                <input type="text" name="title" class="form-control" value="<?php echo $data['title'];?>" placeholder="Enter Category Title">
            </div>
            <br>

            <div class="mb-2">
                <label for="" class="fw-bold fs-6 text-dark form-label">Description</label><br>
                <input type="text" name="description" class="form-control" value="<?php echo $data['description'];?>" placeholder="Enter Category Description"></input>
            </div>
            <br>

            <div class="mb-2">
                <label for="" class="fw-bold fs-6 text-dark form-label">URL</label>
                <input type="text" name="url" class="form-control" value="<?php echo $data['url'];?>"  placeholder="Enter Category URL">
            </div>
            <br>

            <div class="mb-2">
                <label for="" class="fw-bold fs-6 text-dark form-label">Select Category Image</label><br>
                <input type="file" name="image" class="form-control"><br>
                <img src="<?php echo $data['image'];?>" alt="product image" height="100px">
            </div>
            <br>

            <div class="">
                <input type="hidden" name="cat_id" value="<?php echo $data['cat_id'] ?>">
                <button type="submit" name="update" class="btn bg-danger fs-4 fw-bold my-3 form-control text-white" >update Category</button>
            </div>

        </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>