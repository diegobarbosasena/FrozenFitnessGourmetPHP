
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
        public $nomeCategoriaMateria;
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
			
			$sql2 = "insert into tblCatProduto (codCategoriaMateria, codProduto) values ('".$produto->codcategoriaProduto."', LAST_INSERT_ID())";
			
			
			mysql_query($sql);
                
			if(mysql_query($sql2))
				return true;
			else
				return false;
			
		}		
		
		public function selectAll (){
			
			$sql = "select p.codProduto, p.nomeProduto, p.precoProduto, p.descricaoProduto, p.caloriaProduto, p.valorEnergeticoProduto, p.carboidratoProduto, p.proteinaProduto, 
				p.sodioProduto, p.gordurasProduto, p.imagemProduto, cp.codCategoriaMateria, cp.nomeCategoriaMateria
				from tblProduto as p
				inner join tblCatProduto as cat
				on (p.codProduto = cat.codProduto)
				inner join tblCategoriaMateria as cp
				on(cat.codCategoriaMateria = cp.codCategoriaMateria);";
					
            
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
				$produto->imagemProduto = $rs['imagemProduto'];
                $produto->nomeCategoriaMateria = $rs['nomeCategoriaMateria'];
                
				$listaProduto[] = $produto;                              							
			}
			
            return $listaProduto;   
							
		}
		
		public function selectItens(){
			
			$sql = "select p.codProduto, p.nomeProduto, p.precoProduto, p.descricaoProduto, p.caloriaProduto, p.valorEnergeticoProduto, p.carboidratoProduto, p.proteinaProduto, 
				p.sodioProduto, p.gordurasProduto, p.imagemProduto, cp.codCategoriaMateria, cp.nomeCategoriaMateria
				from tblProduto as p
				inner join tblCatProduto as cat
				on (p.codProduto = cat.codProduto)
				inner join tblCategoriaMateria as cp
				on(cat.codCategoriaMateria = cp.codCategoriaMateria) where cp.nomeCategoriaMateria <> 'Sobremesa' and cp.nomeCategoriaMateria <> 'Bebida';";
					
            
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
				$produto->imagemProduto = $rs['imagemProduto'];
                $produto->nomeCategoriaMateria = $rs['nomeCategoriaMateria'];
                
				$listaProduto[] = $produto;                              							
			}
			
            return $listaProduto;   						
		}
		
		
		public function selectSobremesa(){
			
			$sql = "select p.codProduto, p.nomeProduto, p.precoProduto, p.descricaoProduto, p.caloriaProduto, p.valorEnergeticoProduto, p.carboidratoProduto, p.proteinaProduto, 
				p.sodioProduto, p.gordurasProduto, p.imagemProduto, cp.codCategoriaMateria, cp.nomeCategoriaMateria
				from tblProduto as p
				inner join tblCatProduto as cat
				on (p.codProduto = cat.codProduto)
				inner join tblCategoriaMateria as cp
				on(cat.codCategoriaMateria = cp.codCategoriaMateria) where cp.nomeCategoriaMateria = 'Sobremesa';";
					
            
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
				$produto->imagemProduto = $rs['imagemProduto'];
                $produto->nomeCategoriaMateria = $rs['nomeCategoriaMateria'];
                
				$listaProduto[] = $produto;                              							
			}
			
            return $listaProduto;   						
		}
		
		public function selectBebida(){
			
			$sql = "select p.codProduto, p.nomeProduto, p.precoProduto, p.descricaoProduto, p.caloriaProduto, p.valorEnergeticoProduto, p.carboidratoProduto, p.proteinaProduto, 
				p.sodioProduto, p.gordurasProduto, p.imagemProduto, cp.codCategoriaMateria, cp.nomeCategoriaMateria
				from tblProduto as p
				inner join tblCatProduto as cat
				on (p.codProduto = cat.codProduto)
				inner join tblCategoriaMateria as cp
				on(cat.codCategoriaMateria = cp.codCategoriaMateria) where cp.nomeCategoriaMateria = 'Bebida';";
					
            
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
				$produto->imagemProduto = $rs['imagemProduto'];
                $produto->nomeCategoriaMateria = $rs['nomeCategoriaMateria'];
                
				$listaProduto[] = $produto;                              							
			}
			
            return $listaProduto;   						
		}
        	
		public function selectById($codProduto){
			
			$sql = "select p.codProduto, p.nomeProduto, p.precoProduto, p.descricaoProduto, p.caloriaProduto, p.valorEnergeticoProduto, p.carboidratoProduto, p.proteinaProduto, 
				p.sodioProduto, p.gordurasProduto, p.imagemProduto, cp.codCategoriaMateria, cp.nomeCategoriaMateria
				from tblProduto as p
				inner join tblCatProduto as cat
				on (p.codProduto = cat.codProduto)
				inner join tblCategoriaMateria as cp
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
				$produto->imagemProduto = $rs['imagemProduto'];
                $produto->nomeCategoriaMateria = $rs['nomeCategoriaMateria'];
											
			}
			
			return $produto;
		}
        
         public function selectByName($nomeProduto){
             
             $sql = "select p.codProduto, p.nomeProduto, p.precoProduto, p.descricaoProduto, p.caloriaProduto, p.valorEnergeticoProduto, p.carboidratoProduto, p.proteinaProduto, 
				p.sodioProduto, p.gordurasProduto, p.imagemProduto, cp.codCategoriaMateria, cp.nomeCategoriaMateria
				from tblProduto as p
				inner join tblCatProduto as cat
				on (p.codProduto = cat.codProduto)
				inner join tblCategoriaMateria as cp
				on(cat.codCategoriaMateria = cp.codCategoriaMateria)where p.nomeProduto like '%".$nomeProduto."%'";
			
		
			$select = mysql_query($sql);
			 $listaProdutoCms = array();
            
			
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
				$produto->imagemProduto = $rs['imagemProduto'];
                $produto->nomeCategoriaMateria = $rs['nomeCategoriaMateria'];
                
                $listaProdutoCms[]= $produto;
											
			}
			
			return $listaProdutoCms;
		}
		
		public function update() {
					
			$sql = "update tblProduto set nomeProduto = '".$this->nomeProduto."', precoProduto = '".$this->precoProduto."', descricaoProduto = '".$this->descricaoProduto."', 
					caloriaProduto = '".$this->caloriaProduto."', valorEnergeticoProduto = '".$this->valorEnergeticoProduto."', carboidratoProduto = '".$this->carboidratoProduto."', proteinaProduto = '".$this->proteinaProduto."', sodioProduto = '".$this->sodioProduto."', gordurasProduto = '".$this->gordurasProduto."' where codProduto=".$this->codProduto;  
				
            mysql_query($sql);
            
            $sql2 = "update tblCatProduto set codCategoriaMateria='".$this->codcategoriaProduto."' where codProduto=".$this->codProduto;  
            
			if(mysql_query($sql2))
				return true;
			else
				return false;
		}
		
		public function delete($codProduto) {
		
			$sql = "delete from tblCatProduto where codProduto=".$codProduto;

            mysql_query($sql);
            
			$sql2 = "delete from tblProduto where codProduto=".$codProduto;

            if(mysql_query($sql2))
				return true;
			else
				return false;					
		}	
	
	}

?>