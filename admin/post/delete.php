<?php
        $id = $_GET['id'];
        include 'config.php';
        mysqli_query($con,"DELETE FROM `ecom_post` WHERE post_id=$id");
        header("location:post.php");
?>