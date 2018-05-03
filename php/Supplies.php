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
<div class="container-fluid">
    <div class="row bg-success text-white text-center">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <h1>
                Supplies
            </h1>
        </div>
        <div class="col-sm-3"></div>
    </div><!-- end of Supplies header -->
    <br>
    <div class="text-center">
        <button class="btn" data-toggle="tooltip" data-placement="top" title="Table View" id="tableBtn"><span class="oi oi-spreadsheet"></span></button>
        <button class="btn" data-toggle="tooltip" data-placement="top" title="Grid View" id="gridBtn"><span class="oi oi-grid-two-up"></span></button>
        <button class="btn" data-toggle="tooltip" data-placement="top" title="List View" id="listBtn"><span class="oi oi-list"></span></button>
    </div> <!-- end of diff views -->

    <div>
        <br>
        <!-- Supply Table Row -->
        <div class="row" id="supTable">
            <div>
                <table class="table table-responsive table-striped" id="supplyTable">
                    <thead>
                    <tr>
                        <th class="text-center">Photo</th>
                        <th class="text-center" style="cursor: pointer" onclick="sortItem()">Item</th>
                        <th>
                            <span class="arrows" id="itemNameColUp" clickable>▲</span>
                            <span class="arrows" id="itemNameColDown">▼</span>
                        </th>
                        <th class="text-center adminView">Id</th>
                        <th class="text-center adminView" style="cursor: pointer" onclick="sortCategory()">Category</th>
                        <th>
                            <span class="arrows" id="itemCategoryColUp" clickable>▲</span>
                            <span class="arrows" id="itemCategoryColDown">▼</span>
                        </th>
                        <th class="text-center adminView">Size</th>
                        <th class="text-center">Inventory</th>
                        <th class="text-right" style="cursor: pointer" onclick="sortQuantity()">Quantity</th>
                        <th>
                            <span class="arrows" id="itemQtyColUp" clickable>▲</span>
                            <span class="arrows" id="itemQtyColDown">▼</span>
                        </th>
                        <th class="text-right" style="cursor: pointer" onclick="sortPrice()">Price&nbsp;&nbsp;</th>
                        <th>
                            <span class="arrows" id="itemPriceColUp" clickable>▲</span>
                            <span class="arrows" id="itemPriceColDown">▼</span>
                        </th>
                        <th>Description</th>
                        <th id="editPencil"><span class="oi oi-pencil text-warning clickable adminView" title="Edit product(s)" onClick="editProd()"></span></th>
                        <th id="saveCheckMark"><span class="oi oi-check text-success clickable" title="Save product(s)" onClick="saveProd()"></span></th>
                    </tr>
                    </thead>
                    <!-- Animal Rows - Dynamically populated by jQuery code -->
                    <tbody></tbody>
                </table>
            </div><!-- End col -->

        </div><!-- End row -->

        <div class="row" id="supList">
            <div class="col-sm-1"></div>
                <div class="col-sm-10 flex-container">
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
</div>

