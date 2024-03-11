<?php
    include 'config.php';

    $name = $_POST['name'];
    $password = $_POST['password'];

    $result = mysqli_query($con,"SELECT * FROM `tbluser` WHERE username='$name' OR email='$name' AND password='$password' ");

    session_start();

    if(!$result || mysqli_num_rows($result)){

        $_SESSION['user'] = $name;

        echo "
                <script>
                    alert('Successfully Login');
                    window.location.href='../index.php';
                </script>
            ";
    }
    else{
        echo "
                <script>
                    alert('incorrect email/username/password');
                    window.location.href='login.php';
                </script>
            ";
    }


?>
