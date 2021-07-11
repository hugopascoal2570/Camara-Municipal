
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
              <h3 class="box-title"> Inserir Blog</h3>
            </div>
            <br/>
            <a href="<?=$base;?>/admin/blog_add" class="btn btn-success "> Adicionar Notícias no Blog </a>

            <br/><br/>Adicionar Notícias no Blog
          </div>
        </form>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lista de Blog</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Titulo</th>
                  <th>Sub-titulo</th>
                  <th>Autor</th>
                  <th>foto</th>
                  <th>Nova Noticia</th>
                  <th>Destaque</th>
                  <th>Lembrete</th>
                  <th>Ações</th>
                </tr>
                <?php foreach($blogs as $blog):?>
                  <tr>
                    <td style="width: 20%;"><?=$blog['titulo'];?></td>
                    <td style="width: 15%;"><?=$blog['sub-titulo'];?></td>
                    <td style="width: 5%;"><?=$blog['autor'];?></td>
                    <?php if($blog['foto_banner'] === ''){
                      echo 'não tem foto banner cadastrada';
                    }else{
                      
                    }?>
                    <td style="width: 10%;"><img src="<?=$base;?>/media/uploads/blog/<?=$blog['foto_banner'];?>" width="50" height="50" target="_blank"></td>
                    <td style="width: 10%;">
                    <?php if($blog['nova_noticia'] === '0'){
                      echo 'Não é nova noticia';
                    }else{
                      echo 'Noticia Nova';
                    }?></td>
                    <td style="width: 10%;">
                    <?php if($blog['destaque'] === '0'){
                      echo 'Não destacada';
                    }else{
                      echo 'destacada';
                    }?></td>
                    <td style="width: 10%;">
                    <?php if($blog['lembrete'] === ''){
                      echo 'Sem categoria definida';
                    }else{
                      echo $blog['lembrete'];
                    }?></td>

                    <td style="width: 15%;"><a href="<?=$base;?>/admin/blog/<?=$blog['id'];?>/editar" class="btn btn-sm btn-success">Editar</a>
                    <a href="<?=$base;?>/admin/blog/<?=$blog['id'];?>/excluir" onclick="return confirm('Tem certeza que deseja excluir?')" alert alert-danger class="btn btn-sm btn-danger">Excluir</a></td>
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