<?php

namespace App\FrameworkTools\Abstracts\Controllers;

use App\FrameworkTools\ProcessServerElements;

abstract class AbstractControllers {//toda controller vai ser filha dessa classe

    protected $processServerElements;
    
    public function __construct(){
        $typeOfAPI = env('TYPE_API');
        header("Content-Type: application/$typeOfAPI");

        $this->processServerElements = ProcessServerElements::start();
    }

}