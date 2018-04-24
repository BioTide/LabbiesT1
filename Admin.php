<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Labbies</title>
    <link rel="icon" href="favicon.ico.bmp" type = "image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css" rel="stylesheet">
</head>
<body>

<?php
    include "Navbar.html";
?>

<div class="container">

    <br>
    <br>

    <form>
        <div class="form-group">
            <label for="email">Username:</label>
            <input type="email" class="form-control" id="email">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>

    <br>
    <br>

    <footer class = "footer text-center">
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