<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <?php
    require("config.php");

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    function sendMail($email, $reset_token)
    {
        require('PHPMailer/PHPMailer.php');
        require('PHPMailer/SMTP.php');
        require('PHPMailer/Exception.php');

        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to 
            $mail->SMTPAuth   = true;                                   //Enable SMTP 
            $mail->Username   = 'Reciver Email';           //SMTP  username
            $mail->Password   = 'Password';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('tarunbairagi7240@gmail.com', 'EShop');
            $mail->addAddress($email);     //Add a recipient
 
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Password Reset Link From EShop';
            $mail->Body    = "We got a request from you to reset your password! <br> Click the link below: <br> <a href='http://http://localhost/ecom/updatepassword.php?email=$email&reset_token=$reset_token'>Reset Password</a>"; 
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    if (isset($_POST['forget'])) {
        $query = "SELECT * FROM `tbluser` WHERE `email`= '$_POST[email]'";
        $result = mysqli_query($con, $query);
        if ($result) {
            if (mysqli_num_rows($result) == 1) {
                $reset_token = random_bytes(16);
                date_default_timezone_set('Asia/kolkata');
                $date = date("Y-m-d");
                $query = "UPDATE `tbluser` SET `resettoken`='$reset_token',`resettokenexpire`='$date' WHERE `email`='$_POST[email]'";
                if (mysqli_query($con, $query) && sendMail($_POST['email'], $reset_token)) {
                    echo "
                        <script>
                            alert('Password Reset Link Sent To Mail');
                            window.location.href='forget.php';
                        </script>
                        ";
                } else {
                    echo "
                        <script>
                            alert('Server Down! try again later');
                            window.location.href='forget.php';
                        </script>
                        ";
                }
            } else {
                echo "
                    <script>
                        alert('Email Not Found!');
                        window.location.href='forget.php';
                    </script>
                    ";
            }
        } else {
            echo "
                <script>
                    alert('Cannot run query!');
                    window.location.href='login.php';
                </script>
                ";
        }
    }
    ?>
</body>

</html>