<?php

    require_once 'ElectronicPart.php';
    require_once 'IElectronicPart.php';

    class Keyboard extends ElectronicPart implements IElectronicPart {

        private $isWired;

        function __construct($manufacturer, $price, $model, $isWired) {
            
            parent::setManufacturer($manufacturer);
            parent::setPrice($price);
            parent::setModel($model);

            $this->setIsWired($isWired);
        }


        function setIsWired($isWired) {
             $this->isWired = $isWired;
        }

        function getIsWired() {
            return $this->isWired;
        }

        function getSpecs(){
            return 'Keyboard manufacturer: ' . parent::getManufacturer() .
                   ', model: '               . parent::getModel() . 
                   ', price: '               . parent::getPrice();
                                //    '  is wired: '     . $this->getIsWired();
        }

        function print(){
            return 'Keyboard manufacturer: ' . parent::getManufacturer() .
                   ', model: '               . parent::getModel() . 
                   ', price: '               . parent::getPrice() .
                   ', is wired: '            . $this->getIsWired();
        }
    }


?>