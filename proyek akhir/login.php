<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Halaman Login</title>
</head>

<?php
    session_start();
    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username == "laras" && $password == "1020") {
            $_SESSION['login'] = $username

?>
<body class="">
  <div class=" vh-100">
    <header class="container-fluid">
      <nav class="navbar navbar-dark bg-success fixed-top">
          <div class="container-fluid">
            <a class="navbar-brand fs-2" href="#">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end bg-success text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
              <div class="offcanvas-header">
                  <form class="d-flex mt-3" role="search">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-success" type="submit">Search</button>
                    </form>
              </div>
              <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="tabel.php">Dashboard</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="mulai.php">logout</a>
                  </li>
                </ul>

              </div>
            </div>
          </div>
        </nav>
  </header>
  <main class="d-flex align-items-center">

      <div class="container-fluid text-dark my-5 py-5">
        <div class="row container-fluid">

          <!--gambar mahasiswa-->
          <div class="text-center  col my-4">
            <img src="mahasiswa.png" width="30%" class="mx-auto">
            <div class="fs-1 fw-bold">12.473</div>
            <div>Data Mahasiswa Tercatat</div>
          </div>

          <!--gambar buku-->
          <div class="text-center  col my-4">
            <img src="buku.png" width="20%" class="mx-auto">
            <div class="fs-1 fw-bold">Administratif</div>
            <div>dan Efisiensi Data</div>
          </div>


          <!--gambar gembok-->
          <div class="text-center  col my-4">
            <img src="gembok.png" width="30%" class="mx-auto">
            <div class="fs-1 fw-bold">Keamanan</div>
            <div>dan Keaslian data Mahasiswa</div>
          </div>

        </div>
      </div>
  </main>

  <!--bagian abu-abu-->
  <footer class="fixed-bottom mt-auto" style="background-color: rgb(209, 209, 209); height: auto">
    <div class="text-success text-center d-grid col-4 mx-auto my-5">
      <div>Untuk memulai klik tombol di bawah ini.</div>
      <a href="tabel.php">
      <button type="button" class="btn btn-outline-success my-4 start-50">Daftarkan Identitas mahasiswa</button>
      </a>
    </div>
  </footer>
  </div>

</body>
<?php

      } else {
        header("location: login.php? pesan=salah");
      }

    } else  { 

?>
<body class="">

<?php
  $pesan = "";

  if(isset($_GET['pesan'])) {
    $pesan = $_GET['pesan'];

    if($pesan == "salah") {
      echo "
        <script>
          alert('Username atau Password salah!');
        </script>
      ";
    }
  }
?>

    <div class="container-fluid">
        <div class="row">

            <!--bagian hijau-->
            <div class="col bg-success vh-100 text-center text-white position-relative">
                <div class=" container-fluid position-absolute top-50 start-50 translate-middle">
                    <div class="fw-bold top-50 fs-1 my-4">Selamat Datang!</div>
                    <div class="">
                        HPIM merupakan halaman yang berperan dalam mencatat identitas mahasiswa. Silahkan login untuk melanjutkan.
                        
                    </div>
                    <div>
                        Ingin tahu tentang kami? Klik tombol di bawah ini!
                    </div>
                    <button type="button" class="btn btn-light  my-4 text-success">TENTANG KAMI</button>
                </div>
            </div>

            <!--bagian putih-->
            <div class="col vh-100 position-relative" style="">
                <form class="container col-sm-6 position-absolute top-50 start-50 translate-middle" method="post">
                    <div class="py-3">
                        <hr class="hr hr-blurry">
                        <div class="fs-1 text-success fw-bold text-center py-3">LOGIN</div>
                        <div class="text-secondary text-center">Masuk dengan akun anda</div>
                    </div>
                    <div class="input-group py-3">
                        <input name="username" type="text" class="form-control" placeholder="username" style="background-color: rgb(234, 234, 234);">
                    </div>
                    <div class="input-group py-3">
                        <input name="password" type="password" class="form-control" placeholder="password" style="background-color: rgb(234, 234, 234);">
                    </div>
                    <button name="login" type="submit" class="btn btn-success my-4">LOGIN</button>
                    <hr class="hr hr-blurry">
                </form>
                <script>
                  function checkInput(username, password){
                    if (username =="laras" && password == "1020") {
                      alert("Selamat datang" + username);
                    } else {
                      alert("username atau password anda salah");
                    }
                  }
                                
                </script>
            </div>
        </div>
    </div>
</body>

<?php
    }
?>
</html>