<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Animals Labbies</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css" rel="stylesheet">
</head>
<body>
<?php
    include "Navbar.html";
?>
<div class="row">
    <div class="col-xl-12">
        <h1 class = "bg-success text-white text-center">Animals</h1>
    </div>
    <br>
    <hr class = "style1">
    <br>

</div>
<div class="container">

    <!-- Headline Row -->
    <div class="row">
        <div class="col-xl-6  offset-xl-3 text-center">

        </div>
        <span id="shoppingCart" class="oi oi-cart align-baseline clickable col-xl-1" data-toggle="modal" data-target="#exampleModalCenter" title="See your Current Shopping Cart">
      </span></div>

    <!-- Animal Table Row -->
    <div class="row">
        <div class="col-xl-6 offset-xl-3">
            <table class="table" id="animalTable">

                <!-- Label Row -->
                <thead>
                <tr>
                    <th>Species</th>
                    <th class="text-right">Quantity</th>
                    <th class="text-right">Price&nbsp;&nbsp;</th>
                    <th></th> <!-- used for remove and edit buttons -->
                </tr>
                </thead>

                <!-- Animal Rows - dynamically populated by jQuery code -->
                <tbody><tr class="animalRow">
                    <td>rats</td>
                    <td style="text-align: right">30&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td style="text-align: right">$100.00</td>
                    <td>
             <span class="oi oi-x text-danger clickable invisible" title="Remove this product" onclick="removeProd(0)">
             </span>
                        <span class="oi oi-pencil text-secondary clickable invisible" title="Edit this product"></span>
                    </td>
                </tr><tr class="animalRow">
                    <td>rabbits</td>
                    <td style="text-align: right">25&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td style="text-align: right">$100.00</td>
                    <td>
             <span class="oi oi-x text-danger clickable invisible" title="Remove this product" onclick="removeProd(1)">
             </span>
                        <span class="oi oi-pencil text-secondary clickable invisible" title="Edit this product"></span>
                    </td>
                </tr><tr class="animalRow">
                    <td>guinea pigs</td>
                    <td style="text-align: right">112&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td style="text-align: right">$79.99</td>
                    <td>
             <span class="oi oi-x text-danger clickable invisible" title="Remove this product" onclick="removeProd(2)">
             </span>
                        <span class="oi oi-pencil text-secondary clickable invisible" title="Edit this product"></span>
                    </td>
                </tr><tr class="animalRow">
                    <td>mice</td>
                    <td style="text-align: right">144&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td style="text-align: right">$59.99</td>
                    <td>
             <span class="oi oi-x text-danger clickable invisible" title="Remove this product" onclick="removeProd(3)">
             </span>
                        <span class="oi oi-pencil text-secondary clickable invisible" title="Edit this product"></span>
                    </td>
                </tr><tr class="animalRow">
                    <td>cancer mice</td>
                    <td style="text-align: right">144&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td style="text-align: right">$129.99</td>
                    <td>
             <span class="oi oi-x text-danger clickable invisible" title="Remove this product" onclick="removeProd(4)">
             </span>
                        <span class="oi oi-pencil text-secondary clickable invisible" title="Edit this product"></span>
                    </td>
                </tr></tbody>

                <!-- Add Row -->
                <tfoot class="invisible">
                <tr>
                    <td><input type="text" id="speciesInput" value="mice"></td>
                    <td><input type="text" id="qtyInput" value="144"></td>
                    <td><input type="text" id="priceInput" value="12.99"></td>
                    <td><span id="plusButton" class="oi oi-plus text-success clickable" title="Add"></span></td>
                </tr>
                </tfoot>
            </table>
        </div> <!-- end col -->
    </div> <!-- end row -->

    <!-- TODO display a plus icon to be used for adding a new product -->

</div> <!-- end container -->

<?php
    include "Footer.html";
?>

</body>
</html>