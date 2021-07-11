<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Câmara Municipal do Surubim</title>
  <!-- plugin css for this page -->

  <link rel="stylesheet" href="./assetsBlog/vendors/mdi/css/materialdesignicons.min.css" />
  <link rel="stylesheet" href="./assetsBlog/vendors/aos/dist/aos.css/aos.css" />
  <link rel="stylesheet" href="./assetsBlog/vendors/owl.carousel/dist/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="./assetsBlog/vendors/owl.carousel/dist/assets/owl.theme.default.min.css" />
  <!-- End plugin css for this page -->
  <link href="<?= $base; ?>/media/favicon.jpg" rel="apple-touch-icon">
  <!-- inject:css -->
  <link rel="stylesheet" href="assetsBlog/css/style.css">
  <!-- endinject -->
</head>

<body>
  <div class="container-scroller">
    <div class="main-panel">
      <header id="header">
        <div class="container">
          <?= $render('HeaderBlog'); ?>
          <!-- partial -->
        </div>
      </header>
      <div class="container">
        <div class="banner-top-thumb-wrap">
          <div class="d-lg-flex justify-content-between align-items-center">

          </div>
        </div>
        <!--carousel-->
        <div class="row">
          <div class="col-lg-8">
            <div class="owl-carousel owl-theme" id="main-banner-carousel">

              <?php foreach ($destaques as $destaque) : ?>
                <div class="item item-active">
                  <?php $count = 0; ?>
                  <?php if ($count == 0) : ?>
                    <?php $count++; ?>
                    <div class="carousel-content-wrapper mb-2">
                      <div class="carousel-content">
                        <h1 class="font-weight-bold">
                          <?= $destaque['titulo']; ?>
                        </h1>
                        <h5 class="font-weight-normal  m-0">
                          <?= $destaque['sub-titulo']; ?>
                        </h5>
                        <p class="text-color m-0 pt-2 d-flex align-items-center">
                          <?php
                          setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
                          date_default_timezone_set('America/Sao_Paulo');
                          $destaque['date'] = strftime('%A, %d de %B de %Y', strtotime('today')); ?>
                          <span class="fs-10 mr-1"><?= $destaque['date']; ?></span>
                          <i class="mdi mdi-bookmark-outline mr-3"></i>
                          <span class="fs-10 mr-1">126</span>
                          <i class="mdi mdi-comment-outline"></i>
                        </p>
                      </div>
                    <?php endif ?>
                    <div class="carousel-image">
                      <a href="<?php echo $base; ?>/blog/<?=$destaque['id'];?>/"><img src="<?= $base; ?>/media/uploads/blog/<?= $destaque['foto_banner']; ?>" alt="" /></a>
                    </div>
                    </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="row">
              <div class="col-sm-6">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- primeiro bloco de categoria-->
  </div>
  <div class="world-news">
    <div class="row">
      <div class="col-sm-12">
        <div class="d-flex position-relative  float-left">
          <h3 class="section-title">Novas Notícias</h3><br/>
        </div>
      </div>
    </div>
          <div class="row">
            <?php foreach ($novas as $nova) : ?>
              <?php $contador = 0; ?>
              <?php if ($contador == 0) : ?>
                <?php $contador++; ?>
                <div class="col-lg-3 col-sm-6 grid-margin mb-5 mb-sm-2">
                  <div class="position-relative image-hover">
                  <a href="<?php echo $base; ?>/blog/<?=$nova['id'];?>/"><img src="<?= $base; ?>/media/uploads/blog/<?= $nova['foto']; ?>" class="img-fluid" alt="world-news" /></a>

                    <span class="thumb-title"><?= $nova['categoria']; ?></span>
                  </div>
                  <h5 class="font-weight-bold mt-3">
                  <?= $nova['titulo']; ?>
                  </h5>
                <?php endif ?>
                <p class="fs-15 font-weight-normal">
                <?= $nova['sub-titulo']; ?><br/>
              
                </div>
                
                <?php endforeach; ?>
                </div>
        </div>
      </div>

    </div>
  </div>



<!--parte de lembretes-->
  
  <div class="popular-news">
    <div class="row">
      <div class="col-lg-3">
        <div class="d-flex position-relative float-left">
          <h3 class="section-title">Lembretes</h3>
        </div>
      </div>
    </div>
    <?php foreach ($lembretes as $lembrete) : ?>
    <div class="row">
      <div class="col-lg-9">
        <div class="row">
          <div class="col-sm-4  mb-5 mb-sm-2">
            <div class="position-relative image-hover">
            <a href="<?php echo $base; ?>/blog/<?=$lembrete['id'];?>/"><img src="<?= $base; ?>/media/uploads/blog/<?= $lembrete['foto']; ?>" class="img-fluid" alt="world-news" /></a>
              
            </div>
            <h5 class="font-weight-600 mt-3">
            <?=$lembrete['titulo'];?>
            </h5>
          </div>
          <?php endforeach; ?>  
      </div>
    </div>
  </div>
  </div>
  <!-- main-panel ends -->
  <!-- container-scroller ends -->

  <!-- partial:partials/_footer.html -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="border-top"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="d-flex justify-content-between">
            <img src="assets/images/logo.svg" class="footer-logo" alt="" />

            <div class="d-flex justify-content-end footer-social">
              <h5 class="m-0 font-weight-600 mr-3 d-none d-lg-flex">Siga-nos</h5>
              <ul class="social-media">
                <li>
                  <a href="#">
                    <i class="mdi mdi-instagram"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="mdi mdi-facebook"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="mdi mdi-youtube"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="mdi mdi-linkedin"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="mdi mdi-twitter"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="d-lg-flex justify-content-between align-items-center border-top mt-5 footer-bottom">

          <h6>
              Desenvolvido por: <a href="" target="_blank" class="text-dark">Htech Info</a> (81) 9 9748-0664
            </h6>
            <p class="font-weight-medium">
              © 2020 <a href="https://www.bootstrapdash.com/" target="_blank" class="text-dark">@ BootstrapDash</a>, Inc.All Rights Reserved.
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- partial -->
  </div>
  </div>
  <!-- inject:js -->
  <script src="assetsBlog/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="./assetsBlog/vendors/owl.carousel/dist/owl.carousel.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="./assetsBlog/js/demo.js"></script>

  <!-- End custom js for this page-->
</body>

</html>