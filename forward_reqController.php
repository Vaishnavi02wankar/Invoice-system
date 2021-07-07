<?php
    
    $con = mysqli_connect("localhost","root","","event_management");
    session_start();
    
    $id = $_GET['id'];

    $sql1 = "update customer_req set a_status='Forwarded' where id='$id'";
    $result1 = mysqli_query($con,$sql1);

    $sql2 = "select * from customer_req where id='$id'";
    $result2 = mysqli_query($con,$sql2);
    $row = mysqli_fetch_array($result2);
    $customer = $row['customer'];
    $email = $row['email'];
    $event = $row['event'];
    $organizer = $row['organizer'];
    $status = "Waiting";

    $sql3 = "insert into organizer_req(customer,email,event,organizer,status) values('$customer','$email','$event','$organizer','$status')";
    $result3 = mysqli_query($con,$sql3);
    
    if($result3){
         echo "<script>window.alert('Forwarded Successfully');
             window.location.href = 'view_customerReq.php'</script>";
    }
    else{
        echo "<script>window.alert('Forwarded Successfully');
             window.location.href = 'view_customerReq.php'</script>";
    }

    mysqli_close($con);
?>