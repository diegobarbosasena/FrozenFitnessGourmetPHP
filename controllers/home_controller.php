<?php 
require_once('models/prato_class.php');
require_once('models/clientes_class.php');
require_once('models/carrinho_class.php');
require_once('models/pedido_class.php');
require_once('models/itemPedido_class.php');
require_once('models/dicas_class.php');
require_once('models/exercicios_class.php');
require_once('models/categoriaPrato_class.php');
require_once('models/sobreLoja_class.php');
require_once('models/produto_class.php');
require_once('models/marketing_class.php');
require_once('models/parceiro_class.php');
//Classe que controla as ações do site
    class home_controller{

        //Método que chama o conteúdo da home
        public function index() {
			$d = new Dicas();        
            $dicas = $d->selectAll();
			
			$e = new Exercicios();        
            $exercicios = $e->selectAll();
			
			$c = new categoriaPrato();        
            $categoria = $c->selectHome();

			$p = new Prato();
            
            $prato = $p->selectAll();
            
            $s = new Slider();
            
            $slide = $s->selectAll();
			
            require_once('views/home/home.php');
        }

		public function logOff(){
			
			$_SESSION['usuario'] = "";
			$_SESSION['cod'] = "";
			
			header("location: ../home/index ");
		}
		
		public function visualizar(){
           
            
            if(isset($_SESSION['cod']) && $_SESSION['cod'] != null){
				$c = new Cliente();
				$cliente = new Cliente();
				
				$cliente = $c->selectById($_SESSION['cod']);    
				
				require_once('views/home/visualizar.php');
			}else{
				require_once('views/home/home.php');
			}
		
		}
        
        public function meusPedidos(){
            
            $p = new Pedido();
            
            $pedido = $p->selectAll();
         
            require_once('views/home/meusPedidos.php');
        }
        
        public function detalhesPedido(){
            $id = $_GET['id'];
            
            $p = new Pedido();
            
            $itens = $p->selectById($id);
            $itensPersonalizado = $p->selectByIdPersonalizado($id);
            
            require_once('views/home/detalhesPedido.php');
        }

        /*public function produtos(){
            
            $p = new Prato();
            
            $prato = $p->selectAll();
            
           
             $c = new categoriaPrato();
            
            $categoria = $c->selectAll();

            require_once('views/home/produtos.php');
        }*/
        
        
        
        public function produtos(){
            
			$p = new Prato();
            
            
            $c = new categoriaPrato();
            
            $categoria = $c->selectAll();
             
            $pesquisa ="";
             
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				$prato=$p->selectById($id);
                
			}else if(isset($_POST["txtPesquisa"])){
					
				$pesquisa = $_POST["txtPesquisa"];
            
                $listaPratos = $p->selectByName($pesquisa);
                
              
            }else{
                
                //
                $listaPratos= $p->selectAll();    
            }
             
            
			
          require_once('views/home/produtos.php');
        }
        
        

        public function sobre(){
			$loja = new SobreLoja(); 			
            $sobre = $loja->selectSite();
			
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
		
		public function confirmaEnderecoPersonalizado(){
 
            $c = new Cliente();
            
            $cliente = $c->selectAll();

            require_once('views/home/confirmaEnderecoPersonalizado.php');
        }
        
         public function outroEnd(){
 
             
            require_once('views/home/outroEnd.php');
        }
         public function venda(){
            
            $c = new Carrinho();
            $c->cliente = new Cliente();
             
            

            if(isset($_SESSION['usuario']) && $_SESSION['usuario'] != null){
                $carrinho = $c->selectAll();
                require_once('views/home/venda.php');
            }else{
                require_once('views/home/login.php');
            }
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
             
             $p = new Parceiro();
             $parceiros = $p->selectAll();
            
            require_once('views/home/parceiros.php');
        }
        
        public function personalizado(){
            
             
            $p = new Produto();
            $c = new Carrinho();
            
            $produto = $p->selectItens();
			$sobremesa = $p->selectSobremesa();
			$bebida = $p->selectBebida();
			
			$carrinho = $c->selectAllPersonalizado();
            
            require_once('views/home/personalizado.php');
        }
       
    }

?>