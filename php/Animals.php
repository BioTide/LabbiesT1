<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Animals Labbies</title>
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
            Animals For Sale
            <span id="shoppingCart" class="oi oi-cart align-baseline clickable col-xl-1" data-toggle="modal" data-target="#exampleModalCenter" title="See your Current Shopping Cart">
        </h1>
    </div>
    <div class="col-sm-3"></div>
</div>
<br>

<!--open iconic icons to use: grid-two-up, list, spreadsheet (for the table)-->
<div class="text-center">
    <button class="btn" data-toggle="tooltip" data-placement="top" title="Table View" id="tableBtn"><span class="oi oi-spreadsheet"></span></button>
    <button class="btn" data-toggle="tooltip" data-placement="top" title="Grid View" id="gridBtn"><span class="oi oi-grid-two-up"></span></button>
    <button class="btn" data-toggle="tooltip" data-placement="top" title="List View" id="listBtn"><span class="oi oi-list"></span></button>
</div>
<div class="container">
    <br>
    <!-- Animal Table Row -->
    <div class="row text-center" id="aniTable">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <table class="table" id="animalTable">
                <thead>
                <tr>
                    <th>Photo</th>
                    <th style="cursor: pointer" onclick="sortSpecies()">Species</th>
                    <th>
                        <span class="arrows" id="speciesColUp" >▲</span>
                        <span class="arrows" id="speciesColDown">▼</span>
                    </th>
                    <th>Id</th>
                    <th class="text-right" style="cursor: pointer" onclick="sortQuantity()">Quantity</th>
                    <th>
                        <span class="arrows" id="quantityColUp">▲</span>
                        <span class="arrows" id="quantityColDown">▼</span>
                    </th>
                    <th class="text-right" style="cursor: pointer" onclick="sortPrice()">Price&nbsp;&nbsp;</th>
                    <th>
                        <span class="arrows" id="priceColUp">▲</span>
                        <span class="arrows" id="priceColDown">▼</span>
                    </th>
                    <th>Description</th>
                    <th style="cursor: pointer" onclick="sortInventory()">Inventory</th>
                    <th>
                        <span class="arrows" id="inventoryColUp">▲</span>
                        <span class="arrows" id="inventoryColDown">▼</span>
                    </th>
                    <th id="editPencil"><span class="oi oi-pencil text-warning" title="Edit product(s)" onclick="editProd()"></span></th>
                    <th id="saveCheckMark"><span class="oi oi-check text-success" title="Save product(s)" onclick="saveProd()"></span></th>
                </tr>
                </thead>
                <!-- Animal Rows - Dynamically populated by jQuery code -->
                <tbody></tbody>
            </table>
        </div><!-- End col -->
        <div class="col-sm-2"></div>
    </div><!-- End row -->

    <div class="row" id="aniList">
        <div class="col-sm-1"></div>
        <div class="col-sm-10 flex-container">
            <div class="flex-item bg-secondary"><img src="../images/fruit-flies.jpg" width="100px" height="100px"/>
                <div class="info-container">
                    <p class="text-center"><b>Fruit Flies</b></p>
                    <p>$39.99 per unit of 1000</p>
                    <p>Live "red eye" fruit fly.</p>
                </div>
            </div>
            <div class="flex-item bg-secondary"><img src="../images/guinea_pig.jpg" width="100px" height="100px">
                <div class="info-container">
                    <p class="text-center"><b>Guinea Pigs</b></p>
                    <p>$79.99 per unit of 112</p>
                    <p>The domestic guinea pig</p>
                </div>
            </div>
            <div class="flex-item bg-secondary"><img src="../images/toad.jpg" width="100px" height="100px">
                <div class="info-container">
                    <p class="text-center"><b>Toads</b></p>
                    <p>$79.99 per unit of 10</p>
                    <p>Fire Bellied Toads</p>
                </div>
            </div>
            <div class="flex-item bg-secondary"><img src="../images/mice.jpg" width="100px" height="100px">
                <div class="info-container">
                    <p class="text-center"><b>Mice</b></p>
                    <p>$59.99 per unit of 144</p>
                    <p>Premium white mice</p>
                </div>
            </div>
            <div class="flex-item bg-secondary"><img src="../images/rabbit.jpg" width="100px" height="100px">
                <div class="info-container">
                    <p class="text-center"><b>Rabbits</b></p>
                    <p>$100. per unit of 25</p>
                    <p>NZ White Rabbits</p>
                </div>
            </div>
            <div class="flex-item bg-secondary"><img src="../images/rabbit-specimen.jpg" width="100px" height="100px">
                <div class="info-container">
                    <p class="text-center"><b>Rabbit Specimens</b></p>
                    <p>$100. per unit of 25</p>
                    <p>Dead Rabbit Specimens</p>
                </div>
            </div>
            <div class="flex-item bg-secondary"><img src="../images/rat.jpg" width="100px" height="100px">
                <div class="info-container">
                    <p class="text-center">Rats</p>
                    <p>$100 per unit of 30</p>
                    <p>White Rats</p>
                </div>
            </div>
            <div class="flex-item bg-secondary"><img src="../images/brown-rat.jpg" width="100px" height="100px">
                <div class="info-container">
                    <p class="text-center">Brown Rats</p>
                    <p>$100 per unit of 30</p>
                    <p>Rattus norvegicus</p>
                </div>
            </div>
            <div class="flex-item bg-secondary"><img src="../images/axolotl.jpg" width="100px" height="100px">
                <div class="info-container">
                    <p class="text-center">Axolotls</p>
                    <p>$100 per unit of 30</p>
                    <p>Ambystoma mexicanum</p>
                </div>
            </div>
            <div class="flex-item bg-secondary"><img src="../images/bullfrog.jpg" width="100px" height="100px">
                <div class="info-container">
                    <p class="text-center">Bullfrogs</p>
                    <p>$100 per unit of 10</p>
                    <p>Rana catesbeiana</p>
                </div>
            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>
