<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Animals Labbies</title>
    <link rel="icon" href="favicon.ico.bmp" type = "image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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
    <div class="row">
        <div class="col-xl-6 offset-xl-3">
            <table class="table" id="animalTable">
                <thead>
                <tr>
                    <th>Species</th>
                    <th class="text-right">Quantity</th>
                    <th class="text-right">Price&nbsp;&nbsp;</th>
                    </button>
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
            $('#animalTable').append(`<tr class="animalRow">
                    <td class="species">${animal.species}</td>
                    <td class="qty text-right">${animal.quantity}&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td class="text-right">$${animal.price.toFixed(2)}</td>
                    <td><span class="oi oi-x text-danger clickable" title="Remove this product" onclick="removeProd('animalRow')"></span></td>
                    <td><span class="oi oi-pencil text-secondary clickable" title="Edit this product"></span></td>
                    <!---->
                </tr>`
            );
        }
        $('#animalTable').append(`<tr class="animalRow">
                <form>
                <td><input type="text" id="speciesInput"></td>
                <td><input class="text-right" type="text" name="qty" id="qtyInput"></td>
                <td><input class="text-right" type="text" name="price" id="priceInput" ></td>
                <td><span class="oi oi-plus text-success clickable" title="Add product" onclick="addProd()"></span></td>
            </tr></form>`);

    }
    function addProd() {
// alert($('#speciesInput').val());
//         alert($('#qtyInput').val());
//         alert($('#priceInput').val());


        let species = $('#speciesInput').val();
        let qty = Number($('#qtyInput').val());
        let price = Number($('#priceInput').val());

        //add animal object to animals
        animals.push({
            species: species,
            quantity: qty,
            price: price
        });
        $('.animalRow').remove();
        //display animals
        populateTable();

        //blank out the add text boxes
        $('#speciesInput').val('');
        $('#qtyInput').val('');
        $('#priceInput').val('');
    }
    function removeProd(i) {//FIXME make sure i is passed here
        console.log(i);
        console.log('BEFORE', JSON.stringify(animals,null,3));
        //$(i).remove();
        animals.splice(i,1);
        $('.animalRow').remove();
        console.log('AFTER', JSON.stringify(animals,null,3));
        populateTable();
        // FIXME re-display the table
        //
    }
</script>


</body>
</html>