<?php

    session_start();
    $con = mysqli_connect("localhost","root","","event_management");
    
    if(isset($_POST['submit'])){
        $customer = $_SESSION['username'];
        $organizer = $_POST['organizer'];
        $message = $_POST['feedback'];

        $sql = "insert into feedback(customer,organizer,message) values('$customer','$organizer','$message')";
        $result = mysqli_query($con,$sql);
        if($result){
            echo "<script>window.alert('Sent feedback successfully');
            window.location.href = 'customer_dashboard.php'</script>";
        }
        else{
            echo "<script>window.alert('Sent feedbcak failed');
            window.location.href = 'customer_dashboard.php'</script>";
        }
    }
    mysqli_close($con);

?>