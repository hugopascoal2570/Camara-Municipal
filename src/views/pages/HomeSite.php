
<body>
  
  <?= $render('HeaderSite'); ?>
 

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Câmara Municipal de<span> Surubim</spa>
      </h1>
      <h2>Casa euclides Mota</h2>
      <div class="d-flex">
        <!--  
      <a href="#about" class="btn-get-started scrollto"></a>
        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> <i class="icofont-play-alt-2"></i></a>
      </div>
-->
      </div>
  </section><!-- End Hero -->

  <main id="main">


    <!-- ======= About Section ======= -->
    <section id="sobre" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Sobre</h2>
          <h3>Saiba Mais <span> Sobre Nós</span></h3>

        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h6 align="left"></h6>
            <p class="font-italic">

            </p>
            <ul>
              <li>
                <i class="bx bx-store-alt"></i>
                <div>
                  <h5>História</h5>
                  <p>O surgimento da câmara municipal do Surubim-PE, com seu conselho municipal em 15 novembro de 1928. O motivo dessa coincidência incide no fato de que as câmara municipais representou uma antiga instituição portuguesa e quanto os lusitanos colonizaram o Brasil trouxeram para cá todas elas.</p>
                </div>
              </li>
              <li>
                <i class="bx bx-store-alt"></i>
                <div>
                  <h5>Regimento Interno</h5>
                  <p>O REGIMENTO INTERNO é uma norma interna que disciplina as atribuições dos órgãos da Câmara Municipal, contemplando suas funções legislativas, fiscalizadoras e administrativas. Deve ser editado mediante resolução, de acordo com a Lei Orgânica do município, dependendo sempre da deliberação do Plenário.</p>
                </div>
              </li>
            </ul>
            <p>
              <a href="http://localhost/PainelCamaraMVC/public/media/uploads/arquivos/97f89bf71ddaf3ca4913d6409cd6a14f.pdf">Clique aqui para visualizar o regimento interno</a>
              <br><a href="http://localhost/PainelCamaraMVC/public/media/uploads/arquivos/d36812d1ff0384fc907cd6efa92cbc2c.pdf">Clique aqui para visualizar a Lei Orgânica</a>
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->



    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Transparência</h2>
          <h3>Aqui estão Todas os arquivos para a <span> Transparência</span></h3>
          <p></p>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <a href="http://localhost/PainelCamaraMVC/public/media/uploads/arquivos/fb61da9ae8cf56917e4d50f3e9fe2053.pdf">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                <h4 class="title">Loa - 2021</h4>
                <p class="description">
            </a></p>
          </div>

          <a href="http://localhost/PainelCamaraMVC/public/media/uploads/arquivos/fb61da9ae8cf56917e4d50f3e9fe2053.pdf">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <h4 class="title">LDO - 2021</h4>
              <p class="description">
          </a></p>
        </div>
      </div>

    </section><!-- End Featured Services Section -->


    <section id="leis" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Leis</h2>
          <h3>Aqui estão Todas as <span> Leis</span></h3>
          <p></p>
        </div>
        <form method="GET" action="<?php echo $base; ?>/ano" enctype="multipart/form-data">
          <label>Por favor informe o ano da Lei que Deseja visualizar</label>
          <select name="ano">

            <?php
            for ($i = 1988; $i <= 2025; $i++) {
            ?>
              <option value="<?php echo $i; ?>"> <?php echo $i;
                                                }
                                                  ?>
              </option>
          </select>

          <button type="submit" class="btn btn-primary">Buscar</button>

        

        <div class="row">
          <br />

          <?php foreach ($leis['leis'] as $lei) : ?>

            <div class="col-lg-4 col-md-6">
              <div class="icon-box">
              
                <div class="icon"><a href="<?= $base; ?>/media/uploads/leis/<?= $lei['FileName']; ?>" rel=noopener><i class="bx bx-file"></i></div>
                <h4>Número da Lei: <a href="<?= $base; ?>/media/uploads/leis/<?= $lei['FileName']; ?>" rel=noopener><?php echo $lei['number']; ?> </a><br />Ano <?php echo $lei['year']; ?></h4>
                <p> <b>Descrição: </b> <?= $lei['description']; ?></p>
              </div>
            </div>
          <?php endforeach; ?>
         
            </ul>
          </nav>

        </div>
        </form>
      </div>
    </section><!-- End Services Section -->


    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Projetos de Leis</h2>
          <h3>Aqui estão Todas os projetos de <span> Lei</span></h3>
          <p></p>
        </div>
        <form method="GET" action="<?php echo $base; ?>/ano_projeto" enctype="multipart/form-data">
          <label>Por favor informe o ano da Lei que Deseja visualizar</label>
          <select name="ano_projetos">

            <?php
            for ($i = 1988; $i <= 2025; $i++) {
            ?>
              <option value="<?php echo $i; ?>"> <?php echo $i;
                }
          ?>
              </option>
          </select>

          <button type="submit" class="btn btn-primary">Buscar</button>

        </form>


        </form>
        <div class="row">
          <br />
          <?php foreach ($projetos['projetos'] as $projeto) : ?>
            <div class="col-lg-4 col-md-6">
              <div class="icon-box">
                <div class="icon"><a href="<?= $base; ?>/media/uploads/<?= $projeto['FileName']; ?>" rel=noopener><i class="bx bx-file"></i></div>
                <h4>Número da Lei: <a href="<?= $base; ?>/media/uploads/<?= $projeto['FileName']; ?>" rel=noopener><?php echo $projeto['number']; ?> </a><br />Ano <?php echo $projeto['year']; ?></h4>
                <p> <b>Descrição: </b> <?= $projeto['description']; ?></p>

              </div>
            </div>
          <?php endforeach; ?>
       
            </ul>
          </nav>
        </div>
        </form>
      </div>
    </section>

