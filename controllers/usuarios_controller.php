
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
            
            if($loginUsuario->Login($this->usuario,$this->senha)){
                require_once("views/home/index.php");            
            }else{
                echo"<script type='text/javascript'>";
                    echo "alert('Usuario ou senha incorretos');";
                echo "</script>";     
            }
        }
	}

?>