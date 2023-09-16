<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="StudiKasus4.css" type="text/css">
        <title>start</title>
</head>
<?php
    session_start();
        unset ($_SESSION);
        session_destroy();
       
?>
<body>
    <div class="container-fluid text-dark py-4 vh-100 bg-success position-relative">
        <div class="container col-sm-5 py-3 text-center my-4  " id="objek1">
            <div class="rounded-circle bg-white py-5"><img src="logo.png" width="80%" class="mx-auto py-3"></div>
            <a class="my-5 d-grid px-5 btn" href="login.php">
                <button type="button" class="btn btn-outline-light ">Mulai</button>
            </a>
        </div>
    </div>
</body>
</html>