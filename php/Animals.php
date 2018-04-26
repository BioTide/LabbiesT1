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
<div class="row">
    <div class="col-xl-12">
        <h1 class = "bg-success text-white text-center">
            Animals For Sale
            <span id="shoppingCart" class="oi oi-cart align-baseline clickable col-xl-1" data-toggle="modal" data-target="#exampleModalCenter" title="See your Current Shopping Cart">
        </h1>
    </div>
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
        <div class="flex-container">
            <div class="flex-item bg-success"><img src="../images/fruit-flies.jpg" width="100px" height="100px"/>
                <div class="info-container">
                    <p class="text-center"><b>Fruit Flies</b></p>
                    <p>$39.99 per unit of 1000</p>
                    <p>Live "red eye" fruit fly.</p>
                </div>
            </div>
            <div class="flex-item bg-success"><img src="../images/guinea_pig.jpg" width="100px" height="100px">
                <div class="info-container">
                    <p class="text-center"><b>Guinea Pigs</b></p>
                    <p>$79.99 per unit of 112</p>
                    <p>The domestic guinea pig</p>
                </div>
            </div>
            <div class="flex-item bg-success"><img src="../images/toad.jpg" width="100px" height="100px">
                <div class="info-container">
                    <p class="text-center"><b>Toads</b></p>
                    <p>$79.99 per unit of 10</p>
                    <p>Fire Bellied Toads</p>
                </div>
            </div>
            <div class="flex-item bg-success"><img src="../images/mice.jpg" width="100px" height="100px">
                <div class="info-container">
                    <p class="text-center"><b>Mice</b></p>
                    <p>$59.99 per unit of 144</p>
                    <p>Premium white mice</p>
                </div>
            </div>
            <div class="flex-item bg-success"><img src="../images/rabbit.jpg" width="100px" height="100px">
                <div class="info-container">
                    <p class="text-center"><b>Rabbits</b></p>
                    <p>$100. per unit of 25</p>
                    <p>NZ White Rabbits</p>
                </div>
            </div>
            <div class="flex-item bg-success"><img src="../images/rabbit-specimen.jpg" width="100px" height="100px">
                <div class="info-container">
                    <p class="text-center"><b>Rabbit Specimens</b></p>
                    <p>$100. per unit of 25</p>
                    <p>Dead Rabbit Specimens</p>
                </div>
            </div>
            <div class="flex-item bg-success"><img src="../images/rat.jpg" width="100px" height="100px">
                <div class="info-container">
                    <p class="text-center">Rats</p>
                    <p>$100 per unit of 30</p>
                    <p>White Rats</p>
                </div>
            </div>
            <div class="flex-item bg-success"><img src="../images/brown-rat.jpg" width="100px" height="100px">
                <div class="info-container">
                    <p class="text-center">Brown Rats</p>
                    <p>$100 per unit of 30</p>
                    <p>Rattus norvegicus</p>
                </div>
            </div>
            <div class="flex-item bg-success"><img src="../images/axolotl.jpg" width="100px" height="100px">
                <div class="info-container">
                    <p class="text-center">Axolotls</p>
                    <p>$100 per unit of 30</p>
                    <p>Ambystoma mexicanum</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row" id="aniGrid">
        <div class="col-1"></div>
        <div class="col-2"><figure><img src="../images/fruit-flies.jpg" width="100px" height="100px"><figcaption>Fruit Flies</figcaption></figure></div>
        <div class="col-2"><figure><img src="../images/guinea_pig.jpg" width="100px" height="100px"><figcaption>Guinea Pigs</figcaption></figure></div>
        <div class="col-2"><figure><img src="../images/mice.jpg" width="100px" height="100px"><figcaption>Mice</figcaption></figure></div>
        <div class="col-2"><figure><img src="../images/rabbit.jpg" width="100px" height="100px"><figcaption>Rabbits</figcaption></figure></div>
        <div class="col-2"><figure><img src="../images/rabbit-specimen.jpg" width="100px" height="100px"><figcaption>Rabbit Specimens</figcaption></figure></div>
        <div class="col-2"><figure><img src="../images/rat.jpg" width="100px" height="100px"><figcaption>Rats</figcaption></figure></div>
        <div class="col-2"><figure><img src="../images/brown-rat.jpg" width="100px" height="100px"><figcaption>Brown Rats</figcaption></figure></div>
        <div class="col-2"><figure><img src="../images/axolotl.jpg" width="100px" height="100px"><figcaption>Axolotls</figcaption></figure></div>
        <div class="col-2"><figure><img src="../images/toad.jpg" width="100px" height="100px"><figcaption>Toads</figcaption></figure></div>
        <div class="col-1"></div>
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
        $.getJSON("../Animals.json", function(data){
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
</script>

<?php
include "../AdminCheck.html";
?>
</body>
</html>