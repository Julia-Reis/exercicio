<?php
    class Input {
        public $type;
        public $name;
        public $placeholder;

        function __construct($parametros){
            $this->type = $parametros["type"];
            $this->name = $parametros["name"];
            $this->placeholder = $parametros["placeholder"];
            $this->exibe();
        }

        function exibe(){
            echo "<input type='$this->type' name='$this->name'
            placeholder='$this->placeholder' />";
        }

    }
?>