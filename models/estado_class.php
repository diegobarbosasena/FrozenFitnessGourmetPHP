



<?php
	
	class Estado {
		
		public $codEstado;
		public $nomeEstado;
		public $uf;

              
        public function __construct(){
            
            require_once('models/banco_dados.php');
		
            $conexao = new mysql_db();

            $conexao->conectar();
        }
        		
				
		public function insert() {
		
		}		
		
		
		
		public function selectAll (){
			
            $sql = "select * from tblEstado";
			
			$select = mysql_query($sql);
						
            
            $listaEstado = array();
            
			while($rs = mysql_fetch_array($select)){
                	  
                $estado = new Estado();
                $estado->codEstado = $rs['codEstado'];
                $estado->nomeEstado = $rs['nomeEstado'];
				$estado->uf = $rs['uf'];
                
				$listaEstado[] = $estado;                              							
			}
			
            return $listaEstado;        
		}
		
		public function selectById($codParceiro){
			
			
		}
		
		public function update() {
		
						
		}
		
		public function delete($codParceiro) {
		
									
		}	
	}

?>