
<?php
	
	class Prato{
		
        public function __construct(){
            
            require_once('models/banco_dados.php');
		
            $conexao = new mysql_db();

            $conexao->conectar();
        }
        		
				
		public function insert($categoriaPrato) {

		}		
		
		public function selectAll (){
            
							
		}
		
		public function selectById($codCategoriaPrato){
			
		}
		
		public function update() {
		
			
		}
		
		public function delete($codCategoriaPrato) {
		
								
		}	
	
	}

?>