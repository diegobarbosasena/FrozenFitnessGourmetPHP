
<?php
	
	class funcionario_controller{
		
		public $nomeFuncionarioLoja;
		public $cpfFuncionarioLoja;
		public $usuarioFuncionario;
		public $senhaFuncionario;
		public $confirmacaoSenha;
		public $codFuncionarioLoja;
		
		 public function __construct(){
		
		  require_once('models/funcionario_class.php');
		  //require_once('models/usuario_class.php');
               
     
		 }
		 
		 public function iniciaAtributo(){
			if($_SERVER['REQUEST_METHOD']=='POST')
				{
					$this->nomeFuncionarioLoja=$_POST['txtNome'];
					$this->cpfFuncionarioLoja=$_POST['txtCpf'];
					$this->usuarioFuncionario=$_POST['txtUsuario'];
					$this->senhaFuncionario=$_POST['txtSenha'];
					$this->confirmacaoSenha=$_POST['txtConfirmaSenha'];
					$this->codFuncionarioLoja=$_POST['codFuncionarioLoja'];
				}
		 }
		 
		 public function index(){
            
			$atualizacao = 'inserir';
			$funcionario=new Funcionario();
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				$c = new Usuario();
				$funcionario=$c->selectById($id);
			}
			
           require_once('views/usuario/index.php');
        }
		
		public function cadastrar(){
			
			$atualizacao = 'inserir';
			$funcionario=new Funcionario();
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				$t = new Funcionario();
				$funcionario=$t->selectById($id);
			}
			
			
			require_once('views/usuario/cadastrar.php');
		}
		 					 
		 public function listarTodos (){
			 
			$listar = new Funcionario();
			return $listar->selectAll();	
			
		}
		
		public function buscar($id){
			$listar = new Funcionario();
			return $listar->selectById($id);	
			
		}
		
		public function atualizar() {
			$this->iniciaAtributo();
			 $funcionario = new Funcionario();
			 $funcionario->nomeFuncionarioLoja = $this->nomeFuncionarioLoja;
			 $funcionario->cpfFuncionarioLoja = $this->cpfFuncionarioLoja;
			 $funcionario->usuarioFuncionario = $this->usuarioFuncionario;
			 $funcionario->senhaFuncionario = $this->senhaFuncionario;
			 $funcionario->update();
			 /*if(funcionario->insertFuncionario();){
				 header("location: ../usuarios/index");
			 }	*/
			
		}
		
		public function deletar() {
			$id = $_GET['id'];
			$deletar = new Funcionario();
			$deletar->delete($id);			
		}
		
		public function inserir() {
             $this->iniciaAtributo();
			 $funcionario = new Funcionario();
			 $funcionario->nomeFuncionarioLoja = $this->nomeFuncionarioLoja;
			 $funcionario->cpfFuncionarioLoja = $this->cpfFuncionarioLoja;
			 $funcionario->usuarioFuncionario = $this->usuarioFuncionario;
			 $funcionario->senhaFuncionario = $this->senhaFuncionario;
			 $funcionario::insertFuncionario($funcionario);
			  //header("location: ../funcionario/index");
			 /*if($funcionario::insertFuncionario($funcionario)){
				 header("location: ../funcionario/index");
			 }	*/		 
		}	
	}
	
?>
