<?=$render('header');?>

<?=$render('menu');?>
        <div class="container">
            
        </div>
    </header>
    <br/>
    <section class="container main">
            <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"> Leis</h3>
            </div>
            <br/>
            <a href="<?=$base;?>/admin/leis_add" class="btn btn-success ">Adicionar Leis </a>

            <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lista de Leis</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nº da Lei</th>
                  <th>Ementa</th>
                  <th>Ano</th>
                  <th>Data da Publicação</th>
                  <th>Arquivo</th>
                  <th>Projeto</th>
                  <th>Ações</th>
                </tr>
                <form method="GET" action="<?php echo $base; ?>/ano_admin" enctype="multipart/form-data">
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

        </form>
                <?php foreach($leis as $lei):?>
                  <tr>
                    <td style="width: 7%;"><?=$lei['number'];?> - <?=$lei['year'];?></td>
                    <td style="width: 40%;"><?=$lei['description'];?></td>
                    <td><?=$lei['year'];?></td>
                    <td style="width: 5%;"><?=$lei['date'];?></td>
                    <td style="width: 7%;"><a href="<?=$base;?>/media/uploads/leis/<?=$lei['FileName'];?>" target="_blank">Arquivo</td>
                    <td style="width: 15%;">
                    <?php if($lei['projeto'] === '0'){
                      echo 'Não é projeto de lei';
                    }else{
                      echo 'Projeto de Lei';
                    }?></td>
                    <td><a href="<?=$base;?>/admin/leis/<?=$lei['id'];?>/editar" class="btn btn-sm btn-success">Editar</a>
                    <a href="<?=$base;?>/admin/leis/<?=$lei['id'];?>/excluir" onclick="return confirm('Tem certeza que deseja excluir?')" alert alert-danger class="btn btn-sm btn-danger">Excluir</a></td>
                  </tr>
                <?php endforeach;?>
                </thead>
                <tbody>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          </div>
        </form>
    </section>

    <?=$render('footer');?>
</body>
</html>