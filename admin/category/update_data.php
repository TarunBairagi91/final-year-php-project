<?php
        if(isset($_POST['update'])){
            $cat_id = $_POST['cat_id'];
            $cat_title = $_POST['title'];
            $cat_desc = $_POST['description'];
            $cat_url = $_POST['url'];
            $image_loc = $_FILES['image']['tmp_name'];
            $image_name = $_FILES['image']['name'];
                $img_des = "upload_images/".$image_name;
            move_uploaded_file($image_loc,$img_des);

            // update product
            include 'config.php';
            $query = "UPDATE `ecom_category` SET `title`='$cat_title',`description`='$cat_desc',`image`='$img_des',`url`='$cat_url' WHERE cat_id='$cat_id'";
            mysqli_query($con,$query);
            header("location:category.php");
        }
?>