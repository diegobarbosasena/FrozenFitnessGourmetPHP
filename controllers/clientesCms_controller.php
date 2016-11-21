
<?php
	
	class clientesCms_controller {
		
        public $codCliente;
        public $nomeCliente;
        public $cpfCliente;
        public $dtNascCliente;
        public $peso;
        public $altura;
        public $telefoneCliente;
        public $celularCliente;
        public $emailCliente; 
		public $sexo;
		public $endereco;
		public $usuarioCliente;
		public $codUsuarioCliente;
		public $senhaCliente;
		public $confirmacaoSenha;
		public $objetivo;
        
        
        public function __construct(){
            
            require_once('models/clientes_class.php');   
			require_once('models/endereco_class.php');	
			require_once('models/objetivo_class.php');	
            
            $this->endereco = new Endereco;
			$this->objetivo = new Objetivo;
        }
		
        public function index(){
            $cliente = new Cliente();
			$cliente->objetivo = new Objetivo();
			$end = $cliente->endereco = new Endereco();
			
            $listaClientes = $cliente->selectAll();
            
			
           require_once('views/clientes/index.php');
        }
        
        
		 public function detalhe(){
             
             $c = new Cliente();
             $c->objetivo = new Objetivo();
			 $end =  $c->endereco = new Endereco();
             $cliente = $c->selectById($_GET['id']);
            
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

	}

?>