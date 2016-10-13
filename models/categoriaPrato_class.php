
<?php
	class categoriaPrato{
	

		public $nomeCategoriaPrato;
		public $codCategoriaPrato;
		public $descricaoCategoria;
		public $imagemCategoria;

		
        public function __construct(){
            
            require_once('models/banco_dados.php');
		
            $conexao = new mysql_db();

            $conexao->conectar();
        }
        		
				
		public function insert($categoriaPrato) {
		
				$sql = "insert into tblcategoriaprato (nomeCategoriaPrato, descricaoCategoria, imagemCategoria) values('".$categoriaPrato->nomeCategoriaPrato."','".$categoriaPrato->descricaoCategoria."',
					'".$categoriaPrato->imagemCategoria."')";
			
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
				$objetivo->codCategoriaPrato = $rs['codCategoriaPrato'];
                $objetivo->nomeCategoriaPrato = $rs['nomeCategoriaPrato'];
				$objetivo->descricaoCategoria = $rs['descricaoCategoria'];
				$objetivo->imagemCategoria = $rs['imagemCategoria'];
				
				$listaObjetivo[] = $objetivo;						
			}
			
			return $listaObjetivo;
				
		}
		
		public function selectById($codCategoriaPrato){
			
			$sql = "select * from tblcategoriaprato where codCategoriaPrato=".$codCategoriaPrato;
			
			$select = mysql_query($sql);
			
			if($rs = mysql_fetch_array($select)){
				
				$objetivo = new Objetivo();
				  
				$objetivo->codCategoriaPrato = $rs['codCategoriaPrato'];
                $objetivo->nomeCategoriaPrato = $rs['nomeCategoriaPrato'];
				$objetivo->imagemCategoria = $rs['imagemCategoria'];	
				$objetivo->descricaoCategoria = $rs['descricaoCategoria'];				
			}
			
			return $objetivo;
		}
		
		public function update() {
		
			$sql = "update tblcategoriaprato set nomeCategoriaPrato='".$this->nomeCategoriaPrato."', descricaoCategoria='".$this->descricaoCategoria."'  where codCategoriaPrato=".$this->codCategoriaPrato;     
			
			if(mysql_query($sql)){				
				return true;
			}else{
				return false;
			}
		}
		
		public function delete($codCategoriaPrato) {
		
			$sql = "delete from tblcategoriaprato where codCategoriaPrato=".$codCategoriaPrato;

			if(mysql_query($sql))
				return true;
			else
				return false;							
		}	
	}

?>