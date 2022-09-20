<?php 

namespace App\FrameworkTools;

class ProcessServerElements {

    private static $instance;

    private $documentRoot;
    private $serverName;
    private $httpHost;
    private $uri;
    private $variables;
    private $verb;
    private $route;

    private function __construct(){//construtor privado pois nao quero dar new nele em outro lugar
        //SINGLETON: utilizando classe mantem o acesso a essa classe de maneira global, querendo acessar os objetos de diferentes ponto do sistema

    }

    public static function start(){
        if(!ProcessServerElements::$instance){//se instância é null segue usando o mesmo 
        //objeto criado na primeira vez depois do primeiro start, já que não vai 
        //cair mais na condição de ser nulo, então vai só retornar o objeto 
        //criado anteriormente{
            ProcessServerElements::$instance = new ProcessServerElements();//instance é o objeto, dois pontos representa estar acessando um aatributo estático
        }

        return ProcessServerElements::$instance;
    }

    public function getInputJSONData(){
        return (array) json_decode(file_get_contents('php://input',TRUE));   
    }

    public function setDocumentRoot($documentRoot){
        $this->documentRoot = $documentRoot;
    }

    public function getDocumentRoot(){
        return $this->documentRoot;
    }

    public function setServerName($serverName){
        $this->serverName = $serverName;
    }

    public function getServerName(){
        return $this->serverName;
    }

    public function setHttpHost($httpHost){
        $this->httpHost =  $httpHost;
    }

    public function getHttpHost(){
        return $this->httpHost;
    }

    public function setUri($uri){
        $this->uri =  $uri;
    }

    public function getUri(){
        return $this->uri;
    }

    public function setVariables($variables){
        $this->variables =  $variables;
    }

    public function getVariables(){
        return $this->variables;
    }

    public function setVerb($verb){
        $this->verb =  $verb;
    }

    public function getVerb(){
        return $this->verb;
    }

    public function setRoute($route){
        $this->route =  $route;
    }

    public function getRoute(){
        return $this->route;
    }
}