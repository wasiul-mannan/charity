<?php


include("../../includes/db.php");
session_start();
if (!isset($_SESSION['admin_email'])) {
  echo "<script> window.open('../../login.php','_self')</script>";
}

if (isset($_POST['submit'])) {

  
  $title = $_POST['title'];
  $topic_id  = 1;
  $content = $_POST['content'];
  $target = $_POST['target'];

  $banner_path = $_FILES['banner_path']['name'];


  $temp_name1 = $_FILES['banner_path']['tmp_name'];


  move_uploaded_file($temp_name1, "../../../images/$banner_path");

  //$insert_product="insert into products(p_cat_id,cat_id, product_title, product_img1,product_img2,product_img3, product_price, product_desc, product_keywords) values ('$p_cat','$cat','$p_name','$p_img1','$p_img2','$p_img3','$price','$p_desc','$p_keywords')";
  $run_users = mysqli_query($con, "insert into funds (title,topic_id , content, target,  banner_path) 
  values ('$title','$topic_id ','$content', '$target', '$banner_path')");

  if ($run_users) {
    echo "<script>alert('Fundraise has been inserted successfully')</script>";
    echo "<script> window.open('blog.php','_self')</script>";
  }
}
