<?php
	
	class Pedido {

		public $codPedido;
		public $tipoPedido;
		public $dtEntrega;
        public $dtCompra;
        public $cliente;
        	
        public function __construct(){
            
            require_once('models/banco_dados.php');
            require_once('models/clientes_class.php');
            require_once('models/prato_class.php');
            require_once('models/carrinho_class.php');
		
            $conexao = new mysql_db();

            $conexao->conectar();
            
            $this->cliente = new Cliente();
        }
        		
				
		public function insert() {
		
                $sql = "insert into tblCarrinho (codCliente,codPrato)
                values ('".$this->cliente->codCliente."','".$this->prato->codPrato."')";
			
				if(mysql_query($sql)){
					return true;
				}else{
					return false;	
				}
		}		
		
		public function selectAll (){
            
			$sql = "select car.codCarrinho,c.codCliente, c.nomeCliente, p.codPrato, p.nomePrato, p.precoPrato, SUM(p.precoPrato) as total ,count(*) as qtd from tblCarrinho as car 
            inner join tblCliente as c on (c.codCliente = car.codCliente) inner join tblPrato as p on (p.codPrato = car.codPrato)  where c.codCliente = '".$_SESSION['cod']."' group by p.codPrato";

			
			$select = mysql_query($sql);
            
            $listaItens = array(); 
			
			while($rs = mysql_fetch_array($select)){
				
                $carrinho = new Carrinho();
				$carrinho->cliente->codCliente = $rs['codCliente'];
				$carrinho->cliente->nomeCliente = $rs['nomeCliente'];
				$carrinho->prato->codPrato = $rs['codPrato'];
				$carrinho->prato->nomePrato = $rs['nomePrato'];
				$carrinho->prato->precoPrato = $rs['precoPrato'];
				$carrinho->qtd = $rs['qtd'];
				$carrinho->total = $rs['total'];
               
				$listaItens[] = $carrinho;						
			}
			
			return $listaItens;
				
		}
		
		public function selectById(){
			
            $sql = "select car.codCarrinho,c.codCliente, c.nomeCliente, p.codPrato, p.nomePrato, p.precoPrato, SUM(p.precoPrato) as total ,count(*) as qtd from tblCarrinho as car 
                inner join tblCliente as c on (c.codCliente = car.codCliente) inner join tblPrato as p on (p.codPrato = car.codPrato)  where c.codCliente = '".$_SESSION['cod']."' group by p.codPrato";

			
			$select = mysql_query($sql); 
			
			if($rs = mysql_fetch_array($select)){
				
                $carrinho = new Carrinho();
				$carrinho->cliente->codCliente = $rs['codCliente'];
				$carrinho->cliente->nomeCliente = $rs['nomeCliente'];
				$carrinho->prato->codPrato = $rs['codPrato'];
				$carrinho->prato->nomePrato = $rs['nomePrato'];
				$carrinho->prato->precoPrato = $rs['precoPrato'];
				$carrinho->qtd = $rs['qtd'];
				$carrinho->total = $rs['total'];
               					
			}
			
			return $carrinho;
		}
		
		public function delete() {
		
			$sql = "";

			if(mysql_query($sql))
				return true;
			else
				return false;							
		}	
	}

?>