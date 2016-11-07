
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
			
					$this->usuario=$_POST['txtusuario'];
					$this->senha= $_POST['txtsenha'];
            }
		}
		
		
        
        public function entrar(){
            $this->iniciaAtributo();
            $loginUsuario = new Usuario();
            
            $loginCliente = $loginUsuario->loginCliente($this->usuario,$this->senha);
            $loginFunc = $loginUsuario->loginFunc($this->usuario,$this->senha);
            
            if($loginCliente != 0){			
                header("location: ../home/index/".$loginCliente);
            }elseif($loginFunc != 0){
				header("location: ../prato/index/".$loginFunc);
            }else{
                echo('Erro');
            }
        }
		
	}

?>