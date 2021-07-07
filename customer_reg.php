<?php
    $con = mysqli_connect("localhost","root","","event_management");

    if(isset($_POST['submit'])){
        $uname = $_POST['uname'];
        $uemail = $_POST['uemail'];
        $upass = $_POST['upass'];
        $umob = $_POST['umob'];
        $udob = $_POST['udob'];
        $gender = $_POST['gender'];
        $uaddr = $_POST['uaddr'];
        $uans = $_POST['uAns'];

        $sql = "insert into customer_reg(uname,email,password,dob,gender,address,contact,ans) values('$uname','$uemail','$upass','$udob','$gender','$uaddr','$umob','$uans')";
        $result = mysqli_query($con,$sql);
        if($result){
            echo "<script>window.alert('Successfully Registered');
            window.location.href = 'customer.php';</script>";
        }
        else{
            echo "<script>window.alert('Failed')</script>";
        }
    }
    mysqli_close($con);
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

    <!-- start customer registration form -->
    <div class="container" style="margin-top: 150px;">
        <div class="row">
            <div class="col-sm-6" style="margin-left:25%">
                <div class="panel panel-primary">
                    <div class="panel-heading"><strong>Customer Registration</strong></div>
                    <div class="panel-body">
                        <form name="myForm" onsubmit="return checkReg()" class="form-horizontal" method="post" autocomplete="off">
                            <div class="form-group">
                                <label class="control-label col-sm-2">Username:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="uname" placeholder="Enter username" autofocus />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">Email:</label>
                                <div class="col-sm-10">
                                    <input type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="You have entered an invalid email address!" class="form-control" name="uemail" placeholder="Enter email" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">Password:</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="upass" placeholder="Enter password" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">Contact:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" pattern="[0-9]{10}" title="Enter 10 digit number" name="umob" placeholder="Enter mobile number" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">DOB:</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="udob" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">Gender:</label>
                                <div class="col-sm-10">
                                    <input type="radio" name="gender" value="Male" required />Male&nbsp;&nbsp;
                                    <input type="radio" name="gender" value="Female" required />Female
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">Address:</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="3" name="uaddr"  placeholder="Enter address"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">Security Question:</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="uQue" >
                                        <option>Select any one</option>
                                        <option>What is your native place?</option>
                                        <option>What is your nick name?</option>
                                        <option>What is your favourite color?</option>
                                        <option>Who is your best friend?</option>
                                        <option>What is your father's middle name?</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">Answer:</label>
                                <div class="col-sm-10">
                                    <input type="text" name="uAns" class="form-control" placeholder="Enter Security Answer" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" name="submit" class="btn btn-primary">Register</button>
                                    <a href="customer.php" class="btn btn-primary">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end customer registration form -->

    <script src="js/jquery.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/validation.js"></script>

</body>
</html>