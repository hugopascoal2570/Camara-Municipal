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
          <h3 class="box-title">Adicionando Vereadores</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form method="POST" action="<?php echo $base; ?>/admin/usuarios_add" enctype="multipart/form-data">
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nome</label>
              <input type="text" class="form-control" name="name" placeholder="Informe o Nome do Usuario" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="text" class="form-control" name="email" placeholder="Informe o Nome do email" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Senha</label>
              <input type="password" class="form-control" name="password" placeholder="Informe a Senha" required>
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Foto do Usuário</label>
              <input type="file" name="arquivo" required>
            </div>
          </div>
          <!-- /.box-body -->

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