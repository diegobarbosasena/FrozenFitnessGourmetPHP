
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
		public $codcategoriaProduto;
		public $imagemProduto;
		
		 public function __construct(){
            
            require_once('models/banco_dados.php');
		
            $conexao = new mysql_db();

            $conexao->conectar();
        }
        		
				
		public function insert($produto) {

			$sql = "insert into tblProduto (nomeProduto, precoProduto, descricaoProduto, caloriaProduto, valorEnergeticoProduto, carboidratoProduto, proteinaProduto, sodioProduto, gordurasProduto, imagemProduto) 
					values ('".$produto->nomeProduto."', '".$produto->precoProduto."', '".$produto->descricaoProduto."', '".$produto->caloriaProduto."', '".$produto->valorEnergeticoProduto."', '".$produto->carboidratoProduto."', '".$produto->proteinaProduto."', 
					'".$produto->sodioProduto."', '".$produto->gordurasProduto."', '".$produto->imagemProduto."');";
			
			$sql2 = "insert into tblcatproduto (codCategoriaMateria, codProduto) values ('".$produto->codcategoriaProduto."', LAST_INSERT_ID())";
			
			echo($sql);
			echo($sql2);
			
			/*if(mysql_query($sql))
				return true;
			else
				return false;*/
			
		}		
		
		public function selectAll (){
			
			$sql = "select p.nomeProduto, p.precoProduto, p.descricaoProduto, p.caloriaProduto, p.valorEnergeticoProduto, p.carboidratoProduto, p.proteinaProduto, 
				p.sodioProduto, p.gordurasProduto, p.dtFabricacaoProduto, p.dtValidadeProduto, cp.codCategoriaMateria
				from tblProduto as p
				inner join tblprodutomateria as pm
				on (p.codproduto = pm.codproduto)
				inner join tblcatmateria as cat
				on (pm.codMateria = cat.codMateria)
				inner join tblcategoriamateria as cp
				on(cat.codCategoriaMateria = cp.codCategoriaMateria);";
				
			//$sql = "select * from tblProduto";	
            
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
		
		public function selectById($codProduto){
			
			$sql = "select p.codProduto, p.nomeProduto, p.precoProduto, p.descricaoProduto, p.caloriaProduto, p.valorEnergeticoProduto, p.carboidratoProduto, p.proteinaProduto, 
				p.sodioProduto, p.gordurasProduto, p.dtFabricacaoProduto, p.dtValidadeProduto, cp.codCategoriaMateria
				from tblProduto as p
				inner join tblprodutomateria as pm
				on (p.codproduto = pm.codproduto)
				inner join tblcatmateria as cat
				on (pm.codMateria = cat.codMateria)
				inner join tblcategoriamateria as cp
				on(cat.codCategoriaMateria = cp.codCategoriaMateria) where p.codProduto=".$codProduto;
			
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
					
			/*$sql = "update tblProduto set nomeProduto = "", precoProduto = , descricaoProduto = "", 
					caloriaProduto = , valorEnergeticoProduto = , carboidratoProduto = , proteinaProduto = , sodioProduto = , gordurasProduto = ,
					dtFabricacaoProduto = "", dtValidadeProduto = "" where codPrato=";  */   
				
			if(mysql_query($sql))
				return true;
			else
				return false;		
		}
		
		public function delete($codProduto) {
		
			$sql = "delete from tblProduto where codProduto=".$codProduto;

			if(mysql_query($sql))
				return true;
			else
				return false;					
		}	
	
	}

?>