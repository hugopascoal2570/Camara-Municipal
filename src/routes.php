<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/home','HomeController@inicio');
$router->get('/admin', 'AdminController@index');
$router->get('/ano', 'HomeController@ano');
$router->post('/ano/{page}/', 'HomeController@ano');
$router->get('/mandato', 'HomeController@mandato');
$router->get('/ano_projeto', 'HomeController@projeto');
$router->get('/mandato_mesa', 'HomeController@mandato_mesa');
$router->get('/blog', 'HomeController@blog');
$router->get('/blog/{id}/', 'HomeController@blogView');
$router->post('/blog/{id}/', 'HomeController@blogViewAction');

//-----------------------rotas ADM Login----------------------------------//

$router->get('/admin/login','LoginController@signin');
$router->post('/admin/login','LoginController@signinAction');

//-----------------------rotas ADM Usuario--------------------------------//

$router->get('/admin/usuario','AdminController@user');
$router->get('/admin/usuarios_add','AdminController@userAdd');
$router->post('/admin/usuarios_add', 'AdminController@UsuariosAddAction');

//-----------------------rotas ADM Leis----------------------------------//

$router->get('/admin/leis', 'AdminController@leis');
$router->get('/admin/leis_add', 'AdminController@leisAdd');
$router->get('/ano_admin', 'AdminController@leis');
$router->post('/admin/leis_add', 'AdminController@LeisAddAction');
$router->get('/admin/leis/{id}/editar','AdminController@leisEdit');
$router->post('/admin/leis/{id}/editar','AdminController@leisEditAction');
$router->get('/admin/leis/{id}/excluir','AdminController@leisDel');

//----------------------rotas ADM vereadores------------------------------//

$router->get('/admin/vereadores', 'AdminController@vereadores');
$router->get('/admin/vereadores_add', 'AdminController@vereadoresAdd');
$router->post('/admin/vereadores_add', 'AdminController@vereadoresAddAction');
$router->get('/admin/vereadores/{id}/editar','AdminController@vereadoresEdit');
$router->post('/admin/vereadores/{id}/editar','AdminController@vereadoresEditAction');
$router->get('/admin/vereadores/{id}/excluir','AdminController@vereadoresDel');


//----------------------rotas ADM Blog------------------------------//

$router->get('/admin/blog', 'AdminController@blog');
$router->get('/admin/blog_add', 'AdminController@blogAdd');
$router->post('/admin/blog_add', 'AdminController@blogAddAction');
$router->get('/admin/blog/{id}/editar', 'AdminController@blogEdit');
$router->post('/admin/blog/{id}/editar', 'AdminController@blogEditAction');
$router->get('/admin/blog/{id}/excluir', 'AdminController@blogDel');

//----------------------rotas ADM Arquivos------------------------------//

$router->get('/admin/arquivos', 'AdminController@arquivos');
$router->get('/admin/arquivos_add', 'AdminController@arquivosAdd');
$router->post('/admin/arquivos_add', 'AdminController@arquivosAddAction');



//----------------------rotas ADM Logout------------------------------//

$router->get('/admin/logout','LoginController@logout');



