<?php

namespace App\Controllers;

use App\FrameworkTools\Abstracts\Controllers\AbstractControllers;

use App\FrameworkTools\Database\DatabaseConnection;

class AvController extends AbstractControllers{

    public function getCar() {

        $databaseConnection = DatabaseConnection::start()->getPDO();
        $users = $databaseConnection
                ->query("SELECT * FROM car;") /*retorna todos os carros*/
                ->fetchAll();
        view($users);
    }
    
    public function getCarId() {

        $requestsVariables = $this->processServerElements->getVariables();
        $valueOfVariable;
        foreach ($requestsVariables as $value) {
                $valueOfVariable = $value["value"];
        }
        $databaseConnection = DatabaseConnection::start()->getPDO();
        $users = $databaseConnection
                ->query("SELECT * FROM car WHERE id_car = '{$valueOfVariable}';")/*retorna os carros com determinado id*/
                ->fetchAll();
        view($users);

    }
    
    public function getCarName() {

        $requestsVariables = $this->processServerElements->getVariables();
        $valueOfVariable;
        foreach ($requestsVariables as $value) {
                $valueOfVariable = $value["value"];
        }
        $databaseConnection = DatabaseConnection::start()->getPDO();
        $users = $databaseConnection
                ->query("SELECT * FROM car WHERE name = '{$valueOfVariable}';")/*retorna todos os carros com determinado nameCar*/
                ->fetchAll();
        view($users);

    }

    public function getSeller() {

        $databaseConnection = DatabaseConnection::start()->getPDO();
        $users = $databaseConnection
                ->query("SELECT * FROM seller;")/*retorna todos os vendedores*/
                ->fetchAll();
        view($users);

    }
    
    public function getSellerId() {

        $requestsVariables = $this->processServerElements->getVariables();
        $valueOfVariable;
        foreach ($requestsVariables as $value) {
                $valueOfVariable = $value["value"];
        }
        $databaseConnection = DatabaseConnection::start()->getPDO();
        $users = $databaseConnection
                ->query("SELECT * FROM seller WHERE id_seller = '{$valueOfVariable}';")/*retorna todos os vendedores com determinado id*/
                ->fetchAll();
        view($users);

    }
    
    public function getSellerName() {

        $requestsVariables = $this->processServerElements->getVariables();
        $valueOfVariable;
        foreach ($requestsVariables as $value) {
                $valueOfVariable = $value["value"];
        }
        $databaseConnection = DatabaseConnection::start()->getPDO();
        $users = $databaseConnection
                ->query("SELECT * FROM seller WHERE name = '{$valueOfVariable}';")/*retorna todos os vendedores com o nome nameSeller*/
                ->fetchAll();
        view($users);

    }
    
    public function getSales() {

        $requestsVariables = $this->processServerElements->getVariables();
        $valueOfVariable;
        foreach ($requestsVariables as $value) {
                $valueOfVariable = $value["value"];
        }
        $databaseConnection = DatabaseConnection::start()->getPDO();
        $users = $databaseConnection
                ->query("SELECT * FROM car WHERE car.id_car IN (SELECT sells.id_car FROM sells WHERE sells.id_seller = (SELECT seller.id_seller FROM seller WHERE seller.id_seller = '{$valueOfVariable}'));")/*retorna todos os carros vendidos por nameSeller*/
                ->fetchAll();
        view($users);

    }

    public function getBuyer() {

        $databaseConnection = DatabaseConnection::start()->getPDO();
        $users = $databaseConnection
                ->query("SELECT * FROM buyer;")/*retorna todos os compradores*/
                ->fetchAll();
        view($users);

    }
    
    public function getBuyerId() {

        $requestsVariables = $this->processServerElements->getVariables();
        $valueOfVariable;
        foreach ($requestsVariables as $value) {
                $valueOfVariable = $value["value"];
        }
        $databaseConnection = DatabaseConnection::start()->getPDO();
        $users = $databaseConnection
                ->query("SELECT * FROM buyer WHERE id_buyer = '{$valueOfVariable}';")/*retorna todos os compradores com determinado id*/
                ->fetchAll();
        view($users);

    }
    
    public function getBuyerName() {

        $requestsVariables = $this->processServerElements->getVariables();
        $valueOfVariable;
        foreach ($requestsVariables as $value) {
                $valueOfVariable = $value["value"];
        }
        $databaseConnection = DatabaseConnection::start()->getPDO();
        $users = $databaseConnection
                ->query("SELECT * FROM buyer WHERE name = '{$valueOfVariable}';")/*retorna todos os compradores com o nome nameBuyer */
                ->fetchAll();
        view($users);

    }
    
    public function getBuyerCars() {

        $requestsVariables = $this->processServerElements->getVariables();
        $valueOfVariable;
        foreach ($requestsVariables as $value) {
                $valueOfVariable = $value["value"];
        }
        $databaseConnection = DatabaseConnection::start()->getPDO();
        $users = $databaseConnection
                ->query("SELECT * FROM car WHERE car.id_car IN ( SELECT sells.id_car FROM sells WHERE sells.id_buyer = (SELECT buyer.id_buyer FROM buyer WHERE buyer.id_buyer = '{$valueOfVariable}'));")/*retorna todos os carros comprados por nameBuyer*/
                ->fetchAll();
        view($users);

    }
}