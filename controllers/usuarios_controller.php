
<?php
	
	class usuarios_controller {
		
		public $usuario;
		public $senha;
        
        
        public function __construct(){
            
            require_once('models/usuario_class.php');
     
        }
        
        
        
       public function iniciaAtributo(){
		
			 if($_SERVER['REQUEST_METHOD']==='POST')
            {
			
					$this->nomeTipoUsuario=$_POST['txtTipoUsuario'];
					$this->codTipoUsuario= $_POST['codTipoUsuario'];
				
            }
		}
		public function index(){
            
			$atualizacao = 'inserir';
			$usuario=new Usuario();
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				$c = new Usuario();
				$usuario=$c->selectById($id);
			}
			
           require_once('views/usuario/index.php');
        }
		
		public function cadastrar(){
			
			$atualizacao = 'inserir';
			$usuario=new Usuario();
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				$t = new TipoUsuario();
				$usuario=$t->selectById($id);
			}
			
			
			require_once('views/usuario/cadastrar.php');
		}
		
		public function listarTodos (){
			 
			$listar = new Usuario();
			return $listar->selectAll();	
		}
		
		public function buscar($codusuario){
			
			$buscar = new Usuario();
			return $buscar->selectById($codusuario);
			
		}
		
		public function atualizar() {
			$this->iniciaAtributo();
			$atualizar = new Usuario();
			$atualizar->usuario = $this->usuario;
			$atualizar->codUsuario=  $this->codUsuario;
			$atualizar->senha=  $this->senha;
						
			if($atualizar->update()){	
				
				header("location: ../usuario/index/".$this->codUsuario);
			}
		}
		
		public function deletar() {
			
			$codUsuario = $_GET['id'];
			
			$deletar = new Usuario();
			if($deletar->delete($codUsuario)){
				header("location: ../../usuario/index");
			}	
		}
		
		public function inserir() {
		    $this->iniciaAtributo();
            $novoUsuario = new Usuario();
            
            $novoUsuario->usuario = $this->usuario;
			$novoUsuario->senha = $this->senha;
            	
			$novoUsuario::insert($novousuario);
		}
        
        public function entrar(){
            
            $loginUsuario = new Usuario();
            
            $loginCliente = $loginUsuario->loginCliente($this->usuario,$this->senha);
            $loginFunc = $loginUsuario->loginFunc($this->usuario,$this->senha);
            //echo('Chegou');            
            if($loginCliente){
				echo('Cliente');
                //require_once('controllers/home_controller.php');
				
                //header("location: ../home/index");
            }elseif($loginFunc){
				echo('Funcionario');
                //require_once('controllers/prato_controller.php');
               // header("location: ../objetivo/index");
            }else{
                echo('Erro');
                //header("location: ../home/index");
            }
        }
	}

?>