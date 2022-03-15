<?php

include("../../includes/db.php");
session_start();
if (!isset($_SESSION['admin_email'])) {
  echo "<script> window.open('../../login.php','_self')</script>";
}else
{
    if(isset($_GET['delete_id']))
    {
        $delete_id=$_GET['delete_id'];
        $delete_product_run=mysqli_query($con," delete from volunteer where id   ='$delete_id'");
        if($delete_product_run)
        {
            echo"<script>alert('Deleted Succesfully')</script>";
            echo"<script> window.open('data1.php','_self')</script>";
        }
    }
}
