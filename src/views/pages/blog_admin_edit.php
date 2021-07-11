
<?=$render('header');?>

<?=$render('menu');?>
<header>
        <div class="container">
        <header>
        <div class="container">
            
        </div>
    </header>
    <br/>
    <section class="container main">
            <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Editando Notícias</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" action="<?php echo $base;?>/admin/blog/<?=$blogs['id'];?>/editar" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Titulo da Noticia</label>
                  <input type="text" class="form-control" id="titulo" name="titulo" value="<?= $blogs['titulo']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Sub-titulo da Notícia</label>
                  <input type="text" class="form-control" id="sub_titulo" name="sub_titulo" value="<?= $blogs['sub-titulo']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Autor da Postagem</label>
                  <input type="text" class="form-control" id="autor" name="autor" value="<?= $blogs['autor']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Corpo da Noticia</label>
                  <textarea class="form-control" id="c_corpo" name="corpo" value="<?= $blogs['corpo']; ?>"></textarea>
                </div>
                <h3><p style="color: red;">Foto comum para a notícia</p></h3>
                <div class="form-group">
                  <label for="exampleInputFile">Foto para o blog</label>
                  <input type="file" id="photo" name="photo">
                </div>
                <h3><p style="color: red;">Atenção: só preencher o campo abaixo com uma imagem de 1400px por 800px </p></h3>
                <div class="form-group">

                  <label for="exampleInputFile">Foto de destaque para o blog</label>
                  <input type="file" id="photo" name="photo_banner">
                </div>
                  <h3>
              <p style="color: red;">Atenção: só preencher o campo abaixo caso queria deixar a noticia destacadas nos seguintes campos </p>
            </h3>
                <div class="form-group">
                  <label for="exampleInputFile">Noticia Nova? </label><br/>
                  <input type="checkbox" name="noticia_nova" />
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Noticia destacada no Banner Principal </label><br/>
                  <input type="checkbox"  name="noticia_destaque" />
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">exibir noticia na parte de Lembretes </label><br/>
                  <input type="checkbox" name="noticia_categoria" />
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
    <?=$render('footer');?>
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=eijpmc7sdy2yipxuifg9fvebqq3l49ius24593k4ou1i4f0d"></script>
<script type="text/javascript">
tinymce.init({
	selector:'#c_corpo',
	height:200,
  width:1000,
	menubar:false,
	plugins:[
		'textcolor image media lists'
	],
	toolbar:'undo redo | formatselect | media image | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist | removeformat'
});
</script>
</body>
</html>