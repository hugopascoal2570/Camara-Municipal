<?php
namespace src\controllers;

use \core\Controller;
use src\handlers\LoginHandler;
use src\handlers\AuxHandler;
use \src\models\User;
use \src\models\Law;
use \src\models\Vere;
use \src\models\Mesa;
use \src\models\Blog;


class HomeController extends Controller {


    public function index() {
        //paginação
        $page =intval(filter_input(INPUT_GET,'page'));
        $mandato_mesa = filter_input(INPUT_GET,'mandato_mesa');
        $ano = filter_input(INPUT_GET,'ano');
        $projetos = filter_input(INPUT_GET,'ano_projeto');
        $mandato = filter_input(INPUT_GET,'mandato');
        $leis = AuxHandler::leisIndex($page,$ano);
        $projetos = AuxHandler::projetosIndex($page);
        $mesas = AuxHandler:: mesaIndex($page,$mandato_mesa);
        $vereadores = AuxHandler::vereadoresIndex($mandato);
        

        $this->render('HomeSite',[
        'projetos' => $projetos,
        'vereadores'=> $vereadores,
        'leis'=> $leis,
        'mesas' => $mesas,
        'projetos'=>$projetos

  
    ]);
    }

    public function ano(){

        $page =intval(filter_input(INPUT_GET,'page'));
        $ano = filter_input(INPUT_GET,'ano');
        $projetos = filter_input(INPUT_GET,'ano_projetos');
        $mandato_mesa = filter_input(INPUT_GET,'mandato_mesa');
        $vereadores = Vere::select()->execute();
        $leis = AuxHandler::leisAno($page,$ano);
        $mesas =  AuxHandler:: mesaIndex($page,$mandato_mesa);
        $projetos = AuxHandler::projetosIndex($page);

        $this->render('HomeSite',[
            'projetos'=> $projetos,
            'vereadores'=> $vereadores,
            'leis'=> $leis,
            'mesas' => $mesas,
            'projetos'=> $projetos

            ]);
    }

    public function projeto(){

        $page =intval(filter_input(INPUT_GET,'page'));
        $ano = filter_input(INPUT_GET,'ano');
        $projetos = filter_input(INPUT_GET,'ano_projetos');
    
        $vereadores = Vere::select()->execute();
        $mesas = Vere::select()->where('mesa', '1')->execute();
        $mandato = filter_input(INPUT_GET,'mandato');
        $leis = AuxHandler::leisIndex($page,$ano);
        $vereadores = Vere::select()->where('ano_eleitoral', $mandato)->execute();
        $projetos = AuxHandler::projetos($page,$projetos);
        

        $this->render('HomeSite',[
            'projetos'=> $projetos,
            'vereadores'=> $vereadores,
            'leis'=> $leis,
            'mesas' => $mesas,
            'projetos' => $projetos

            ]);
    }

    public function mandato(){
        $page =intval(filter_input(INPUT_GET,'page'));
        $mandato_mesa = filter_input(INPUT_GET,'mandato_mesa');
        $projetos = filter_input(INPUT_GET,'ano_projetos');
        $mandato = filter_input(INPUT_GET,'mandato');
        $ano_projetos = filter_input(INPUT_GET,'mandato');
        $ano = filter_input(INPUT_GET,'ano');
        $leis =  AuxHandler::leisIndex($page,$ano);
        $mesas = AuxHandler:: mesaIndex($page,$mandato_mesa);
        $vereadores = AuxHandler::vereadoresAno($mandato);
        $projetos = AuxHandler::projetosIndex($page);  
        
        $this->render('HomeSite',[
            'vereadores'=> $vereadores,
            'leis'=> $leis,
            'mesas' => $mesas,
            'projetos'=>$projetos
            
            ]);
            
    }
    
    public function mandato_mesa(){

        $page =intval(filter_input(INPUT_GET,'page'));
        $ano = filter_input(INPUT_GET,'ano');
        $projetos = filter_input(INPUT_GET,'ano_projeto');
        $mandato = filter_input(INPUT_GET,'mandato');
        $mandato_mesa = filter_input(INPUT_GET,'mandato_mesa');
        $leis = AuxHandler::leisIndex($page,$ano);
        $projetos = AuxHandler::projetosIndex($page);
        $vereadores = AuxHandler::vereadoresIndex($mandato);
        $mesas = AuxHandler::mesaAno($page,$mandato_mesa);
        

        $this->render('HomeSite',[
            'vereadores'=> $vereadores,
            'leis'=> $leis,
            'mesas' => $mesas,
            'projetos'=>$projetos
           
            ]);
    }

    public function blog(){

        
        $destaques = Blog::select()->where('destaque','1')->get();
        $blogs = Blog::select()->execute();
        $categorias = Blog::select()->limit(5)->execute();
        $novas = Blog::select()->where('nova_noticia', '1')->get();
        $lembretes = Blog::select()->where('lembrete', '1')->get();
        $this->render('blog',[
            'blogs' =>$blogs,
            'destaques'=>$destaques,
            'categorias' => $categorias,
            'novas' => $novas,
            'lembretes'=>$lembretes
        ]);
    }
    public function blogView($args){
        $blogs = Blog::select()->find($args['id']);
        $blog = Blog::select()->execute();

        $this->render('blog_view',[
            'blogs' =>$blogs,
            
        ]);
    }
}