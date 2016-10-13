<?php
	
	class Objetivo {

		public $codObjetivo;
		public $nomeObjetivo;
		public $descricaoObjetivo;

		
        public function __construct(){
            
            require_once('models/banco_dados.php');
		
            $conexao = new mysql_db();

            $conexao->conectar();
        }
        		
				
		public function insert($categoriaPrato) {
		
				$sql = "";
			
				if(mysql_query($sql)){
					echo($sql);
					return true;
				}else{
					return false;	
				}
		}		
		
		public function selectAll (){
            
			$sql = "select * from tblcategoriaprato";
			
			$select = mysql_query($sql);
            
            $listaObjetivo = array(); 
			
			while($rs = mysql_fetch_array($select)){
				
                $objetivo = new Objetivo();
				$objetivo->codObjetivo = $rs['codObjetivo'];
                $objetivo->nomeObjetivo = $rs['nomeObjetivo'];
				$objetivo->descricaoObjetivo = $rs['descricaoObjetivo'];
				
				$listaObjetivo[] = $objetivo;						
			}
			
			return $listaObjetivo;
				
		}
		
		public function selectById($codCategoriaPrato){
			
			$sql = "";
			
			$select = mysql_query($sql);
			
			if($rs = mysql_fetch_array($select)){
				
				$objetivo = new Objetivo();
				$objetivo->codObjetivo = $rs['codObjetivo'];
                $objetivo->nomeObjetivo = $rs['nomeObjetivo'];
				$objetivo->descricaoObjetivo = $rs['descricaoObjetivo'];	
			}
			
			return $objetivo;
		}
		
		public function update() {
		
			$sql = "";     
			
			if(mysql_query($sql)){				
				return true;
			}else{
				return false;
			}
		}
		
		public function delete($codCategoriaPrato) {
		
			$sql = "";

			if(mysql_query($sql))
				return true;
			else
				return false;							
		}	
	}

?>