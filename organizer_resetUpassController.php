<?php 

    $con = mysqli_connect("localhost","root","","event_management");
    
    if(isset($_POST['submit'])){
        $email = $_POST['uemail'];
        $upass = $_POST['upass'];
        $sql = "update organizer_reg set password='$upass' where email='$email'";
        $result = mysqli_query($con,$sql);
        if($result){
            echo "<script>
            window.alert('Reset Password Successfully');
            window.location.href = 'organizer.php';
        </script>";
        }
        else{
            echo "<script>
            window.alert('Failed to Reset Password');
            window.location.href = 'organizer.php';
        </script>";
        }
    }

?>