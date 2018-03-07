<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Labbies Home</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css" rel="stylesheet">
    <link href="animals.css">

</head>
<body>

<?php
    include "Navbar.html";
?>

<div class="container">

    <!-- Headline Row -->
    <div class="row">
        <div class="col-xl-12">
            <h1 class = "bg-success text-white text-center">Labbies</h1>
        </div>
        <br>
        <hr class = "style1">
        <br>

    </div>

    <div>
        <p>
        <h2>Quality animals</h2>
        <h3>are just the</h3>
        <h3>beginning</h3>
        </p>
        <p> Labbies offers a wide range of Certified Virus Free (CVF) laboratory animals.
            The presence of murine viruses compromises many types of research and the use
            of CVF animals minimizes the compromise.
        </p>

    </div>

    <img src="fruitFly.jpg"     alt="Fruit Fly"   class="img-thumbnail">
    <img src="mice.jpg"         alt="Mice"        class="img-thumbnail">
    <img src="rabbit.jpg"       alt="Rabbit"      class="img-thumbnail">
    <img src="guineaPig.jpg"    alt="Guinea Pig"  class="img-thumbnail">
    <img src="rat.jpg"          alt="Rat"         class="img-thumbnail">

    <br>
    <br>

    <p> Labbies is proud to offer extremely fast
        turnaround on every service that we provide. Give us a call and we will be happy
        to help you today!
    </p>

    <footer class = "footer fixed-bottom text-center">
        <p>
        <h5>Labbies</h5>
        77 Dog Ln, Orem, UT 84057
        </p>
    </footer>
</div>
<?php
    include "Footer.html";
?>
</body>
</html>