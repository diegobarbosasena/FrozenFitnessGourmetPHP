
<?php
	
	class Prato{
				
		public $codPrato;
		public $nomePrato;
		public $precoPrato;
		public $descricaoPrato;
		public $caloria;
		public $valorEnergetico;
		public $carboidrato;
		public $proteina;
		public $sodio;
		public $gorduras;
		public $dtFabricacao;
		public $dtValidade;
		public $visitas;
		
        public function __construct(){
            
            require_once('models/banco_dados.php');
		
            $conexao = new mysql_db();

            $conexao->conectar();
        }
        		
				
		public function insert($categoriaPrato) {

			$sql = "";
			
			if(mysql_query($sql))
				return true;
			else
				return false;
			
		}		
		
		public function selectAll (){
            
			$select = mysql_query($sql);
						
            
            $listaPrato = array();
            
			while($rs = mysql_fetch_array($select)){
                	  
                $prato = new Prato();
                $prato->codPrato = $rs['codPrato'];
                $prato->nomePrato = $rs['nomePrato'];
				$prato->precoPrato = $rs['precoPrato'];
                $prato->descricaoPrato = $rs['descricaoPrato'];
				$prato->caloria = $rs['caloria'];
                $prato->valorEnergetico = $rs['valorEnergetico'];
				$prato->carboidrato = $rs['carboidrato'];
                $prato->proteina = $rs['proteina'];
				$prato->sodio = $rs['sodio'];
                $prato->gorduras = $rs['gorduras'];
				$prato->dtFabricacao = $rs['dtFabricacao'];
                $prato->dtValidade = $rs['dtValidade'];
				$prato->visitas = $rs['visitas'];
				$prato->imagemPrato = $rs['imagemPrato'];
                
				$listaPrato[] = $prato;                              							
			}
			
            return $listaCategoria;   
							
		}
		
		public function selectById($codPrato){
			
			$sql = "=".$codPrato;
			
			$select = mysql_query($sql);
			
			if($rs = mysql_fetch_array($select)){
				
				$prato= new Prato();
				  
				$prato->codPrato = $rs['codPrato'];
                $prato->nomePrato = $rs['nomePrato'];
				$prato->precoPrato = $rs['precoPrato'];
                $prato->descricaoPrato = $rs['descricaoPrato'];
				$prato->caloria = $rs['caloria'];
                $prato->valorEnergetico = $rs['valorEnergetico'];
				$prato->carboidrato = $rs['carboidrato'];
                $prato->proteina = $rs['proteina'];
				$prato->sodio = $rs['sodio'];
                $prato->gorduras = $rs['gorduras'];
				$prato->dtFabricacao = $rs['dtFabricacao'];
                $prato->dtValidade = $rs['dtValidade'];
				$prato->visitas = $rs['visitas'];
				$prato->imagemPrato = $rs['imagemPrato'];
											
			}
			
			return $prato;
		}
		
		public function update() {
					
			$sql = "";     
				
			if(mysql_query($sql))
				return true;
			else
				return false;		
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