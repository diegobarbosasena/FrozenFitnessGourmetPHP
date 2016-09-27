
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
			 
			  
		
		}
		
		public function buscar($codUsuario){
			
		
		}
		
		public function atualizar($codUsuario) {
		
		
		}
		
		public function deletar($codUsuario) {
		
		
		}
		
		public function inserir() {
		
		
		}
        
        public function entrar(){
            
            $loginUsuario = new Usuario();
            
            $loginCliente = $loginUsuario->loginCliente($this->usuario,$this->senha);
            $loginFunc = $loginUsuario->loginFunc($this->usuario,$this->senha);
                        
            if($loginCliente){
                require_once("");   
               // echo("Achou Cliente");
            }elseif($loginFunc){
                require_once("");     
                //echo("Achou Funcionario");
            }else{
                echo"<script type='text/javascript'>";
                    echo "alert('Usuario ou senha incorretos');";
                echo "</script>";     
            }
        }
	}

?>