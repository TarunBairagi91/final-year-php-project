    <?php
        $id = $_GET['id'];
        include 'config.php';
        mysqli_query($con,"DELETE FROM `ecom_category` WHERE cat_id=$id");
        header("location:category.php");
    ?>
