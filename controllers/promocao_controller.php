
<?php
	
	class promocao_controller {
		
		public $usuario;
		public $senha;
        
        
        public function __construct(){
            
            require_once('models/promocao_class.php');
     
            if($_SERVER['REQUEST_METHOD']==='POST')
            {
				if(isset($_POST['txtusuario']) && isset($_POST['codUsuario'])){
                    
                    $this->usuario=$_POST['txtusuario'];
                    $this->senha=$_POST['txtsenha'];
                    //$this->entrar();
				}
            }
        }
        
        
        
        public function index(){
            
			//$atualizacao = 'inserir';
			//$usuario=new Usuario();
			//if(isset($_GET['id']) && $_GET['id'] != ""){
				
			//	$id = $_GET['id'];
			//	$atualizacao = 'atualizar';
				
				//$c = new Usuario();
				//$usuario=$c->selectById($id);
			//}
			
           require_once('views/promocao/index.php');
        }
        
        
		public function cadastrar(){
			
			$atualizacao = 'inserir';
			$usuario=new Usuario();
            //echo('CHEGOU');
            
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				$c = new Usuario();
				$usuario=$c->selectById($id);
			}
            require_once('views/promocao/cadastrar.php');
		}
        		
		
		public function listarTodos (){
			 
            $listarUsuarios = new Usuario();
            
            return $listarUsuarios->selectAll();
			  
		}
		
		public function buscar($codUsuario){
            
            $buscarUsuario = new Usuario();
            
            return $buscarUsuario->selectById();
		  
		}
		
		public function atualizar($codUsuario) {
		
		
		}
		
		public function deletar($codUsuario) {
            $DeletarUsuario = new Usuario();

            $DeletarUsuario->Delete($cod);	
		}
		
		public function inserir() {
		
            $novoUsuario = new Usuario();
            
            $novoUsuario->usuario = $this->usuario;
			$novoUsuario->senha = $this->senha;
            	
			$novoUsuario::insert($novousuario);
		}
        
        public function entrar(){
            
            $loginUsuario = new Usuario();
            
            $loginCliente = $loginUsuario->loginCliente($this->usuario,$this->senha);
            $loginFunc = $loginUsuario->loginFunc($this->usuario,$this->senha);
                        
            if($loginCliente){
                require_once('controllers/home_controller.php');
                header("location: ../home/index");
            }elseif($loginFunc){
                require_once('controllers/cms_controller.php');
                header("location: ../objetivo/index");
            }else{
                echo"<script type='text/javascript'>";
                    echo "alert('Usuario ou senha incorretos');";
                echo "</script>";  
                //header("location: ../home/index");
            }
        }
	}

?>