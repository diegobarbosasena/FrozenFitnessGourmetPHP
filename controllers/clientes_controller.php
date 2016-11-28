
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
		
		public function iniciaAtributo(){
			
			
			
			 if($_SERVER['REQUEST_METHOD']==='POST')
            {
					 $this->codCliente = $_POST['codCliente'];
					 $this->nomeCliente=$_POST['txtnomecliente'];
					 $this->cpfCliente=$_POST['txtcpfcliente'];
					 $this->dtNascCliente = $_POST['txtdtnascimento'];
					 $this->peso=$_POST['txtpesocliente'];
					 $this->altura=$_POST['txtalturacliente'];
					 $this->telefoneCliente = $_POST['txttelcliente'];	
					 $this->celularCliente=$_POST['txtcelcliente'];
					 $this->emailCliente=$_POST['txtemailcliente'];
					 $this->usuarioCliente=$_POST['txtusuario'];
					 $this->senhaCliente=$_POST['txtsenha'];
					 $this->codUsuarioCliente=$_POST['codUsuarioCliente'];                
					 $this->sexo=$_POST['txtsexo'];
					 
					 $this->endereco->logradouro = $_POST['txtlogradouro'];
					 $this->endereco->codEndereco = $_POST['codEndereco'];
					 $this->endereco->cep = $_POST['txtcep'];
					 $this->endereco->numero = $_POST['txtnumero'];
					 $this->endereco->bairro = $_POST['txtbairro'];
					 $this->endereco->complemento = $_POST['txtcomplemento'];
					 $this->endereco->cidade->codCidade = $_POST['codCidade'];
					 $this->endereco->cidade->estado->codEstado = $_POST['codEstado'];
                     $this->objetivo->codObjetivo = $_POST['codObjetivo'];
            }       
		}
        
		
		public function listarTodos (){
			 
			$listar = new Cliente();
			return $listar->selectAll();
            
		}
		
		public function buscar($codCliente){
			$buscar = new Cliente();
            if(isset($_POST["btnPesquisa"])){
					
				$pesquisa = $_POST["txtBusca"];
                return $buscar->selectById($codCliente);
            }
			
			
		}
		
		public function atualizar() {

		    $this->iniciaAtributo();
			$cliente = new Cliente();
			
			$cliente->nomeCliente = $this->nomeCliente;
			$cliente->codCliente = $this->codCliente;
			$cliente->cpfCliente = $this->cpfCliente;
			$cliente->dtNascCliente = $this->dtNascCliente;
			$cliente->peso = $this->peso;
			$cliente->altura = $this->altura;
			$cliente->telefoneCliente = $this->telefoneCliente;
			$cliente->celularCliente = $this->celularCliente;
			$cliente->emailCliente = $this->emailCliente;
			$cliente->usuarioCliente = $this->usuarioCliente;
			$cliente->senhaCliente = $this->senhaCliente;

			$cliente->codUsuarioCliente = $this->codUsuarioCliente;
			$cliente->sexo =  $this->sexo;
			
			$cliente->endereco->logradouro = $this->endereco->logradouro;
			$cliente->endereco->codEndereco = $this->endereco->codEndereco;

			$cliente->endereco->cep  = $this->endereco->cep;
			$cliente->endereco->numero = $this->endereco->numero;
			$cliente->endereco->bairro = $this->endereco->bairro;
			$cliente->endereco->complemento = $this->endereco->complemento;
			$cliente->endereco->cidade->codCidade = $this->endereco->cidade->codCidade;
			$cliente->endereco->cidade->estado->codEstado = $this->endereco->cidade->estado->codEstado;
		
            $cliente->objetivo->codObjetivo = $this->objetivo->codObjetivo;

            
			if($cliente->update()){					
				header("location: ../home/visualizar");
			}
		}
        
		public function deletar() {
			
			$codCliente = $_GET['id'];
			
			$deletar = new Cliente();
			if($deletar->delete($codCliente)){
				header("location: ../home/visualizar");
			}	
		}
		
		public function inserir() {
            $this->iniciaAtributo();
			$cliente = new Cliente();
			
			$cliente->nomeCliente = $this->nomeCliente;
			$cliente->cpfCliente = $this->cpfCliente;
			$cliente->dtNascCliente = $this->dtNascCliente;
			$cliente->peso = $this->peso;
			$cliente->altura = $this->altura;
			$cliente->telefoneCliente = $this->telefoneCliente;
			$cliente->celularCliente = $this->celularCliente;
			$cliente->emailCliente = $this->emailCliente;
			$cliente->usuarioCliente = $this->usuarioCliente;
			$cliente->senhaCliente = $this->senhaCliente;
			$cliente->emailCliente = $this->emailCliente;
			$cliente->sexo =  $this->sexo;
			
			$cliente->endereco->logradouro = $this->endereco->logradouro;
			$cliente->endereco->cep  = $this->endereco->cep;
			$cliente->endereco->numero = $this->endereco->numero;
			$cliente->endereco->bairro = $this->endereco->bairro;
			$cliente->endereco->complemento = $this->endereco->complemento;
			$cliente->endereco->cidade->codCidade = $this->endereco->cidade->codCidade;
			$cliente->endereco->cidade->estado->codEstado = $this->endereco->cidade->estado->codEstado;
		
            $cliente->objetivo->codObjetivo = $this->objetivo->codObjetivo;
		
			if($cliente::insert($cliente)){
				header("location: ../home/visualizar");
			}
		}

	}

?>