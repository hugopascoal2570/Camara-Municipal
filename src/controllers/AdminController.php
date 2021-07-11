<?php

namespace src\controllers;


use ClanCats\Hydrahon\Query\Sql\Table;
use \core\Controller;
use \src\handlers\LoginHandler;
use \src\handlers\AuxHandler;
use \src\models\User;
use \src\models\Law;
use \src\models\Vere;
use \src\models\Blog;
use \src\models\File;


class AdminController extends Controller{

    private $loggedUser;

    public function __construct()
    {
        $this->loggedUser = LoginHandler::checkLogin();
        if ($this->loggedUser === false) {
            $this->redirect('/admin/login');
        }
    }

    public function user(){
        $usuarios = User::select()->execute();
        $this->render('usuario_add',[
            'usuarios'=>$usuarios
        ]);
}

    public function userAdd(){
        $this->render('usuarios_add');
    }

    public  function UsuariosAddAction(){

        $nome = filter_input(INPUT_POST,'nome');
        $email = filter_input(INPUT_POST,'email');
        $password =filter_input(INPUT_POST,'password');
        $arquivo = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
        $nome_arquivo = $_FILES['arquivo']['name'];

        $formatosPermitidos = array('jpg');
        $extensao = substr($_FILES['arquivo']['name'], -4);
        $novo_nome = md5(time()) . $extensao;
        $diretorio = 'D:/xampp/htdocs/PainelCamaraMVC/public/media/uploads/usuarios/';

        move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . $novo_nome);

        $hash = password_hash($password, PASSWORD_DEFAULT);
        $token = md5(time().rand(0,9999).time());

