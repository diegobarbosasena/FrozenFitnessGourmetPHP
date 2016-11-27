
<?php
	
	class usuarios_controller {

		public $usuario;
		public $senha;
        public $cliente;
        public $funcionario;
   
        public function __construct(){
        
            require_once('models/banco_dados.php');
			require_once('models/funcionario_class.php');
			require_once('models/clientes_class.php');
            
            $cliente = new Cliente();
            $funcionario = new Funcionario();
   
   
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
    
            $c = new Cliente();
            
            $loginCliente = $this->loginCliente($this->usuario,$this->senha);
            $loginFunc = $this->loginFunc($this->usuario,$this->senha);
            
            if($loginCliente != null){	
                $_SESSION['usuario'] = $this->cliente->nomeCliente;
                $_SESSION['cod'] = $this->cliente->codCliente;

                header("location: ../home/index");
                
            }elseif($loginFunc != null){
                
                $_SESSION['usuarioCms'] = $this->funcionario->nomeFuncionarioLoja;
				$_SESSION['codCms'] = $this->funcionario->nomeFuncionarioLoja;
				header("location: ../homeCms/index");
            }else{               
                header("location: ../home/login");
            }
        }
        
        
         public function loginCliente($usuario, $senha){
            
            
				$c = new Cliente();
				$lista = $c->selectAll();
				
				foreach($lista as $c){
					if($c->usuarioCliente == $usuario && $c->senhaCliente == $senha){
                        $this->cliente->nomeCliente = $c->nomeCliente;
                        $this->cliente->codCliente = $c->codCliente;
                        return 1;
                    }
				}
             
                return 0;
        }
		
		  public function loginFunc($usuario, $senha){
            
			$f = new Funcionario();
			$lista = $f->selectAll();
				
			foreach($lista as $f){
				if($f->usuarioFuncionario == $usuario && $f->senhaFuncionario == $senha){
                       $this->funcionario->nomeFuncionarioLoja = $f->nomeFuncionarioLoja;
                       return 1;
				}				
			}
				
			return 0;
		}
		
	}

?>