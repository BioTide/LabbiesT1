<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Supplies Labbies</title>
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
                    <th>Photo</th>
                    <th  style="cursor: pointer">Id</th>
                    <th style="cursor: pointer" onclick="sortDesc('itemName')">Item</th>
                    <th>
                        <span class="arrows" id="itemNameColUp" clickable>▲</span>
                        <span class="arrows" id="itemNameColDown">▼</span>
                    </th>
                    <th style="cursor: pointer">Category</th>
                    <th>
                        <span class="arrows" id="itemCategoryColUp" clickable>▲</span>
                        <span class="arrows" id="itemCategoryColDown">▼</span>
                    </th>
                    <th class="text-right" style="cursor: pointer">Quantity</th>
                    <th>
                        <span class="arrows" id="itemQtyColUp" clickable>▲</span>
                        <span class="arrows" id="itemQtyColDown">▼</span>
                    </th>
                    <th class="text-right" style="cursor: pointer">Price&nbsp;&nbsp;</th>
                    <th>
                        <span class="arrows" id="itemPriceColUp" clickable>▲</span>
                        <span class="arrows" id="itemPriceColDown">▼</span>
                    </th>
                    <th style="cursor: pointer">Size</th>
                    <th>Description</th>
                </tr>
                </thead>
                <!-- Supply Rows - Dynamically populated by jQuery code -->
                <tbody></tbody>
            </table>
        </div><!-- End col -->
    </div><!-- End row -->
    <div id="aniList">
        <table id="animalList">
            <thead>
            <tr></tr>
            </thead>
        </table>
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
        $('.arrows').hide();
        for(let supply of supplies){
            $('#supplyTable').append(
                `<tr class="container">
                    <td>${supply.itemPhoto}</td>
                    <td>${supply.itemId}</td>
                    <td>${supply.itemName}</td>
                    <td></td>
                    <td>${supply.itemCategory}</td>
                    <td></td>
                    <td class="text-right">${supply.itemQuantity}&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td></td>
                    <td class="text-right">$${supply.itemPrice.toFixed(2)}</td>
                    <td></td>
                    <td>${supply.itemSize}</td>
                    <td>${supply.itemDesc}</td>
                </tr>`
            );
        }
    }
    function sortDesc(sortOn){
        let arrow = sortOn + 'ColUp';
        if(!($('#arrow').is(":visible"))) {
            //alert(arrow);
            //sort desc
            supplies.sort(compareSuppliesByNames);
            console.log("Original: " + JSON.stringify(supplies, null, 10));
            populateTable();
            //show lower arrow

        }
        //hide all arrows
        $('.arrows').hide();
        $('#itemNameColUp').show();

        //$('#itemNameColUp').hide();
        //$('#itemNameColDown').hide();
        //$('#itemCategoryColUp').hide();
        //$('#itemCategoryColDown').hide();
        //$('#itemQtyColUp').hide();
        //$('#itemQtyColDown').hide();
        //$('#itemPriceColUp').hide();
        //$('#itemPriceColDown').hide();



        //else{
            //show upper arrow
            //sort desc
        //}
    }
    function compareStrings(a,b){
        a = a.toLocaleLowerCase();
        b = b.toLocaleLowerCase();
        if(a < b){return -1;}
        if(a > b){return 1;}
        //a == b
        return 0;
    }
    function compareStringsDesc(a, b){
        return compareStrings(b, a);
    }
    function compareNumbers(a,b){
        return a - b;
    }
    function compareNumbersDesc(a,b){
        return compareNumbers(b,a);
    }

    function compareSuppliesByPrices(a,b){
        a = a.price;
        b = b.price;
        return compareNumbers(a,b);
    }


    function compareSuppliesByNames(a,b){
        a = a.itemName;
        b = b.itemName;
        return compareStrings(a,b);
    }

</script>

<?php
include "AdminCheck.html";
?>

</body>
</html>