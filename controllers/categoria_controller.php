
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
			$buscar->selectById();
			
		}
		
		public function atualizar($codCategoria) {
		
			$atualizar = new Categoria();
			$atualizar->update();
		
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
			
			$categoria::insert($categoria);
		}

	}

?>