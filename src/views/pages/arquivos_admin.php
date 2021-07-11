
<?=$render('header');?>

<?=$render('menu');?>

<header>
        <div class="container">
            
        </div>
    </header>
    <br/>
    <section class="container main">
            <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"> Arquivos</h3>
            </div>
            <br/>
            <a href="<?=$base;?>/admin/arquivos_add" class="btn btn-success ">Adicionar Arquivos </a>

            <br/><br/>lista de arquivos

 <!-- Main content -->
 <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lista de Arquivos</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>nome</th>
                  <th>Arquivo</th>
                  <th>Link</th>
                  <th>Ações</th>
                </tr>
                <?php foreach($arquivos as $arquivo):?>
                  <tr>
                    <td style="width: 10%;"><?=$arquivo['original_name'];?></td>

                    <td style="width: 80px;"><img src="<?=$base;?>/media/uploads/arquivos/<?=$arquivo['nome_arquivo'];?>" target="_blank" width="70" height="50">Arquivo</td>
                    <td style="width: 80px;"><a href="<?=$base;?>/media/uploads/arquivos/<?=$arquivo['nome_arquivo'];?>" target="_blank" width="70" height="50">Arquivo</td>
                    <td><a href="<?=$base;?>/admin/arquivos/<?=$arquivo['id'];?>/editar" class="btn btn-sm btn-success">Editar</a>
                    <a href="<?=$base;?>/admin/arquivos/<?=$arquivo['id'];?>/excluir" onclick="return confirm('Tem certeza que deseja excluir?')" alert alert-danger class="btn btn-sm btn-danger">Excluir</a></td>
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

          </div>
        </form>
    </section>

    <?=$render('footer');?>
</body>
</html>