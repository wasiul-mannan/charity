<?php

include('includes/db.php');


if (isset($_POST['added'])) {
    $payment_method = $_POST['payment_method'];
    $mobile_number = $_POST['mobile_number'];
    $trxid = $_POST['trxid'];
    $amount = $_POST['amount'];

    $run_donation = mysqli_query($con, "insert into donations (payment_method,mobile_number,trxid,amount) 
									values ('$payment_method','$mobile_number','$trxid','$amount')");

    if ($run_donation) {
        echo "<script>alert('Successfully Donated')</script>";
        
        echo"<script> window.open('index.php','_self')</script>";
    } else {
        echo '<script>alert("Something wrong happened")</script>';
    }
}
