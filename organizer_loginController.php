<?php
    
    session_start();
    $con = mysqli_connect("localhost","root","","event_management");
    if(isset($_POST['submit'])){
        $uname = $_POST['uname'];
        $upass = $_POST['upass'];

        $sql = "select * from organizer_reg where BINARY email='$uname' && password='$upass'";
        $result = mysqli_query($con,$sql);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
            $_SESSION['username'] = $row['uname'];
        }
        else{
            echo "<script>window.alert('Wrong Username & Password');
            window.location.href = 'organizer.php'</script>";
        }
    }
    if(isset($_SESSION['username'])){
        header('Location: organizer_dashboard.php'); 
    }
    mysqli_close($con);
    
?>
