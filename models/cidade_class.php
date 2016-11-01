


<?php
	
	class Cidade {
		
		public $codCidade;
		public $nomeCidade;
		public $estado;

              
        public function __construct(){
            
            require_once('models/banco_dados.php');
			require_once('models/estado_class.php');
		
            $conexao = new mysql_db();

            $conexao->conectar();
			
			$this->estado = new Estado();
        }
        		
				
		public function insert() {
		
		}		
		
		
		
		public function selectAll (){
			
            $sql = "select c.codCidade, c.nomeCidade, e.codEstado from tblCidade as c inner join tblEstado as e on (c.codEstado = e.codEstado)";
			
		
			
			$select = mysql_query($sql);
						
            
            $listaCidade = array();
            
			while($rs = mysql_fetch_array($select)){
                	  
                $cidade = new Cidade();
                $cidade->codCidade = $rs['codCidade'];
                $cidade->nomeCidade = $rs['nomeCidade'];
				$cidade->codEstado = $rs['codEstado'];
                
				$listaCidade[] = $cidade;                              							
			}
			
            return $listaCidade;         
		}
		
		public function selectById($codParceiro){
			
			
		}
		
		public function update() {
		
						
		}
		
		public function delete($codParceiro) {
		
									
		}	
	}

?>