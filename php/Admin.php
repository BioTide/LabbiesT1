<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Labbies</title>
    <link rel="icon" href="favicon.ico.bmp" type = "image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="../Animals.css" type="text/css">

</head>
<body>

<?php
    include "../Navbar.html";
?>

<div class="container">

    <br>
    <br>

    <form>
        <div class="form-group">
            <label for="validationCustomUsername">Username:</label>
            <input type="text" class="form-control" id="adminName">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="adminPass">
        </div>
        <button type="submit" class="btn btn-default" id="adminCheck">Submit</button>
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
    include "../Footer.html";
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script>

    /*global $*/

    $('#adminCheck').click(function(){

        let tempName = $('#adminName').val();
        let tempPass = $('#adminPass').val();

        if(tempName === 'Test'){

            if(tempPass === '123') {

                // Set Session Storage for admin rights
                sessionStorage.setItem('adminRights', 'enabled');
            }

            else{

                alert('Invalid Password');
            }
        }

        else{

            alert('Invalid Username');
        }

    });

</script>

<?php
include "../AdminCheck.html";
?>


</body>
</html>