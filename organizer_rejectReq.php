<?php

    session_start();
    $con = mysqli_connect("localhost","root","","event_management");

    $id = $_GET['id'];
    $status = "Rejected";
    $sql = "update organizer_req set status='$status' where id='$id'";
    $result = mysqli_query($con,$sql);
    if($result){
        header('Location: organizer_req.php');
    }

    mysqli_close($con);

?>