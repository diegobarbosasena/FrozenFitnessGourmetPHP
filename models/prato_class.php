
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
		public $visitas;
		public $codcategoriaPrato;
		public $nomeCategoriaPrato;
        public $imagemPrato;
		
        public function __construct(){
            
            require_once('models/banco_dados.php');
		
            $conexao = new mysql_db();

            $conexao->conectar();
        }
        		
				
		public function insert($prato) {

			$sql = "insert into tblprato (nomePrato, precoPrato, descricaoPrato, caloria, valorEnergetico, carboidrato, proteina, sodio, gorduras, imagemPrato) 
					values ('".$prato->nomePrato."', '".$prato->precoPrato."', '".$prato->descricaoPrato."', '".$prato->caloria."', '".$prato->valorEnergetico."', '".$prato->carboidrato."', '".$prato->proteina."', '".$prato->sodio."', '".$prato->gorduras."', '".$prato->imagemPrato."')";
           
		   mysql_query($sql);
			
			echo($sql);
			
			$sql2 = "insert into tblcatprato (codprato,codcategoriaPrato) values (LAST_INSERT_ID(),'".$prato->codcategoriaPrato."')";
			
			if(mysql_query($sql2))
				return true;
			else
				return false;		
		}		
		
		public function selectAll (){
			
			$sql = "select p.codPrato,p.nomePrato, p.precoPrato, p.descricaoPrato, p.caloria, p.valorEnergetico, p.carboidrato, p.proteina, p.sodio, p.gorduras, p.imagemPrato,
					cp.nomeCategoriaPrato, cp.codcategoriaPrato
					from tblPrato as p
					inner join tblCatPrato as cat
					on (p.codPrato = cat.codPrato)
					inner join tblCategoriaPrato as cp
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
				$prato->imagemPrato = $rs['imagemPrato'];
				$prato->codcategoriaPrato = $rs['codcategoriaPrato'];
				$prato->nomeCategoriaPrato = $rs['nomeCategoriaPrato'];
            
				$listaPrato[] = $prato;                              							
			}
			
            return $listaPrato;   
							
		}
		
		public function selectById($codPrato){
			
			$sql = "select p.codPrato,p.nomePrato, p.precoPrato, p.descricaoPrato, p.caloria, p.valorEnergetico, p.carboidrato, p.proteina, p.sodio, p.gorduras, p.imagemPrato,
					cp.nomeCategoriaPrato, cp.codcategoriaPrato
					from tblprato as p
					inner join tblcatprato as cat
					on (p.codPrato = cat.codPrato)
					inner join tblcategoriaprato as cp
					on(cat.codCategoriaPrato = cp.codCategoriaPrato) where p.codPrato=".$codPrato;
			
			//$sql = "select * from tblprato where codPrato=".$codPrato;
			
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
				//$prato->visitas = $rs['visitas'];
				$prato->imagemPrato = $rs['imagemPrato'];
				$prato->nomeCategoriaPrato = $rs['nomeCategoriaPrato'];
				$prato->codcategoriaPrato = $rs['codcategoriaPrato'];
											
			}
			
			return $prato;
		}
		
		public function update() {
					
			$sql = "update tblPrato set nomePrato = '".$this->nomePrato."', precoPrato = '".$this->precoPrato."', descricaoPrato = '".$this->descricaoPrato."', 
					caloria = '".$this->caloria."', valorEnergetico = '".$this->valorEnergetico."', carboidrato = '".$this->carboidrato."', proteina = '".$this->proteina."', sodio = '".$this->sodio."', gorduras = '".$this->gorduras."',
					imagemPrato = '".$this->imagemPrato."' where codPrato=".$this->codPrato;
            
            mysql_query($sql);
            
            $sql2 = "update tblCatPrato set codCategoriaPrato='".$this->codcategoriaPrato."' where codPrato=".$this->codPrato; 
            
			if(mysql_query($sql2))
				return true;
			else
				return false;
		}
		
		public function delete($codPrato){
		
			$sql = "delete from tblCatPrato where codPrato=".$codPrato;
            
            mysql_query($sql);
            
            $sql2 = "delete from tblPrato where codPrato=".$codPrato;

			if(mysql_query($sql2))
				return true;
			else
				return false;					
		}	
	}

?>