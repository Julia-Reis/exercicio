<?php
    class Select{
        public $name;
        public $placeholder;

        function __construct($parametros){
            $this->name = $parametros["name"];
            $this->placeholder = $parametros["placeholder"];
            $this->exibe();
        }
        
        function exibe(){
            echo "
            <select name='$this->name' placeholder='$this->placeholder'>
                <option>Selecione um tipo</option>
                <option>Bolo</option>
                <option>Torta</option>
                <option>Pão</option>
            </select>";
        }
    }
?>