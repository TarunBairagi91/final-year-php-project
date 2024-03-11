    <?php 
        session_start();
        // session_destroy();

        if(isset($_SESSION['user'])){

        

        $product_name = $_POST['title'];
        $product_price = $_POST['price'];
        $product_quantity = $_POST['pquantity'];

        if(isset($_POST['addCart'])){
            
            $check_product = array_column(array($_SESSION['cart']),'productName');
            if(in_array($product_name,$check_product)){
                echo"
                    <script>
                        alert('product already added!')
                        window.location.href = 'index.php';
                    </script>
                ";
            }
            else
            {
                $_SESSION['cart'][] = array(
                    'productName' => $product_name, 
                    'productPrice' => $product_price, 
                    'productQuantity' => $product_quantity);
                    header('location:viewcart.php');
            }
        }

        // remove product
        if(isset($_POST['remove'])){
            foreach($_SESSION['cart'] as $key => $value){
                if($value['productName'] === $_POST['item']){
                    unset($_SESSION['cart'][$key]);
                    $_SESSION['cart'] = array_values($_SESSION['cart']);
                    header('location:viewcart.php');
                }   
            }
        }

        // update product
        if(isset($_POST['update'])){
            foreach($_SESSION['cart'] as $key => $value){
                if($value['productName'] === $_POST['item']){
                    $_SESSION['cart'][$key] = array(
                        'productName' => $product_name, 
                        'productPrice' => $product_price, 
                        'productQuantity' => $product_quantity);
                        header('location:viewcart.php');
                }   
            }
        }
    }

    else{
        header('location:form/login.php');
    }
    ?>

