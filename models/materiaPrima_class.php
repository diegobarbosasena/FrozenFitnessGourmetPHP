
<?php
	class MateriaPrima{
		
	public $codMateria;
	public $nomeMateria;
	public $precoMateria;
	public $descricaoMateria;
	public $porcaoMateria;
		
	 public function __construct(){
            
            require_once('models/banco_dados.php');
		
            $conexao = new mysql_db();

            $conexao->conectar();
        }
        		
				
		public function insert($categoriaPrato) {

			$sql = "";
			
			if(mysql_query($sql))
				return true;
			else
				return false;
			
		}		
		
		public function selectAll (){
            
			$select = mysql_query($sql);
						
            
            $listaMateria = array();
            
			while($rs = mysql_fetch_array($select)){
                	  
                $materiaPrima = new MateriaPrima();
                $materiaPrima->codMateria = $rs['codMateria'];
                $materiaPrima->nomeMateria = $rs['nomeMateria'];
				$materiaPrima->precoMateria = $rs['precoMateria'];
                $materiaPrima->descricaoMateria = $rs['descricaoMateria'];
				$materiaPrima->porcaoMateria = $rs['porcaoMateria'];
                
                
				$listaMateria[] = $materiaPrima;                              							
			}
			
            return $listaCategoria;   
							
		}
		
		public function selectById($codPrato){
			
			$sql = "=".$codPrato;
			
			$select = mysql_query($sql);
			
			if($rs = mysql_fetch_array($select)){
				
				$materiaPrima = new MateriaPrima();
                $materiaPrima->codMateria = $rs['codMateria'];
                $materiaPrima->nomeMateria = $rs['nomeMateria'];
				$materiaPrima->precoMateria = $rs['precoMateria'];
                $materiaPrima->descricaoMateria = $rs['descricaoMateria'];
				$materiaPrima->porcaoMateria = $rs['porcaoMateria'];
											
			}
			
			return $prato;
		}
		
		public function update() {
					
			$sql = "";     
				
			if(mysql_query($sql))
				return true;
			else
				return false;		
		}
		
		public function delete($codCategoriaPrato) {
		
			$sql = "";

			if(mysql_query($sql))
				return true;
			else
				return false;					
		}	
	
	}
	}
?>