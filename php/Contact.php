<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Labbies</title>
    <link rel="icon" href="favicon.ico.bmp" type = "image/x-icon">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../Animals.css" type="text/css">
</head>
<body>

<?php
    include "../Navbar.html";
?>

<!-- Contact info -->
    <!--Contact heading-->
    <div class="row">
        <div class="col-xl-12">
            <h1 class = "bg-success text-white text-center">Contact us</h1>
        </div>
    </div>
    <!--Contact text-->
<section class="container">
    <form id = "contactForm">
        <div class = "row">
            <div class = "col-md-6">
                <div class = "form-group">
                    <label for = "formName">First Name *</label>
                    <input id = "formName" type = "text" name = "name" class = "form-control" placeholder = "John" required = "required">
                </div>
            </div>

            <div class = "col-md-6">
                <div class = "form-group">
                    <label for = "formLast">Last Name *</label>
                    <input id = "formLast" type = "text" name = "lastName" class = "form-control" placeholder = "Doe" required = "required">
                </div>
            </div>
        </div>

        <div class = "row">
            <div class = "col-md-6">
                <div class = "form-group">
                    <label for = "formEmail">Email *</label>
                    <input id = "formEmail" type = "email" name = "email" class = "form-control" placeholder = "john.doe@example.com" required = "required">
                </div>
            </div>

            <div class = "col-md-6">
                <div class = "form-group">
                    <label for = "formPhone">Phone</label>
                    <input id = "formPhone" type = "tel" name = "phone" class = "form-control" placeholder = "(XXX) XXX-XXXX">
                </div>
            </div>
        </div>

        <div class = "row">
            <div class = "col-md-12">
                <div class = "form-group">
                    <label for = "formCompany">Company</label>
                    <input id = "formCompany" type = "tel" name = "company" class = "form-control" placeholder = "Company Name">
                </div>
            </div>
        </div>

        <div class = "row">
            <div class = "col-md-12">
                <div class = "form-group">
                    <label for = "formMessage">Message *</label>
                    <textarea id = "formMessage" name = "message" class = "form-control" placeholder = "Message" rows = "4" required = "required"></textarea>
                </div>
            </div>
            <div class = "col-md-12">
                <input type = "submit" class = "btn btn-success btn-send" value = "Send message">
            </div>
        </div>

        <div class = "row">
            <div class = "col-md-12">
                <br><p class = "text-muted"><strong>*</strong> These fields are required.</p>
            </div>
        </div>
    </form>

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
</section>
<?php
    include "../Footer.html";
?>

<?php
include "../AdminCheck.html";
?>
</body>
</html>

