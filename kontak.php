

<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Kontak | Ponpes Al Hikmah Pedurungan Semarang</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
  <!-- animation css -->
  <link rel="stylesheet" href="plugins/animate/animate.css">
  <!-- aos -->
  <link rel="stylesheet" href="plugins/aos/aos.css">
  <!-- venobox popup -->
  <link rel="stylesheet" href="plugins/venobox/venobox.css">

  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
  
  <!--Favicon-->
  <!-- <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"> -->
  <link rel="icon" href="images/logo-png.png" type="image/x-icon">

</head>

<body>


  <!-- header -->
  <header class="fixed-top header">
    <!-- top header -->
    <div class="top-header py-1 bg-white">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-lg-4 text-center text-lg-left">
            <a class="text-color mr-3">Jl. Pesantren No. 3 Pedurungan Semarang</a>
            <ul class="list-inline d-inline">
              <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="https://web.facebook.com/ppalhikmahsmg/"><i class="ti-facebook"></i></a></li>
              <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="https://www.instagram.com/ppalhikmahsmg/"><i class="ti-instagram"></i></a></li>
              <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="https://www.youtube.com/channel/UCld4GHv_Tu-IoTsuRrGj5Yw"><i class="ti-youtube"></i></a></li>
            </ul>
          </div>
          <div class="col-lg-8 text-center text-lg-right">
            <ul class="list-inline">
              <form action="datacari.php">
                <div class="input-wrapper">
                  <input class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" name="cari" placeholder="Cari Nama Santri...">
                </div>
              </form>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- navbar -->
    <div class="navigation w-100">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
          <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>
          <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigation">
          <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item dropdown view">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Profil
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="sejarah.php">Sejarah</a>
              <a class="dropdown-item" href="kesantrian.php">Kesantrian</a>
              <a class="dropdown-item" href="fasilitas.php">Fasilitas</a>
            </div>
          </li>
          <li class="nav-item dropdown view">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
          Kegitan</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="mingguan.php">Mingguan</a>
            <a class="dropdown-item" href="acarabesar.php">Acara Besar</a>
          </div>
        </li>
        <li class="nav-item dropdown view">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          Informasi
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="pendaftaran.php">Pendaftaran</a>
          <a class="dropdown-item" href="berita.php">Berita-Berita</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="galeri.php">GALERI</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="kontak.php">KONTAK</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login/index.php">LOGIN</a>
      </li>
    </ul>
  </div>
</nav>
</div>
</div>
</header>
<!-- /header -->
<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content rounded-0 border-0 p-4">
      <div class="modal-header border-0">
        <h3>Register</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="login">
          <form action="#" class="row">
            <div class="col-12">
              <input type="text" class="form-control mb-3" id="phone" name="phone" placeholder="Phone">
            </div>
            <div class="col-12">
              <input type="text" class="form-control mb-3" id="name" name="name" placeholder="Name">
            </div>
            <div class="col-12">
              <input type="email" class="form-control mb-3" id="email" name="email" placeholder="Email">
            </div>
            <div class="col-12">
              <input type="password" class="form-control mb-3" id="password" name="password" placeholder="Password">
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">SIGN UP</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content rounded-0 border-0 p-4">
      <div class="modal-header border-0">
        <h3>Login</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="#" class="row">
          <div class="col-12">
            <input type="text" class="form-control mb-3" id="phone" name="phone" placeholder="Phone">
          </div>
          <div class="col-12">
            <input type="text" class="form-control mb-3" id="name" name="name" placeholder="Name">
          </div>
          <div class="col-12">
            <input type="password" class="form-control mb-3" id="password" name="password" placeholder="Password">
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary">LOGIN</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="">Kontak</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        <p class="text-lighten"></p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- contact -->
<section class="section bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="section-title">Hubungi Kami</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-7 mb-4 mb-lg-0">
        <form action="" method="post">
          <input type="text" class="form-control mb-3" id="name" name="nama" placeholder="Nama">
          <!-- <input type="email" class="form-control mb-3" id="mail" name="mail" placeholder="Your Name"> -->
          <input type="email" class="form-control mb-3" id="mail" name="email" placeholder="Email">
          <input type="text" class="form-control mb-3" id="subject" name="notelp" placeholder="No. Telepon">
          <textarea name="pesan" id="pesan" class="form-control mb-3" placeholder="Isi Pesan"></textarea>
          <button type="submit" name="simpan" class="btn btn-primary">Kirim Pesan</button>
        </form>
      </div>
      <div class="col-lg-5">
        <h3 class="mb-3">Media Sosial</h3>
        <p align="justify">Follow kami juga di sosial media, untuk informasi ter-update dan menarik lainnya seputar Pondok Pesantren Al Hikmah Pedurungan Semarang</p>
        <li class="list-inline-item"><a class="d-inline-block p-2" href="https://web.facebook.com/ppalhikmahsmg/"><i class="ti-facebook text-primary"></i><b> ppalhikmahsmg</b></a></li>
        <br>
        <li class="list-inline-item"><a class="d-inline-block p-2" href="https://www.instagram.com/ppalhikmahsmg/"><i class="ti-instagram text-primary"></i><b> ppalhikmahsmg</b></a></li>
        <br>
        <li class="list-inline-item"><a class="d-inline-block p-2" href="https://www.youtube.com/channel/UCld4GHv_Tu-IoTsuRrGj5Yw"><i class="ti-youtube text-primary"></i><b> PP AL HIKMAH SMG</b></a></li>
        <br>
        <li class="list-inline-item mb-3"><a class="d-inline-block p-2" href="https://mail.google.com/mail/?view=cm&fs=1&to=alhikmahofficial@gmail.com"><i class="ti-email text-primary"></i><b> alhikmahofficial@gmail.com</b></a></li>
        <br>
        <h3 class="mb-3">Alamat Lengkap</h3>
        <p align="justify">Jl. Pesantren No. 3 RT 01 RW 05 Pedurungan Lor,<br> Kecamatan Pedurungan, Kota Semarang 50192
        <br>Telp.  (024) 6716657</p>
      </div>
    </div>
  </div>
