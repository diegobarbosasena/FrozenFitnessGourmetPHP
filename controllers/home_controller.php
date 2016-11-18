<?php 
require_once('models/prato_class.php');
require_once('models/clientes_class.php');
require_once('models/carrinho_class.php');
//Classe que controla as ações do site
    class home_controller{

        //Método que chama o conteúdo da home
        public function index() {
		
            require_once('views/home/home.php');
        }

		public function logOff(){
			
			$_SESSION['usuario'] = "";
			$_SESSION['cod'] = "";
			
			header("location: ../home/index ");
		}
		
		public function visualizar(){
           
            
            if(($_SESSION['cod']) != null){
				$c = new Cliente();
				$cliente = new Cliente();
				
				$cliente = $c->selectById($_SESSION['cod']);    
				
				require_once('views/home/visualizar.php');
			}else{
				require_once('views/home/home.php');
			}
		
		}
        
        public function meusPedidos(){
            require_once('views/home/meusPedidos.php');
        }

        public function produtos(){
            
            $p = new Prato();
            
            $prato = $p->selectAll();

            require_once('views/home/produtos.php');
        }

        public function sobre(){

            require_once('views/home/sobreLoja.php');
        }

        public function login(){

            require_once('views/home/login.php');
        }
        
        public function contatos(){

            require_once('views/home/contatos.php');
        }
		public function boleto(){

            require_once('views/home/boleto.php');
        }


        public function detalhe(){

            require_once('views/home/detalhe.php');
        }
         public function confirmaEndereco(){
 
            $c = new Cliente();
            
            $cliente = $c->selectAll();

            require_once('views/home/confirmaEndereco.php');
        }
        
         public function outroEnd(){
 
             
            require_once('views/home/outroEnd.php');
        }
         public function venda(){
            
            $c = new Carrinho();
            $c->cliente = new Cliente();
            
            $carrinho = $c->selectAll();

            require_once('views/home/venda.php');
        }
        
        public function cadastro(){

			$atualizacao = 'inserir';
			$cliente = new Cliente();
			$cliente->objetivo = new Objetivo();
			$end = $cliente->endereco = new Endereco();
			
			$listaObjetivos = $cliente->objetivo->selectAll();
			
			$listaCidades = $end->cidade->selectAll();
	
			$listaEstados = $end->cidade->estado->selectAll();
			
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				$c = new Cliente();
				$cliente=$c->selectById($id);
			}
		
            require_once('views/home/cadastro.php');
        }
        
        public function detalhes(){
            
            $id = $_GET['id'];
            
            $p = new Prato();
            
            $prato = $p->selectById($id);
            
            require_once('views/home/detalhesProduto.php');
        }
         public function parceiros(){
            
            require_once('views/home/parceiros.php');
        }
        
        public function personalizado(){
            require_once('views/home/personalizado.php');
        }
       
    }

?>