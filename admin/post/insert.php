<?php
    // echo "go to insert file";
    if(isset($_POST['post_product'])){
        // echo "inside category submit data!";
        $category = $_POST['cat_id']; 
        $post_title = $_POST['title']; 
        $post_content = $_POST['content'];
        $post_price = $_POST['price'];
        $post_url = $_POST['url'];
        $post_image = $_FILES['image']['tmp_name'];
        $image_name = $_FILES['image']['name'];
            $img_des = "upload_post_images/".$image_name;
        move_uploaded_file($post_image,$img_des);
        
        // echo $post_title,$post_content,$post_url,$category;

        include 'config.php';
        // insert data in database
        $query = "INSERT INTO `ecom_post`(`cat_id`, `title`, `content`, `price`, `url`, `image`) VALUES ('$category','$post_title','$post_content','$post_price','$post_url','$img_des')";

        mysqli_query($con,$query);
        header("location:post.php");

    }
?>