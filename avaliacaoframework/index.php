<?php

$mainPosition = __DIR__;//constante do php que contem a posição do meu repositorio

//require_once("{$mainPosition}\bootstrap\Env.php");//require_once invoca no script. Forma de concatenar de forma inteligente variáveis com strings

//$env = new Env();
//dd($env);//dump

//dd(__DIR__);//constante mágica->tem a posição absoluta do diretório, que é o que faz referência nos arquivos

//dd(__DIR__); //metofd magico a posicao do diretorio,

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");


require_once("{$mainPosition}\helper\helper.php");
require_once("{$mainPosition}\\vendor\autoload.php");


use Bootstrap\Env;//use é equivalente ao require, se não der o use o pc nao vai saber que vc ta usando a classe
use App\FrameworkTools\ProcessServerElements;
use App\FrameworkTools\Implementation\FactoryMethods\FactoryProcessServerElement;
use App\FrameworkTools\Implementation\Route\RouteProcess;

Env::execute();//executa o codigo da classe env


$factoryProcessServerElement = new FactoryProcessServerElement();
$factoryProcessServerElement->operation();
//$processServerElements = ProcessServerElements::start();

RouteProcess::execute();
//dd($processServerElements);//para teste, roda e morre