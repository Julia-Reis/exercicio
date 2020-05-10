<?php
    class Textarea2{
        public $name;
        public $placeholder;

        function __construct($parametros){
            $this->name = $parametros["name"];
            $this->placeholder = $parametros["placeholder"];
            $this->exibe();
        }

        function exibe(){
            echo "<textarea name='$this->name' placeholder='$this->placeholder'></textarea>";
        }
    }
?>