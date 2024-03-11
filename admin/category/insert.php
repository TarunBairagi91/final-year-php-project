<?php
    // echo "go to insert file";
    if(isset($_POST['category'])){
        // echo "inside category submit data!";
        $cat_title = $_POST['title'];
        $cat_desc = $_POST['description'];
        $cat_url = $_POST['url'];
        $cat_image = $_FILES['image']['tmp_name'];
        $image_name = $_FILES['image']['name'];
            $img_des = "upload_images/".$image_name;
        move_uploaded_file($cat_image,$img_des);

        // echo $cat_tile,$cat_desc,$cat_url;

        include 'config.php';   
        // insert data in database
        $query = "INSERT INTO `ecom_category`(`title`, `description`, `image`,`url`) VALUES ('$cat_title','$cat_desc','$img_des','$cat_url')";

        mysqli_query($con,$query);
        header("location:category.php");
    }
?>