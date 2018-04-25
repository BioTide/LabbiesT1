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
                    <th>Photo</th>
                    <th style="cursor: pointer" onclick="sortDesc('id')">Id</th>
                    <th>
                        <span id="idColUp" clickable>▲</span>
                        <span id="idColDown">▼</span>
                    </th>
                    <th style="cursor: pointer">Species</th>
                    <th>
                        <span id="speciesColUp" clickable>▲</span>
                        <span id="speciesColDown">▼</span>
                    </th>
                    <th class="text-right" style="cursor: pointer">Quantity</th>
                    <th>
                        <span id="quantityColUp" clickable>▲</span>
                        <span id="quantityColDown">▼</span>
                    </th>
                    <th class="text-right" style="cursor: pointer">Price&nbsp;&nbsp;</th>
                    <th>
                        <span id="priceColUp" clickable>▲</span>
                        <span id="priceColDown">▼</span>
                    </th>
                    <th>Description</th>
                    <th style="cursor: pointer">Inventory</th>
                    <th>
                        <span id="inventoryColUp" clickable>▲</span>
                        <span id="inventoryColDown">▼</span>
                    </th>
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

        for(let animal of animals){
            $('#animalTable').append(
                `<tr class="animalRow">
                    <td>${animal.photo}</td>
                    <td>${animal.id}</td>
                    <td></td>
                    <td>${animal.species}</td>
                    <td></td>
                    <td class="text-right">${animal.quantity}&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td></td>
                    <td class="text-right">$${animal.price.toFixed(2)}</td>
                    <td></td>
                    <td><span class="oi oi-x text-danger clickable" title="Remove this product" onClick="removeProd(${animals.indexOf(animal)})"></span>
                        <span class="oi oi-pencil text-secondary clickable" title="Edit this product"></span>
                    </td>
                    <td>${animal.desc}</td>
                    <td>${animal.inv}</td>
                    <td></td>
                </tr>`
            );
        }
        $('#animalTable').append(
            `<tr class="animalRow">

                <form>
		            <td><input type = "image" id ="photoInput" title="Add Photo"></td>
                    <td><input type = "text" id = "idInput" title="Animal ID"></td>
                    <td></td>
                    <td><input type="text" id="speciesInput" title="Animal Name"></td>
                    <td></td>
                    <td class="text-right"><input type="text" id="qtyInput" title="Quantity">&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td></td>
                    <td class="text-right"><input type="text" id="priceInput" title="Price"></td>
                    <td></td>
                    <td><input type = "text" id="descInput" title="Description"></td>
                    <td><input type = "text" id="invInput" title="Inventory"</td>
                    <td><span class="oi oi-plus text-success clickable" title="Add product" onclick="addProd()"></span></td>
                    <td></td>
                </form>
                </tr>`
        );
    }

    function addProd() {
        let animalPhoto = $('#photoInput').val();
        let animalID = $('#idInput').val();
        let species = $('#speciesInput').val();
        let qty = Number($('#qtyInput').val());
        let price = Number($('#priceInput').val());
        let description = $('#descInput').val();
        let inventory = $('#invInput').val();

        //add animal object to animals
        animals.push({
            photo: animalPhoto,
            id: animalID,
            species: species,
            quantity: qty,
            price: price
            desc: description,
            inv: inventory
        });

        $('.animalRow').remove();
        //display animals
        populateTable();

        //blank out the add text boxes
        $('#photoInput').val('');
        $('#idInput').val('');
        $('#speciesInput').val('');
        $('#qtyInput').val('');
        $('#priceInput').val('');
    }

    function removeProd(i) {//FIXME make sure i is passed here
        console.log(i);
        console.log('BEFORE', JSON.stringify(animals,null,3));
        animals.splice(i,1);
        console.log('AFTER', JSON.stringify(animals,null,3));
        $('.animalRow').remove();

        populateTable();
        //FIXME re-display the table
        //
    }

    function sortDesc(sortOn){
        alert(sortOn);
    }
</script>

<?php
include "AdminCheck.html";
?>
</body>
</html>