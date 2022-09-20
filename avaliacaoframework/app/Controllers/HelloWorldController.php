<?php
namespace App\Controllers;

use App\FrameworkTools\Abstracts\Controllers\AbstractControllers;

class HelloWorldController extends AbstractControllers{

    public function execute(){
        $requestVariables = $this->processServerElements->getVariables();
        
        $valueOfVariable;

        foreach ($requestVariables as $value){
            if($value["name"] == "info"){
                $valueOfVariable = $value["value"];
            }
        }
        view(
            ["name" => "Api to Learning", 
            "version" => 1.0, 
            "value_of_variable_info" => $valueOfVariable, 
            "manager_developer" => "Mariana Egypto Feigel", 
            "web_site_company"=>"https://mef.com"]
        );
    }

}

