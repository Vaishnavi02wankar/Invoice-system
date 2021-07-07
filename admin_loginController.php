<?php
    
    session_start();
    $con = mysqli_connect("localhost","root","","event_management");
    if(isset($_POST['submit'])){
        $uname = $_POST['uname'];
        $upass = $_POST['upass'];

        $sql = "select * from admin where BINARY username='$uname' && password='$upass'";
        $result = mysqli_query($con,$sql);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
            $_SESSION['username'] = $row['username'];
        }
        else{
            echo "<script>window.alert('Wrong Username & Password');
            window.location.href = 'admin.php'</script>";
        }
    }
    if(isset($_SESSION['username'])){
        header('Location: admin_dashboard.php'); 
    }
    mysqli_close($con);
    
?>
