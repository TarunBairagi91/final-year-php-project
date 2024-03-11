<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>

    <!-- boostrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> 

</head>
<body>

    <?php
    //    echo "Welcome to payment method side!";
       if(isset($_GET['total_price'])){
        $total = $_GET['total_price'];

         
        // Replace these with your actual PhonePe API credentials
        $apiKey = '099eb0cd-02cf-4e2a-8aca-3e6c6aff0399';
        $merchantId = 'PGTESTPAYUAT';
        $keyIndex = 1;

        // Prepare the payment request data (you should customize this)
        $paymentData = array(
            'merchantId' => $merchantId,
            'merchantTransactionId' => "MT7850590068188104",
            "merchantUserId"=>"MUID123",
            'amount' => intval($total*100), // Amount in paisa (10 INR)
            'redirectUrl'=>"http://localhost/ecom/userpanal/payment/payment_success.php",
            'redirectMode'=>"POST",
            'callbackUrl'=>"http://localhost/ecom/userpanal/payment/payment_success.php",
            "merchantOrderId"=> "123456",
        "mobileNumber"=>"1234567890",
        "message"=>"product buy now",
        "email"=>"test@gmail.com",
        "shortName"=>"test",
        "paymentInstrument"=> array(    
            "type"=> "PAY_PAGE",
        )
        );
        
        $jsonencode = json_encode($paymentData);
        $payloadMain = base64_encode($jsonencode);


        $payload = $payloadMain . "/pg/v1/pay" . $apiKey;
        $sha256 = hash("sha256", $payload);
        $final_x_header = $sha256 . '###' . $keyIndex;
        $request = json_encode(array('request'=>$payloadMain));


        $curl = curl_init();
            curl_setopt_array($curl, [
            CURLOPT_URL => "https://api-preprod.phonepe.com/apis/pg-sandbox/pg/v1/pay",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $request,
            CURLOPT_HTTPHEADER => [
                "Content-Type: application/json",
                "X-VERIFY: " . $final_x_header,
                "accept: application/json"
            ],
            ]);
            
            $response = curl_exec($curl);
            $err = curl_error($curl);
            
            curl_close($curl);
            
            if ($err) {
                echo '
                <div class="d-flex align-items-center justify-content-center vh-100">
                <div class="text-center">
                    <h1 class="display-1 fw-bold">500</h1>
                    <p class="fs-3"> <span class="text-danger">Opps!</span> Server Error.</p>
                    <p class="lead"> '
                    .$err.
                      '</p>
                    <a href="../index.php" class="btn btn-primary">Go Home</a>
                </div>
            </div>
                '; //.$err

                // The page you’re looking for doesn’t exist. 

            } else {
            $res = json_decode($response);
            // echo '<pre>';
            // print_r($res);

            echo '

            <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-6">
                    <div class="card shadow">
                        <div class="card-body">
                            <h3 class="card-title text-center text-danger fw-bold fs-2">Opps! Amount Not Found!</h3>
                            <p class="card-text text-center fs-5">Please Go To Home And Please Enter Amount!</p>
                            <a href="../index.php" class="w-100 btn-block btn btn-success mt-2">Go Home</a>
                        </div>
                    </div>
                </div>
            </div>
          </div>
            ';

            if(isset($res->success) && $res->success=='1'){
            $paymentCode=$res->code;
            $paymentMsg=$res->message;
            $payUrl=$res->data->instrumentResponse->redirectInfo->url;
            
            header('Location:'.$payUrl) ;
            }
            }
    }
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

