<?php
	
	class Objetivo {

		public $nomeCategoriaPrato;
		public $codCategoriaPrato;
		public $imagemCategoria;
		public $descricaoCategoria;
        
        
        public function __construct(){
            
            require_once('models/banco_dados.php');
		
            $conexao = new mysql_db();

            $conexao->conectar();
        }
        		
				
		public function insert($categoriaPrato) {
		
			$sql = "insert into tblcategoriaprato (nomeCategoriaPrato, descicaoCategoria) values('".$categoriaPrato->nomeCategoriaPrato."','".$categoriaPrato->descricaoCategoria."')";
			
			if(mysql_query($sql))
				return true;
			else
				return false;
							
		}		
		
		public function selectAll (){
            
			$sql = "select * from tblcategoriaprato";
			
			$select = mysql_query($sql);
			
			$cont=0;
			while($rs = mysql_fetch_array($select)){
				
				$listaCategoria[] = new Objetivo();
				  
				$listaCategoriaPrato[$cont]->codCategoriaPrato = $rs['codCategoriaPrato'];
                $listaCategoriaPrato[$cont]->nomeCategoriaPrato = $rs['nomeCategoriaPrato'];
				 $listaCategoriaPrato[$cont]->descricaoCategoria = $rs['descricaoCategoria'];
				
				
				$cont++;							
			}
			
			return $listaCategoriaPrato;
				
		}
		
		public function selectById($codCategoriaMateria){
			
			$sql = "select * from tblcategoriaprato where codCategoriaPrato=".$codCategoriaPrato;
			
			$select = mysql_query($sql);
			
			echo($sql);
			
			if($rs = mysql_fetch_array($select)){
				
				$listaCatPrato[] = new Objetivo();
				  
				$listaCatPrato[$cont]->codCategoriaPrato = $rs['codCategoriaPrato'];
                $listaCatPrato[$cont]->nomeCategoriaPrato = $rs['nomeCategoriaPrato'];
											
			}
			
			return $listaCatPrato;
		}
		
		public function update($categoriaPrato) {
		
			$sql = "update tblcategoriaprato set nomeCategoriaPrato='".$categoriaPrato->nomeCategoriaPrato."' where codCategoriaPrato=".$categoriaPrato->codCategoriaPrato;     
			//echo($sql.'  CHEGOU');
				
			if(mysql_query($sql))
				return true;
			else
				return false;				
		}
		
		public function delete($codCategoriaMateria) {
		
			$sql = "delete from tblcategoriaprato where codCategoriaMateria=".$tblcategoriaprato;

			if(mysql_query($sql))
				return true;
			else
				return false;							
		}	
	}

?>