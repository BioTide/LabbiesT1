<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Supplies Labbies</title>
    <link rel="icon" href="favicon.ico.bmp" type = "image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="../Animals.css" type="text/css">
</head>
<body>

<?php
    include "../Navbar.html";
?>

<div class="row bg-success text-white text-center">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <h1>
            Supplies
            <span id="shoppingCart" class="oi oi-cart align-baseline clickable col-xl-1" data-toggle="modal" data-target="#exampleModalCenter" title="See your Current Shopping Cart">
        </h1>
    </div>
    <div class="col-sm-3"></div>
</div>
<br>
<div class="text-center">
    <button class="btn" data-toggle="tooltip" data-placement="top" title="Table View" id="tableBtn"><span class="oi oi-spreadsheet"></span></button>
    <button class="btn" data-toggle="tooltip" data-placement="top" title="Grid View" id="gridBtn"><span class="oi oi-grid-two-up"></span></button>
    <button class="btn" data-toggle="tooltip" data-placement="top" title="List View" id="listBtn"><span class="oi oi-list"></span></button>
</div>

<div class="container">
    <br>
    <!-- Supply Table Row -->
    <div class="row text-center" id="supTable">
        <div class="col-sm-2">
            <table class="table" id="supplyTable">
                <thead>
                <tr>
                    <th>Photo</th>
                    <th style="cursor: pointer" onclick="sortDesc('itemName')">Item</th>
                    <th>
                        <span class="arrows" id="itemNameColUp" clickable>▲</span>
                        <span class="arrows" id="itemNameColDown">▼</span>
                    </th>
                    <th>Id</th>
                    <th style="cursor: pointer">Category</th>
                    <th>
                        <span class="arrows" id="itemCategoryColUp" clickable>▲</span>
                        <span class="arrows" id="itemCategoryColDown">▼</span>
                    </th>
                    <th>Size</th>
                    <th>Inventory</th>
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
                    <th>Description</th>
                </tr>
                </thead>
                <!-- Animal Rows - Dynamically populated by jQuery code -->
                <tbody></tbody>
            </table>
        </div><!-- End col -->
        <div class="col-sm-2"></div>
    </div><!-- End row -->

    <div class="row" id="supList">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-1 flex-container">
                <div class="flex-item bg-secondary"><img src="../images/rat-cage.jpg" width="100px" height="100px"/>
                    <div class="info-container">
                        <p class="text-center"><b>Rat Cage</b></p>
                        <p>$500 per unit of 30</p>
                        <p>2 ft. by 3 ft.</p>
                    </div>
                </div>
                <div class="flex-item bg-secondary"><img src="../images/rabbit-cage.jpg" width="100px" height="100px">
                    <div class="info-container">
                        <p class="text-center"><b>Rabbit Cage</b></p>
                        <p>$650 per unit of 20</p>
                        <p>2 1/2 ft by 3 ft</p>
                    </div>
                </div>
                <div class="flex-item bg-secondary"><img src="../images/gp-cage.png" width="100px" height="100px">
                    <div class="info-container">
                        <p class="text-center"><b>Guinea Pig Cage</b></p>
                        <p>$400 per unit of 10</p>
                        <p>3 ft by 3 ft</p>
                    </div>
                </div>
                <div class="flex-item bg-secondary"><img src="../images/mice-cage.jpg" width="100px" height="100px">
                    <div class="info-container">
                        <p class="text-center"><b>Mice Cages</b></p>
                        <p>$500 per unit of 30</p>
                        <p>2 ft by 3 ft</p>
                    </div>
                </div>
                <div class="flex-item bg-secondary"><img src="../images/ff-cage.jpg" width="100px" height="100px">
                    <div class="info-container">
                        <p class="text-center"><b>Fruit Fly Container</b></p>
                        <p>$100 per unit of 250</p>
                        <p>32 oz. cup and lid</p>
                    </div>
                </div>
                <div class="flex-item bg-secondary"><img src="../images/ff-culture.jpg" width="100px" height="100px">
                    <div class="info-container">
                        <p class="text-center"><b>Fruit Fly Culture</b></p>
                        <p>$7 per unit of 1</p>
                        <p>contains 40-50 adult flies</p>
                    </div>
                </div>
                <div class="flex-item bg-secondary"><img src="../images/toad-cage.jpg" width="100px" height="100px">
                    <div class="info-container">
                        <p class="text-center">Toad Cage</p>
                        <p>$100 per unit of 1</p>
                        <p>3 ft by 4 ft enclosure</p>
                    </div>
                </div>
                <div class="flex-item bg-secondary"><img src="../images/axolotl-cage.jpg" width="100px" height="100px">
                    <div class="info-container">
                        <p class="text-center">Axolotl Cage</p>
                        <p>$100 per unit of 1</p>
                        <p>3 ft by 3 ft enclosure</p>
                    </div>
                </div>
                <div class="flex-item bg-secondary"><img src="../images/rodent-food.jpg" width="100px" height="100px">
                    <div class="info-container">
                        <p class="text-center">Rodent Food</p>
                        <p>$10 per unit of 1</p>
                        <p>3 lb. bag</p>
                    </div>
                </div>
                <div class="flex-item bg-secondary"><img src="../images/bullfrog-cage.jpg" width="100px" height="100px">
                    <div class="info-container">
                        <p class="text-center">Bullfrog Habitat</p>
                        <p>$100 per unit of 1</p>
                        <p>1 ft by 4 ft</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row" id="supGrid">
        <div class="col-sm-1"></div>
        <div class="col-sm-1"><figure><img src="../images/rat-cage.jpg" width="100px" height="100px"><figcaption>Rat Cage</figcaption></figure></div>
        <div class="col-sm-1"><figure><img src="../images/rabbit-cage.jpg" width="100px" height="100px"><figcaption>Rabbit Cage</figcaption></figure></div>
        <div class="col-sm-1"><figure><img src="../images/gp-cage.png" width="100px" height="100px"><figcaption>Guinea Pig Cage</figcaption></figure></div>
        <div class="col-sm-1"><figure><img src="../images/mice-cage.jpg" width="100px" height="100px"><figcaption>Mice Cage</figcaption></figure></div>
        <div class="col-sm-1"><figure><img src="../images/ff-cage.jpg" width="100px" height="100px"><figcaption>Fruit Flies Container</figcaption></figure></div>
        <div class="col-sm-1"><figure><img src="../images/ff-culture.jpg" width="100px" height="100px"><figcaption>Fruit Fly Culture</figcaption></figure></div>
        <div class="col-sm-1"><figure><img src="../images/toad-cage.jpg" width="100px" height="100px"><figcaption>Toad Cage</figcaption></figure></div>
        <div class="col-sm-1"><figure><img src="../images/axolotl-cage.jpg" width="100px" height="100px"><figcaption>Axolotl Cage</figcaption></figure></div>
        <div class="col-sm-1"><figure><img src="../images/rodent-food.jpg" width="100px" height="100px"><figcaption>Rodent Food</figcaption></figure></div>
        <div class="col-sm-1"><figure><img src="../images/bullfrog-cage.jpg" width="100px" height="100px"><figcaption>Bullfrog Habitat</figcaption></figure></div>
        <div class="col-sm-1"></div>
    </div>
    <br>
