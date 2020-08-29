<?php
	class RowCabecalho {
		private $pesquisa;
		private $titulo;
		
		public function __construct($parametros){
			$this->pesquisa = $parametros["pesquisa"];
			$this->titulo = $parametros["titulo"];
		}
		
		public function exibe(){
		echo'
			<div class="row cabecalho">
            <div class="col-12 col-md-6">
                <h1>'.$this->titulo.'</h1>
            </div>
            <div class="form-group col-12 col-md-4 offset-md-2 busca">
                <div class="input-group">
                    <input type="text" name="busca" id="busca"
                        class="form-control" 
                        placeholder="Pesquisar '.$this->pesquisa.'"..." />
                    <span class="input-group-btn">
                        <button type="button"class="btn btn-default">
                            <i class="material-icons">search</i>
                        </button>
                    </span>
                </div>
            </div>
        </div>
		';
		}
	}
?>