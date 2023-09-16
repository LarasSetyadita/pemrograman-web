<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>

<?php
    session_start();
    if (isset($_SESSION['login'])) {
?> 
    <body class="vh-100 bg-success d-flex justivy-content-center container-fluid">
        <div class="container-fluid">
            <header class=""></header>
            <main class="justivy-content align-items-center">
                <div class="text-center text-white fw-bold">
                    <h1>Selamat Datang!</h1>
                    <h6>Halaman ini dapat ditampilkan karena anda berhasil login.</h6>
                    <h6>Klik tombol di bawah ini untuk logout atau keluar.</h6>
                    <div class="d-grid">
                        <a href='studikasus3.php'><button name="logout " style=" font-size:small; font-weight:bold;" type="submit" class="btn btn-light text-sucess">LOGOUT</button></a>
                    </div>
                </div>
            </main>
        </div>


    </body>
<?php
    } else {
?>
    <body class="vh-100 bg-success d-flex justivy-content-center container-fluid">
        <div class="container-fluid">
            <header class=""></header>
            <main class="justivy-content align-items-center">
                <div class="text-center text-white fw-bold">
                    <h1>Anda Belum Login!</h1>
                    <h6>login menggunakan akun anda terlebih dahulu.</h6>
                    <div class="d-grid">
                        <a href='studikasus1.php'><button name="login" style=" font-size:small; font-weight:bold;" type="submit" class="btn btn-light text-sucess">LOGIN</button></a>
                    </div>
                </div>
            </main>
        </div>


    </body>       
<?php
    }
?>

</html>
