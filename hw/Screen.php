<?php

    require_once 'ElectronicPart.php';

    class Screen extends ElectronicPart  {

        private $size;
        private $panel;

        function __construct($manufacturer, $price, $model,  $size, $panel) {

            parent::setManufacturer($manufacturer);
            parent::setPrice($price);
            parent::setModel($model);

            $this->setSize($size);
            $this->setPanel($panel);
        }


        function setSize($size) {
             $this->size = $size;
        }

        function setPanel($panel) {
            $this->panel = $panel;
        }


        function getSize() {
            return $this->size;
        }

        function getPanel() {
            return  $this->panel;
        }


        function getSpecs(){

            return 'Screen manufacturer: ' . parent::getManufacturer() .
                   ', model: '             . parent::getModel() . 
                   ', price: '             . parent::getPrice();
                            //      '  size: '          . $this->getSize() . 
                            //     '  panel: '         . $this->getPanel();

        }


    }


?>