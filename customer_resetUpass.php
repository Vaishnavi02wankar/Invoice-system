<?php

$con = mysqli_connect("localhost","root","","event_management");

    // if(isset($_POST['submit'])){
    $uemail = $_POST['uemail'];
    $uans = $_POST['uans'];

    $sql = "select * from customer_reg where email='$uemail' && ans='$uans'";
    $result = mysqli_query($con,$sql);
    if($result){
        $row = mysqli_fetch_array($result);
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
        ul > li#customer{
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
                            <a href="index.php">HOME</a>
                        </li>
                        <li>
                            <a href="admin.php" class="smoothScroll">ADMIN</a>
                        </li>
                        <li>
                            <a href="customer.php" class="smoothScroll">CUSTOMER</a>
                        </li>
                        <li>
                            <a href="organizer.php" class="smoothScroll">ORGANIZER</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end navigation -->
    </header>
    <!-- end header -->

    <!-- start customer login form -->
    <div class="container" style="margin-top: 150px;">
        <div class="row">
            <div class="col-sm-6" style="margin-left:25%">
                <div class="panel panel-primary">
                    <div class="panel-heading"><strong>Reset Password</strong></div>
                    <div class="panel-body">
                        <form name="myForm" class="form-horizontal" method="post" action="customer_resetUpassController.php">
                            <div class="form-group">
                                <label class="control-label col-sm-2">Email:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="uemail" value="<?php echo $row['email'] ?>" readonly />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">New Password:</label>
                                <div class="col-sm-10">
                                    <input type="password" name="upass" class="form-control" placeholder="Enter New Password" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" name="submit" class="btn btn-primary">Reset Password</button>
                                </div>
                            </div>
                        </form>
                        <strong><a href="customer_forgetUpass.php" style="color:#337ab7;float: left;">back</a></strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end customer login form -->

    <script src="js/jquery.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/validation.js"></script>

</body>
</html>
<?php
    }
    else{
        echo "<script>
            window.alert('Wrong email or security ans');
            window.location.href = 'customer.php';
        </script>";
    }

mysqli_close($con)
?>
