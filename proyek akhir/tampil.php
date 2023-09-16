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
    <title>Document</title>
</head>
<?php
    session_start();
    if (isset($_SESSION['login'])) {
        echo $_SESSION['login'];

?>
<body>
  <div class="container-fluid bg-dark py-3">
    <header class="container-fluid">
      <nav class="navbar navbar-dark bg-success fixed-top">
          <div class="container-fluid">
            <a class="navbar-brand fs-2" href="#">Dashboard</a>
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
  </header >
  <main class="">
    <div class="container-fluid my-5 vh-100 align-items-center">
      <div class="row container-fluid">
        <div class="card bg-secondary  my-5 px-5">
          <div class="card-body">
            <div class="row container-fluid">
              <div class="text-center  col-5 py-4 my-5">
                <img src="icon.png" width="70%" class="mx-auto">
              </div> 
<?php
              include "koneksi.php";
              $nim = $_GET['nim'];
              $data = mysqli_query($koneksi, "SELECT * from datamahasiswa WHERE nim='$nim'") or die (mysqli_error());
              $no = 1;
              while($d = mysqli_fetch_array($data)) {
?>              
              <div class=" font-monospace  fw-bold fs-5 text-white col-sm-7 my-4 px-5">
                <div class="">
                  <div class="fs-2 fw-bold text-center py-4"><?php echo $d['nama'] ?></div>
                  <div class="col-form-label">Identitas lengkap : </div>
                  <div class="row py-2">
                    <label class="col-sm-3 col-form-label">NIM</label>
                    <label class="col-sm-1 col-form-label">:</label>
                    <div class="col col-form-label"><?php echo $d['nim'] ?></div>
                  </div>
                  <div class="row py-2">
                    <label class="col-sm-3 col-form-label">Nama</label>
                    <label class="col-sm-1 col-form-label">:</label>
                    <div class="col col-form-label"><?php echo $d['nama'] ?></div>
                  </div>
                  <div class="row py-2">
                    <div class="col-sm-3 col-form-label">Alamat</div>
                    <div class="col-sm-1 col-form-label">:</div>
                    <div class="col-sm-7 col-form-label"><?php echo $d['alamat'] ?></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="mx-auto">
          <a href="mengedit.php? nim=<?php echo $d['nim']; ?>" class="d-grid btn my-3">
            <button type="button" class="btn btn-outline-light">Edit Data Mahasiswa</button>
          </a>
        </div>
<?php
  }
?>
      </div> 
    </div>

  </main>

    
  </div> 
</body>
<?php
    }
?>
</html>