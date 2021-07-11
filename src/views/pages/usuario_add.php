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
            <a href="<?=$base;?>/admin/usuarios_add" class="btn btn-success ">Adicionar Usuario </a>

            <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lista de Usuários</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                 
                  <th>Nome do Usuario</th>
                  <th>Foto Usuário</th>
                  <th>Email</th>
                  <th>Ações</th>
                </tr>
                <?php foreach($usuarios as $usuario):?>
                  <tr>
                    <td style="width: 30%;"><?=$usuario['name'];?></td>
                    <td style="width: 7%;"><img src="<?=$base;?>/media/uploads/usuarios/<?=$usuario['foto'];?>" width="70" height="70"></td>
                    <td style="width: 15%;"><?=$usuario['email'];?></td>
                    <td style="width: 15%;"><a href="<?=$base;?>/admin/leis/<?=$usuario['id'];?>/editar" class="btn btn-sm btn-success">Editar</a>
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