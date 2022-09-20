<?php

namespace App\FrameworkTools\Implementation\Route;

use App\FrameworkTools\ProcessServerElements;

use App\Controllers\HelloWorldController;

use App\Controllers\TrainQueryController;

use App\Controllers\InsertDataController;

use App\Controllers\AvController;

class RouteProcess{

    public static function execute(){
        $processServerElements = ProcessServerElements::start();
        $routeArray =[];
        switch($processServerElements->getVerb()){
            case'GET':
                switch($processServerElements->getRoute()){
                   case '/hello-world':
                    return (new HelloWorldController)->execute(); 
                   break;

                   case '/train-query':
                    return(new TrainQueryController)->execute();
                    break;
                    case '/car':
                        return (new AvController)->getCar();
                    break;

                    case '/car/id-car':
                        return (new AvController)->getCarId();
                    break;

                    case '/car/name-car':
                        return (new AvController)->getCarName();
                    break;

                    case '/seller':
                        return (new AvController)->getSeller();
                    break;

                    case '/seller/id-seller':
                        return (new AvController)->getSellerId();
                    break;

                    case '/seller/name-seller':
                        return (new AvController)->getSellerName();
                    break;

                    case '/seller/get-all-cars-seller':
                        return (new AvController)->getSales();
                    break;

                    case '/buyer':
                        return (new AvController)->getBuyer();
                    break;

                    case '/buyer/id-buyer':
                        return (new AvController)->getBuyerId();
                    break;

                    case '/buyer/name-buyer':
                        return (new AvController)->getBuyerName();
                    break;

                    case '/buyer/get-all-cars':
                        return (new AvController)->getBuyerCars();
                    break;
                }
            //break;
        }
    }
}