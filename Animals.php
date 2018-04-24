<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Animals Labbies</title>
    <link rel="icon" href="favicon.ico.bmp" type = "image/x-icon">
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
            Animals For Sale
            <span id="shoppingCart" class="oi oi-cart align-baseline clickable col-xl-1" data-toggle="modal" data-target="#exampleModalCenter" title="See your Current Shopping Cart">
        </h1>
    </div>
    <br>
    <hr class = "style1">
    <br>

</div>

<div class="container">
    <br>
    <!-- Animal Table Row -->
    <div class="row" id="aniTable">
        <div class="col-xl-6 offset-xl-3">
            <table class="table" id="animalTable">
                <thead>
                <tr>
                    <th>Species</th>
                    <th class="text-right">Quantity</th>
                    <th class="text-right">Price&nbsp;&nbsp;</th>
                </tr>
                </thead>
                <!-- Animal Rows - Dynamically populated by jQuery code -->
                <tbody></tbody>
            </table>
        </div><!-- End col -->
    </div><!-- End row -->
    <div class="row" id="aniList">
        <table class="table" id="animalList">
            <thead>
                <tr></tr>
            </thead>
        </table>
    </div>
    <div class="row" id="aniTiles">

    </div>
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
                    <div class="row">
                    </div> <!--ending row-->
                    <div class="row">
                    </div> <!--ending row-->
                    <div class="row">
                    </div> <!--ending row-->
                    <div class="row">
                    </div> <!--ending row-->
                </div> <!--end container-fluid-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Checkout</button>
                </div>
            </div> <!-- end modal-content-->
        </div>
    </div><!--end Modal-->
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script>
    /*global $*/
    let animals = [];
    $(function(){// The DOM is ready for us to insert new data
        $.getJSON("Animals.json", function(data){
            animals = data;
            populateTable();
        });
    });
    function populateTable(){
        //$('.animalRow').remove();
        for(let animal of animals){
            $('#animalTable').append(
                `<tr class="animalRow">
                    <td>${animal.species}</td>
                    <td class="text-right">${animal.quantity}&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td class="text-right">$${animal.price.toFixed(2)}</td>
                </tr>`
            );
        }
    }
</script>

<?php
include "AdminCheck.html";
?>
</body>
</html>