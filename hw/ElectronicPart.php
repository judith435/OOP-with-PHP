<?php

    class ElectronicPart {

        private $manufacturer;
        private $price;
        private $model;

        function __construct($manufacturer, $price ,$model) {
            $this->setManufacturer($manufacturer);
            $this->setPrice($price);
            $this->setModel($model);
        }

        function setManufacturer($manufacturer) {
             $this->manufacturer = $manufacturer;
        }

        function setPrice($price) {
            $this->price = $price;
        }

        function setModel($model) {
            $this->model = $model;
        }

        function getManufacturer() {
            return $this->manufacturer;
        }

        function getPrice() {
            return  $this->price;
        }

        function getModel() {
            return  $this->model;
        }
    }

?>