
<?php
	
	class funcionario_controller{
		
		public $nomeFuncionarioLoja;
		public $cpfFuncionarioLoja;
		public $usuarioFuncionario;
		public $senhaFuncionario;
		public $confirmacaoSenha;
		public $codFuncionarioLoja;
        public $codTipoUsuario;
        public $codUsuario;
        public $cod;
		
		 public function __construct(){
		
		  require_once('models/funcionario_class.php');       
     
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
                    $this->codTipoUsuario=$_POST['codTipoUsuario'];
                    $this->codUsuario=$_POST['codUsuario'];
                  
				}
		 }
		 
        
		 public function index(){
            
			$atualizacao = 'inserir';
			$f = new Funcionario();
            
            $pesquisa ="";
             
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				
				$funcionario=$f->selectById($id);
                
			}else if(isset($_POST["txtPesquisa"])){
					
				$pesquisa = $_POST["txtPesquisa"];
            
                $listaFuncionario = $f->selectByName($pesquisa);
                
              
            }else{
                
                //
                $listaFuncionario= $f->selectAll();    
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
             $funcionario->codTipoUsuario = $this->codTipoUsuario;
             $funcionario->codUsuario = $this->codUsuario;
             $funcionario->codFuncionarioLoja = $this->codFuncionarioLoja;
        		
			 if($funcionario->update()){
				 header("location: ../funcionario/index");
			 }
			
		}
		
		public function deletar() {
            
            $id = $_GET['id'];
			$f = new Funcionario();
 
            $funcionario=$f->selectById($id);
			if($f->delete($funcionario)){
                header("location: ../../funcionario/index");
            }			
		}
		
		public function inserir() {
             $this->iniciaAtributo();
			 $funcionario = new Funcionario();
			 $funcionario->nomeFuncionarioLoja = $this->nomeFuncionarioLoja;
			 $funcionario->cpfFuncionarioLoja = $this->cpfFuncionarioLoja;
			 $funcionario->usuarioFuncionario = $this->usuarioFuncionario;
			 $funcionario->senhaFuncionario = $this->senhaFuncionario;
             $funcionario->codTipoUsuario = $this->codTipoUsuario;
			 
			 //$funcionario::insertFuncionario($funcionario);
			 
			 if($funcionario::insertFuncionario($funcionario)){
				 header("location: ../funcionario/index");
			 }	 
		}	
	}
	
?>
