<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Page</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <?php include '../navbar.php';?>
    <!-- post form -->
    <div class="container">
        <div class="row">
            <div class="col-md-8 shadow m-auto border mt-3 bg-white p-3 font-monospaces">

            <form action="insert.php" method="POST" enctype="multipart/form-data">
                <div class="mb-2 text-center"><h2>Add Post</h2></div>
            <div class="mb-2">
                <label for="" class="fw-bold fs-6 text-dark form-label">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Enter Post Title" required>
            </div>
            <br>

            <div class="mb-2">
                <label for="" class="fw-bold fs-6 text-dark form-label">Content</label><br>
                <textarea name="content" class="form-control" placeholder="Enter Post Content" cols="60" rows="10"></textarea>
            </div>
            <br>

            <div class="mb-2">
                <label for="" class="fw-bold fs-6 text-dark form-label">URL</label>
                <input type="text" name="url" class="form-control" placeholder="Enter Post URL">
            </div>
            <br>
            
            <div class="mb-2">
                <label for="" class="fw-bold fs-6 text-dark form-label">Product Price</label>
                <input type="text" name="price" class="form-control" placeholder="Enter Product Price" required>
            </div>
            <br>

            <div class="mb-2">
                <label for="" class="fw-bold fs-6 text-dark form-label">Select Category</label>
                <select name="cat_id" id="" class="form-control">
                    <option value="" disabled selected hidden>Select Category</option>
                    <?php
                        include 'config.php';
                        $record = mysqli_query($con, 'SELECT * FROM ecom_category');
                        while ($row = mysqli_fetch_array($record))
                            echo "<option value='$row[cat_id]' require>$row[title]</option>"
                    ?>
                    
                </select>
            </div>
            <br>

            <div class="mb-2">
                <label for="" class="fw-bold fs-6 text-dark form-label">Choose Product Image</label><br>
                <input type="file" name="image" class="form-control" required>
            </div>
            <br>

            <button class="btn bg-danger fs-4 fw-bold my-3 form-control text-white" type="submit" name="post_product" >Add Post</button>

        </form>

            </div>
        </div>
    </div>

    <br><br>
    <!-- fetch data -->

    <div class="container">
        <div class="row">
            <div class="col-md-12 m-auto">
                <table class="table table-hover border my-4">
                    <thead class="fs-6 font-monospace text-center">
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Content</th>
                        <th>Post URL</th>
                        <th>Product Price</th>
                        <th>Product Image</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </thead>
                    
                    <tbody class="text-center">
                        <?php
                        
                        include 'config.php';
                        $record = mysqli_query($con, 'SELECT * FROM ecom_post');

                        while ($row = mysqli_fetch_array($record))
                            echo "
                                <tr>
                                    <td>$row[post_id]</td>
                                    <td>$row[title]</td>
                                    <td>$row[content]</td>
                                    <td>$row[url]</td>
                                    <td>$row[price]</td>
                                    <td><img src='$row[image]' class='rounded-circle' height='50px'></td>
                                    <td>
                                    <a href='update_post.php? id=$row[post_id]' class='btn btn-success mb-2'>Update</a>
                                    </td>
                                    <td>
                                    <a href='delete.php? id=$row[post_id]' class='btn btn-danger'>Delete</a>
                                    </td>

                                </tr>
                                ";
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>