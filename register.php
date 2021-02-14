<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>NIT Andhra Pradesh</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <style>
        /* Make the image fully responsive */
    
    </style>
</head>
<body>

    <input type="hidden" id="LangId" value="P">

    <section>
        <div class="topstrip"></div>
    </section>

<section class="headertop">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                    <img src="nitandhralogo4.png" >
            </div>
            <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
                <h1>
NATIONAL INSTITUTE OF TECHNOLOGY ANDHRA PRADESH                </h1>
                <h4> TADEPALLIGUDEM , WEST GODAVARI DISTRICT , ANDHRA PRADESH.</h4>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                <img src="moelogo.png">
            </div>
        </div>
    </div>
</section>


        <section class="marqueesection">

            <marquee behavior="alternate" direction="left" class="marqueestyle" onmouseover="this.stop();" onmouseout="this.start();">
                <span class="marqueetext">NIT Andhra Pradesh Student Information System</span>
            </marquee>
            
        </section>
        <link href="./Page_files/bootstrap.min.css" rel="stylesheet">
    <link href="./Page_files/menudropsub.css" rel="stylesheet">
    <link href="./Page_files/own.css" rel="stylesheet">
    <link href="./Page_files/opensans.css" rel="stylesheet">
    <link href="./Page_files/font-awesome.min.css" rel="stylesheet">
    <script src="./Page_files/popper.min.js.download"></script>
    <script src="./Page_files/jquery-3.4.1.min.js.download"></script>
    <script src="./Page_files/bootstrap.min.js.download"></script>
    <script src="./Page_files/jquery.flexslider-min.js.download"></script>
    <script src="./Page_files/custom.js.download"></script>

    <script>
        const $dropdown = $(".dropdown");
        const $dropdownToggle = $(".dropdown-toggle");
        const $dropdownMenu = $(".dropdown-menu");
        const showClass = "show";

        $(window).on("load resize", function () {
            if (this.matchMedia("(min-width: 768px)").matches) {
                $dropdown.hover(
                    function () {
                        const $this = $(this);
                        $this.addClass(showClass);
                        $this.find($dropdownToggle).attr("aria-expanded", "true");
                        $this.find($dropdownMenu).addClass(showClass);
                    },
                    function () {
                        const $this = $(this);
                        $this.removeClass(showClass);
                        $this.find($dropdownToggle).attr("aria-expanded", "false");
                        $this.find($dropdownMenu).removeClass(showClass);
                    }
                );
            } else {
                $dropdown.off("mouseenter mouseleave");
            }
        });
    </script>
    <script src="./Page_files/jquery.counterup.min.js.download"></script>
    <script src="./Page_files/jquery.waypoints.min.js.download"></script>
    <script>
        jQuery(document).ready(function ($) {
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        });
        </script>     

<?php
require_once 'database.php';
?>
<center>
    <h5><b> STUDENT INFORMATION SYSTEM - SIGN UP </b></h5>
<form action="register-inc.php" method="post">
   <b>Email ID :</b> <input type = "email" name="email" placeholder = "Enter EMAIL ID"> </input><br></br>
   <b>Create Password:</b> <input type = "password" name="password" placeholder = "Create Password"> <br></br></input>
    <button type="submit" name="submit" > SUBMIT </BUTTON>

</center>
</form>

