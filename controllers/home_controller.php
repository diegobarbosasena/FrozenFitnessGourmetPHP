<?php 

//Classe que controla as ações do site
    class home_controller{

        //Método que chama o conteúdo da home
        public function index() {

            require_once('views/home/home.php');
        }

		public function visualizar(){
            require_once('models/clientes_class.php');
            
            $c = new CLiente();
            $cliente = new Cliente();
            
            $cliente = $c->selectById($_SESSION['cod']);    
            
			require_once('views/home/visualizar.php');
			
		}

        public function produtos(){

            require_once('views/home/produtos.php');
        }

        public function sobre(){

            require_once('views/home/sobreLoja.php');
        }

        public function contatos(){

            require_once('views/home/contatos.php');
        }

        public function detalhe(){

            require_once('views/home/detalhe.php');
        }
         public function venda(){

            require_once('views/home/venda.php');
        }
        
        public function cadastro(){

			require_once('models/clientes_class.php');

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