
<?php 
	
	class pedido_controller{
        

		public $codPedido;
		public $tipoPedido;
		public $dtEntrega;
        public $dtCompra;
        public $cliente;
        public $total;
		
		public function __construct(){
            
            require_once('models/banco_dados.php');
            require_once('models/clientes_class.php');
            require_once('models/pedido_class.php');
            require_once('models/itemPedido_class.php');
            
            $cliente = new Cliente();

        }
        
        public function iniciaAtributo(){
            
            
            
        }
         
        	
        public function listarTodos (){
			 
       
			  
		}
		
		public function buscar(){
         
          
		  
		}
		

		
		public function deletar() {
            
		}
		
		public function inserir() {
            
            $pedido = new Pedido();

            $c = new Carrinho();
            
            $car = $c->selectAll();
			
			foreach($car as $c){
					$pedido->total = $pedido->total + $c->total; 
					$_SESSION['cliente'] = $pedido->cliente->nomeCliente;
					$_SESSION['total'] = $pedido->total;
            }
    
            if($pedido->insert()){
                
			
				echo("<script>
					window.open('../views/boletophp/boleto_bradesco.php');

					location.href = '../home/index';
				</script>");
				
				
				
            }                
        }
		
		public function inserirPersonalizado() {
            
            $pedido = new Pedido();

            $c = new Carrinho();
            
            $car = $c->selectAllPersonalizado();
			
			foreach($car as $c){
					$pedido->total = $pedido->total + $c->total; 
					$_SESSION['cliente'] = $pedido->cliente->nomeCliente;
					$_SESSION['total'] = $pedido->total;
			
            }
				
            if($pedido->insert()){
                
			
				echo("<script>
					window.open('../views/boletophp/boleto_bradesco.php');

					location.href = '../home/index';
				</script>");
	
            }                
        }
		
	}
	
	
	
	
?>