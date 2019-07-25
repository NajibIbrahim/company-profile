<?php
include 'koneksi.php';

$sql = "SELECT * FROM berita join label using(id_label)";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Berita-Berita | Ponpes Al Hikmah Pedurungan Semarang</title>

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
            <li class="nav-item active">
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
      <li class="nav-item">
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
<!-- /header -->
<!-- page title -->
<section class="page-title-section overlay" data-background="images/back.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary">Profil</a></li>
          <li class="list-inline-item text-white h3 font-secondary nasted">Sejarah</li>
        </ul>
        <p class="text-lighten">Ulasan singkat seputar sejarah didirikannya sebuah Pondok Pesantren Al Hikmah Pedurungan Semarang</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- blog details -->
<section class="section-sm bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-12 mb-4">
        <img src="images/masjid.jpg" alt="blog-thumb" class="img-fluid w-100">
      </div>
      <!-- blog contect -->
      <!-- <div class="col-12 mb-5"> -->
        <div class="col-12">
          <h2>Sejarah Didirikannya Ponpes Al Hikmah</h2>
          <div class="col-12 mt-4 order-4 mb-3">
            <div class="border-bottom border-primary"></div>
          </div>
          <p style="text-align:justify">Pondok Pesantren Al Hikmah Pedurungan Lor Semarang adalah suatu lembaga pendidikan non formal yang berbentuk pesantren di kota Semarang yang orientasi utama pendidikannya adalah bagaimana para santri yang belajar di pondok itu dapat belajar ilmu diniyah dan mengaji Al-Qur’an dengan fasih dan tartil. Pondok Pesantren Al Hikmah Pedurungan Lor dirintis oleh KH. Drs. M. Qodirun Nur beserta istrinya Ibu Nyai Hj. Nur Mardliyah, AH. sekitar tahun 1985. Dan sampai saat ini Beliau masih menjabat sebagai Pengasuh Pondok Pesantren Al Hikmah Pedurungan Lor.</p>
          <!-- <h6>Mission</h6> -->
          <p style="text-align:justify">Pada awalnya Pondok Pesantren Al Hikmah Pedurungan Lor didirikan karena keinginan masyarakat sekitar untuk dapat mengaji ilmu agama dan mengaji Al-Qur’an. Pada tahun 1986, pondok pesantren Al-hikmah belum memiliki asrama khusus untuk menampung santrinya. Hal ini dikarenakan para santri masih bolak-balik (nglajo-bahasa jawa). Dan pelaksanaan pengajian hanya dilaksanakan pada waktu sore setelah Ashar.</p>
          <!-- <h6>Vision</h6> -->
          <p style="text-align:justify">Semula yang mengaji adalah para santrinya di Madrasah Aliyah Futuhiyah 1 Mranggen Demak di pagi harinya, kemudian pada sore harinya mereka ingin mendalami lebih jauh tentang ilmu Bahasa Arab yaitu pelajaran Nahwu dan Sharaf serta kitab-kitab kuning lainnya. Tidak lama kemudian banyak para remaja yang berdatangan dengan tujuan untuk dapat mengaji Al-Qur’an serta menghafalkannya kepada Ibu Nyai. Pondok Pesantren Al Hikmah yang pada waktu itu di lingkungan kelurahan Pedurungan Lor pertama kali mengkhususkan dirinya sebagai Pondok tahfidzul Qur’an.</p>

          <p style="text-align:justify">Melihat semakin banyaknya santri yang datang mengaji dan tinggal dikediaman beliau, maka pada tahun 1988, beliau mendirikan sebuah bangunan untuk asrama putri. Sedangkan kegiatan-kegiatan pengajian masih dilakukuan di rumah beliau. Dengan berdirinya Pondok Pesantren Al Hikmah jumlah santri semakin bertambah dan meningkat, baik dari dalam maupun luar daerah, maka pada tahun 1990, asrama putri ditambah lokal baru berlantai dua dan satu aula untuk kegiatan mengaji. Dan pada tahun 1992 Pondok Pesantren Al Hikmah tidak hanya mengasuh santri putri saja, tapi juga sudah mulai mengasuh santri putra yang mulai tinggal menetap di asrama. Dan akhirnya santri Pondok Pesantren Al Hikmah berkembang tidak hanya pada masyarakat sekitar saja yang menjadi santri di Pondok Pesantren ini. Pada saat ini banyak para santri yang berdatangan dari luar kota seperti Demak, Grobogan, Kendal dan Tegal. Pondok Pesantren yang berasaskan Islam ‘ala Ahli Sunnah Wal Jama’ah ini lebih berorientasi pada Pengajian Al-Qur’an baik itu bin nadlor (melihat) , bil ghoib (menghafal) serta qiroat sab’ah(Tujuh macam bacaan); atau sering dikenal dengan sebutan Pondok Qur’an. Di samping itu para santri juga dibekali ilmu-ilmu agama seperti Nahwu, Shorof, Fiqih, Akhlak dan Hadis agar dapat menumbuhkan generasi Islami yang berakhlakul karimah. Di pondok pesantren Al Hikmah juga diadakan pengajian umum yaitu Sima’atul Qur’an yang dilaksanakn setiap ahad pagi oleh Ibu Nyai yang diikuti oleh para santri dan warga sekitar. Dan pengajian Jum’at pagi oleh Abah KH. Muhammad Qodirun Nur yang mengkaji kitab Ihya’ Ulumuddin dan Hikam yang diikuti Santri dan warga setempat.</p>

        </div>
        <div class="col-12 mt-4 order-4">
          <div class="border-bottom border-primary"></div>
        </div>

      </div>
    </div>
  </section>
  <!-- /blog details -->

<!-- footer -->
<footer>
  <!-- newsletter -->
<!--   <div class="newsletter">
    <div class="container">
      <div class="row">
        <div class="col-md-9 ml-auto bg-primary py-5 newsletter-block">
          <h3 class="text-white">Subscribe Now</h3>
          <form action="#">
            <div class="input-wrapper">
              <input type="email" class="form-control border-0" id="newsletter" name="newsletter" placeholder="Enter Your Email...">
              <button type="submit" value="send" class="btn btn-primary">Join</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div> -->
  <!-- footer content -->
  <div class="footer bg-footer section border-bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-8 mb-5 mb-lg-0">
          <!-- logo -->
          <a class="logo-footer" href="index.php"><img class="img-fluid mb-4" src="images/logo.png" alt="logo"></a>
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