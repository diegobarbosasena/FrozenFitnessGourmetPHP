
<?php
	
	class usuarios_controller {
		
		public $usuario;
		public $senha;
        
        
        public function __construct(){
            
            require_once('models/usuario_class.php');
            
    
            if($_SERVER['REQUEST_METHOD']=='POST')
            {
                $this->usuario=$_POST['txtusuario'];
                $this->senha=$_POST['txtsenha'];
                $this->entrar();
            }
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
            
            $novoUsuario->usuario = this->usuario;
			$novoUsuario->senha = this->senha;
            	
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
                header("location: ../cms/AdmProduto");
            }else{
                echo"<script type='text/javascript'>";
                    echo "alert('Usuario ou senha incorretos');";
                echo "</script>";  
                //header("location: ../home/index");
            }
        }
	}

?>