</div>
<!-- End container -->

<?php
    include "../Footer.html";
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
        $.getJSON("../Supplies.json", function(data){
            supplies = data;
            populateTable();
        });
    });
    function populateTable(){
        // $('#supList').hide();
        // $('#supGrid').hide();
        $('.supplyRow').remove();

        for(let supply of supplies){
            $('#supplyTable').append(
                `<tr class="supplyRow">
                    <td><img src="${supply.itemPhoto}" height="100px" width="100px"></td>
                    <td>${supply.itemName}</td>
                    <td></td>
                    <td>${supply.itemId}</td>
                    <td>${supply.itemCategory}</td>
                    <td></td>
                    <td>${supply.itemSize}</td>
                    <td>${supply.itemInv}</td>
                    <td class="text-right">${supply.quantity}&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td></td>
                    <td class="text-right">$${supply.price.toFixed(2)}</td>
                    <td></td>
                    <td>${supply.desc}</td>
                    <td></td>
                    <td><span class="oi oi-x text-danger clickable" title="Remove this product" onClick="removeProd(${supplies.indexOf(supply)})"></span></td>
                    <td><span class="oi oi-plus text-success clickable" title="Add To Cart" onClick="addCart()"></span></td>
                </tr>`
            );
        }
        $('#supplyTable').append(
            `<tr class="supplyRow">

                <form>
		            <td><input type="file" action="*.php" accept="image/*" id ="itemPhotoInput" title="Add Photo">
		            </td>
                    <td><input type="text" id = "itemNameInput" title="Item Name"></td>
                    <td><input type="text" id="itemIdInput" title="Item ID"></td>
                    <td><input type="text" id="itemCategoryInput" title="Item Category"></td>
                    <td><input type="text" id="itemSizeInput" title="Item Size"></td>
                    <td><input type="number" id="itemInvInput" title="Item Inventory"></td>
                    <td class="text-right"><input type="text" id="quantityInput" title="Quantity">&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td class="text-right"><input type="text" id="priceInput" title="Price"></td>
                    <td><input type = "text" id="descInput" title="Description"></td>
                    <td></td>
                    <td><span class="oi oi-plus text-success clickable" title="Add product" onclick="addProd()"></span></td>
                    <td></td>
                </form>
            </tr>`
        );
        $('#supList').hide();
        $('#supGrid').hide();
    }

    // addProd Function
    // Purpose: Get user input to add additional item
    function addProd() {

        let photo = $('#itemPhotoInput').val();
        let name = $('#itemNameInput').val();
        let id = $('#itemIdInput').val();
        let category = $('#itemCategoryInput').val();
        let size = $('#itemSizeInput').val();
        let inventory = Number($('#itemInvInput').val());
        let quantity = Number($('#quantityInput').val());
        let price = Number($('#priceInput').val());
        let description = $('#descInput').val();

        //add supply item to supplies
        supplies.push({
            itemId: id,
            itemName: name,
            itemCategory: category,
            itemPhoto: photo,
            itemSize: size,
            quantity: quantity,
            price: price,
            itemInv: inventory,
            desc: description
        });

        // remove previous table
        //$('#supplyTable').remove();

        //display table including new item
        populateTable();

        //blank out the add text boxes
        $('#itemPhotoInput').val('');
        $('#itemNameInput').val('');
        $('#itemIdInput').val('');
        $('#itemCategoryInput').val('');
        $('#itemSizeInput').val('');
        $('#itemInvInput').val('');
        $('#quantityInput').val('');
        $('#priceInput').val('');
        $('#descInput').val('');
    }

    function removeProd(i) {

        $('#supList').hide();
        $('#supGrid').hide();

        supplies.splice(i,1);
        $('.supplyRow').remove();


        populateTable();
    }

    function addCart(){

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

    $('#tableBtn').on('click', function(event){
        $('#supTable').show();
        $('#supList').hide();
        $('#supGrid').hide();
    });

    $('#listBtn').on('click', function(event){
        $('#supList').show();
        $('#supTable').hide();
        $('#supGrid').hide();
    });

    $('#gridBtn').on('click', function(event){
        $('#supGrid').show();
        $('#supTable').hide();
        $('#supList').hide();
    });
</script>

<?php
include "../AdminCheck.html";
?>

</body>
</html>