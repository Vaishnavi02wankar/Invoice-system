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
                    <div class="panel-heading"><strong>Forget Password</strong></div>
                    <div class="panel-body">
                        <form name="myForm" class="form-horizontal" method="post" action="customer_resetUpass.php" autocomplete="off">
                            <div class="form-group">
                                <label class="control-label col-sm-2">Email:</label>
                                <div class="col-sm-10">
                                    <input type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="You have entered an invalid email address!" class="form-control" name="uemail" placeholder="Enter email" />
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
                                    <input type="text" name="uans" class="form-control" placeholder="Enter Security Answer" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" name="submit" class="btn btn-primary">Forget Password</button>
                                </div>
                            </div>
                        </form>
                        <strong><a href="customer.php" style="color:#337ab7;float: left;">back</a></strong>
                        <strong><a href="customer_reg.php" style="color:#337ab7;float: right;">New Customer ?</a></strong>
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