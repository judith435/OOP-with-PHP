<?php

    interface Vehicle {

        function getModel();
        function hasDoors();
        function wheelsCount();

    } 

    class Car implements Vehicle {

        private $owner;
        private $year;

        function __construct($owner, $year) {
            $this->setOwner($owner);
            $this->setYear($year);
        }

        function setOwner($owner) {
            $this->owner = $owner;
        }

        function getOwner() {
            return $this->owner;
        }

        function setYear($year) {
            $this->year = $year;
        }

        function getYear() {
            return $this->year;
        }

        public function getModel() {
            return "jazz";
        }

         public function hasDoors() {
            return 5;
        }

        public function wheelsCount() {
            return 8;
        }


    }

    class Motorcycle implements Vehicle {

        public function getModel() {
            return "thunder";
        }

        public function hasDoors() {
            return 0;
        }

        public function wheelsCount() {
            return 2;
        }

    }

    $hondi = new Car("Judith@ Ilson", 2014);
    echo  $hondi->getOwner() . '"s car is a '. $hondi->getModel() . '<br>';
    echo  'the model"s year is ' . $hondi->getYear() . 'and it has  ' . $hondi->hasDoors() . '  doors <br>';
    echo 'my car has ' .  $hondi->wheelsCount() . ' wheels  <br>';

    $moti = new Motorcycle();
    echo 'model is: ' .  $moti->getModel() . ' has doors: ' . $moti->hasDoors() . ' has ' . $moti->wheelsCount() . ' wheels';
?>