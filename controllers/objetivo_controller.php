
<?php
	
	class objetivo_controller {
		
		public $nomeCategoriaPrato;
	
        
        
        public function __construct(){
            
            require_once('models/objetivo_class.php');
            
    
            if($_SERVER['REQUEST_METHOD']=='POST')
            {
                $this->nomeCategoriaMateria=$_POST['txtNomeObjetivo'];
            }
        }
		
		public function listarTodos (){
			 
			$listar = new Objetivo();
			return $listar->selectAll();	
		}
		
		public function buscar($codCategoriaPrato){
			
			$buscar = new Objetivo();
			return $buscar->selectById($codCategoriaPrato);
			
		}
		
		public function atualizar() {
		
			$atualizar = new Objetivo();
			$atualizar->nomeCategoriaPrato = $this->nomeCategoriaPrato;
			$atualizar->codCategoriaPrato = $_GET['id'];
			$_SESSION['metodo'] = 'atualizar';	
						
			if($atualizar::update($atualizar)){	
				
				header("location: ../../cms/AdmObjetivo");
			}
		}
		
		public function deletar() {
			
			$codCategoriaPrato = $_GET['id'];
			
			$deletar = new Objetivo();
			if($deletar->delete($codCategoriaPrato)){
				header("location: ../../cms/ConsultaObjetivo");
			}	
		}
		
		public function inserir() {
              
			$objetivo = new Objetivo();
			$objetivo->nomeCategoriaObjetivo = $this->nomeCategoriaObjetivo;
			$_SESSION['metodo'] = 'inserir';
			if($objetivo::insert($objetivo)){
				
				header("location: ../cms/AdmObjetivo");
			}
		}

	}

?>