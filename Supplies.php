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
    <!-- Supplies Table Row -->
    <div class="row">
        <div class="col-xl-6 offset-xl-3">
            <table class="table" id="suppliesTable">
                <thead>
                <tr>
                    <th>Item</th>
                    <th class="text-right">Quantity</th>
                    <th class="text-right">Price&nbsp;&nbsp;</th>
                </tr>
                </thead>
                <!-- Supplies Rows - Dynamically populated by jQuery code -->
                <tbody></tbody>
            </table>
        </div><!-- End col -->
    </div><!-- End row -->
</div><!-- End container -->

<?php
include "Footer.html";
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script>
    /*global $*/
    let supplies = [];
    $(function(){// The DOM is ready for us to insert new data
        $.getJSON("Supplies.json", function(data){
            console.log("Hello!");
            supplies = data;
            populateSuppliesTable();
        });
    });

    function populateSuppliesTable(){
        for(let supply of supplies){
            $('#suppliesTable').append(
                `<tr class="suppliesRow">
                    <td>${supply.item}</td>
                    <td class="text-right">${supply.quantity}&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td class="text-right">$${supply.price.toFixed(2)}</td>
                </tr>`
            );
        }
    }
</script>

</body>
</html>