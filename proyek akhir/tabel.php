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
    <title>Input Data Mahasiswa</title>
</head>

<?php
    session_start();
    if (isset($_SESSION['login'])) {
        echo $_SESSION['login'];

?>
<body>

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
        <div class="container-fluid bg-dark py-5 my-5 text-light vh-100 fw-bold align-items-center">
            <div class="fs-1 text-center mb-5 my-5">Masukkan data anda</div>
            
            <form action="insert.php" class=" container col-sm-6" method="post">
                <table class="container ">
                    
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">NIM</label>
                        <div class="col">
                          <input name="nim" type="text" class="form-control" id="">
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col">
                          <input name="nama" type="text" class="form-control" id="">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col">
                          <input name="alamat" type="text" class="form-control" id="">
                        </div>
                    </div>
                    <div class=" d-grid">
                        <button type="submit" name="simpan" class="btn btn-success my-3">Submit </button>
                    </div>
                </table>

            </form>
            <div style='width: 100%; display: flex; justify-content: center; margin-top: 20px'>
            <?php
                $pesan = "";
                if (isset($_GET['pesan'])) {
                    $pesan = $_GET['pesan'];
                }

                if($pesan == "berhasil") {
                    echo "
                        <div class='alert alert-success' role='alert' style='width: 70%; text-align: center'> 
                            Data telah ditambahkan
                        </div>
                    ";
                } else if($pesan == "gagal") {
                    echo "
                        <div class='alert alert-danger' role='alert' style='width: 70%; text-align: center'> 
                            NIM tidak tersedia
                        </div>
                    ";
                } else {
                    echo "";
                }
            
            ?>
            </div>
        </div>
        <div class="container">
            <table class="table table-dark table-striped text-center">
                <tr class="">
                    <td>Nomor</td>
                    <td>NIM</td>
                    <td>Nama</td>
                    <td>Alamat</td>
                    <td></td>
                </tr>
                <?php
                    include 'koneksi.php';
                    $no = 1;
                    $datas = mysqli_query($koneksi, "SELECT * from datamahasiswa");
                    while($data = mysqli_fetch_array($datas)) {
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['nim']; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td >
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"></a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="tampil.php?nim=<?php echo $data['nim']; ?>">Lihat</a></li>
                            <li><a class="dropdown-item" href="mengedit.php?nim=<?php echo $data['nim']; ?>">Edit</a></li>
                            <li><a class="dropdown-item" href="hapus.php?nim=<?php echo $data['nim']; ?>" 
                                onclick="return confirm('Anda yakin mau menghapus data pada NIM <?php echo $data['nim'] ?> ini?')">
                                Hapus</li>  
                        </ul>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </div>
    </main>
    <footer></footer>
</body>
<?php
    } else {
?>
<body>
    <div class="vh-100 bg-success d-flex justivy-content-center container-fluid">
        <div class="container-fluid">
            <header class=""></header>
            <main class="justivy-content align-items-center">
                <div class="text-center text-white fw-bold">
                    <h1>Anda tidak dapat menjangkau halaman ini!</h1>
                    <h6>Anda perlu login untuk melanjutkan.</h6>
                    <h6>Klik tombol di bawah ini untuk untuk login kembali.</h6>
                    <div class="d-grid">
                        <a href='login.php'><button name="login " style=" font-size:small; font-weight:bold;" type="submit" class="btn btn-light text-sucess">LOGIN</button></a>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
<?php
    }
?>
</html>
