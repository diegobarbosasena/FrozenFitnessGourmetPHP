
<?php
	
	class clientes_controller {
		
        public $codCliente;
        public $nomeCliente;
        public $cpfCliente;
        public $dtNascCliente;
        public $peso;
        public $altura;
        public $telefoneCliente;
        public $celularCliente;
        public $emailCliente;  
        
        
        public function __construct(){
            
            require_once('models/clientes_class.php');

    
            if($_SERVER['REQUEST_METHOD']==='POST')
            {
				if(isset($_POST['txtnomeCliente']) && isset($_POST['codCliente'])){
					 $this->codCliente = $_POST['codCliente'];
					 $this->nomeCliente=$_POST['txtnomeCliente'];
					 $this->cpfCliente=$_POST['txtcpfCliente'];
					 $this->dtNascCliente = $_POST['txtdtNascCliente'];
					 $this->peso=$_POST['txtpeso'];
					 $this->altura=$_POST['txtaltura'];
					 $this->telefoneCliente = $_POST['txttelefoneCliente'];	
					 $this->celularCliente=$_POST['txtcelularCliente'];
					 $this->emailCliente=$_POST['txtemailCliente'];				
				}
            }       
        }
		
	
        public function index(){
            
			$atualizacao = 'inserir';
			$cliente = new Cliente();
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				$c = new Cliente();
				$cliente=$c->selectById($id);
			}
			
           require_once('views/clientes/index.php');
        }
		
		
		public function cadastrar(){
			
			$atualizacao = 'inserir';
			$cliente = new Cliente();
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				$c = new Cliente();
				$cliente=$c->selectById($id);
			}
			
           require_once('views/home/cadastro.php');
		}
        
		 public function detalhe(){
            
             require_once('views/clientes/detalhe_clientes.php');
            
        }
		public function listarTodos (){
			 
			$listar = new Cliente();
			return $listar->selectAll();	
		}
		
		public function buscar($codCliente){
			
			$buscar = new Cliente();
			return $buscar->selectById($codCliente);
			
		}
		
		public function atualizar() {
		
			$atualizar = new Cliente();
			$atualizar->nomeCliente = $this->nomeCliente;
			$atualizar->cpfCliente = $this->cpfCliente;
			$atualizar->dtNascCliente = $this->dtNascCliente;
			$atualizar->peso = $this->peso;
			$atualizar->altura = $this->altura;
			$atualizar->telefoneCliente = $this->telefoneCliente;
			$atualizar->celularCliente = $this->celularCliente;
			$atualizar->emailCliente = $this->emailCliente;
			
			
			if($atualizar->update()){					
				header("location: ../clientes/index".$this->codCliente);
			}
		}
        
		public function deletar() {
			
			$codCliente = $_GET['id'];
			
			$deletar = new Cliente();
			if($deletar->delete($codCliente)){
				header("location: ../../clientes/index");
			}	
		}
		
		public function inserir() {
              
			$cliente = new Cliente();
			$cliente->nomeCliente = $this->nomeCliente;
			$cliente->cpfCliente = $this->cpfCliente;
			$cliente->dtNascCliente = $this->dtNascCliente;
			$cliente->peso = $this->peso;
			$cliente->altura = $this->altura;
			$cliente->telefoneCliente = $this->telefoneCliente;
			$cliente->celularCliente = $this->celularCliente;
			$cliente->emailCliente = $this->emailCliente;
			$cliente::insert($cliente);
			header("location: ../home/cadastro.php");
			/*if($cliente::insert($cliente)){
				header("location: ../home/cadastro.php");
			}*/
		}

	}

?>