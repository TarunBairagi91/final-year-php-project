<?php
// echo "login user!";
if (isset($_POST['login'])) {
    // echo "Inside this method";
    $con = mysqli_connect('localhost', 'root', '', 'ecom');

    $username = $_POST['username'];
    $password = $_POST['password'];
    // echo $username,$password;

    $query = "SELECT * FROM `admin_registration` WHERE username = '$username' OR email = '$username' AND admin_password = '$password' ";

    $result = mysqli_query($con, $query);

    session_start();
    if (mysqli_num_rows($result)) {
        $_SESSION['admin_registration'] = $username;
        echo "
            <script>
                alert('Login successfully');
                window.location.href='../my_store.php'
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Invalid username/password');
                window.location.href='login.php'
            </script>
        ";
    }
}
