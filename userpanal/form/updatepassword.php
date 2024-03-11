<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Update</title>

     <!-- boostrap CDN -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> 

</head>

<body>
    <?php
    require('config.php');
    if (isset($_GET['email']) && isset($_GET['reset_token'])) {
        date_default_timezone_set('Asia/kolkata');
        $date = date("Y-m-d");
        $query = "SELECT * FROM `tbluser` WHERE `email` = '$_GET[email]' AND `resettoken` ='$_GET[reset_token]' AND `resettokenexpire`='$date'";
        $result = mysqli_query($con, $query);
        if ($result) {
            if (mysqli_num_rows($result) == 1) {
                echo '
                <div class="container">
                <div class="row justify-content-center mt-5">
                    <div class="col-md-6">
                        <div class="card shadow">
                            <div class="card-body">
                                <form action="" method="POST">
                                    <h3 class="card-title text-center text-dark fw-bold fs-2">Create New Password</h3>
                                    <div class="field text-center">
                                        <input type="password" class="form-control" placeholder="Enter New Password" name="password">
                                        <input type="hidden" name="email" value="$_GET[email]">
                                        <button type="submit" class="btn btn-warning mt-3 fw-bold" name="updatepassword">Update Password</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ';
            } else {
                echo "
                        <script>
                            alert('Invalid or Expired Link');
                            window.location.href='forget.php';
                        </script>
                        ";
            }
        } else {
            echo "
            <script>
                alert('Server Down! try again later');
                window.location.href='forget.php';
            </script>
            ";
        }
    }
    ?>

    <?php 
        if(isset($_POST['updatepassword'])){
            $pass = password_hash($_POST['password'],PASSWORD_BCRYPT);
            $update = "UPDATE `tbluser` SET `password`='$pass',`resettoken`=NULL,`resettokenexpire`=NULL WHERE `email`='$_POST[email]'";
            if(mysqli_query($con,$update)){
                echo "
                <script>
                    alert('Password Update SuccessFully!');
                    window.location.href='forget.php';
                </script>
                ";
            }
            else{
                echo "
                        <script>
                            alert('Server Down! try again later');
                            window.location.href='forget.php';
                        </script>
                        ";
            }
        }
    ?>
</body>

</html>

