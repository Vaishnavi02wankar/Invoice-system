<?php
    
    session_start();
    $con = mysqli_connect("localhost","root","","event_management");
    if(isset($_POST['submit'])){
        $uname = $_POST['uname'];
        $upass = $_POST['upass'];

        $sql = "select * from customer_reg where BINARY email='$uname' && password='$upass'";
        $result = mysqli_query($con,$sql);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
            $_SESSION['username'] = $row['uname'];
            $_SESSION['uemail'] = $row['email'];
        }
        else{
            echo "<script>window.alert('Wrong Username & Password');
            window.location.href = 'customer.php'</script>";
        }
    }
    if(isset($_SESSION['username']) && isset($_SESSION['uemail'])){
        header('Location: customer_dashboard.php'); 
    }
    mysqli_close($con);
    
?>
