<?php
        if(isset($_POST['update_post'])){
            $post_id = $_POST['post_id'];
            $category = $_POST['cat_id'];
            $post_title = $_POST['title'];
            $post_content = $_POST['content'];
            $post_url = $_POST['url'];
            $post_price = $_POST['price'];
            $image_loc = $_FILES['image']['tmp_name'];
            $image_name = $_FILES['image']['name'];
                $img_des = "upload_post_images/".$image_name;
            move_uploaded_file($image_loc,$img_des);

            // echo $post_id,$post_title,$post_content,$post_url,$category;

            // update product

            include 'config.php';
            $query = "UPDATE `ecom_post` SET `cat_id`='$category',`title`='$post_title',`content`='$post_content',`url`='$post_url',`price`='$post_price',`image`='$img_des' WHERE post_id='$post_id'";
            mysqli_query($con,$query);
            header("location:post.php");
        }
?>