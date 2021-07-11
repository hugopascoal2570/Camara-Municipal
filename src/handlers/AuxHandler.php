<?php
namespace src\handlers;

use \src\models\Law;
use src\models\Vere;

class AuxHandler {

    public static function leisIndex($page){
       // $perPage =15;
       
        $leis = Law::select()->where('year','=','2019')->execute();

        // $leis = Law::select()->where('year','=','2009')->page($page, $perPage)->get();
       
        //$total = Law::select()->where('year','=','2009')->count();

       // $pageCount = ceil($total/$perPage);

       //$pageCount = ceil($total/$perPage);
        

        return [
        'leis'=>$leis
        //'pageCount'=>$pageCount
    ];
    }

    public static function leisAno($page,$ano){
       // $perPage =15;

  $leis = Law::select()->where('year','=',$ano)->execute();


       // $leis = Law::select()->where('year','=',$ano)->page($page, $perPage)->get();

        //$total = Law::select()->where('year','=',$ano)->count();
        
       // $pageCount = ceil($total/$perPage);
        return[
        'leis'=>$leis
       // 'pageCount'=>$pageCount
        ];
    }

    public static function leisAdmin($page,$ano){
        $leis = Law::select()->where('year',$ano)->execute();
       
        // $perPage =15;

       // $leis = Law::select()->where('year',$ano)->page($page, $perPage)->get();

        //$total = Law::select()->where('year',$ano)->count();

        //$pageCount = ceil($total/$perPage);
        
        return[
        'leis'=>$leis
        //'pageCount'=>$pageCount
        ];
    }


    public static function projetosIndex($page){
        $projetos = Law::select()->where('projeto','1')->execute();
      
        // $perPage =15;

        //$projetos = Law::select()->where('projeto','1')->page($page, $perPage)->get();

       // $total = Law::select()->where('projeto','1')->count();

        //$pageCount = ceil($total/$perPage);

        return[
            'projetos'=> $projetos
            //'pageCount'=> $pageCount
            ];
    }

    public static function projetos($page,$projetos){
    $projetos = Law::select()->where('projeto','=','1')->where('year', $projetos)->execute();   
        //$perPage =15;

        //$projetos = Law::select()->where('projeto',1)->where('year', $projetos)->page($page, $perPage)->get();

       //$total = Law::select()->where('projeto',1)->where('year', $projetos)->count();

       // $pageCount = ceil($total/$perPage);
        
        return[
        'projetos'=> $projetos
       // 'pageCount'=> $pageCount
        ];
    }
    public static function projetosAno($page,$projetos){
    $projetos = Law::select()->where('projeto','=','1')->where('year', $projetos)->execute();    
        
        //$perPage =15;

        //$projetos = Law::select()->where('projeto','=','1')->where('year', $projetos)->page($page, $perPage)->get();

        //$total = Law::select()->where('projeto','=','1')->where('year', $projetos)->count();

        //$pageCount = ceil($total/$perPage);
        
        return[
        'projetos'=> $projetos
        //'pageCount'=> $pageCount
        ];
    }
    public static function mesaIndex($page,$mandato_mesa){
        $mesas = Vere::select()->where('ano_eleitoral','2021')->where('mesa', '1')->execute();    
            
            //$perPage =15;
    
            //$projetos = Law::select()->where('projeto','=','1')->where('year', $projetos)->page($page, $perPage)->get();
    
            //$total = Law::select()->where('projeto','=','1')->where('year', $projetos)->count();
    
            //$pageCount = ceil($total/$perPage);
            
            return[
            'mesas'=> $mesas
            //'pageCount'=> $pageCount
            ];
        }
        public static function mesaAno($page,$mandato_mesa){
            $mesas = Vere::select()->where('ano_eleitoral',$mandato_mesa)->where('mesa', '1')->execute();    
                
                //$perPage =15;
        
                //$projetos = Law::select()->where('projeto','=','1')->where('year', $projetos)->page($page, $perPage)->get();
        
                //$total = Law::select()->where('projeto','=','1')->where('year', $projetos)->count();
        
                //$pageCount = ceil($total/$perPage);
                
                return[
                'mesas'=> $mesas
                //'pageCount'=> $pageCount
                ];
            } 

    public static function vereadoresIndex($mandato){
                $vereadores = Vere::select()->where('ano_eleitoral', '=', '2021')->execute();
                return [
                    'vereadores'=> $vereadores
                ];
            }
                


    public static function vereadoresAno($mandato){
        $vereadores = Vere::select()->where('ano_eleitoral', '=', $mandato)->execute();
        return [
            'vereadores'=> $vereadores
        ];
    }
}