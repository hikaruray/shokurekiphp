<!DOCTYPE HTML>
<html>
<?php
$first = $_POST['fname'];
$last = $_POST['lname'];
$mails = $_POST['email'];
$subj = $_POST['subject'];
$mess = $_POST['message'];

?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Message Sent</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="your message has been sent to the owner" />
    <meta name="keywords" content="web services, customize wordpress, wordpress to html, php system" />
    <meta name="author" content="https://www.iggygroup.com" />

    <link href="https://fonts.googleapis.com/css?family=Space+Mono" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>


</head>

<body>

    <div id="page">
        <header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image:url(images/cover_bg_3.jpg);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <div class="display-t js-fullheight">
                            <div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
                                <div class="profile-thumb" style="background: url(images/me.png);"></div>
                                <h1><span>Message Sent</span></h1>
                                <h3><span>メッセージが送信されました。確認でき次第すぐご連絡いたします(^^)/</span></h3>
                                <p>
                                <ul class="fh5co-social-icons">
                                    <li><a href="index.html"><i class="icon-back"></i>BACK</a></li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>


    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Stellar Parallax -->
    <script src="js/jquery.stellar.min.js"></script>
    <!-- Easy PieChart -->
    <script src="js/jquery.easypiechart.min.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
    <script src="js/google_map.js"></script>

    <!-- Main -->
    <script src="js/main.js"></script>

</body>

</html>