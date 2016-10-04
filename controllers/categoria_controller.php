
<?php
	
	class categoria_controller {
		
		public $nomeCategoriaMateria;
	
        
        
        public function __construct(){
            
            require_once('models/categoria_class.php');
            
    
            if($_SERVER['REQUEST_METHOD']=='POST')
            {
                $this->nomeCategoriaMateria=$_POST['txtCategoria'];
            }
        }
		
		public function listarTodos (){
			 
			$listar = new Categoria();
			return $listar->selectAll();	
		}
		
		public function buscar($codCategoria){
			
			$buscar = new Categoria();
			return $buscar->selectById($codCategoria);
			
		}
		
		public function atualizar() {
		
			$atualizar = new Categoria();
			$atualizar->nomeCategoriaMateria = $this->nomeCategoriaMateria;
			$atualizar->codCategoriaMateria = $_GET['id'];
			$_SESSION['metodo'] = 'atualizar';	
						
			if($atualizar::update($atualizar)){	
				
				header("location: ../../cms/AdmCategoria");
			}
		}
		
		public function deletar() {
			
			$codCategoria = $_GET['id'];
			
			$deletar = new Categoria();
			if($deletar->delete($codCategoria)){
				header("location: ../../cms/ConsultaCategoria");
			}	
		}
		
		public function inserir() {
              
			$categoria = new Categoria();
			$categoria->nomeCategoriaMateria = $this->nomeCategoriaMateria;
			$_SESSION['metodo'] = 'inserir';
			if($categoria::insert($categoria)){
				
				header("location: ../cms/AdmCategoria");
			}
		}
	}

?>