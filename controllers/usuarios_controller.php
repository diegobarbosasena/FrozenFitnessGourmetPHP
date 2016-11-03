
<?php
	
	class usuarios_controller {
		
		public $tipoUsuario;
		public $codUsuario;
		public $usuario;
		public $senha;
		public $codTipoUsuario;
		public $nometipoUsuario;
		public $perfilAcesso;
        
        
        public function __construct(){
            
            require_once('models/usuario_class.php');
     
        }
        
        
        
       public function iniciaAtributo(){
		
			 if($_SERVER['REQUEST_METHOD']==='POST')
            {
			
					$this->usuario=$_POST['txtusuario'];
					$this->senha= $_POST['txtsenha'];
            }
		}
		
		
        
        public function entrar(){
            $this->iniciaAtributo();
            $loginUsuario = new Usuario();
            
            $loginCliente = $loginUsuario->loginCliente($this->usuario,$this->senha);
            $loginFunc = $loginUsuario->loginFunc($this->usuario,$this->senha);
            
            if($loginCliente){
				echo('Cliente');				
                header("location: ../home/index");
            }elseif($loginFunc){
				echo('Funcionario');
				header("location: ../prato/index");
            }else{
                echo('Erro');
            }
        }
		
	}

?>