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


        function getFullPurchaseDetails(){

            return $this->getScreen() . '<br>' . $this->getMouse() . '<br>' . $this->getKeyboard() . '<br>' . $this->getComputer() . '<br>';  
        }

    }

?>

<!--Screen manufacturer: Samsung, model: S24F350FH, Price: 723
Mouse manufacturer: Microsoft, model: Mobile Mouse 1850, Price: 129
Keyboard manufacturer: Microsoft, model: , Price: 325
Computer manufacturer: GIGABYTE, model: , Price: 3059-->
