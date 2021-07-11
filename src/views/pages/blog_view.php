<html>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Câmara Municipal de Surubim - Blog</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->

  <link href="<?= $base; ?>/media/favicon.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= $base; ?>/assetsSite/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= $base; ?>/assetsSite/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?= $base; ?>/assetsSite/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= $base; ?>/assetsSite/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?= $base; ?>/assetsSite/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?= $base; ?>/assetsSite/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= $base; ?>/assetsSite/css/style.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <!-- =======================================================
  * Template Name: BizLand - v2.0.2
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:contact@example.com"> contato@camarasurubim.pe.gov.br</a>
        <i class="icofont-phone"></i> Fone (81) 3634-1575 - Tesouraria
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="<?=$base;?>/blog">Câmara <span>Surubim</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?= $base; ?>/">Inicio</a></li>
          <li><a href="<?= $base; ?>/">Sobre</a></li>
          <li><a href="<?= $base; ?>/">Leis</a></li>
          <li><a href="<?= $base; ?>/">Mesa Diretora</a></li>
          <li><a href="<?= $base; ?>/">Vereadores</a></li>
          <li><a href="<?= $base; ?>/">Contato</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <br /><br /><br /><br /><br /><br /><br />
  <main role="main">

    <section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading"><?= $blogs['titulo']; ?></h1>
        <h6 class="lead text-muted"><?= $blogs['sub-titulo']; ?><h6>
            <div align="left"><br />
              <h7>Publicado por:</h7> <?= $blogs['autor']; ?><br />

              <?php
              $fuso = new DateTimeZone('America/Sao_Paulo');
              $data = new DateTime($blogs['date']);
              $data->setTimezone($fuso);
              echo $data->format('d-m-Y H:i:s');
              ?>
            </div>
            <hr />
            <main role="main">
              <img class="img-fluid" src="<?= $base; ?>/media/uploads/blog/<?= $blogs['foto_banner']; ?>" />
              <div align="left">
            
                <p><?= $blogs['corpo']; ?></p></br>
              </div>
              </div>

  <!-- ======= Footer ======= -->
  <footer id="footer">


  <h6>
              Desenvolvido por: <a href="" target="_blank" class="text-dark">Htech Info</a> (81) 9 9748-0664
            </h6>

    <div class="container py-4">
      <div class="copyright">
      
        &copy; Copyright <strong><span>BizLand</span></strong>. All Rights Reserved
      </div>
      
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= $base; ?>/assetsSite/vendor/jquery/jquery.min.js"></script>
  <script src="<?= $base; ?>/assetsSite/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= $base; ?>/assetsSite/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?= $base; ?>/assetsSite/vendor/php-email-form/validate.js"></script>
  <script src="<?= $base; ?>/assetsSite/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?= $base; ?>/assetsSite/vendor/counterup/counterup.min.js"></script>
  <script src="<?= $base; ?>/assetsSite/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?= $base; ?>/assetsSite/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= $base; ?>/assetsSite/vendor/venobox/venobox.min.js"></script>
  <script src="<?= $base; ?>/assetsSite/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= $base; ?>/assetsSite/js/main.js"></script>

</body>

</html>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>