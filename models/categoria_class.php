
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
		
			$sql = "insert into tblCategoriaMateria (nomeCategoriaMateria) values('".$categoria->nomeCategoriaMateria."')";

            if(mysql_query($sql))
				return true;
			else
				return false;
							
		}		
		
		
		
		public function selectAll (){
            
			$sql = "select * from tblCategoriaMateria";
			
			$select = mysql_query($sql);
						
            
            $listaCategoria = array();
            
			while($rs = mysql_fetch_array($select)){
                	  
                $categoria = new Categoria();
                $categoria->codCategoriaMateria = $rs['codCategoriaMateria'];
                $categoria->nomeCategoriaMateria = $rs['nomeCategoriaMateria'];
                
				$listaCategoria[] = $categoria;                              							
			}
			
            return $listaCategoria;           
		}
		
		public function selectById($codCategoriaMateria){
			
			$sql = "select * from tblCategoriaMateria where codCategoriaMateria=".$codCategoriaMateria;
			
			$select = mysql_query($sql);
			
			if($rs = mysql_fetch_array($select)){
				
				$Cat= new Categoria();
				  
				$Cat->codCategoriaMateria = $rs['codCategoriaMateria'];
                $Cat->nomeCategoriaMateria = $rs['nomeCategoriaMateria'];
											
			}
			
			return $Cat;
		}
        
        
        
         public function selectByName($nomeCategoriaMateria){
			
			$sql = "select * from tblCategoriaMateria where nomeCategoriaMateria like '%".$nomeCategoriaMateria."%'";
             
        
            
			
			//$sql = "select * from tblprato where codPrato=".$codPrato;
			//echo($sql);
			$select = mysql_query($sql);
			 $listaCategoriaMateria = array();
            
			
            while($rs = mysql_fetch_array($select)){
                
                $Cat= new Categoria();
				  
				$Cat->codCategoriaMateria = $rs['codCategoriaMateria'];
                $Cat->nomeCategoriaMateria = $rs['nomeCategoriaMateria'];				
                
                $listaCategoriaMateria[]= $Cat;
											
			}
			
			return $listaCategoriaMateria;
		}
		
		public function update() {
		
			$sql = "update tblCategoriaMateria set nomeCategoriaMateria='".$this->nomeCategoriaMateria."' where codCategoriaMateria=".$this->codCategoriaMateria;     
				
			if(mysql_query($sql))
				return true;
			else
				return false;				
		}
		
		public function delete($codCategoriaMateria) {
		
			$sql = "delete from tblCategoriaMateria where codCategoriaMateria=".$codCategoriaMateria;
            //echo($sql);
			if(mysql_query($sql))
				return true;
			else
				return false;							
		}	
	}

?>