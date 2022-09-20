<?php

namespace App\FrameworkTools\Implementation\FactoryMethods;

use App\FrameworkTools\Abstracts\FactoryMethods\AbstractFactoryMethods;
use App\FrameworkTools\ProcessServerElements;
use App\FrameworkTools\Implementation\FactoryMethods\BreakStringInVars;

class FactoryProcessServerElement extends AbstractFactoryMethods {
    
    use BreakStringInVars;

    private $processServerElements;

    public function __construct(){
        $this->processServerElements = ProcessServerElements::start();
    }

    public function operation(){

        //dd($_SERVER);
        $this->processServerElements->setDocumentRoot($_SERVER['DOCUMENT_ROOT']);
        $this->processServerElements->setServerName($_SERVER['SERVER_NAME']);
        $this->processServerElements->setHttpHost($_SERVER['HTTP_HOST']);
        $this->processServerElements->setUri($_SERVER['REQUEST_URI']);
        //d($_SERVER);variavel magica com todas as informações do meu servidor
        $this->breakStringInVars($_SERVER['REQUEST_URI']);

        $variables = $this->breakStringInVars($_SERVER['REQUEST_URI']);

        $this->processServerElements->setVariables($variables);
        $this->processServerElements->setVerb($_SERVER['REQUEST_METHOD']);
        $this->processServerElements->setRoute(explode("?",$_SERVER['REQUEST_URI'])[0]);//quebra uma String em um array
        //dd($this->processServerElements);// nao tem utilidade prática
    }
}

//classe que vai fabricar outra classe