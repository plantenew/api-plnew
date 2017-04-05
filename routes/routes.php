<?php
/**
 * Created by PhpStorm.
 * User: Inimigo do Crime
 * Date: 04/04/2017
 * Time: 22:40
 */

require_once __DIR__.'./../vendor/autoload.php';

// Chamada de bibliotecas
use melhoridade\app\Banner\CadastroBanner;
use melhoridade\app\Noticias\Noticia;
use melhoridade\app\Dados\Dados;
use Silex\Application;

// Instancias
$app     = new Application();
$banner  = new CadastroBanner();
$noticia = new Noticia();

$app->get('/', function(){
    return 'Hello World';
});


$app->get('/banner', function(Application $app) use ($banner){
    return $app->json($banner->getBanners(), 200);
});


$app->run();