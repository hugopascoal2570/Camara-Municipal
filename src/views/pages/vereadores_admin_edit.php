<?= $render('header'); ?>

<?= $render('menu'); ?>
<header>
  <div class="container">

  </div>
</header>
<br />
<section class="container main">
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Editando Vereadores</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form method="POST" action="<?php echo $base; ?>/admin/vereadores/<?= $vereadores['id']; ?>/editar" enctype="multipart/form-data">
      <div class="box-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Nome</label>
          <input type="text" class="form-control" name="nome" value="<?= $vereadores['nome']; ?>" required>
        </div>
        <p>
          <label>
            <input name="mesa" type="radio" />
            <span>Vereador faz parte da mesa diretora?</span>
            <h3>
              <p style="color: red;">Atenção: só preencher o campo abaixo caso o vereador faça parte da mesa diretora </p>
            </h3>
          </label>
        </p>
        <div class="form-group">
          <label>Cargo da Mesa diretora</label>
          <input type="text" class="form-control" name="cargo" value="<?= $vereadores['cargo_mesa']; ?>">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Partido</label>
          <input type="text" class="form-control" name="partido" value="<?= $vereadores['partido']; ?>" required>
        </div>
        <div class="form-group">
          <label for="date">Descrição</label>
          <input type="text" class="form-control" name="descricao" value="<?= $vereadores['descricao']; ?>" required>
        </div>
        <label for="ano_eletivo">Selecione o ano de eleição</label>

        <select id="ano_eletivo" name="ano_eletivo">
          <option value="2016">2016-2020</option>
          <option value="2021">2021-2025</option>
          <option value="2026">2026-2030</option>

        </select>
        <div class="form-group">
          <label for="date">Data de Nascimento</label>
          <input type="date" class="form-control" name="data_nasc" value="<?= $vereadores['data_nasc']; ?>" required>
        </div>
        <div class="form-group">
          <label for="date">Naturalidade</label>
          <input type="text" class="form-control" name="naturalidade" value="<?= $vereadores['naturalidade']; ?>" required>
        </div>
        <div class="form-group">
          <label for="date">Estado Cívil</label>
          <input type="text" class="form-control" name="estado_civil" value="<?= $vereadores['estado_civil']; ?>" required>
        </div>
        <div class="form-group">
          <label for="date">Escolaridade</label>
          <input type="text" class="form-control" name="escolaridade" value="<?= $vereadores['escolaridade']; ?>" required>
        </div>
        <label for="exampleInputEmail1">O Vereador possuiu Redes sociais? </label>
        <div class="form-group">
          <label for="exampleInputEmail1">Facebook</label>
          <input type="text" class="form-control" name="facebook">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Twitter</label>
          <input type="text" class="form-control" name="twitter">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">E-mail</label>
          <input type="text" class="form-control" name="email" value="<?= $vereadores['email']; ?>">
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Foto do Vereador</label>
          <input type="file" name="arquivo" required>
        </div>
        <div class="checkbox">

        </div>
      </div>
      <!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
    </form>
  </div>

  </form>
</section>
<?= $render('footer'); ?>

</body>

</html>