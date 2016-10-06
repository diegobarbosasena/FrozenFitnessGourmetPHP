
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
			
			if($listaCategoria != ""){
				return 	$listaCategoria;
			}else{
				return "";
			}
		}
		
		public function selectById($codCategoriaMateria){
			
			$sql = "select * from tblcategoriaMateria where codCategoriaMateria=".$codCategoriaMateria;
			
			$select = mysql_query($sql);
			
			//echo($sql);
			
			if($rs = mysql_fetch_array($select)){
				
				$Cat= new Categoria();
				  
				$Cat->codCategoriaMateria = $rs['codCategoriaMateria'];
                $Cat->nomeCategoriaMateria = $rs['nomeCategoriaMateria'];
											
			}
			
			return $Cat;
		}
		
		public function update() {
		
			$sql = "update tblcategoriaMateria set nomeCategoriaMateria='".$this->nomeCategoriaMateria."' where codCategoriaMateria=".$this->codCategoriaMateria;     
				
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