<?php

    require_once 'ElectronicPart.php';
    require_once 'IElectronicPart.php';


    class Computer extends ElectronicPart implements IElectronicPart {

        private $motherboard;
        private $processor;
        private $hardDrive;
        private $ram;
        private $graphicCard;


        function __construct($manufacturer, $price, $model, $motherboard, $processor, $hardDrive, $ram, $graphicCard) {

            parent::setManufacturer($manufacturer);
            parent::setPrice($price);
            parent::setModel($model);

            $this->setMotherboard($motherboard);
            $this->setProcessor($processor);
            $this->setHardDrive($hardDrive);
            $this->setRam($ram);
            $this->setGraphicCard($graphicCard);

        }


        function setMotherboard($motherboard) {
             $this->motherboard = $motherboard;
        }

        function setProcessor($processor) {
            $this->processor = $processor;
        }

        function setHardDrive($hardDrive) {
            $this->hardDrive = $hardDrive;
        }

        function setRam($ram) {
            $this->ram = $ram;
        }

        function setGraphicCard($graphicCard) {
            $this->graphicCard = $graphicCard;
        }


        function getMotherboard() {
            return $this->motherboard;
        }

        function getProcessor() {
            return  $this->processor;
        }

        function getHardDrive() {
            return  $this->hardDrive;
        }

        function getRam() {
            return  $this->ram;
        }

        function getGraphicCard() {
            return  $this->graphicCard;
        }


        function getSpecs(){
            return 'Computer manufacturer: ' . parent::getManufacturer() .
                   ', model: '               . parent::getModel() . 
                   ', price: '               . parent::getPrice();
        }

        function print(){
            return 'Computer manufacturer: ' . parent::getManufacturer() .
                   ', model: '               . parent::getModel() . 
                   ', price: '               . parent::getPrice() .
                   ', motherboard: '         . $this->getMotherboard() . 
                   ', processor: '           . $this->getProcessor() .
                   ', hardDrive: '           . $this->getHardDrive() .
                   ', ram: '                 . $this->getRam() .
                   ', graphicCard: '         . $this->getGraphicCard() ;
        }

    }


?>