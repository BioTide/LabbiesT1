<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Supplies Labbies</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css" rel="stylesheet">
</head>
<body>

<?php
    include "Navbar.html";
?>

<div class="row">
    <div class="col-xl-12">
        <h1 class = "bg-success text-white text-center">
            Supplies
            <span id="shoppingCart" class="oi oi-cart align-baseline clickable col-xl-1" data-toggle="modal" data-target="#exampleModalCenter" title="See your Current Shopping Cart">
        </h1>
    </div>
    <br>
    <hr class = "style1">
    <br>
</div>
<div class="container">
    <br>
    <!-- Supply Table Row -->
    <div class="row">
        <div class="col-xl-7 offset-xl-3">
            <table class="table" id="supplyTable">
                <thead>
                <tr>
                    <th>Item</th>
                    <th class="text-right">Quantity</th>
                    <th class="text-right">Price&nbsp;&nbsp;</th>
                    <th>Description</th>
                </tr>
                </thead>
                <!-- Animal Rows - Dynamically populated by jQuery code -->
                <tbody></tbody>
            </table>
        </div><!-- End col -->
    </div><!-- End row -->
</div><!-- End container -->

<?php
    include "Footer.html";
?>

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

<script>
    /*global $*/
    let supplies = [];
    $(function(){// The DOM is ready for us to insert new data
        $.getJSON("Supplies.json", function(data){
            supplies = data;
            populateTable();
        });
    });
    function populateTable(){
        for(let supply of supplies){
            $('#supplyTable').append(
                `<tr class="container">
                    <td>${supply.itemName}</td>
                    <td class="text-right">${supply.quantity}&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td class="text-right">$${supply.price.toFixed(2)}</td>
                    <td>${supply.desc}</td>
                </tr>`
            );
        }
    }
</script>
</body>
</html>