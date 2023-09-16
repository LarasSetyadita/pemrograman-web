<!DOCTYPE html>
<html lang="en">
    <head> 
        <title>My Value Login</title>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <body class="bg-light">
       <div class="container-fluid p-3 mb-2 bg-light vh-100">
            <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
                <header class="d-flex flex-wrap justify-content-center py-2">

                </header>

                <main class="container-fluid col-sm-3">
                    <div class="row gx-7 align-items-center">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <div class="justivy-items-center d-flex">
                                    <img src="gramediacom3.jpeg" width="70%" class="mx-auto">
                                </div>
                                <div>
                                    <h5 align="center" style="color:black" class="card-title">Masuk</h5>
                                </div>
                                <div class="justivy-content-center my-2" align="center" style="color:black"> Dengan akun MyValue anda</div>
                                <div class="form-floating mb-3">
                                    <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput"><a style="color:gray" >E-mail atau Nomor HP</a></label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                    <label for="floatingPassword"><a style="color:gray" >Password</a></label>
                                </div>
                                <div>
                                    <a class="nav-link active text-end" aria-current="page" style="font-size:small"href="#">Lupa password?</a>
                                </div>
                                <div class="d-grid">
                                    <button style="background-color:rgb(41, 28, 160);font-size:small; font-weight:bold;" type="submit" class="btn rounded-pill text-light">MASUK</button>
                                </div>
                                <div style="font-size: small;" class="text-center">
                                <?php
                                    if(isset($_POST['email']) or isset($_POST['password'])) {
                                        $email = $_POST['email'];
                                        $password = $_POST['password'];

                                        if($email == "" && $password == ""){
                                            echo "email dan password tidak boleh kosong.";
                                        } else if ($email == "") {
                                            echo "email tidak boleh kosong.";
                                        } else if ($password == "") {
                                            echo "password tidak boleh kosong.";
                                        } else {
                                            if(!is_string($email) && !is_string($password)){
                                                echo "input harus berupa string";
                                            } else if (!is_string($email)) {
                                                echo "email harus berupa string.";
                                            } else if (!is_string($password)) {
                                                echo "password harus berupa string.";
                                            } else {
                                                echo "selamat datang.";
                                            }
                                        }
                                    }
                                ?>
                                </div>
                                <div class="justivy-content-center my-4" align="center" style="color:black; font-size: small; font-weight:bold;">Atau</div>
                                <div class="d-grid">
                                    <button type="button" class="btn rounded-pill btn-danger" style="font-size: small; font-weight: bold;">MASUK DENGAN GOOGLE</button>
                                </div>
                                <div class="d-grid my-2">
                                    <button type="button" class="btn rounded-pill btn-primary" style="font-size: small; font-weight: bold;">MASUK DENGAN FACEBOOK</button>
                                </div>
                            </div>
                        </div>
                        <div class="card my-3" style="width: 18rem;">
                            <div class="card-body">
                                <div class="justify-content-center d-flex text-center" style="font-size:small;" align="center">
                                    <p class="my-2">Belum memiliki akun?</p>
                                    <a class="px-2 nav-link" style="font-size:small "aria-current="page" href="#"> Daftar</a>
                                </div>
                            </div>
                        </div>

                        </div>
                    </div>
                </main>

                <footer class="mt-auto container-fluid bg-light">
                    <div class="justify-content-center align-items-center">
                        <div class="nav justify-content-center mb-1 fw-bold d-flex align-items-center" style="font-size: small; color: #5c5e62">
                            <div class="d-flex justify-content-center">
                                <a href="#" class="nav-link px-2 text-muted d-inline" style="font-size:smaller">POWERED BY</a>
                                <img src="myvalue.png" width="6%" height="50%" align="center" class="justivy-items-center py-2">
                            </div>
                            <div class="nav-item d-flex">
                                
                            </div>
                        </div>
                        <div class="nav justify-content-center mt-1 mb-3 py-0" style="font-size: small; color: #5c5e62">
                            <div class="nav-item">
                                <a href="#" class="nav-link px-1 text-muted">Syarat & Ketentuan</a>
                            </div>
                            <div class="nav-item">
                                <a href="#" class="nav-link px-1 text-muted">.</a>
                            </div>
                            <div class="nav-item">
                                <a href="#" class="nav-link px-1 text-muted">Tentang MyValueS</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </form>

       </div>
    </body>
</html>