</div>

<div class="container-fluid">
    <div class="row" id="aniGrid">
        <div class="col-sm-1"></div>
        <div class="col-sm-1"><figure><img src="../images/fruit-flies.jpg" width="100px" height="100px"><figcaption>Fruit Flies</figcaption></figure></div>
        <div class="col-sm-1"><figure><img src="../images/guinea_pig.jpg" width="100px" height="100px"><figcaption>Guinea Pigs</figcaption></figure></div>
        <div class="col-sm-1"><figure><img src="../images/mice.jpg" width="100px" height="100px"><figcaption>Mice</figcaption></figure></div>
        <div class="col-sm-1"><figure><img src="../images/rabbit.jpg" width="100px" height="100px"><figcaption>Rabbits</figcaption></figure></div>
        <div class="col-sm-1"><figure><img src="../images/rabbit-specimen.jpg" width="100px" height="100px"><figcaption>Rabbit Specimens</figcaption></figure></div>
        <div class="col-sm-1"><figure><img src="../images/rat.jpg" width="100px" height="100px"><figcaption>Rats</figcaption></figure></div>
        <div class="col-sm-1"><figure><img src="../images/brown-rat.jpg" width="100px" height="100px"><figcaption>Brown Rats</figcaption></figure></div>
        <div class="col-sm-1"><figure><img src="../images/axolotl.jpg" width="100px" height="100px"><figcaption>Axolotls</figcaption></figure></div>
        <div class="col-sm-1"><figure><img src="../images/toad.jpg" width="100px" height="100px"><figcaption>Toads</figcaption></figure></div>
        <div class="col-sm-1"><figure><img src="../images/bullfrog.jpg" width="100px" height="100px"><figcaption>Bullfrog</figcaption></figure></div>
        <div class="col-sm-1"></div>
    </div>
    <br>
