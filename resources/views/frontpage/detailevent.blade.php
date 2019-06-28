<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>BizPage Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{ asset('BizPage/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('BizPage/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="{{ asset('BizPage/https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700') }}" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('BizPage/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('BizPage/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('BizPage/lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('BizPage/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('BizPage/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('BizPage/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('BizPage/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
    Theme Name: BizPage') }}
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->


  <!-- Head dari template admin -->
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}">
    <title>Material Pro Admin Template - The Most Complete & Trusted Bootstrap 4 Admin Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="{{ asset('assets/plugins/chartist-js/dist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/chartist-js/dist/chartist-init.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css') }}" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="{{ asset('assets/plugins/c3-master/c3.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{ asset('assets/css/colors/blue.css') }}" id="theme" rel="stylesheet">

</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">Tegal Event</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li class="menu-has-children"><a href="">Kategori Event</a>
            <ul>
              <li><a href="#">Olah Raga</a></li>
              <li><a href="#">Musik </a></li>
              <li><a href="#">Seminar</a></li>
              <li><a href="#">Expo</a></li>
               <li><a href="#">Bursa kerja</a></li>
                <li><a href="#">Lain lain</a></li>
            </ul>
          </li>
          <li class="menu-has-children"><a href="">Kategori Peserta Event</a>
            <ul>
              <li><a href="#">Tingkat SMA/SMK</a></li>
              <li><a href="#">Tingkat SMP</a></li>
              <li><a href="#">Mahasiswa</a></li>
              <li><a href="#">Umum</a></li>
                <li><a href="#">Lain lain</a></li>
            </ul>
          </li>
          <li><a href="#about">Publikasi Eventmu</a></li>
          <li><a href="#services">About Us</a></li>
          <li><a href="#team">Developer Team</a></li>
          <li><a href="#contact">Log In</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="{{ asset('Bizpage/img/intro-carousel/1.jpg') }}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
              
                <a href="#featured-services" class="btn-get-started scrollto">Detail Event</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="{{ asset('Bizpage/img/intro-carousel/2.jpg') }}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
               
                <a href="#featured-services" class="btn-get-started scrollto">Detail Event</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="{{ asset('Bizpage/img/intro-carousel/3.jpg') }}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
           <!--      <h2>Temporibus autem quibusdam</h2>
                <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt omnis iste natus error sit voluptatem accusantium.</p> -->
                <a href="#featured-services" class="btn-get-started scrollto">Detail Event</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

    <header class="section-header" style="padding-top: 40px;">
          <h3>Detail Event</h3>
        </header>
     <div class="row" style="padding-right:40px; padding-left: 40px; padding-top: 20px;">
                    
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-expanded="true">Info Event</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-expanded="false">Deskripsi</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab" aria-expanded="false">Persyaratan</a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel" aria-expanded="true">
                                    <div class="card-body">
                                        <div class="profiletimeline">
                                            <div class="sl-item">
                                                <div class="sl-left"> </div>
                                                <div class="sl-right">
                                                    <div> <h3>Kompetisi Olahraga 2019</h3> <!-- <span class="sl-date">5 minutes ago</span> -->
                                                      <hr>
                                                        <div class="m-t-20 row">
                                                            <div class="col-md-3 col-xs-12"><img src="../assets/images/big/img1.jpg" alt="user" class="img-responsive radius"></div>
                                                            <div class="col-md-9 col-xs-12">
                                                              <b>
                                                                <p>Kategori            :  Olah Raga</p> 
                                                                <p>Tanggal Pelaksanaan : 13 Mei 2019</p>
                                                                <p>Jam Event           : 09.00-selesai</p>
                                                                <p>Tempat Event        : Aula SMA N 1 Balapulang</p>
                                                                <p>Link Registrasi     : <a class="link">www.sman1balapulang.com </a></p>
                                                                <p>Contact Person      : 082328727705</p>
                                                                </b>
                                                              </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--second tab-->
                                <div class="tab-pane" id="profile" role="tabpanel" aria-expanded="false">
                                    <div class="card-body">
                                        <h3>deskripsi Event</h3>
                                        <hr>
                                        <p class="m-t-30">Buat  kalian,  siswa  siswi  SMA  yang  menggemaskan. Let  us  introduce  our  biggest  program, acara  kimia  paling  bergengsi  di  Indonesia  hadir  lagi. "Kompetisi  Kimia  Universitas  Airlangga  2019" Dengan  timeline:</p>
                                        <p>Penyisihan  1  :  22  September  2019 </p>
                                        <p>Penyisihan  2  :  2  November  2019</p>
                                        <p>Semifinal-Final  :  3  November  2019</p>
                                         <p class="m-t-30">Bukan  cuma  ilmu,  tapi  pengalaman  dan  rasakan  sensasi  berkompetisi  dengan  orang-orang hebat  se  indonesia.Kapan  lagi  ya  kan? SEMUANYA TIDAK  AKAN ADA YANG SIA SIA. Semua  peserta  akan  tetap  kami  apresiasi  melalui  sertifikat  yang  bertaraf  nasional  yang  nantinya akan  sangat  berguna  jika  kalian  ingin  melanjutkan  pendidikan  ke  perguruan  tinggi  atau  melamar beasiswa.  Juga  kami  sediakan  beberapa  soal  tahun-tahun  sebelumnya  serta  pembahasan  yang bisa  dipelajari.  Tidak  berhenti  disitu,  kami  juga  akan  memberikan  artikel  serta  kuis  dan  try  out berhadiah  yang  akan  membantu  kalian  mempersiapkan  KK  UNAIR  2019. </p>
                                    
                                    </div>
                                </div>
                                <div class="tab-pane" id="settings" role="tabpanel" aria-expanded="false">
                                    <div class="card-body">
                                          <h3>Persyaratan Mengikuti </h3>
                                        <hr>
                                        <p class="m-t-30">Pastikan  kalian  adalah  Anak  SMA  yang  berstatus  pelajar  aktif. Setiap  tim  terdiri  dari  2  orang  dan  harus  dalam  sekolah  yang  sama. Biaya  pendaftaran  hanya  sebesar  Rp.  135.000,-  per  tim. . Cara  mendaftar:</p>
                                        <p>OFFLINE  :  Melalui  CP  Regional  atau  Sekretariat  Himaki  Unair  Surabaya</p>
                                        <p>ONLINE  :  Melalui  website pendaftaran.kkunair.com</p>
                                        <p>Untuk  info  lebih  lanjut  kalian  dapat  mengunjungi  beberapa  sosial  media  kami.</p>
                                        <p><small class="text-muted p-t-30 db">Social Profile</small>
                                <br>
                                <button class="btn btn-circle btn-secondary"><i class="fa fa-facebook"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fa fa-twitter"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fa fa-youtube"></i></button></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center m-t-30"> <img src="../assets/images/users/5.jpg" alt="img" class="img-circle" width="150">
                                    <h4 class="card-title m-t-10">Tegal Event</h4>
                                    <h6 class="card-subtitle">Punya Event yang ingin di publikasikan disini?</h6>
                                  
                                </div>
                            </div>
                            <div>
                                <hr> </div>

                            <div class="card-body"> 
                              <h6>Silahkan Registrasi secara online atau bisa hub</h6>
                              <small class="text-muted">Email address </small>
                                <h6>TegalEvent@gmail.com</h6> <small class="text-muted p-t-30 db">Phone</small>
                                <h6>+91 654 784 547</h6> 
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
     </div>


    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Our Clients</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          <img src="{{ asset('BizPage/img/clients/client-1.png') }}" alt="">
          <img src="{{ asset('BizPage/img/clients/client-2.png') }}" alt="">
          <img src="{{ asset('BizPage/img/clients/client-3.png') }}" alt="">
          <img src="{{ asset('BizPage/img/clients/client-4.png') }}" alt="">
          <img src="{{ asset('BizPage/img/clients/client-5.png') }}" alt="">
          <img src="{{ asset('BizPage/img/clients/client-6.png') }}" alt="">
          <img src="{{ asset('BizPage/img/clients/client-7.png') }}" alt="">
          <img src="{{ asset('BizPage/img/clients/client-8.png') }}" alt="">
        </div>

      </div>
    </section><!-- #clients -->


  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Tegal Event</h3>
            <p>Sebuah website untuk melihat dan mempubuplikasikan event yang akan datang di kota tegal</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Link</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Kategori Event</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Kategori Peserta Event</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">About Us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Developer tim</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Log In</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Publikasikan Eventmu</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
          
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> TegalEvent@gmail.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Tegal Event</h4>
            <p>tempat terbaikmu untuk mencari jembatan menuju impianmu.</p>
           
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>BizPage</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
        Designed by <a href="https://bootstrapmade.com/">Ikhwanudin</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="{{ asset('BizPage/lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('BizPage/lib/jquery/jquery-migrate.min.js') }}"></script>
  <script src="{{ asset('BizPage/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('BizPage/lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('BizPage/lib/superfish/hoverIntent.js') }}"></script>
  <script src="{{ asset('BizPage/lib/superfish/superfish.min.js') }}"></script>
  <script src="{{ asset('BizPage/lib/wow/wow.min.js') }}"></script>
  <script src="{{ asset('BizPage/lib/waypoints/waypoints.min.js') }}"></script>
  <script src="{{ asset('BizPage/lib/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('BizPage/lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('BizPage/lib/isotope/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('BizPage/lib/lightbox/js/lightbox.min.js') }}"></script>
  <script src="{{ asset('BizPage/lib/touchSwipe/jquery.touchSwipe.min.js') }}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{ asset('BizPage/contactform/contactform.js') }}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ asset('BizPage/js/main.js') }}"></script>


<!-- JavaScript dan JQuery dari template admin -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('assets/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('assets/js/sidebarmenu.js') }}"></script>
    <!--stickey kit -->
    <script src="{{ asset('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('assets/js/custom.min.js') }}"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="{{ asset('assets/plugins/chartist-js/dist/chartist.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js') }}"></script>
    <!--c3 JavaScript -->
    <script src="{{ asset('assets/plugins/d3/d3.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/c3-master/c3.min.js') }}"></script>
    <!-- Chart JS -->
    <script src="{{ asset('assets/js/dashboard1.js') }}"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="{{ asset('assets/plugins/styleswitcher/jQuery.style.switcher.js') }}"></script>
</body>
</html>
