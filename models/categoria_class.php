
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
			
			$insert = mysql_query($sql);
			
			//if(mysql_query($sql))
				//header("location: ../cms/AdmCategoria");
			
			
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
			
			if($rs = mysql_fetch_array($select)){
				
				$listaCategoria[] = new Categoria();
				  
				$listaCategoria[$cont]->codCategoriaMateria = $rs['codCategoriaMateria'];
                $listaCategoria[$cont]->nomeCategoriaMateria = $rs['nomeCategoriaMateria'];
											
			}
			
			return $listaCategoria;
		}
		
		public function update($categoria) {
		
			$sql = "update tblcategoriaMateria set nomeCategoriaMateria='".$categoria->nomeCategoriaMateria."' where codCategoriaMateria=".$categoria->codCategoriaMateria;     
		
			$update = mysql_query($sql);
				
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