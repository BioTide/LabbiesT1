<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Labbies</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css" rel="stylesheet">
</head>

<body>

<?php
    include "Navbar.html";
?>

<!-- Contact info -->
<section class="container">

    <!--Contact heading-->
    <div class="row">
        <div class="col-xl-12">
            <h1 class = "bg-success text-white text-center">Contact us</h1>
        </div>
        <br>
        <hr class = "style1">
        <br>

    </div>
    <!--Contact text-->
    <p>
        Here at Labbies we care about our customers, and we would love to hear from you.
        <br>
        Feel free to reach us at our support e-mail, or by direct phone call.
        <br>
        Or if you'd like, stop by at our Orem location to talk with us in person!
    </p>

    <div class="row">
        <div class="col-lg-7">

            <div class="row text-center">
                <div class="col-xl-4">
                    <span class="oi oi-globe bg-success px-3 py-2 rounded text-white mb-2 d-inline-block"></span>
                    <p>77 Dog Ln<br>Orem, UT<br>84057</p>
                </div>

                <div class="col-xl-4">
                    <span class="oi oi-phone bg-success px-3 py-2 rounded text-white mb-2 d-inline-block"></span>
                    <p>123-456-7890</p>
                </div>

                <div class="col-xl-4">
                    <span class="oi oi-envelope-closed bg-success px-3 py-2 rounded text-white mb-2 d-inline-block"></span>
                    <p>support@labbies.com</p>
                </div>
            </div>

        </div>
    </div>

</section>
<?php
    include "Footer.html";
?>
</body>

</html>

