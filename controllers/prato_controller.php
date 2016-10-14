
<?php 
	
	class prato_controller{
		
		
		public function __construct(){
            
            require_once('models/prato_class.php');

    
            if($_SERVER['REQUEST_METHOD']==='POST')
            {
				
            }       
        }

		 public function index(){
            
			$atualizacao = 'inserir';
			$prato=new Prato();
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				$p = new Prato();
				$prato=$p->selectById($id);
			}
			
           require_once('views/prato/index.php');
        }
		
		public function cadastrar(){
			$atualizacao = 'inserir';
			$prato=new Prato();
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				$p = new Prato();
				$prato=$p->selectById($id);
			}
			
           require_once('views/prato/cadastrar.php');
			
		}
        
        public function detalhe(){
            
             require_once('views/prato/detalhe_prato_pronto.php');
            
        }
        	
		public function listarTodos (){
			 
	
		}
		
		public function buscar($codCategoriaPrato){
			
			
		}
		
		public function atualizar() {
		
			
		}
        
		public function deletar() {
			
		}
		
		public function inserir() {
              
			
		}
		
	}
	
	
	
	
?>