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
        <form method="POST" action="<?php echo $base; ?>/admin/vereadores_add" enctype="multipart/form-data">
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nome</label>
              <input type="text" class="form-control" name="nome" placeholder="Informe o Nome do Vereador" required>
            </div>
            <p>
              <label>
                <input name="mesa" type="radio" />
                <span>Vereador faz parte da mesa diretora?</span>
                <h3><p style="color: red;">Atenção: só preencher o campo abaixo caso o vereador faça parte da mesa diretora </p></h3>
              </label>
            </p>

            <div class="form-group">
              <label>Cargo da Mesa diretora</label>
              <input type="text" class="form-control" name="cargo" placeholder="Informe o Partido do Vereador">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Partido</label>
              <input type="text" class="form-control" name="partido" placeholder="Informe o Partido do Vereador">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Descrição</label>
              <input type="text" class="form-control" name="descricao" placeholder="Informe a descrição sobre o vereador" >
            </div>
            <label for="ano_eletivo">Selecione o ano do Mandato</label>

            <select id="ano_eletivo" name="ano_eletivo">
              <option value="2016">2016-2020</option>
              <option value="2021">2021-2025</option>
              <option value="2026">2026-2030</option>

            </select>
            <div class="form-group">
              <label for="exampleInputEmail1">Data de Nascimento</label>
              <input type="date" class="form-control" name="nascimento" placeholder="Informe a data de Nascimento" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Naturalidade</label>
              <input type="text" class="form-control" name="naturalidade" placeholder="Informe o Naturalidade do Vereador" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Estado Cívil</label>
              <input type="text" class="form-control" name="estado" placeholder="Informe o Estado Cívil do Vereador" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Escolaridade</label>
              <input type="text" class="form-control" name="escolaridade" placeholder="Informe a Escolaridade do Vereador" required>
            </div>
            <label for="exampleInputEmail1">O Vereador possuiu Redes sociais? </label>
            <div class="form-group">
              <label for="exampleInputEmail1">Facebook</label>
              <input type="text" class="form-control" name="facebook" placeholder="Informe o Facebook do vereador">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Twitter</label>
              <input type="text" class="form-control" name="twitter" placeholder="Informe o twitter do vereador">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">E-mail</label>
              <input type="text" class="form-control" name="email" placeholder="Informe o e-mail do vereador">
            </div>

            <div class="form-group">
              <label for="exampleInputFile">Foto do vereador</label>
              <input type="file" name="arquivo" required>
            </div>
            <div class="checkbox">

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