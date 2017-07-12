<?php

    class Purchase  {

        private $screen;
        private $mouse;
        private $keyboard;
        private $computer;


        function __construct($screen, $mouse, $keyboard, $computer) {
            $this->setScreen($screen);
            $this->setMouse($mouse);
            $this->setKeyboard($keyboard);
            $this->setComputer($computer);
        }

        function setScreen($screen) {
             $this->screen = $screen;
        }

        function setMouse($mouse) {
            $this->mouse = $mouse;
        }

        function setKeyboard($keyboard) {
            $this->keyboard = $keyboard;
        }

        function setComputer($computer) {
            $this->computer = $computer;
        }


        function getScreen() {
            return $this->screen->getSpecs();
        }

        function getMouse() {
            return  $this->mouse->getSpecs();
        }

        function getKeyboard() {
            return  $this->keyboard->getSpecs();
        }

        function getComputer() {
            return  $this->computer->getSpecs();
        }

        function printScreen() {
            return $this->screen->print();
        }

        function printMouse() {
            return  $this->mouse->print();
        }

        function printKeyboard() {
            return  $this->keyboard->print();
        }

        function printComputer() {
            return  $this->computer->print();
        }



        function getFullPurchaseDetails(){

            return $this->getScreen() . '<br>' . $this->getMouse() . '<br>' . $this->getKeyboard() . '<br>' . $this->getComputer() . '<br>';  
        }

        function print(){

            return $this->printScreen() . '<br>' . $this->printMouse() . '<br>' . $this->printKeyboard() . '<br>' . $this->printComputer() . '<br>';  
        }

    }

?>

