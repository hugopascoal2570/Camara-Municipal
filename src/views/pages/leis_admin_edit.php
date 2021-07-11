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
              <h3 class="box-title">Editando Leis</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" action="<?php echo $base; ?>/admin/leis/<?=$lei['id'];?>/editar" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Número</label>
                  <input type="text" class="form-control" name="numero" value="<?=$lei['number'];?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Ementa</label>
                  <input type="text" class="form-control" name="ementa" value="<?=$lei['description'];?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Ano</label>
                  <select name = "ano">
				            <option value="<?=$lei['year'];?>">Selecione um ano</option>
				            <?php
                      for ($i=1988; $i<=2025; $i++){ 
                    ?>
                    <option value="<?php echo $i;?>"> <?php echo $i;
                      }
                    ?>
                    </option>
               </select>
                </div>
                <div class="form-group">
                  <label for="date">Data de Publicação</label>
                  <input type="date" class="form-control" name="data" value="<?=$lei['date'];?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Arquivo da Lei</label>
                  <input type="file" name="arquivo" >
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
    <?=$render('footer');?>

</body>
</html>