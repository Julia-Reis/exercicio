<?php

    class Lanche{
        
        private $id_lanche;
        private $nome;
        private $descricao;
        private $preco;

        public function __construct(Time $t1,Time $t2,$data,$horario){
            $this->time1 = $t1;
            $this->time2 = $t2;
            $this->gol_time1 = 0;
            $this->gol_time2 = 0;
            $this->data = $data;
            $this->horario = $horario;
        }

        public function adiciona_gol($time){
            if($time==$this->time1->nome){
                $this->gol_time1++;
            }
            else{
                $this->gol_time2++;
            }
        }

        public function placar(){
            echo "<div>
                    $this->time1->nome $this->gol_time1 
                                X 
                    $this->gol_time2 $this->time2->nome
                </div>";
        }


    }


?>