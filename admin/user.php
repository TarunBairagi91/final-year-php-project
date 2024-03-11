<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>users</title>

    <!-- boostrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- font awesome icon CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

</head>

<body>
    <?php
    include 'my_store.php';
    $con = mysqli_connect('localhost', 'root', '', 'ecom');
    $record = mysqli_query($con, "SELECT * FROM `tbluser`");
    $row_count = mysqli_num_rows($record);
    ?>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="m-auto col-md-2 text-center">
                    <h3 class="fw-bold">Total User</h3>
                    <h2 class="bg-danger text-white fw-bold"><?php echo $row_count; ?></h2>
                </div>
            </div>
        </div>
    </div>

    <table class="table table-secondary table-bordered">
        <thead class="text-center">
            <th>S.No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Action</th>
        </thead>
        <tbody class="text-center">
            <?php
            $i = 0;
            while ($row = mysqli_fetch_array($record)) {
                echo "
                <tr>
                    <td>";?><?php echo ++$i;?><?php echo"</td>
                    <td>$row[username]</td>
                    <td>$row[email]</td>
                    <td>$row[mobile]</td>
                    <td>
                        <a href='delete.php? id=$row[id] ' class='btn btn-danger'>Delete</a>
                        <!--  <a href='' class='btn btn-success'>Update</a>  -->
                    </td>
                </tr>
                ";
            }
            ?>
        </tbody>
    </table>

</body>

</html>