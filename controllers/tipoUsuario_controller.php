
<?php
	
	class tipoUsuario_controller {
		
		public $nometipoUsuario;
		public $codtipoUsuario;
        
        
        public function __construct(){
            
            require_once('models/tipoUsuario_class.php');
            
    
            if($_SERVER['REQUEST_METHOD']==='POST')
            {
				if(isset($_POST['txtTipoUsuario']) && isset($_POST['codTipoUsuario'])){
					$this->nomeTipoUsuario=$_POST['txtTipoUsuario'];
					$this->codTipoUsuario= $_POST['codTipoUsuario'];
				}
            }
        }
		
		public function index(){
            
			$atualizacao = 'inserir';
			$tipoUsuario=new TipoUsuario();
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				$c = new TipoUsuario();
				$tipoUsuario=$c->selectById($id);
			}
			
           require_once('views/nivelUsuario/index.php');
        }
		
		public function cadastrar(){
			
			$atualizacao = 'inserir';
			$tipoUsuario=new TipoUsuario();
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				$t = new TipoUsuario();
				$TipoUsuario=$c->selectById($id);
			}
			
			
			require_once('views/nivelUsuario/cadastrar.php');
		}
		
		public function listarTodos (){
			 
			$listar = new TipoUsuario();
			return $listar->selectAll();	
		}
		
		public function buscar($codTipoUsuario){
			
			$buscar = new TipoUsuario();
			return $buscar->selectById($codTipoUsuario);
			
		}
		
		public function atualizar() {
		
			$atualizar = new Categoria();
			$atualizar->nomeTipoUsuario = $this->nomeTipoUsuario;
			$atualizar->codTipoUsuario=  $this->codTipoUsuario;
			
						
			if($atualizar->update()){	
				
				header("location: ../tipoUsuario/index/".$this->codCategoriaMateria);
			}
		}
		
		public function deletar() {
			
			$codCategoria = $_GET['id'];
			
			$deletar = new TipoUsuario();
			if($deletar->delete($codtipoUsuario)){
				header("location: ../../tipoUsuario/index");
			}	
		}
		
		public function inserir() {
              
			$tipoUsuario = new Categoria();
			$TipoUsuario->nomeTipoUsuario = $this->nomeTipoUsuario;
			$_SESSION['metodo'] = 'inserir';
			if($tipoUsuario::insert($tipoUsuario)){
				
				header("location: ../tipoUsuario/index");
			}
		}
	}

?>