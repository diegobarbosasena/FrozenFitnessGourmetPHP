
<?php
	
	class Categoria {

		public $nomeCategoriaMateria;
		public $codCategoriaMateria;
        
        
        public function __construct(){
            
            require_once('models/banco_dados.php');
		
            $conexao = new mysql_db();

            $conexao->conectar();
        }
        		
				
		public function insert($categoria) {
		
			$sql = "insert into tblcategoriaMateria (nomeCategoriaMateria) values('".$categoria->nomeCategoriaMateria."')";
			
			if(mysql_query($sql))
				return true;
			else
				return false;
							
		}		
		
		public function selectAll (){
            
			$sql = "select * from tblcategoriaMateria";
			
			$select = mysql_query($sql);
			
			$cont=0;
			while($rs = mysql_fetch_array($select)){
				
				$listaCategoria[] = new Categoria();
				  
				$listaCategoria[$cont]->codCategoriaMateria = $rs['codCategoriaMateria'];
                $listaCategoria[$cont]->nomeCategoriaMateria = $rs['nomeCategoriaMateria'];
				
				$cont++;							
			}
			
			return $listaCategoria;
				
		}
		
		public function selectById($codCategoriaMateria){
			
			$sql = "select * from tblcategoriaMateria where codCategoriaMateria=".$codCategoriaMateria;
			
			$select = mysql_query($sql);
			
			echo($sql);
			
			if($rs = mysql_fetch_array($select)){
				
				$listaCat[] = new Categoria();
				  
				$listaCat[$cont]->codCategoriaMateria = $rs['codCategoriaMateria'];
                $listaCat[$cont]->nomeCategoriaMateria = $rs['nomeCategoriaMateria'];
											
			}
			
			return $listaCat;
		}
		
		public function update($categoria) {
		
			$sql = "update tblcategoriaMateria set nomeCategoriaMateria='".$categoria->nomeCategoriaMateria."' where codCategoriaMateria=".$categoria->codCategoriaMateria;     
			//echo($sql.'  CHEGOU');
				
			if(mysql_query($sql))
				return true;
			else
				return false;				
		}
		
		public function delete($codCategoriaMateria) {
		
			$sql = "delete from tblcategoriaMateria where codCategoriaMateria=".$codCategoriaMateria;

			if(mysql_query($sql))
				return true;
			else
				return false;							
		}	
	}

?>