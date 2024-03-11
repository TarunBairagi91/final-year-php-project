<?php
    extract($_POST);
    // print_r($_POST);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Successful</title>

    <!-- boostrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h3 class="card-title text-center text-success fw-bold fs-2">Payment Successful!</h3>
                        <p class="card-text text-center fs-5">Your order has been placed successfully. Thank you for your purchase!</p>
                        <ul class="list-group">
                            <li class="list-group-item"><strong>Merchant ID:</strong> <?php echo $merchantId; ?></li>
                            <li class="list-group-item"><strong>Transaction ID:</strong> <?php echo $transactionId; ?></li>
                            <li class="list-group-item"><strong>Amount:</strong> 
                            
                            <?php
                            $paymentAmount = $amount; 
                            $amountInRupees = $paymentAmount / 100;
                            $formattedAmount = number_format($amountInRupees, 2);
                            echo $formattedAmount; ?>
                            
                            </li>
                            <li class="list-group-item"><strong>Order:</strong> <?php echo 'ON THE WAY';?></li>
                            <a href="../index.php" class="btn btn-primary mt-4">Go Home</a>
                            <!-- Add more details as needed -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