    // var_dump($nome);
    // var_dump($email);
    //var_dump($hash);
    //var_dump($token);
    //var_dump($novo_nome);
    //exit;

    }

    public function index()
    {
        $this->render('homeadm');
    }
    //leis

    public function leis(){

        $page =intval(filter_input(INPUT_GET,'page'));
        $ano = filter_input(INPUT_GET,'ano');
        $leis =AuxHandler::leisAdmin($page,$ano);
        $leis = Law::select()->where('year',$ano)->execute();

        if($ano ==''){
            $leis = Law::select()->where('year','2020')->execute();
        }

        $this->render('leis_admin', [
            'leis' => $leis

        ]);
    }

    public function leisAdd()
    {
        $this->render('leis_add_admin');
    }

    public function LeisAddAction()
    {
        $number = filter_input(INPUT_POST, 'numero');
        $description = filter_input(INPUT_POST, 'ementa');
        $year = filter_input(INPUT_POST, 'ano');
        $date = filter_input(INPUT_POST, 'data');
        $arquivo = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
        $nome_arquivo = $_FILES['arquivo']['name'];
        $projeto = filter_input(INPUT_POST, 'projeto');



        if (empty($projeto)) {
            $projeto = '';
        }
        if ($projeto != '') {
            $projeto = '1';
        }


        $formatosPermitidos = array('pdf');
        $extensao = substr($_FILES['arquivo']['name'], -4);
        $novo_nome = md5(time()) . $extensao;
        $diretorio = 'D:/xampp/htdocs/PainelCamaraMVC/public/media/uploads/leis/';

        move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . $novo_nome);


        if ($number && $description && $year && $date) {
            //insere  
            Law::insert([
                'number' => $number,
                'projeto' => $projeto,
                'description' => $description,
                'year' =>  $year,
                'date' => $date,
                'FileName' => $novo_nome,
                'OriginalName' => $nome_arquivo,

            ])->execute();
            // redirect para home
            $this->redirect('/admin/leis');
            exit;
        }
        // redirect para o add
        $this->redirect('/admin/leis_add');
    }

    public function leisEdit($args)
    {

        $lei = Law::select()->find($args['id']);

        $this->render('leis_admin_edit', [
            'lei' => $lei
        ]);
    }

    public function leisEditAction($args)
    {
        $number = filter_input(INPUT_POST, 'numero');
        $description = filter_input(INPUT_POST, 'ementa');
        $year = filter_input(INPUT_POST, 'ano');
        $date = filter_input(INPUT_POST, 'data');
        $arquivo = filter_input(INPUT_POST, 'arquivo', FILTER_SANITIZE_STRING);
        $nome_arquivo = $_FILES['arquivo']['name'];
        $projeto = filter_input(INPUT_POST, 'projeto');

        if (empty($projeto)) {
            $projeto = '';
        }
        if ($projeto != '') {
            $projeto = '1';
        }
        $formatosPermitidos = array('pdf');
        $extensao = substr($_FILES['arquivo']['name'], -4);
        $novo_nome = md5(time()) . $extensao;
        $diretorio = 'D:/xampp/htdocs/PainelCamaraMVC/public/media/uploads/leis/';

        move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . $novo_nome);


        if ($number && $description && $year && $date) {

            Law::update()
                ->set('number', $number)
                ->set('description', $description)
                ->set('projeto', $projeto)
                ->set('year',  $year)
                ->set('date', $date)
                ->set('FileName', $novo_nome)
                ->set('OriginalName', $nome_arquivo)
                ->where('id', $args['id'])
                ->execute();

            $this->redirect('/admin/leis');
        }
        $this->redirect('/admin/leis/' . $args['id'] . '/editar');
    }

    public function leisDel($args)
    {
        Law::delete()->where('id', $args['id'])->execute();
        $this->redirect('/admin/leis');
    }


    //-------------------------Vereadores-----------------------------------------------//


    public function vereadores()
    {

        $vereadores = Vere::select()->execute();

        $this->render('vereadores_admin', [
            'vereadores' => $vereadores
        ]);
    }

    public function vereadoresAdd()
    {
        $this->render('vereadores_add_admin');
    }
    public function vereadoresAddAction()
    {
        $nome = filter_input(INPUT_POST, 'nome');
        $partido = filter_input(INPUT_POST, 'partido');
        $descricao = filter_input(INPUT_POST, 'descricao');
        $data_nasc = filter_input(INPUT_POST, 'nascimento');
        $naturalidade = filter_input(INPUT_POST, 'naturalidade');
        $estado = filter_input(INPUT_POST, 'estado');
        $escolaridade = filter_input(INPUT_POST, 'escolaridade');
        $facebook = filter_input(INPUT_POST, 'facebook');
        $twitter = filter_input(INPUT_POST, 'twitter');
        $email = filter_input(INPUT_POST, 'email');
        $arquivo = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
        $nome_arquivo = $_FILES['arquivo']['name'];
        $mesa = filter_input(INPUT_POST, 'mesa');
        $ano_eletivo = filter_input(INPUT_POST, 'ano_eletivo');
        $cargo = filter_input(INPUT_POST, 'cargo');
        $mandato = filter_input(INPUT_POST, 'mandato');


        if ($mesa == NULL) {
            $mesa = 0;
        } else {
            $mesa = 1;
        }

        if (empty($cargo)) {
            $cargo = '';
        }

        if ($cargo != '') {
            $mesa = '1';
        }

        if (empty($descricao)) {
            $descricao = ' ';
        }

        if (empty($facebook)) {
            $facebook = 'Não foi informado';
        }
        if (empty($twitter)) {
            $twitter = 'Não foi informado';
        }
        if (empty($email)) {
            $email = 'Não foi informado';
        }

        $formatosPermitidos = array('png', 'jpg');
        $extensao = substr($_FILES['arquivo']['name'], -4);
        $novo_nome = md5(time()) . '.'.$extensao;
        $diretorio = 'D:/xampp/htdocs/PainelCamaraMVC/public/media/uploads/vereadores/';

        move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . $novo_nome);


        if ($nome && $partido && $descricao && $data_nasc && $naturalidade && $estado && $escolaridade && $arquivo) {
            
            //insere  
            Vere::insert([
                'nome' => $nome,
                'partido' => $partido,
                'descricao' =>  $descricao,
                'data_nasc' => $data_nasc,
                'naturalidade' => $naturalidade,
                'estado_civil' => $estado,
                'ano_eleitoral' => $ano_eletivo,
                'escolaridade' => $escolaridade,
                'FileName' => $novo_nome,
                'facebook' => $facebook,
                'twitter' => $twitter,
                'email' => $email,
                'mesa' => $mesa,
                'cargo_mesa' => $cargo,
                'OriginalName' => $nome_arquivo
            ])->execute();
            // redirect para home
            $this->redirect('/admin/vereadores');
            exit;
        }
        // redirect para o add
        $this->redirect('/admin/vereadores_add');
    }

    public function vereadoresEdit($args)
    {

        $vereadores = Vere::select()->find($args['id']);

        $this->render('vereadores_admin_edit', [
            'vereadores' => $vereadores
        ]);
    }

    public function vereadoresEditAction($args)
    {
        $nome = filter_input(INPUT_POST, 'nome');
        $partido = filter_input(INPUT_POST, 'partido');
        $descricao = filter_input(INPUT_POST, 'descricao');
        $data_nasc = filter_input(INPUT_POST, 'data_nasc');
        $naturalidade = filter_input(INPUT_POST, 'naturalidade');
        $estado_civil = filter_input(INPUT_POST, 'estado_civil');
        $escolaridade = filter_input(INPUT_POST, 'escolaridade');
        $facebook = filter_input(INPUT_POST, 'facebook');
        $twitter = filter_input(INPUT_POST, 'twitter');
        $email = filter_input(INPUT_POST, 'email');
        $mesa = filter_input(INPUT_POST, 'mesa');
        $ano_eletivo = filter_input(INPUT_POST, 'ano_eletivo');
        $cargo = filter_input(INPUT_POST, 'cargo');
        $arquivo = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);


        if (empty($cargo)) {
            $cargo = '';
        }
        if ($mesa == NULL) {
            $mesa = 0;
        } else {
            $mesa = 1;
        }


        if (empty($facebook)) {
            $facebook = 'Não foi informado';
        }
        if (empty($twitter)) {
            $twitter = 'Não foi informado';
        }
        if (empty($email)) {
            $email = 'Não foi informado';
        }


        $arquivo = filter_input(INPUT_POST, 'arquivo', FILTER_SANITIZE_STRING);
        $nome_arquivo = $_FILES['arquivo']['name'];

        if (empty($facebook)) {
            $facebook = 'Não foi informado';
        }
        if (empty($twitter)) {
            $twitter = 'Não foi informado';
        }
        if (empty($email)) {
            $email = 'Não foi informado';
        }

        $formatosPermitidos = array('jpg');
        $extensao = substr($_FILES['arquivo']['name'], -4);
        $novo_nome = md5(time()) .'.'.$extensao;
        $diretorio = 'D:/xampp/htdocs/PainelCamaraMVC/public/media/uploads/vereadores/';

        move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . $novo_nome);


        if (
            $nome && $partido && $descricao && $data_nasc && $naturalidade
            && $estado_civil && $escolaridade && $facebook && $twitter && $email && $mesa
        ) {

            Vere::update()
                ->set('nome', $nome)
                ->set('partido', $partido)
                ->set('mesa', $mesa)
                ->set('cargo_mesa', $cargo)
                ->set('descricao',  $descricao)
                ->set('ano_eleitoral', $ano_eletivo)
                ->set('data_nasc',  $data_nasc)
                ->set('naturalidade', $naturalidade)
                ->set('estado_civil', $estado_civil)
                ->set('escolaridade', $escolaridade)
                ->set('facebook', $facebook)
                ->set('twitter', $twitter)
                ->set('email', $email)
                ->set('FileName', $novo_nome)
                ->set('OriginalName', $nome_arquivo)
                ->where('id', $args['id'])
                ->execute();

            $this->redirect('/admin/vereadores');
        }
        $this->redirect('/admin/vereadores/' . $args['id'] . '/editar');
    }

    public function vereadoresDel($args)
    {
        Vere::delete()->where('id', $args['id'])->execute();
        $this->redirect('/admin/vereadores');
    }

    //------------------------------Blog---------------------------------------------//

    public function blog()
    {

        $blogs = Blog::select()->execute();

        $this->render('blog_admin', [
            'blogs' => $blogs
        ]);
    }

    public function blogAdd()
    {
        $this->render('blog_admin_add');
    }

    public function blogAddAction()
    {
        $titulo = filter_input(INPUT_POST, 'titulo');
        $sub_titulo = filter_input(INPUT_POST, 'sub_titulo');
        $autor = filter_input(INPUT_POST, 'autor');
        $corpo = filter_input(INPUT_POST, 'corpo');
        $photo  = filter_input(INPUT_POST, 'photo', FILTER_SANITIZE_STRING);
        $photo_banner  = filter_input(INPUT_POST, 'photo_banner', FILTER_SANITIZE_STRING);
        $noticia_nova = filter_input(INPUT_POST, 'noticia_nova');
        $noticia_destaque = filter_input(INPUT_POST, 'noticia_destaque');
        $noticia_lembrete = filter_input(INPUT_POST, 'noticia_lembrete');
        $categoria  = filter_input(INPUT_POST, 'categoria');

        $titulo_amigavel =  preg_replace('/[ -]+/', '-', $titulo);


        if (empty($noticia_nova)) {
            $noticia_nova = '';
        } else {
            $noticia_nova = '1';
        }
        if (empty($noticia_categoria)) {
            $noticia_categoria = '';
        }else{
            $noticia_categoria = '1';
        }
        if (empty($noticia_destaque)) {
            $noticia_destaque = '';
        } else {
            $noticia_destaque = '1';
        }
        // foto capa
        $formatosPermitidos = array('jpg');
        $extensao = substr($_FILES['photo']['name'], -4);
        $novo_nome = md5(time()) . $extensao;
        $diretorio = 'D:/xampp/htdocs/PainelCamaraMVC/public/media/vereadores/';

        move_uploaded_file($_FILES['photo']['tmp_name'], $diretorio . $novo_nome);

        // foto banner 
        $formatosPermitidos = array('jpg');
        $extensao_banner = substr($_FILES['photo_banner']['name'], -4);
        $photo_banner = md5(time()) . 'photo_banner' . $extensao_banner;
        $diretorio_banner = 'D:/xampp/htdocs/PainelCamaraMVC/public/media/uploads/blog/';

        move_uploaded_file($_FILES['photo_banner']['tmp_name'], $diretorio_banner . $photo_banner);


        if ($titulo && $sub_titulo && $autor && $corpo) {
            $data = Blog::select()->where('titulo', $titulo)->execute();
            //insere  
            Blog::insert([
                'titulo' => $titulo,
                'sub-titulo' => $sub_titulo,
                'autor' =>  $autor,
                'corpo' => $corpo,
                'categoria' => $categoria,
                'foto' => $novo_nome,
                'nova_noticia' => $noticia_nova,
                'destaque' => $noticia_destaque,
                'lembrete' => $noticia_categoria,
                'foto_banner' => $photo_banner,
                'titulo_amigavel' => $titulo_amigavel

            ])->execute();
            // redirect para home
            $this->redirect('/admin/blog');
            exit;
        }
        // redirect para o add
        $this->redirect('/admin/blog_add');
    }

    public function blogEdit($args)
    {

        $blogs = Blog::select()->find($args['id']);

        $this->render('blog_admin_edit', [
            'blogs' => $blogs
        ]);
    }

    public function blogEditAction($args){
        $titulo = filter_input(INPUT_POST, 'titulo');
        $sub_titulo = filter_input(INPUT_POST, 'sub_titulo');
        $autor = filter_input(INPUT_POST, 'autor');
        $corpo = filter_input(INPUT_POST, 'corpo');
        $photo  = filter_input(INPUT_POST, 'photo', FILTER_SANITIZE_STRING);
        $photo_banner  = filter_input(INPUT_POST, 'photo_banner', FILTER_SANITIZE_STRING);
        $noticia_nova = filter_input(INPUT_POST, 'noticia_nova');
        $noticia_destaque = filter_input(INPUT_POST, 'noticia_destaque');
        $noticia_categoria = filter_input(INPUT_POST, 'noticia_categoria');

        $titulo_amigavel =  preg_replace('/[ -]+/', '-', $titulo);

        if (empty($noticia_nova)) {
            $noticia_nova = '';
        } else {
            $noticia_nova = '1';
        }
        if (empty($noticia_categoria)) {
            $noticia_categoria = '';
        }
        if (empty($noticia_destaque)) {
            $noticia_destaque = '';
        } else {
            $noticia_destaque = '1';
        }
        // foto capa
        $formatosPermitidos = array('jpg');
        $extensao = substr($_FILES['photo']['name'], -4);
        $novo_nome = md5(time()) . $extensao;
        $diretorio = 'D:/xampp/htdocs/PainelCamaraMVC/public/media/uploads/blog/';

        move_uploaded_file($_FILES['photo']['tmp_name'], $diretorio . $novo_nome);

        // foto banner 
        $formatosPermitidos = array('jpg');
        $extensao_banner = substr($_FILES['photo_banner']['name'], -4);
        $photo_banner = md5(time()) . 'photo_banner' . $extensao_banner;
        $diretorio_banner = 'D:/xampp/htdocs/PainelCamaraMVC/public/media/uploads/blog/';

        move_uploaded_file($_FILES['photo_banner']['tmp_name'], $diretorio_banner . $photo_banner);
        if ($titulo && $sub_titulo && $autor && $corpo) {
            Blog::update()

                ->set('titulo', $titulo)
                ->set('sub-titulo', $sub_titulo)
                ->set('autor',  $autor)
                ->set('corpo', $corpo)
                ->set('foto', $novo_nome)
                ->set('nova_noticia', $noticia_nova)
                ->set('destaque', $noticia_destaque)
                ->set('lembrete', $noticia_categoria)
                ->set('foto_banner', $photo_banner)
                ->set('titulo_amigavel', $titulo_amigavel)
                ->where('id', $args['id'])
                ->execute();

            $this->redirect('/admin/blog');
        }
        $this->redirect('/admin/blog/' . $args['id'] . '/editar');
    }

    public function blogDel($args)
    {
        Blog::delete()->where('id', $args['id'])->execute();
        $this->redirect('/admin/blog');
    }

    public function arquivos(){
        $arquivos = File::select()->execute();
        $this->render('arquivos_admin',[
            'arquivos'=>$arquivos
        ]);
    }
    public function arquivosAdd(){
        $arquivos = File::select()->execute();
        $this->render('arquivos_admin_add',[
            'arquivos'=>$arquivos
        ]);
    }

    public function arquivosAddAction(){

        $arquivo = filter_input(INPUT_POST, 'arquivo', FILTER_SANITIZE_STRING);

        $original_name = $_FILES['arquivo']['name'];
         // foto capa
         $formatosPermitidos = array('jpg');
         $extensao = substr($_FILES['arquivo']['name'], -4);
         $novo_nome = md5(time()) . $extensao;
         $diretorio = 'D:/xampp/htdocs/PainelCamaraMVC/public/media/uploads/arquivos/';
 
         move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . $novo_nome);


         if ($_FILES['arquivo']){
            File::insert([
                'nome_arquivo' => $novo_nome,
                'original_name' => $original_name
            ])->execute();
            // redirect para home
            $this->redirect('/admin/arquivos');
            exit;
        }
        // redirect para o add
        $this->redirect('/admin/arquivos_add');
    }
}
