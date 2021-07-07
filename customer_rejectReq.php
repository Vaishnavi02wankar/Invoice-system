<?php

    session_start();
    $con = mysqli_connect("localhost","root","","event_management");

    $id = $_GET['id'];
    $status = "Rejected";
    $sql = "update customer_req set c_status='$status' where id='$id'";
    $result = mysqli_query($con,$sql);
    if($result){
        echo "<script>
            window.alert('Request Rejected');
            window.location.href = 'admin_dashboard.php';
        </script>";
    }

    mysqli_close($con);
?>