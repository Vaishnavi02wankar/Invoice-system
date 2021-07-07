<?php

    session_start();
    $con = mysqli_connect("localhost","root","","event_management");
    if(isset($_SESSION['username'])){
        $organizer = $_SESSION['username'];
        $venue = $_POST['venue'];
        $event = $_POST['event'];
        $address = $_POST['address'];
        $city = $_POST['city'];

        $sql = "insert into venue(venue,event,organizer,address,city) values('$venue','$event','$organizer','$address','$city')";
        $result = mysqli_query($con,$sql);
        if($result){
            echo "<script>
                window.alert('Venue added successfully');
                window.location.href = 'add_venue.php';
            </script>";
        }
        else{
            echo "<script>
                window.alert('Failed to add venue');
                window.location.href = 'add_venue.php';
            </script>";
        }
    }
    mysqli_close($con);
?>