
<?php
	class Produto{
		
		public $codProduto;
		public $nomeProduto;
		public $precoProduto;
		public $descricaoProduto;
		public $caloriaProduto;
		public $valorEnergeticoProduto;
		public $carboidratoProduto;
		public $proteinaProduto;
		public $sodioProduto;
		public $gordurasProduto;
		public $dtFabricacaoProduto;
		public $dtValidadeProduto;
		
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
						
            
            $listaProduto = array();
            
			while($rs = mysql_fetch_array($select)){
                	  
                $produto = new Produto();
                $produto->codProduto = $rs['codProduto'];
                $produto->nomeProduto = $rs['nomeProduto'];
				$produto->precoProduto = $rs['precoProduto'];
                $produto->descricaoProduto = $rs['descricaoProduto'];
				$produto->caloriaProduto = $rs['caloriaProduto'];
                $produto->valorEnergeticoProduto = $rs['valorEnergeticoProduto'];
				$produto->carboidratoProduto = $rs['carboidratoProduto'];
                $produto->proteinaProduto = $rs['proteinaProduto'];
				$produto->sodioProduto = $rs['sodioProduto'];
                $produto->gordurasProduto = $rs['gordurasProduto'];
				$produto->dtFabricacaoProduto = $rs['dtFabricacaoProduto'];
                $produto->dtValidadeProduto = $rs['dtValidadeProduto'];
                
				$listaProduto[] = $produto;                              							
			}
			
            return $listaProduto;   
							
		}
		
		public function selectById($codPrato){
			
			$sql = "=".$codPrato;
			
			$select = mysql_query($sql);
			
			if($rs = mysql_fetch_array($select)){
				
				$produto = new Produto();
                $produto->codProduto = $rs['codProduto'];
                $produto->nomeProduto = $rs['nomeProduto'];
				$produto->precoProduto = $rs['precoProduto'];
                $produto->descricaoProduto = $rs['descricaoProduto'];
				$produto->caloriaProduto = $rs['caloriaProduto'];
                $produto->valorEnergeticoProduto = $rs['valorEnergeticoProduto'];
				$produto->carboidratoProduto = $rs['carboidratoProduto'];
                $produto->proteinaProduto = $rs['proteinaProduto'];
				$produto->sodioProduto = $rs['sodioProduto'];
                $produto->gordurasProduto = $rs['gordurasProduto'];
				$produto->dtFabricacaoProduto = $rs['dtFabricacaoProduto'];
                $produto->dtValidadeProduto = $rs['dtValidadeProduto'];
											
			}
			
			return $produto;
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