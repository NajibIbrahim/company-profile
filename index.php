<?php
include 'koneksi.php';

$sql1 = "SELECT * FROM slider order By no desc";
$sql2 = "SELECT * FROM berita join label using(id_label) limit 3";
$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql2);

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Home | Ponpes Al Hikmah Pedurungan Semarang</title>

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
<!--               <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="../login/index.php">Login
              </a></li>            
              <li class="list-inline-item">
                <input class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" type="text" name="cari"  
                placeholder="Cari Nama Santri...">
              </li> -->
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- navbar -->
    <div class="navigation w-100">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
          <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>
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
<!-- hero slider -->
<!-- <section class="hero-section overlay bg-cover" data-background="images/banner/banner-1.jpg"> -->
<!--   <section class="section pt-0">
    <div id="map_canvas" data-latitude="-7.0148173" data-longitude="110.48419461556719"></div>
  </section> -->
  <section class="hero-section overlay bg-cover">
    <div class="hero-slider">
      <!-- slider item -->
<!--         <div class="hero-slider-item" data-background="images/banner/banner-1.jpg">
          <div class="row">
            <div class="col-md-8">
              <h1 class="text-white" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".1">Your bright future is our mission Your bright future is our mission Your bright future is our mission</h1>
              <p class="text-muted mb-4" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer</p>
              <a href="contact.html" class="btn btn-primary" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".7">Apply now</a>
            </div>
          </div>
        </div> -->
        <!-- <div class="slider-item" style="background-image:url(images/slider/banner-1.jpg)"> -->

          <?php while($img = mysqli_fetch_array($result1)){

            ?>
            <div class="slider-item">
              <img src="Admin/img/slider/<?= $img['gambar']; ?>" style="width: 100%;">
              <!-- <div class="container"> -->
                <!-- <div class="row"> -->
                  <!-- <div class="col-12"> -->
                    <!-- <h1 class="text-white" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".1">Ponpes Al Hikmah <br>Pedurungan</h1> -->
                    <!-- </div> -->
                    <!-- </div> -->
                    <!-- </div> -->
                  </div>
                  <?php
                }
                ?>

                <!-- slider item -->
<!--         <div class="hero-slider-item" data-background="images/banner/banner-1.png">
          <div class="row">
            <div class="col-md-8">
              <h1 class="text-white" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1">Your bright future is our mission</h1>
              <p class="text-muted mb-4" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor
                incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer</p>
              <a href="contact.html" class="btn btn-primary" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".7">Apply now</a>
            </div>
          </div>
        </div> -->
        <!-- slider item -->
        <!-- <div class="hero-slider-item" data-background="images/banner/banner-1.jpg">
          <div class="row">
            <div class="col-md-8">
              <h1 class="text-white" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">Your bright future is our mission</h1>
              <p class="text-muted mb-4" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor
                incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer</p>
              <a href="contact.html" class="btn btn-primary" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="zoomIn" data-delay-in=".7">Apply now</a>
            </div>
          </div>
        </div> -->
      </div>
    </section>
    <!-- /hero slider -->

    <!-- banner-feature -->
<!-- <section class="bg-gray">
  <div class="container-fluid p-0">
    <div class="row no-gutters">
      <div class="col-xl-4 col-lg-5 align-self-end">
        <img class="img-fluid w-100" src="images/banner/banner-feature.png" alt="banner-feature">
      </div>
      <div class="col-xl-8 col-lg-7">
        <div class="row feature-blocks bg-gray justify-content-between">
          <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
            <i class="ti-book mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
            <h3 class="mb-xl-4 mb-lg-3 mb-4">Bin Nadhor</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua. Ut enim ad</p>
          </div>
          <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
            <i class="ti-blackboard mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
            <h3 class="mb-xl-4 mb-lg-3 mb-4">Bil Ghoib</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua. Ut enim ad</p>
          </div>
          <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
            <i class="ti-agenda mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
            <h3 class="mb-xl-4 mb-lg-3 mb-4">Qiro'ah Sab'ah</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua. Ut enim ad</p>
          </div>
          <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
            <i class="ti-write mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
            <h3 class="mb-xl-4 mb-lg-3 mb-4">Kitab Kuning</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua. Ut enim ad</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
<!-- /banner-feature -->