</div><!-- End container -->
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
                    <div class="row"  id="cartName">
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
        $.getJSON("../Animals.json", function(data){
            animals = data;
            populateTable();
            $('.arrows').hide();
        });
    });

    function populateTable(){

        $('.animalRow').remove();

        for(let animal of animals){
            $('#animalTable').append(
                `<tr class="animalRow">
                    <td><img src="${animal.photo}" height="100px" width="100px"></td>
                    <td contenteditable="false" class="editable">${animal.species}</td>
                    <td></td>
                    <td>${animal.id}</td>
                    <td contenteditable="false" class="text-right editable">${animal.quantity}&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td></td>
                    <td contenteditable="false" class="text-right editable">$${animal.price.toFixed(2)}</td>
                    <td></td>
                    <td contenteditable="false" class="editable">${animal.desc}</td>
                    <td contenteditable="false" class="editable">${animal.inv}</td>
                    <td></td>
                    <td><span class="oi oi-x text-danger" title="Remove this product" onclick="removeProd(${animals.indexOf(animal)})"></span></td>
                    <td><span class="oi oi-plus text-success" title="Add To Cart" onclick="addCart(${animals.indexOf(animal)})"></span></td>
                    <td><span class="oi oi-plus text-success" title="Add product" onclick="alert('hi')"></span></td>
                </tr>`
            );

        }<!-- End for loop -->

        $('#aniTable').append(
            `<tr class="animalRow">

                <form>
		            <td><input type="file" accept="image/*" height="100px" width="100px"id ="photoInput" title="Add Photo">
		            </td>
                    <td><input type = "text" id = "idInput" title="Animal ID"></td>
                    <td><input type="text" id="speciesInput" title="Animal Name"></td>
                    <td class="text-right"><input type="text" id="qtyInput" title="Quantity">&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td class="text-right"><input type="text" id="priceInput" title="Price"></td>
                    <td><input type = "text" id="descInput" title="Description"></td>
                    <td><input type = "text" id="invInput" title="Inventory"></td>
                    <td></td>
                    <td><span class="oi oi-plus text-success" title="Add product" onclick="addProd()"></span></td>

                    <td></td>
                </form>
            </tr>`
        );

        $('#aniList').hide();
        $('#aniGrid').hide();

    }<!-- End populateTable -->

    function addProd() {

        let animalPhoto = $('#photoInput').val();
        let animalID = $('#idInput').val();
        let species = $('#speciesInput').val();
        let qty = Number($('#qtyInput').val());
        let price = Number($('#priceInput').val());
        let description = $('#descInput').val();
        let inventory = Number($('#invInput').val());

        //add animal object to animals
        animals.push({
            photo: animalPhoto,
            id: animalID,
            species: species,
            quantity: qty,
            price: price,
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
        $('#descInput').val('');
        $('#invInput').val('');

    }<!-- End addProd -->

    function removeProd(i) {

        $('#aniList').hide();
        $('#aniGrid').hide();

        animals.splice(i,1);

        $('.animalRow').remove();

        populateTable()
    }

    function editProd(){

        $('#editPencil').hide();
        $('#saveCheckMark').show();

        $('#aniList').hide();
        $('#aniGrid').hide();

        $('.editable').attr('contenteditable', 'true');
    }

    function saveProd(){

        $('#editPencil').show();
        $('#saveCheckMark').hide();

        let tblTest = $('table#animalTable tr').get().map(function(row) {
            return $(row).find('td').get().map(function(cell) {
                return $(cell).html();
            });
        });

        let localTable = JSON.stringify(tblTest);
        sessionStorage.setItem('tableReplacement', localTable);

    }// End saveProd function

    function addCart(index){
        alert(index);
        console.log(index);
    }

    function sortSpecies(){
        if(!($('#speciesColUp').is(":visible"))) {
            //sort desc
            animals.sort(compareSpecies);
            populateTable();
            //show lower arrow
            $('.arrows').hide();
            $('#speciesColUp').show();
        }
        else{
            //sort ascending
            animals.sort(compareSpeciesDesc);
            populateTable();
            //show upper arrow
            $('.arrows').hide();
            $('#speciesColDown').show();
        }
    }
    function compareSpeciesDesc(a, b){
        return compareSpecies(b, a);
    }
    function compareSpecies(a,b){
        a = a.species;
        b = b.species;
        return compareStrings(a,b);
    }
    function compareStrings(a,b){
        a = a.toLocaleLowerCase();
        b = b.toLocaleLowerCase();
        if(a < b){return -1;}
        if(a > b){return 1;}
        return 0;
    }
    function sortQuantity(){
        if(!($('#quantityColUp').is(":visible"))) {
            //sort desc
            animals.sort(compareQuantity);
            populateTable();
            //show lower arrow
            $('.arrows').hide();
            $('#quantityColUp').show();
        }
        else{
            //sort ascending
            animals.sort(compareQuantityDesc);
            populateTable();
            //show upper arrow
            $('.arrows').hide();
            $('#quantityColDown').show();
        }
    }
    function compareQuantityDesc(a, b){
        return compareQuantity(b, a);
    }
    function compareQuantity(a,b){
        a = a.quantity;
        b = b.quantity;
        return compareNumbers(a,b);
    }
    function compareNumbers(a,b){
        return a - b;
    }
    function sortPrice(){
        if(!($('#priceColUp').is(":visible"))) {
            //sort desc
            animals.sort(comparePrice);
            populateTable();
            //show lower arrow
            $('.arrows').hide();
            $('#priceColUp').show();
        }
        else{
            //sort ascending
            animals.sort(comparePriceDesc);
            populateTable();
            //show upper arrow
            $('.arrows').hide();
            $('#priceColDown').show();
        }
    }
    function comparePriceDesc(a, b){
        return comparePrice(b, a);
    }
    function comparePrice(a,b){
        a = a.price;
        b = b.price;
        return compareNumbers(a,b);
    }
    function sortInventory(){
        if(!($('#inventoryColUp').is(":visible"))) {
            //sort desc
            animals.sort(compareInventory);
            populateTable();
            //show lower arrow
            $('.arrows').hide();
            $('#inventoryColUp').show();
        }
        else{
            //sort ascending
            animals.sort(compareInventoryDesc);
            populateTable();
            //show upper arrow
            $('.arrows').hide();
            $('#inventoryColDown').show();
        }
    }
    function compareInventoryDesc(a, b){
        return compareInventory(b, a);
    }
    function compareInventory(a,b){
        a = a.inv;
        b = b.inv;
        return compareNumbers(a,b);
    }

    $('#tableBtn').on('click', function(event){
       $('#aniTable').show();
       $('#aniList').hide();
       $('#aniGrid').hide();
    });

    $('#listBtn').on('click', function(event){
        $('#aniList').show();
        $('#aniTable').hide();
        $('#aniGrid').hide();
    });

    $('#gridBtn').on('click', function(event){
        $('#aniGrid').show();
        $('#aniTable').hide();
        $('#aniList').hide();
    });

    $(document).ready(function(){

        // Retrieve session data
        let data = sessionStorage.getItem('tableReplacement');

        // If the session has admin rights enabled
        if(data)
        {
            // TODO - Display the new table
            let testObj = JSON.parse(data);
            console.log(testObj);


        }

    });

</script>

<?php
include "../AdminCheck.html";
?>
</body>
</html>