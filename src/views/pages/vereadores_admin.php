
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
              <h3 class="box-title"> Vereadores</h3>
            </div>
            <br/>
            <a href="<?=$base;?>/admin/vereadores_add" class="btn btn-success ">Adicionar Vereadores </a>

            <br/><br/>lista de Vereadores 

 <!-- Main content -->
 <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lista de Vereadores</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nome</th>
                  <th>Partido</th>
                  <th>Naturalidade</th>
                  <th>escolaridade</th>
                  <th>Email</th>
                  <th>Ano Eleitoral</th>
                  <th>Cargo</th>
                  <th>Foto</th>
                  <th>Ações</th>
                </tr>
                <?php foreach($vereadores as $vereador):?>
                  <tr>
                    <td style="width: 15%;"><?=$vereador['nome'];?></td>
                    <td style="width: 5%;"><?=$vereador['partido'];?></td>
                    <td style="width: 10%;"><?=$vereador['naturalidade'];?></td>
                    <td style="width: 15%;"><?=$vereador['escolaridade'];?></td>

                    <td style="width: 10%;">
                    <?php if($vereador['email'] === 'Não foi informado'){
                      echo 'email não foi informado';
                    }else{
                      echo 'email foi informado';
                    }?></td>
                    
                    <td style="width: 8%;"><?=$vereador['ano_eleitoral'];?></td>

                    <td style="width: 15%;">
                    <?php if($vereador['cargo_mesa'] === ''){
                      echo 'Não é membro da mesa diretora';
                    }else{
                      echo $vereador['cargo_mesa'];
                    }?></td>
                    <td style="width: 80px;"><img src="<?=$base;?>/media/uploads/vereadores/<?=$vereador['FileName'];?>" width="60px" heigth="50px"></td>
                    <td><a href="<?=$base;?>/admin/vereadores/<?=$vereador['id'];?>/editar" class="btn btn-sm btn-success">Editar</a>
                    <a href="<?=$base;?>/admin/vereadores/<?=$vereador['id'];?>/excluir" onclick="return confirm('Tem certeza que deseja excluir?')" alert alert-danger class="btn btn-sm btn-danger">Excluir</a></td>
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