<!-- sambutan -->
<section class="section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-8 order-2 order-md-1">
        <h2 class="section-title">Assalamu'alaikum Wr. Wb.</h2>
        <h3>Selamat Datang di Website Resmi <br>Pondok Pesantren Al Hikmah Pedurungan Semarang</h3>
        <br>
        <p2><b>KH. Drs. Muhammad Qodirun Nur</b><br>
          <i>Pengasuh Ponpes Al Hikmah</i></p2>
          <!-- <a href="about.html" class="btn btn-primary">Lihat Profil</a> -->
        </div>
        <div class="col-md-4 order-1 order-md-2 mb-4 mb-md-0">
          <img class="img-fluid w-100" src="images/abah.png" alt="about image">
        </div>
      </div>
    </div>
  </section>
  <!-- /about us -->

  <!-- cta -->
  <section class="section bg-primary">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h3 class="text-white font-secondary mb-0">Cek Informasi Seputar</h3>
          <h2 class="section-title text-white">Pendaftaran Santri Baru 2019</h2>
          <a href="pendaftaran.html" class="btn btn-secondary">Lihat Info</a>
        </div>
      </div>
    </div>
  </section>
  <!-- /cta -->

  <!-- profil -->
  <section class="section bg-cover" data-background="images/profil.jpg">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-sm-4 position-relative success-video">
          <a class="play-btn venobox" href="https://youtu.be/hv2QbdRyFp0" data-vbtype="video">
            <i class="ti-control-play"></i>
          </a>
        </div>
        <div class="col-lg-6 col-sm-8">
          <div class="bg-white p-5">
            <h2 class="section-title">Profil Al Hikmah</h2>
            <p style="text-align:justify">Pondok Pesantren Al Hikmah Pedurungan Lor dirintis oleh KH. Drs. M. Qodirun Nur beserta istrinya Ibu Nyai Hj. Nur Mardliyah, AH. sekitar tahun 1985. Dan sampai saat ini Beliau masih menjabat sebagai Pengasuh Pondok Pesantren Al Hikmah Pedurungan Lor.</p>
            <p style="text-align:justify">Pada awalnya Pondok Pesantren Al Hikmah Pedurungan Lor didirikan karena keinginan masyarakat sekitar untuk dapat mengaji ilmu agama dan mengaji Al-Qur’an.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /success story -->

  <!-- blog -->
  <!-- <section class="section pt-0"> -->
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="section-title text-center">Berita-Berita</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <!-- blog post -->

          <?php while($berita = mysqli_fetch_array($result2)){

            ?>
            <article class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
              <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
                <img class="card-img-top rounded-0" src="admin/img/berita/<?= $berita['gambar']; ?>" alt="Post thumb">
                <div class="card-body">
                  <!-- post meta -->
                  <ul class="list-inline mb-3">
                    <!-- post date -->
                    <li class="list-inline-item mr-3 ml-0"><?= $berita['tanggal']; ?></li>
                    <!-- author -->
                    <li class="list-inline-item mr-3 ml-0"><?= $berita['ket']; ?></li>
                  </ul>
                  <a href="lihatberita.php?judul=<?= $berita['judul'];?>">
                    <h4 class="card-title"><?= $berita['judul']; ?></h4>
                  </a>
                  <p class="card-text"><?= substr($berita['isi'], 0,65); ?> .....</p>
                  <a href="lihatberita.php?judul=<?= $berita['judul'];?>" class="btn btn-primary btn-sm">Selengkapnya</a>
                </div>
              </div>
            </article>
            <?php
          }
          ?>
          <!-- blog post -->
<!--           <article class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
            <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
              <img class="card-img-top rounded-0" src="images/blog/post-2.jpg" alt="Post thumb">
              <div class="card-body">
                post meta
                <ul class="list-inline mb-3">
                  post date
                  <li class="list-inline-item mr-3 ml-0">8 Januari 2019</li>
                  author
                  <li class="list-inline-item mr-3 ml-0">Lomba</li>
                </ul>
                <a href="sejarah.html">
                  <h4 class="card-title">Ramaikan HSN 2018, Futsal Al Hikmah Ikuti Turnamen</h4>
                </a>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicin</p>
                <a href="sejarah.html" class="btn btn-primary btn-sm">Selengkapnya</a>
              </div>
            </div>
          </article>
          blog post
          <article class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
            <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
              <img class="card-img-top rounded-0" src="images/blog/post-3.jpg" alt="Post thumb">
              <div class="card-body">
                post meta
                <ul class="list-inline mb-3">
                  post date
                  <li class="list-inline-item mr-3 ml-0">August 24, 2018</li>
                  author
                  <li class="list-inline-item mr-3 ml-0">By Admin</li>
                </ul>
                <a href="sejarah.html">
                  <h4 class="card-title">Santri Putra-Putri Al Hikmah Diundang Acara JKSN</h4>
                </a>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicin</p>
                <a href="sejarah.html" class="btn btn-primary btn-sm">Selengkapnya</a>
              </div>
            </div>
          </article> -->
        </div>
      </div>
    </section>
    <!-- /blog -->
    <!-- maps -->
    <section class="section pt-0">
      <!-- Google Map -->
      <div id="map_canvas" data-latitude="-7.0148173" data-longitude="110.48419461556719"></div>
    </section>
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