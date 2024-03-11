<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>viewCart</title>
</head>
<body>
    <?php
        include 'header.php';
    ?>
    <!-- cart head -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center bg-secondary mb-4 rounded">
                <h1 class="text-warning fw-bold">MY CART</h1>
            </div>
        </div>
    </div>
    <!-- cart head end-->

    <!-- table for data -->
    <div class="container-fluid">
        <div class="row justify-content-around">
            <div class="col-sm-12 col-md-6 col-lg-9">
                <table class="table table-bordered text-center">
                    <thead class="fs-5">
                        <tr>
                            <th>INDEX NO.</th>
                            <th>PRODUCT NAME</th>
                            <th>PRODUCT PRICE</th>
                            <th>PRODUCT QUANTITY</th>
                            <th>TOTAL PRICE</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $ptotal = 0;
                            $total = 0;
                            
                            if(isset($_SESSION['cart'])){
                                foreach ($_SESSION['cart'] as $key => $value) {
                                    $ptotal = (int)$value['productPrice'] * (int)$value['productQuantity'];
                                    $total += (int)$value['productPrice'] * (int)$value['productQuantity'];
                                    $i = $key+1;    
                                    echo "
                                    <form action='insertcart.php' method='POST'>
                                    <tr>
                                        <td>$i</td>
                                        <td><input type='hidden' name='title' value='$value[productName]'>$value[productName]</td>
                                        <td><input type='hidden' name='price' value='$value[productPrice]'>$value[productPrice]</td>
                                        <td><input type='text' name='pquantity' value='$value[productQuantity]'></td>
                                        <td>$ptotal</td>
                                        <td>
                                            <button class='btn bg-success text-white fw-bold mb-2' name='update'>Update</button>
                                            <button class='btn bg-danger text-white fw-bold' name='remove'>Delete</button>
                                            <input type='hidden' name='item' value='$value[productName]'>
                                        </td>
                                    </tr>
                                    </form>
                                    ";
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-3 text-center">
                <h3>Total Ammount</h3>
                <h2 class="bg-danger text-white"><?php echo number_format($total,2)?></h2>
                
                <!-- payment -->
                <form action="./payment/payment_method.php" method="GET">
                    <input type="hidden" class="form-control container fs-5 fw-bold" name="total_price" value="<?php echo floatval($total);?>">
                    <button type="submit" class="w-100 btn btn-success fw-bold mt-2">PAY</button>
                </form>
            </div>
        </div>
    </div>
    <script src="./payment/js/script.js"></script>
</body>
</html>