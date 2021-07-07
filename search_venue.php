<?php
    session_start();
    $con = mysqli_connect("localhost","root","","event_management");
    if(isset($_SESSION['username']) && isset($_SESSION['uemail'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Event Organization System</title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/jpg" href="images/logos.png">
    
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- font-awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- google font -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700,800' rel='stylesheet' type='text/css'>
    <!-- custom -->
    <link rel="stylesheet" href="css/style.css">
    <!-- jQuery -->
    <script src="../code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
        ul > li#search_venue{
            background: #0094d0;
            color:#fff;
        }
    </style>
</head>

<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">
    <button class="smoothScroll" onclick="topFunction()" style="background-color:#31708f;" id="myBtn" title="Go to top">
        <i class="fa fa-angle-double-up"></i>
    </button>

    <!--Start Header-->
    <header id="header">
        <div id="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 hidden-xs top-info">
                        <span>
                            <i class="fa fa-phone"></i>+91 9898989898</span>&nbsp;&nbsp;|&nbsp;
                        <span>
                            <i class="fa fa-envelope"></i>contact@eventmanagement.com </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- start tagline bar -->
        <div id="logo-bar" class="clearfix" style="margin-bottom: -5px;margin-top: -12px;">
            <div class="container">
                <div class="row">
                    <div style="margin-top: -25px;margin-bottom: 25px">
                        <center>
                            <h2 class="logo-head">
                                <strong>Welcome to Event Organization System</strong>
                            </h2>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        <!-- end tagline bar -->

        <!-- start navigation -->
        <div class="navbar navbar-default navbar-static-top container" role="navigation" style="margin-bottom: -110px;">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="customer_dashboard.php">HOME</a>
                        </li>
                        <li id="search_venue">
                            <a href="search_venue.php" class="smoothScroll">SEARCH VENUE</a>
                        </li>
                        <li>
                            <a href="customer_bookingStatus.php" class="smoothScroll">BOOKING STATUS</a>
                        </li>
                        <li>
                            <a href="customer_feedback.php" class="smoothScroll">FEEDBACK</a>
                        </li>
                        <li>
                            <a href="customer_logout.php" class="smoothScroll">LOGOUT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end navigation -->
    </header>
    <!-- end header -->
    
    <!-- start search venue -->
    <div class="container" style="margin-top: 150px;">
    <div class="panel panel-primary">
        <div class="panel-heading"><strong>Search Venue</strong></div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-3">
                    <input class="form-control" id="myInput" type="text" placeholder="Search..">
                    </div>
                </div>
                <br/>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Venue</th>
                            <th>Event</th>
                            <th>Organizer</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        <?php
                            $sql = "select * from venue";
                            $result = mysqli_query($con,$sql);
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_array($result)){
                        ?>
                        <tr>
                            <td><?php echo $row['venue'] ?></td>
                            <td><?php echo $row['event'] ?></td>
                            <td><?php echo $row['organizer'] ?></td>
                            <td><?php echo $row['address'] ?></td>
                            <td><?php echo $row['city'] ?></td>
                            <td><center><a href="customer_reqController.php?id=<?php echo $row['id'] ?>" class="btn btn-primary btn-xs">Request</a></center></td>
                        </tr>
                        <?php }} ?>
                    </tbody>
                </table>
            </div> 
        </div>
    </div>
    <!-- end login form -->

    <script src="js/jquery.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
        });
</script>
</body>
</html>
<?php
    }
    else{
        header('Location: index.php');
    }
    mysqli_close($con);
?>