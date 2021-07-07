<?php

    $con = mysqli_connect("localhost","root","","event_management");
    session_start();
    $customer = $_SESSION['username'];
    $email = $_SESSION['uemail'];
    $id = $_GET['id'];
    $c_status = "Requested";
    $a_status = "Not Forwarded";

    $sql = "select * from venue where id='$id'";
    $result = mysqli_query($con,$sql);
    if($result){
        $row = mysqli_fetch_array($result);
        $event = $row['event'];
        $organizer = $row['organizer'];
        $sql1 = "insert into customer_req(customer,email,event,organizer,c_status,a_status) values('$customer','$email','$event','$organizer','$c_status','$a_status')";
        $result1 = mysqli_query($con,$sql1);
        if($result1){
            echo "<script>window.alert('Request is send Successfully');
            window.location.href = 'customer_dashboard.php'</script>";
        }
        else{
            echo "<script>window.alert('Request Failed');
            window.location.href = 'search_venue.php'</script>";
        }
    }
    mysqli_close($con);
?>