<!-- fim da sessão leis -->

    <!--mesa Diretora-->

    <section id="mesa" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Mesa Diretora</h2>
          <h3>Membros da <span>Mesa Diretora</span></h3>
          <p>Aqui estão os vereadores que fazem parte da Mesa Diretora bem como suas funções.</p>
        </div>
        <form method="GET" action="<?php echo $base; ?>/mandato_mesa" enctype="multipart/form-data">
          <label>Por favor informe o Mandato que Deseja visualizar</label>
          <select id="mandato_mesa" name="mandato_mesa">
            <option value="2021">Atual</option>
            <option value="2016">Mandato Passado</option>
          </select>

          <button type="submit" class="btn btn-primary">Buscar</button>

        </form>
        <br />
        <div class="row">

          <?php foreach ($mesas['mesas'] as $mesa) : ?>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="member">
                <div class="member-img">
                  <img src="<?= $base; ?>/media/uploads/vereadores/<?= $mesa['FileName']; ?>" class="img-fluid">
                  <div class="social">
                    <?php
                    if ($mesa['twitter'] === 'Não foi informado') {
                      echo "";
                    } else {
                    ?>
                      <a href="<?= $mesa['twitter']; ?>" target="_blank"><i class="icofont-twitter"></i></a><?php
                                                                                                          }
                                                                                                            ?>
                    <?php
                    if ($mesa['facebook'] === 'Não foi informado') {
                      echo "";
                    } else {
                    ?>
                      <a href="<?= $mesa['facebook']; ?>" target="_blank"><i class="icofont-facebook"></i></a><?php
                                                                                                            }
                                                                                                              ?>
                    <?php
                    if ($mesa['email'] === 'Não foi informado') {
                      echo "";
                    } else {
                    ?>
                      <p style="background-color:white;"> Email: <?= $mesa['email']; ?><?php
                                                                                      }
                                                                                        ?>
                  </div>
                </div>
                <div class="member-info">
                  <h4><?= $mesa['nome']; ?></h4>
                  <span>
                    <h6>Cargo: <?= $mesa['cargo_mesa']; ?>
                  </span>
                  <span>Partido: <?= $mesa['partido']; ?></span>
                  <span>Descrição: <?= $mesa['descricao']; ?></span>



                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Team Section ======= -->
    <section id="vereadores" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Vereadores</h2>
          <h3>Lista de Vereadores da Câmara Municipal de <span>Surubim</span></h3>
          <p>aqui estão listado os treze vereadores que fazem parte da Câmara Municipal de Surubim.</p>
        </div>
        <form method="GET" action="<?php echo $base; ?>/mandato" enctype="multipart/form-data">
          <label>Por favor informe o Mandato que Deseja visualizar</label>
          <select id="mandato" name="mandato">
            <option value="2021">Atual</option>
            <option value="2016">Mandato Passado</option>
          </select>

          <button type="submit" class="btn btn-primary">Buscar</button>

        </form>
        <br />
        <div class="row">

          <?php foreach ($vereadores['vereadores'] as $vereador) : ?>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="member">
                <div class="member-img">
                  <img src="<?= $base; ?>/media/uploads/vereadores/<?= $vereador['FileName']; ?>" class="img-fluid">
                  <div class="social">
                    <?php
                    if ($vereador === '') {
                      echo 'Desculpe-nos mas não encontramos nenhum dado solicitado';
                    }
                    ?>

                    <?php
                    if ($vereador['twitter'] === 'Não foi informado') {
                      echo "";
                    } else {
                    ?>
                      <a href="<?= $vereador['twitter']; ?>" target="_blank"><i class="icofont-twitter"></i></a><?php
                                                                                                              }
                                                                                                                ?>
                    <?php
                    if ($vereador['facebook'] === 'Não foi informado') {
                      echo "";
                    } else {
                    ?>
                      <a href="<?= $vereador['facebook']; ?>" target="_blank"><i class="icofont-facebook"></i></a><?php
                                                                                                                }
                                                                                                                  ?>
                    <?php
                    if ($vereador['email'] === 'Não foi informado') {
                      echo "";
                    } else {
                    ?>
                      <p style="background-color:white;"> Email: <?= $vereador['email']; ?><?php
                                                                                          }
                                                                                            ?>

                  </div>
                </div>
                <div class="member-info">
                  <h4>Nome: <?= $vereador['nome']; ?></h4>
                  <span>Partido: <?= $vereador['partido']; ?></span>
                  <span>Descrição: <?= $vereador['descricao']; ?></span>
                  <span>Naturalidade: <?= $vereador['naturalidade']; ?></td></span>
                  <span>Escolaridade: <?= $vereador['escolaridade']; ?></span>

                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

      </div>
    </section><!-- End Team Section -->


    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>F.A.Q</h2>
          <h3>Perguntas Feitas <span>Frequentemente</span></h3>
          <p></p>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-10">
            <ul class="faq-list" data-aos="fade-up" data-aos-delay="100">

              <li>
                <a data-toggle="collapse" class="" href="#faq1">onde consigo encontrar as leis no site? <i class="icofont-simple-up"></i></a>
                <div id="faq1" class="collapse show" data-parent=".faq-list">
                  <p>
                    Simples. basta você clicar no link escrito Leis no menu Principal e você será redireionado para a parte onde fica todas as leis
                  </p>
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#faq2" class="collapsed">Onde posso encontrar os links para o portal da transparência? <i class="icofont-simple-up"></i></a>
                <div id="faq2" class="collapse" data-parent=".faq-list">
                  <p>
                    para isso basta ir até a sessão de sobre-nós e descer mais um pouco.
                  </p>
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#faq2" class="collapsed">Onde posso encontrar as noticias sobre a câmara de vereadores? <i class="icofont-simple-up"></i></a>
                <div id="faq2" class="collapse" data-parent=".faq-list">
                  <p>
                    Basta apenas clicar no botão blog.
                  </p>
                </div>
              </li>

            </ul>
          </div>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contato" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contato</h2>
          <h3><span>Contate-nos</span></h3>
          <p>Aqui você Encontrará nossos meios de contato. </p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Nosso endereço</h3>
              <p>Av. Monsenhor Luís Ferreira Lima, 95</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
              <p>contato@camarasurubim.pe.gov.br</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Telefone</h3>
              <p>+55 (81) 3634-1562</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6 ">
            <iframe class="mb-12 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1976.279326580882!2d-35.75873304208937!3d-7.836445441425709!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7abdca382937007%3A0x2e6f07ca4e241e2e!2sAv.%20Monsenhor%20Lu%C3%ADs%20Ferreira%20Lima%2C%2095%20-%20Centro%2C%20Surubim%20-%20PE%2C%2055750-000!5e0!3m2!1spt-BR!2sbr!4v1607832761281!5m2!1spt-BR!2sbr" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>

          </div>


        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <?= $render('FooterSite'); ?>