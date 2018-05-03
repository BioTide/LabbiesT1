<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shipping Labbies</title>
    <link rel="icon" href="favicon.ico.bmp" type = "image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../Animals.css" type="text/css">
</head>
    <body>

        <?php
        include "../Navbar.html";
        ?>

        <div class="row">
            <div class="col-xl-12">
                <h1 class = "bg-success text-white text-center">
                    Shipping and Credit Card Information
                </h1>
            </div>
        </div>
        <br>

        <div class = "row">
            <div class = "col-lg-12">
                <h2 class = "text-center">Shipping Information</h2>
            </div>
        </div><br>

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
                    <div class = "col-md-6">
                        <div class = "form-group">
                            <label for = "formCompany">Street Address *</label>
                            <input id = "formAddress" type = "tel" name = "address" class = "form-control" placeholder = "123 Cherry Lane Ste 14" required="required">
                        </div>
                    </div>
                    <div class = "col-md-3">
                        <div class = "form-group">
                            <label for = "formCompany">City *</label>
                            <input id = "formCity" type = "tel" name = "city" class = "form-control" placeholder = "Salt Lake City" required="required">
                        </div>
                    </div>
                    <div class = "col-md-1">
                        <div class = "form-group">
                            <label for = "formCompany">State *</label>
                            <input id = "formState" type = "tel" name = "state" class = "form-control" placeholder = "UT" required="required">
                        </div>
                    </div>
                    <div class = "col-md-2">
                        <div class = "form-group">
                            <label for = "formCompany">Zip Code *</label>
                            <input id = "formZip" type = "tel" name = "zip" class = "form-control" placeholder = "84103" required="required">
                        </div>
                    </div>
                </div><br>

                <div class = "row">
                    <div class = "col-lg-12">
                        <h2 class = "text-center">Credit Card Information</h2>
                    </div>
                </div><br>

                <div class="row">
                    <div class = "col-md-12">
                        <div class = "form-group">
                            <label for = "formCompany">Credit Card Number *</label>
                            <input id = "formCCNumber" type = "tel" name = "zip" class = "form-control" placeholder = "84103" required="required">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class = "col-md-9">
                        <div class = "form-group">
                            <label for = "formName">Name on Card *</label>
                            <input id = "formCCName" type = "text" name = "nameOnCard" class = "form-control" placeholder = "John Doe" required = "required">
                        </div>
                    </div>
                    <div class = "col-md-2">
                        <div class = "form-group">
                            <label for = "formName">Expiration Date *</label>
                            <input id = "formCCExpiration" type = "text" name = "expiration" class = "form-control" placeholder = "01/2019" required = "required">
                        </div>
                    </div>
                    <div class = "col-md-1">
                        <div class = "form-group">
                            <label for = "formName">CVV *</label>
                            <input id = "formCCCVV" type = "text" name = "cvv" class = "form-control" placeholder = "123" required = "required">
                        </div>
                    </div>
                </div>

                <div class = "row">
                    <div class = "col-md-12">
                        <input type = "button" class = "btn btn-success btn-send" value = "Place Order" data-toggle="modal" data-target="#receiptModal">
                    </div>
                </div>

                <div class = "row">
                    <div class = "col-md-12">
                        <br><p class = "text-muted"><strong>*</strong> These fields are required.</p>
                    </div>
                </div>
            </form>
        </section>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Shopping Cart</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div> <!-- end modal-header-->
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xl-3"><b>Name</b></div>
                                <div class="col-xl-3"><b>Price</b></div>
                                <div class="col-xl-3"><b>Quantity</b></div>
                                <div class="col-xl-3"><b>Total</b></div>
                            </div> <!--ending row-->
                            <div class="row"></div> <!--ending row-->
                            <div class="row"></div> <!--ending row-->
                            <div class="row"></div> <!--ending row-->
                            <div class="row"></div> <!--ending row-->
                        </div> <!--end container-fluid-->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Checkout</button>
                        </div> <!--end modal-footer-->
                    </div> <!--end modal-body-->
                </div> <!-- end modal-content-->
            </div> <!--class="modal-dialog-->
        </div><!--end Modal-->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

        <!-- Modal -->
        <div class="modal fade" id="receiptModal" tabindex="-1" role="dialog" aria-labelledby="receiptModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Receipt</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div> <!-- end modal-header-->
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xl-3"><b>Name</b></div>
                                <div class="col-xl-3"><b>Price</b></div>
                                <div class="col-xl-3"><b>Quantity</b></div>
                                <div class="col-xl-3"><b>Total</b></div>
                            </div> <!--ending row-->
                            <div class="row"></div> <!--ending row-->
                            <div class="row"></div> <!--ending row-->
                            <div class="row"></div> <!--ending row-->
                            <div class="row"></div> <!--ending row-->
                        </div> <!--end container-fluid-->
                        <div class="container-fluid" id="modalRow"></div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div> <!--end modal-footer-->
                    </div> <!--end modal-body-->
                </div> <!-- end modal-content-->
            </div> <!--class="modal-dialog-->
        </div><!--end Modal-->

        <script>

            /*global $*/

            // This repopulates forms with user entered data
            $(document).ready(function(){

                $('#formName').val(localStorage.getItem("firstName"));
                $('#formLast').val(localStorage.getItem("lastName"));
                $('#formEmail').val(localStorage.getItem("userEmail"));
                $('#formPhone').val(localStorage.getItem("phoneNumber"));
                $('#formCompany').val(localStorage.getItem("userCompany"));
                $('#formAddress').val(localStorage.getItem("userAddress"));
                $('#formCity').val(localStorage.getItem("userCity"));
                $('#formState').val(localStorage.getItem("userState"));
                $('#formZip').val(localStorage.getItem("userZip"));
                $('#formCCNumber').val(localStorage.getItem("userCCNumber"));
                $('#formCCName').val(localStorage.getItem("userCCName"))
                $('#formCCExpiration').val(localStorage.getItem("userCCExp"));
                $('#formCCCVV').val(localStorage.getItem("userCCCVV"));

            });// End document ready function

            // The following functions are for capturing user entered data

            $('#formName').keyup(function() {

                localStorage.setItem("firstName", $('#formName').val());
            });

            $('#formLast').keyup(function() {

                localStorage.setItem("lastName", $('#formLast').val());
            });

            $('#formEmail').keyup(function() {

                localStorage.setItem("userEmail", $('#formEmail').val());
            });

            $('#formPhone').keyup(function() {

                localStorage.setItem("phoneNumber", $('#formPhone').val());
            });

            $('#formCompany').keyup(function() {

                localStorage.setItem("userCompany", $('#formCompany').val());
            });

            $('#formAddress').keyup(function() {

                localStorage.setItem("userAddress", $('#formAddress').val());
            });

            $('#formCity').keyup(function() {

                localStorage.setItem("userCity", $('#formCity').val());
            });

            $('#formState').keyup(function() {

                localStorage.setItem("userState", $('#formState').val());
            });

            $('#formZip').keyup(function() {

                localStorage.setItem("userZip", $('#formZip').val());
            });

            $('#formCCNumber').keyup(function() {

                localStorage.setItem("userCCNumber", $('#formCCNumber').val());
            });

            $('#formCCName').keyup(function() {

                localStorage.setItem("userCCName", $('#formCCName').val());
            });

            $('#formCCExpiration').keyup(function() {

                localStorage.setItem("userCCExp", $('#formCCExpiration').val());
            });

            $('#formCCCVV').keyup(function() {

                localStorage.setItem("userCCCVV", $('#formCCCVV').val());
            });

        </script>

        <?php
        include "../Footer.html";
        include "cart.php";
        include "../AdminCheck.html";
        ?>
    </body>
</html>