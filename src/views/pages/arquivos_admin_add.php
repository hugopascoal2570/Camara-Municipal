<?= $render('header'); ?>

<?= $render('menu'); ?>
<header>
  <div class="container">
    <header>
      <div class="container">

      </div>
    </header>
    <br />
    <section class="container main">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Adicionando arquivos</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form method="POST" action="<?php echo $base; ?>/admin/arquivos_add" enctype="multipart/form-data">

            <div class="form-group">
              <label for="exampleInputFile">Arquivos para Inserir</label>
              <input type="file" name="arquivo" required>
            </div>

          </div>
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
          </div>
        </form>
      </div>
  </div>


  </section>
  <?= $render('footer'); ?>

  </body>

  </html>