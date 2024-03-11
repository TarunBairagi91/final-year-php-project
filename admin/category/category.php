<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Page</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<?php include '../navbar.php';?>
    <!-- category form -->
    <div class="container">
        <div class="row">
            <div class="col-md-8 shadow m-auto border mt-5 bg-white p-3 font-monospace">
            <form action="insert.php" method="POST" enctype="multipart/form-data">

            <div class="mb-2 text-center"><h2>Add Category</h2></div>
            
            <div class="mb-2">
                <label for="" class="fw-bold fs-6 text-dark form-label">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Enter Category Title" required>
            </div>
            <br>

            <div class="mb-2">
                <label for="" class="fw-bold fs-6 text-dark form-label">Description</label><br>
                <textarea name="description" placeholder="Enter Category Description" class="form-control" cols="60" rows="10" required></textarea>
            </div>
            <br>

            <div class="mb-2">
                <label for="" class="fw-bold fs-6 text-dark form-label">URL</label>
                <input type="text" name="url" class="form-control" placeholder="Enter Category URL" required>
            </div>
            <br>
            <div class="mb-2">
                <label for="" class="fw-bold fs-6 text-dark form-label">Select Category Image</label><br>
                <input type="file" class="form-control" name="image" required>
            </div>
            <br>
            <button class="btn bg-danger fs-4 fw-bold my-3 form-control text-white" type="submit" name="category">Add Category</button>
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
                        <th>Categoty Name</th>
                        <th>Description</th>
                        <th>Product Image</th>
                        <th>Category URL</th>
                        <th>Action</th>
                    </thead>
                    
                    <tbody class="text-center">
                        <?php
                        
                        include 'config.php';
                        $record = mysqli_query($con, 'SELECT * FROM ecom_category');

                        while ($row = mysqli_fetch_array($record))
                            echo "
                                <tr>
                                    <td>$row[cat_id]</td>
                                    <td>$row[title]</td>
                                    <td>$row[description]</td>
                                    <td><img src='$row[image]' class='rounded-circle' height='50px'></td>
                                    <td>$row[url]</td>
                                    <td>
                                    <a href='delete.php? id=$row[cat_id]' class='btn btn-danger mb-2'>Delete</a>
                                    <a href='update.php? id=$row[cat_id]' class='btn btn-success'>Update</a>
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