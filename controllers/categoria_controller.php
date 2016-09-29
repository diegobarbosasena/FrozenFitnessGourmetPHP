
<?php
	
	class usuarios_controller {
		
		public $nomeCategoria;
	
        
        
        public function __construct(){
            
            require_once('models/categoria_class.php');
            
    
            if($_SERVER['REQUEST_METHOD']=='POST')
            {
                $this->nomeCategoria=$_POST['txtCategoria'];
              
               
                $this->inserir();
            }
        }
        		
		
		public function listarTodos (){
			 
			  
		
		}
		
		public function buscar($codCategoria){
			
		
		}
		
		public function atualizar($codCategoria) {
		
		
		}
		
		public function deletar($codCategoria) {
		
		
		}
		
		public function inserir() {
              
		
		
		}
  
         
        }
	}

?>