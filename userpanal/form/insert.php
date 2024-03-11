<?php
    include 'config.php';

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $password = password_hash($_POST['password'],PASSWORD_BCRYPT);
        
        $dup_email = mysqli_query($con,"SELECT * FROM `tbluser` WHERE email='$email' ");
        $dup_username = mysqli_query($con,"SELECT * FROM `tbluser` WHERE username='$name' ");

        if(mysqli_num_rows($dup_username)){
            echo "
                <script>
                    alert('This User Name is already taken');
                    window.location.href='registration.php';
                </script>
            ";
        }

        if(mysqli_num_rows($dup_email)){
            echo "
                <script>
                    alert('This Email is already taken');
                    window.location.href='registration.php';
                </script>
            ";
        }
        
        else{
            mysqli_query($con,"INSERT INTO `tbluser`(`username`, `email`, `mobile`, `password`) VALUES ('$name','$email','$mobile','$password')");
            echo "
                <script>
                    alert('Register Successfully!');
                    window.location.href='login.php';
                </script>
            ";
        }
    }

?>

