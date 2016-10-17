
<?php
	class categoriaPrato{
	

		public $nomeCategoriaPrato;
		public $codCategoriaPrato;
		public $descricaoCategoriaPrato;
		public $imagemCategoriaPrato;

		
        public function __construct(){
            
            require_once('models/banco_dados.php');
		
            $conexao = new mysql_db();

            $conexao->conectar();
        }
        		
				
		public function insert($categoriaPrato) {
		
				$sql = "insert into tblcategoriaprato (nomeCategoriaPrato, descricaoCategoriaPrato, imagemCategoriaPrato) values('".$categoriaPrato->nomeCategoriaPrato."','".$categoriaPrato->descricaoCategoriaPrato."',
					'".$categoriaPrato->imagemCategoriaPrato."')";

			
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
            
            $listaCategoriaPrato = array(); 
			
			while($rs = mysql_fetch_array($select)){
				
                $categoriaPrato = new categoriaPrato();
				$categoriaPrato->codCategoriaPrato = $rs['codCategoriaPrato'];
                $categoriaPrato->nomeCategoriaPrato = $rs['nomeCategoriaPrato'];
				$categoriaPrato->descricaoCategoria = $rs['descricaoCategoriaPrato'];
				$categoriaPrato->imagemCategoria = $rs['imagemCategoriaPrato'];
				
				$listaCategoriaPrato[] = $categoriaPrato;						
			}
			
			return $listaCategoriaPrato;
				
		}
		
		public function selectById($codCategoriaPrato){
			
			$sql = "select * from tblcategoriaprato where codCategoriaPrato=".$codCategoriaPrato;
			
			$select = mysql_query($sql);
			
			if($rs = mysql_fetch_array($select)){
				
				$categoriaPrato = new categoriaPrato();
				  
				$categoriaPrato->codCategoriaPrato = $rs['codCategoriaPrato'];
                $categoriaPrato->nomeCategoriaPrato = $rs['nomeCategoriaPrato'];
				$categoriaPrato->imagemCategoria = $rs['imagemCategoriaPrato'];	
				$categoriaPrato->descricaoCategoria = $rs['descricaoCategoriaPrato'];				
			}
			
			return $objetivo;
		}
		
		public function update() {
		
			$sql = "update tblcategoriaprato set nomeCategoriaPrato='".$this->nomeCategoriaPrato."', descricaoCategoriaPrato='".$this->descricaoCategoriaPrato."'  where codCategoriaPrato=".$this->codCategoriaPrato;     
			
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