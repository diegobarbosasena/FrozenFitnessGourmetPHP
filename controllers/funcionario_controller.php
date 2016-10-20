0
<?php
	
	class funcionario_controller{
		
		public $nomeFuncionarioLoja;
		public $cpfFuncionarioLoja;
		public $usuarioFuncionario;
		public $senhaFuncionario;
		public $confirmacaoSenha;
		
		
		 public function __construct(){
		
		  require_once('models/funcionario_class.php');
		  require_once('models/usuario_class.php');
               
            if($_SERVER['REQUEST_METHOD']=='POST')
            {
                $this->nomeFuncionarioLoja=$_POST['txtNome'];
				$this->cpfFuncionarioLoja=$_POST['txtCpf'];
				$this->usuarioFuncionario=$_POST['txtUsuario'];
				$this->senhaFuncionario=$_POST['txtSenha'];
				$this->confirmacaoSenha=$_POST['txtConfirmaSenha'];
            }
		 }
		 
		 public function listarTodos (){
			 
			
		}
		
		public function buscar($codCategoria){
			
			
		}
		
		public function atualizar() {
		
			
		}
		
		public function deletar() {
			
			
		}
		
		public function inserir() {
              
			 $funcionario = new Funcionario();
			 $funcionario->nomeFuncionarioLoja = $this->nomeFuncionarioLoja;
			 $funcionario->cpfFuncionarioLoja = $this->cpfFuncionarioLoja;
			 
			 $funcionario::insertFuncionario($funcionario);
			 
			 $usuario = new Usuario();
			 $usuario->usuario = $this->usuarioFuncionario;
			 $usuario->senha = $this->senhaFuncionario;
			 
			 $usuario::insert($usuario);
				
			header("location: ../usuarios/index");
			 
		}	
	}
	
?>
