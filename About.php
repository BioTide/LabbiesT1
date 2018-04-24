<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Labbies</title>
    <link rel="icon" href="favicon.ico.bmp" type = "image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css" rel="stylesheet">
</head>
<body>

<?php
    include "Navbar.html";
?>
<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <h1 class = "bg-success text-white text-center">About</h1>
        </div>
        <br>
        <hr class = "style1">
        <br>
    </div>
    <!--About text-->
    <p>
        <b>Labbies</b> is a lab animal supply company with a principal focus in quality well cared for animals.<br>
        Our group has extensive experience with animals used for all types of testing.<br>
        Due to having a highly qualified team we have the unique ability to provide excellent animals and customer service.<br>
        Our inventory has the ability to provide quality products for small labs as well as large labs.<br><br><br>
    </p>
    <!--Contact text-->
    <div class="row">
        <div class="col-lg-10">
            <div class="row text-center">
                <div class="col-xl-3">
                    <span class="oi oi-person bg-success px-3 py-2 rounded text-white mb-2 d-inline-block"></span>
                    <p><b>John Smith</b><br>Operations Manager<br>johns@labbies.com</p>
                </div>
                <div class="col-xl-3">
                    <span class="oi oi-person bg-success px-3 py-2 rounded text-white mb-2 d-inline-block"></span>
                    <p><b>Bob Smooth</b><br>Biology Manager<br>bobs@labbies.com</p>
                </div>
                <div class="col-xl-3">
                    <span class="oi oi-person bg-success px-3 py-2 rounded text-white mb-2 d-inline-block"></span>
                    <p><b>Cynthia Erre</b><br>Animals Manager<br>cynthiae@labbies.com</p>
                </div>
                <div class="col-xl-3">
                    <span class="oi oi-person bg-success px-3 py-2 rounded text-white mb-2 d-inline-block"></span>
                    <p><b>Luke Coe</b><br>Operations Manager<br>lukec@labbies.com</p>
                </div>
            </div>
        </div>
    </div>
    <p><br><br><br><br><b>Web Design</b> provided by LuAnne Mitchell, Jared Rittmanic, Eric Lance, and JaNell Haynes</p>
</div> <!-- close div container -->

<?php
    include "Footer.html";
?>

<?php
include "AdminCheck.html";
?>
</body>
</html>