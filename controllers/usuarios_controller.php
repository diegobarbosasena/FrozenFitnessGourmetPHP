
<?php
	
	class usuarios_controller {

		public $usuario;
		public $senha;
   
        public function __construct(){
            
            require_once('models/usuario_class.php');
     	    require_once('models/clientes_class.php');
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
            $c = new Cliente();
            
            $loginCliente = $loginUsuario->loginCliente($this->usuario,$this->senha);
            $loginFunc = $loginUsuario->loginFunc($this->usuario,$this->senha);
            
            $_SESSION['usuario'] = "";
            
            if($loginCliente != null){	 
                
                $lista = $c->selectById($loginCliente);
                
                $_SESSION['usuario'] = "Aqui".$lista->nomeCliente;  
                echo( $_SESSION['usuario'] );
                //header("location: ../home/index");
            }elseif($loginFunc != null){
                $_SESSION['usuario'] = $loginFunc; 
				header("location: ../prato/index");
            }else{               
                echo('Erro');
            }
        }
		
	}

?>