</section>
<!-- /contact -->

<!-- gmap -->
<section class="section pt-0">
  <!-- Google Map -->
  <div id="map_canvas" data-latitude="-7.0148173" data-longitude="110.48419461556719"></div>
</section>
<!-- /gmap -->

<!-- footer -->
<footer>

  <!-- footer content -->
  <div class="footer bg-footer section border-bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-8 mb-5 mb-lg-0">
          <!-- logo -->
          <a class="logo-footer" href="index.html"><img class="img-fluid mb-4" src="images/logo.png" alt="logo"></a>
          <ul class="list-unstyled">
            <li class="mb-2">Jl. Pesantren No. 3 Pedurungan Semarang</li>
            <li class="mb-2">alhikmahofficial@gmail.com</li>
            <li class="mb-2">(024) 6716657</li>
            <li class="mb-2">50192</li>
          </ul>
        </div>
        <!-- company -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">PROFIL</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="sejarah.php">Sejarah</a></li>
            <li class="mb-3"><a class="text-color" href="kesantrian.php">Kesantrian</a></li>
            <li class="mb-3"><a class="text-color" href="fasilitas.php">Fasilitas</a></li>
          </ul>
        </div>
        <!-- links -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">KEGIATAN</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="mingguan.php">Mingguan</a></li>
            <li class="mb-3"><a class="text-color" href="acarabesar.php">Acara Besar</a></li>
          </ul>
        </div>
        <!-- support -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">INFORMASI</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="pendaftaran.php">Pendaftaran</a></li>
            <li class="mb-3"><a class="text-color" href="berita.php">Berita-Berita</a></li>
            <li class="mb-3"><a class="text-color" href="galeri.php">Galeri</a></li>
            <li class="mb-3"><a class="text-color" href="kontak.php">Kontak</a></li>
          </ul>
        </div>
        <!-- support -->
      </div>
    </div>
  </div>
  <!-- copyright -->
  <div class="copyright py-2 bg-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 text-sm-left text-center">
          <p class="mb-0">Copyright 2018
<!--             <script>
              var CurrentYear = new Date().getFullYear()
              document.write(CurrentYear)
            </script>  -->
          © Pondok Pesantren Al Hikmah Pedurungan Semarang</p>
        </div>
        <div class="col-sm-5 text-sm-right text-center">
          <ul class="list-inline">
            <li class="list-inline-item"><a class="d-inline-block p-2" href="https://web.facebook.com/ppalhikmahsmg/"><i class="ti-facebook text-primary"></i></a></li>
            <li class="list-inline-item"><a class="d-inline-block p-2" href="https://www.instagram.com/ppalhikmahsmg/"><i class="ti-instagram text-primary"></i></a></li>
            <li class="list-inline-item"><a class="d-inline-block p-2" href="https://www.youtube.com/channel/UCld4GHv_Tu-IoTsuRrGj5Yw"><i class="ti-youtube text-primary"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- /footer -->

<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- aos -->
<script src="plugins/aos/aos.js"></script>
<!-- venobox popup -->
<script src="plugins/venobox/venobox.min.js"></script>
<!-- mixitup filter -->
<script src="plugins/mixitup/mixitup.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="plugins/google-map/gmap.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>

</body>
</html>

<?php
include 'koneksi.php';
if(isset($_POST['simpan'])){

  $sql= "INSERT INTO pesan (nama, email, notelp, pesan) 
  VALUES ('".$_POST['nama']."',
  '".$_POST['email']."',
  '".$_POST['notelp']."',
  '".$_POST['pesan']."')";

  $s1 = mysqli_query($conn,$sql);


  if($s1){
    ?>
    <script>alert("Alhamdulillah Berhasil Menyimpan Data"); document.location= 'kontak.php';
  </script>
  <?php
}
else
{
  ?>
  <script>alert("Gagal Menyimpan Data"); document.location= 'kontak.php';
</script>
<?php

}
} ?> 