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
    if (isset($_SESSION['login'])) {
        echo $_SESSION['login'];

?>
<header class="container-fluid">
    <nav class="navbar navbar-dark bg-success fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand fs-2" href="login.php">Dashboard</a>
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
  <main class="">
      <div class="container-fluid bg-dark py-5 text-light vh-100 fw-bold align-items-center">
          <div class="fs-1 text-center py-3 mb-5 my-5">Masukkan Perubahan Data</div>
          
          <?php
            include "koneksi.php";
            $nim = $_GET['nim'];
            $datas = mysqli_query($koneksi, "SELECT * from datamahasiswa WHERE nim='$nim'") or die(mysqli_error());
            $no = 1;
            while($data = mysqli_fetch_array($datas)){
                ?>         
          <form action="update.php" class=" container col-sm-6" method="get">
              <table class="container ">
                  
                  <div class="mb-3 row">
                      <label for="" class="col-sm-2 col-form-label">NIM</label>
                      <div class="col">
                        <input name="nim" type="text" class="form-control" value="<?php echo $data['nim'] ?>">
                      </div>
                  </div>
                  
                  <div class="mb-3 row">
                      <label for="" class="col-sm-2 col-form-label">Nama</label>
                      <div class="col">
                        <input name="nama" type="text" class="form-control" value="<?php echo $data['nama'] ?>" >
                      </div>
                  </div>

                  <div class="mb-3 row">
                      <label for="" class="col-sm-2 col-form-label" >Alamat</label>
                      <div class="col">
                        <input name="alamat" type="text" class="form-control" value="<?php echo $data['alamat']?>">
                      </div>
                  </div>
                  <div class=" d-grid">
                      <button type="submit" name="simpan" class="btn btn-success my-3">Submit </button>
                  </div>
              </table>

          </form>
          <?php
            }
        ?>
      </div>
    </main>
    <footer></footer>
</body>
<?php
    }
?>
</html>