
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
		public $codcategoriaPrato;
		
        public function __construct(){
            
            require_once('models/banco_dados.php');
		
            $conexao = new mysql_db();

            $conexao->conectar();
        }
        		
				
		public function insert($prato) {

			$sql = "insert into tblprato (nomePrato, precoPrato, descricaoPrato, caloria, valorEnergetico, carboidrato, proteina, sodio, gorduras, dtFabricacao, dtValidade, imagemPrato) 
					values ('".$prato->nomePrato."', '".$prato->precoPrato."', '".$prato->descricaoPrato."', '".$prato->caloria."', '".$prato->valorEnergetico."', '".$prato->carboidrato."', '".$prato->proteina."', '".$prato->sodio."', '".$prato->gorduras."', '".$prato->dtFabricacao."', '".$prato->dtValidade."', '".$prato->imagemPrato."')";
			
			if(mysql_query($sql))
				return true;
			else
				return false;
			
		}		
		
		public function selectAll (){
			
			$sql = "select p.nomePrato, p.precoPrato, p.descricaoPrato, p.caloria, p.valorEnergetico, p.carboidrato, p.proteina, p.sodio, p.gorduras, p.dtFabricacao, p.dtValidade, p.imagemPrato,
					cp.nomeCategoriaPrato
					from tblprato as p
					inner join tblcatprato as cat
					on (p.codPrato = cat.codPrato)
					inner join tblcategoriaprato as cp
					on(cat.codCategoriaPrato = cp.codCategoriaPrato);";
            
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
				$prato->codcategoriaPrato = $rs['codcategoriaPrato'];
                
				$listaPrato[] = $prato;                              							
			}
			
            return $listaCategoria;   
							
		}
		
		public function selectById($codPrato){
			
			$sql = "select p.codPrato, p.nomePrato, p.precoPrato, p.descricaoPrato, p.caloria, p.valorEnergetico, p.carboidrato, p.proteina, p.sodio, p.gorduras, p.dtFabricacao, p.dtValidade, p.imagemPrato,
					cp.nomeCategoriaPrato
					from tblprato as p
					inner join tblcatprato as cat
					on (p.codPrato = cat.codPrato)
					inner join tblcategoriaprato as cp
					on(cat.codCategoriaPrato = cp.codCategoriaPrato) where codPrato=".$codPrato;
			
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
				$prato->codcategoriaPrato = $rs['codcategoriaPrato'];
											
			}
			
			return $prato;
		}
		
		public function update() {
					
			$sql = "update tblprato set nomePrato = '".$this->nomePrato."', precoPrato = '".$this->precoPrato."', descricaoPrato = '".$this->descricaoPrato."', 
					caloria = '".$this->caloria."', valorEnergetico = '".$this->valorEnergetico."', carboidrato = '".$this->carboidrato."', proteina = '".$this->proteina."', sodio = '".$this->sodio."', gorduras = '".$this->gorduras."',
					dtFabricacao = '".$this->dtFabricacao."', dtValidade = '".$this->dtValidade."', imagemPrato = '".$this->imagemPrato."' where codPrato=".$this->codPrato;     
				
			if(mysql_query($sql))
				return true;
			else
				return false;		
		}
		
		public function delete($codPrato) {
		
			$sql = "delete from tblprato where codPrato=".$codPrato;

			if(mysql_query($sql))
				return true;
			else
				return false;					
		}	
	
	}

?>