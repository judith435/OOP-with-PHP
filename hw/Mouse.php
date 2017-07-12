<?php

    require_once 'ElectronicPart.php';
    require_once 'IElectronicPart.php';

    class Mouse extends ElectronicPart implements IElectronicPart {

        private $isWired;

        function __construct($manufacturer, $price, $model, $isWired) {
            
            parent::setManufacturer($manufacturer);
            parent::setModel($model);
            parent::setPrice($price);

            $this->setIsWired($isWired);
        }


        function setIsWired($isWired) {
             $this->isWired = $isWired;
        }

        function getIsWired() {
            return $this->isWired;
        }

        function getSpecs(){

            return 'Mouse manufacturer: ' . parent::getManufacturer() .
                   ', model: '            . parent::getModel() . 
                   ', price: '            . parent::getPrice();
        }

        function print(){

            return 'Mouse manufacturer: ' . parent::getManufacturer() .
                   ', model: '            . parent::getModel() . 
                   ', price: '            . parent::getPrice() .
                   ', is wired: '         . $this->getIsWired();
        }

    }


?>