<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Fasilitas | Ponpes Al Hikmah Pedurungan Semarang</title>

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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
            <li class="nav-item dropdown view active">
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
          <li class="list-inline-item"><a class="h2 text-primary font-secondary">Profil</a></li>
          <li class="list-inline-item text-white h3 font-secondary nasted">Fasilitas</li>
        </ul>
        <p class="text-lighten">Gambaran seputar fasilitas-fasilitas yang ada di Pondok Pesantren Al Hikmah Pedurungan Semarang.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- event single -->
<section class="section-sm">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="section-title" align="center">Fasilitas</h2>
      </div>
    </div>
    <!-- event info -->
    <div class="row align-items-center mb-5">
      <!-- border -->
      <div class="col-12 mt-4 order-4">
        <div class="border-bottom border-primary"></div>
      </div>
    </div>
    <!-- event details -->
    <!-- <div class="row"> -->
      <section>
        <!-- <div class="col-md-6"> -->
          <div class="accordion-section">
            <div class="accordion-holder">
              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                      <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                        Masjid
                      </a>
                    </h4>
                  </div>
                  <div id="collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingSatu">
                    <div class="panel-body" style="text-align: justify;">
                      <div class="col-12">
                        <div class="d-flex justify-content-between align-items-center flex-wrap">
                          <div class="media mb-2 mb-sm-0">
                            <img class="mr-4 img-fluid" src="images/teacher.jpg" alt="Teacher">
                            <div class="media-body">
                              Santri Pondok Pesantren Al Hikmah dari berbagai daerah di Indonesia mulai dari yang asli Semarang, Kabupaten / Kota sekitar Kota Semarang seperti Demak, Grobogan, Kendal, Batang, Tegal, Brebes, sampai luar pulau yaitu ada beberapa santri yang berasal dari Pulau Sumatra, yaitu dari daerah Provinsi Sumatra Selatan dan Jambi.
                            </div>
                          </div>
                        </div>
                        <!-- <div class="border-bottom border-primary mt-4"></div> -->
                      </div>
                    </div>
                  </div>
                </div>
                <!-- batas -->
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingDua">
                    <h4 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false"
                      aria-controls="collapse2">
                      Aula Serbaguna
                    </a>
                  </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingDua">
                  <div class="panel-body" style="text-align: justify;">
                    <div class="col-12">
                      <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div class="media mb-2 mb-sm-0">
                          <img class="mr-4 img-fluid" src="images/teacher.jpg" alt="Teacher">
                          <div class="media-body">
                           Santri Pondok Pesantren Al Hikmah dari berbagai daerah di Indonesia mulai dari yang asli Semarang, Kabupaten / Kota sekitar Kota Semarang seperti Demak, Grobogan, Kendal, Batang, Tegal, Brebes, sampai luar pulau yaitu ada beberapa santri yang berasal dari Pulau Sumatra, yaitu dari daerah Provinsi Sumatra Selatan dan Jambi.
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
               <!-- Batas -->
               <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTiga">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false"
                    aria-controls="collapse3">
                    Asrama Putra
                  </a>
                </h4>
              </div>
              <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body" style="text-align: justify;">
                  <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                      <div class="media mb-2 mb-sm-0">
                        <img class="mr-4 img-fluid" src="images/teacher.jpg" alt="Teacher">
                        <div class="media-body">
                         Santri Pondok Pesantren Al Hikmah dari berbagai daerah di Indonesia mulai dari yang asli Semarang, Kabupaten / Kota sekitar Kota Semarang seperti Demak, Grobogan, Kendal, Batang, Tegal, Brebes, sampai luar pulau yaitu ada beberapa santri yang berasal dari Pulau Sumatra, yaitu dari daerah Provinsi Sumatra Selatan dan Jambi.
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
             <!-- Batas -->
             <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false"
                  aria-controls="collapse4">
                  Asrama Putri
                </a>
              </h4>
            </div>
            <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class="panel-body" style="text-align: justify;">
                <div class="col-12">
                  <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div class="media mb-2 mb-sm-0">
                      <img class="mr-4 img-fluid" src="images/teacher.jpg" alt="Teacher">
                      <div class="media-body">
                       Santri Pondok Pesantren Al Hikmah dari berbagai daerah di Indonesia mulai dari yang asli Semarang, Kabupaten / Kota sekitar Kota Semarang seperti Demak, Grobogan, Kendal, Batang, Tegal, Brebes, sampai luar pulau yaitu ada beberapa santri yang berasal dari Pulau Sumatra, yaitu dari daerah Provinsi Sumatra Selatan dan Jambi.
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
           <!-- Batas -->
           <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false"
                aria-controls="collapse5">
                Gedung Madin
              </a>
            </h4>
          </div>
          <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body" style="text-align: justify;">
              <div class="col-12">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                  <div class="media mb-2 mb-sm-0">
                    <img class="mr-4 img-fluid" src="images/teacher.jpg" alt="Teacher">
                    <div class="media-body">
                     Santri Pondok Pesantren Al Hikmah dari berbagai daerah di Indonesia mulai dari yang asli Semarang, Kabupaten / Kota sekitar Kota Semarang seperti Demak, Grobogan, Kendal, Batang, Tegal, Brebes, sampai luar pulau yaitu ada beberapa santri yang berasal dari Pulau Sumatra, yaitu dari daerah Provinsi Sumatra Selatan dan Jambi.
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
         <!-- Batas -->
         <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false"
              aria-controls="collapse6">
              Dapur
            </a>
          </h4>
        </div>
        <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
          <div class="panel-body" style="text-align: justify;">
            <div class="col-12">
              <div class="d-flex justify-content-between align-items-center flex-wrap">
                <div class="media mb-2 mb-sm-0">
                  <img class="mr-4 img-fluid" src="images/teacher.jpg" alt="Teacher">
                  <div class="media-body">
                   Santri Pondok Pesantren Al Hikmah dari berbagai daerah di Indonesia mulai dari yang asli Semarang, Kabupaten / Kota sekitar Kota Semarang seperti Demak, Grobogan, Kendal, Batang, Tegal, Brebes, sampai luar pulau yaitu ada beberapa santri yang berasal dari Pulau Sumatra, yaitu dari daerah Provinsi Sumatra Selatan dan Jambi.
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
       <!-- Batas -->
       <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTwo">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="false"
            aria-controls="collapse7">
            Depo Air Minum
          </a>
        </h4>
      </div>
      <div id="collapse7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
        <div class="panel-body" style="text-align: justify;">
          <div class="col-12">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
              <div class="media mb-2 mb-sm-0">
                <img class="mr-4 img-fluid" src="images/teacher.jpg" alt="Teacher">
                <div class="media-body">
                 Santri Pondok Pesantren Al Hikmah dari berbagai daerah di Indonesia mulai dari yang asli Semarang, Kabupaten / Kota sekitar Kota Semarang seperti Demak, Grobogan, Kendal, Batang, Tegal, Brebes, sampai luar pulau yaitu ada beberapa santri yang berasal dari Pulau Sumatra, yaitu dari daerah Provinsi Sumatra Selatan dan Jambi.
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
     <!-- Batas -->
     <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingTwo">
        <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-expanded="false"
          aria-controls="collapse8">
          Komputer
        </a>
      </h4>
    </div>
    <div id="collapse8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body" style="text-align: justify;">
        <div class="col-12">
          <div class="d-flex justify-content-between align-items-center flex-wrap">
            <div class="media mb-2 mb-sm-0">
              <img class="mr-4 img-fluid" src="images/teacher.jpg" alt="Teacher">
              <div class="media-body">
               Santri Pondok Pesantren Al Hikmah dari berbagai daerah di Indonesia mulai dari yang asli Semarang, Kabupaten / Kota sekitar Kota Semarang seperti Demak, Grobogan, Kendal, Batang, Tegal, Brebes, sampai luar pulau yaitu ada beberapa santri yang berasal dari Pulau Sumatra, yaitu dari daerah Provinsi Sumatra Selatan dan Jambi.
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
   <!-- Batas -->
 </div>
</div>
</div>
</div>
<!-- </div> -->       
</section>
<!-- </div> -->

<!-- border -->
<div class="col-12 mt-4 order-4">
  <div class="border-bottom border-primary"></div>
</div>
</div>
</div>
</section>
<!-- /event single -->

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