<?php
    include "../Footer.html";
    include "cart.php";
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script>
    /*global $*/

    let supplies = [];

    $(function(){// The DOM is ready for us to insert new data

        $.getJSON("../Supplies.json", function(data){

            $('.arrows').hide();

            let tableEdited = localStorage.getItem('supplyTableReplacement');

            if(!tableEdited) {

                supplies = data;
                populateTable();
            }

        });// End get JSON

    });// End anonymous function

    function populateTable(){
        // $('#supList').hide();
        // $('#supGrid').hide();
        $('.supplyRow').remove();

        for(let supply of supplies){
            $('#supplyTable').append(
                `<tr class="supplyRow">
                    <td class="text-center"><img src="${supply.itemPhoto}" height="100px" width="100px"></td>
                    <td contenteditable="false" class="text-center editable">${supply.itemName}</td>
                    <td></td>
                    <td class="text-center adminView">${supply.itemId}</td>
                    <td contenteditable="false" class="text-center editable adminView">${supply.itemCategory}</td>
                    <td></td>
                    <td contenteditable="false" class="text-center editable adminView">${supply.itemSize}</td>
                    <td contenteditable="false" class="text-center editable">${supply.itemInv}</td>
                    <td contenteditable="false" class="text-right editable">${supply.quantity}&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td></td>
                    <td contenteditable="false" class="text-right editable">$${supply.price.toFixed(2)}</td>
                    <td></td>
                    <td contenteditable="false" class="editable">${supply.desc}</td>
                    <td><span class="oi oi-x text-danger clickable adminView" title="Remove this product" onclick="removeProd(${supplies.indexOf(supply)})"></span></td>
                    <td><span class="oi oi-plus text-success clickable" title="Add To Cart" onclick="addToCart(${supplies.indexOf(supply)})"></span></td>

                </tr>`
            );

        }// End for loop

        $('#supplyTable').append(
            `<tr class="supplyRow adminView">
                <form>
		            <td><input type="file" src="file:///C:\\Users\\LuAnn\\Documents\\3660Labbies\\LabbiesT1\\*.*"  id ="itemPhotoInput" title="Add Photo">
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
    function addToCart(i){
        alert(supplies[i].itemName + " added to cart");

        $('#modalRow').append(
            '<div class="row">' +
                '<div class="col-xl-3 text-left"><b>' + supplies[i].itemName + '</b></div>' +
                '<div class="col-xl-3"><b>$' + supplies[i].price.toFixed(2) + '</b></div>' +
                '<div class="col-xl-3"><b>' + supplies[i].quantity + '</b></div>' +
                '<div class="col-xl-3"><b></b></div>' +
            '</div>'
        );

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

        saveProd();
    }

    function editProd(){

        // Toggle between edit and save
        $('#editPencil').hide();
        $('#saveCheckMark').show();

        // Hide the remove icons
        $('.oi-x').hide();
        $('.oi-plus').hide();

        $('#supList').hide();
        $('#supGrid').hide();

        $('.editable').attr('contenteditable', 'true');

    }// End editProd

    function saveProd(){

        $('#editPencil').show();
        $('#saveCheckMark').hide();

        // Show the remove icons
        $('.oi-x').show();
        $('.oi-plus').show();

        // Map the existing table to a JSON object
        let tblTest = $('table#supplyTable tr').get().map(function(row) {
            return $(row).find('td').get().map(function(cell) {
                return $(cell).html();
            });

        });// End mapping

        let localTable = JSON.stringify(tblTest);
        localStorage.setItem('supplyTableReplacement', localTable);

    }// End saveProd function

    function sortItem(){
        if(!($('#itemNameColUp').is(":visible"))) {
            //alert(arrow);
            //sort desc
            supplies.sort(compareSuppliesByNames);
            populateTable();
            //show lower arrow
            $('.arrows').hide();
            $('#itemNameColUp').show();
        }
        else{
            //sort ascending
            supplies.sort(compareSuppliesByNamesDesc);
            populateTable();
            //show upper arrow
            $('.arrows').hide();
            $('#itemNameColDown').show();
        }
    }
    function compareSuppliesByNamesDesc(a, b){
        return compareSuppliesByNames(b, a);
    }
    function compareSuppliesByNames(a,b){
        a = a.itemName;
        b = b.itemName;
        return compareStrings(a,b);
    }
    function sortCategory(){
        //let arrow = sortOn + 'ColUp';
        if(!($('#itemCategoryColUp').is(":visible"))) {
            //alert(arrow);
            //sort desc
            supplies.sort(compareSuppliesByCategories);
            console.log("Original: " + JSON.stringify(supplies, null, 10));
            populateTable();
            //show lower arrow
            $('.arrows').hide();
            $('#itemCategoryColUp').show();
        }
        else{
            //sort ascending
            supplies.sort(compareSuppliesByCategoriesDesc);
            populateTable();
            //show upper arrow
            $('.arrows').hide();
            $('#itemCategoryColDown').show();
        }
    }
    function compareSuppliesByCategoriesDesc(a, b){
        return compareSuppliesByCategories(b, a);
    }
    function compareSuppliesByCategories(a,b){
        a = a.itemCategory;
        b = b.itemCategory;
        return compareStrings(a,b);
    }
    function compareStrings(a,b){
        a = a.toLocaleLowerCase();
        b = b.toLocaleLowerCase();
        if(a < b){return -1;}
        if(a > b){return 1;}
        //a == b
        return 0;
    }
    function sortQuantity(){
        //let arrow = sortOn + 'ColUp';
        if(!($('#itemQtyColUp').is(":visible"))) {
            //sort desc
            supplies.sort(compareSuppliesByQuantity);
            console.log("Original: " + JSON.stringify(supplies, null, 10));
            populateTable();
            //show lower arrow
            $('.arrows').hide();
            $('#itemQtyColUp').show();
        }
        else{
            //sort ascending
            supplies.sort(compareSuppliesByQuantityDesc);
            populateTable();
            //show upper arrow
            $('.arrows').hide();
            $('#itemQtyColDown').show();
        }
    }
    function compareSuppliesByQuantityDesc(a, b){
        return compareSuppliesByQuantity(b, a);
    }
    function compareSuppliesByQuantity(a,b){
        a = a.quantity;
        b = b.quantity;
        return compareNumbers(a,b);
    }
    function compareNumbers(a,b){
        return a - b;
    }

    function sortPrice(){
        if(!($('#itemPriceColUp').is(":visible"))) {
            //sort desc
            supplies.sort(compareSuppliesByPrice);
            console.log("Original: " + JSON.stringify(supplies, null, 10));
            populateTable();
            //show lower arrow
            $('.arrows').hide();
            $('#itemPriceColUp').show();
        }
        else{
            //sort ascending
            supplies.sort(compareSuppliesByPriceDesc);
            populateTable();
            //show upper arrow
            $('.arrows').hide();
            $('#itemPriceColDown').show();
        }
    }
    function compareSuppliesByPriceDesc(a, b){
        return compareSuppliesByPrice(b, a);
    }
    function compareSuppliesByPrice(a,b){
        a = a.quantity;
        b = b.quantity;
        return compareNumbers(a,b);
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

    $(document).ready(function(){

        // Retrieve session data
        let data = localStorage.getItem('supplyTableReplacement');

        // If the session has admin rights enabled
        if(data)
        {
            // Parse in the previous table from session storage
            let sessionSupplies = JSON.parse(data);

            // Erase the current table storage
            $('.supplyRow').remove();

            console.log(sessionSupplies);

            for(let i = 1; i < sessionSupplies.length; i++){

                let cleanQty = Number(sessionSupplies[i][8].replace(/[^0-9\.-]+/g,""));
                let cleanPrice = Number(sessionSupplies[i][10].replace(/[^0-9\.-]+/g,""));
                let cleanPhotoPath = sessionSupplies[i][0].split("\"")[1];

                let id = sessionSupplies[i][3];
                let name = sessionSupplies[i][1];
                let category = sessionSupplies[i][4];
                let photo = cleanPhotoPath;
                let size = sessionSupplies[i][6];
                let quantity = cleanQty;
                let price = cleanPrice;
                let inventory = sessionSupplies[i][7];
                let description = sessionSupplies[i][12];

                //add supplies object to animals
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

            }// End outer for loop

            //display supplies
            populateTable();

        }// End if

    });// End document ready

    $(window).bind("load", function() {
        if(sessionStorage.getItem('adminRights') === 'enabled'){
            $('.adminView').show();
        }
        else{
            $('.adminView').hide();
        }
    });

</script>

<?php
include "../AdminCheck.html";
?>

</body>
</html>