<?php
	
	class Pedido {

		public $codPedido;
		public $tipoPedido;
		public $dtEntrega;
        public $dtCompra;
        public $cliente;
        public $codStatus;
        public $nomeStatus;
        public $total;
        public $prato;
        public $item;
        
        public function __construct(){
            
            require_once('models/banco_dados.php');
            require_once('models/clientes_class.php');
            require_once('models/carrinho_class.php');
            require_once('models/prato_class.php');
		
            $conexao = new mysql_db();

            $conexao->conectar();
            
            $this->cliente = new Cliente();
            $this->prato = new Prato();
            
            $this->item = new ItemPedido();
        }
        		
				
		public function insert() {
            
                
		
                $sql = "insert into tblPedido (tipoPedido,dtCompra,dtEntrega,codCliente,codStatus,total)
                values ('web',now(), now() + INTERVAL 5 DAY,'".$_SESSION['cod']."', '1','".$this->total."')";
                $last_id = "set @id = LAST_INSERT_ID();";       
				//echo($sql);
               mysql_query($sql);
             
				
            if(mysql_query($last_id)){
                    $this->item->insert('@id');
					return true;
				}else{
					return false;	
				}
		}		
		
		public function selectAll (){
            
			$sql = "select i.codItemPedido, i.quantidade, p.codPedido, p.dtEntrega, p.dtCompra,p.total, c.codCliente,c.nomeCliente, s.codStatus, s.statusPedido 
from tblItemPedido as i inner join tblPedido as p on p.codPedido = i.codPedido inner join tblCliente as c on c.codCliente = p.codCliente inner join tblStatus as s on s.codStatus = p.codStatus where s.codStatus <> 6  and c.codCliente = '".$_SESSION['cod']."' group by p.codPedido";

			
			$select = mysql_query($sql);
            
            $listaPedidos = array(); 
			
			while($rs = mysql_fetch_array($select)){
				
                $pedido = new Pedido();
				$pedido->codPedido = $rs['codPedido'];
				$pedido->dtEntrega= $rs['dtEntrega'];
				$pedido->dtCompra = $rs['dtCompra'];
				$pedido->cliente->codCliente = $rs['codCliente'];
				$pedido->cliente->nomeCliente = $rs['nomeCliente'];
				$pedido->codStatus = $rs['codStatus'];
				$pedido->nomeStatus = $rs['statusPedido'];
               
				$listaPedidos[] = $pedido;						
			}
			
			return $listaPedidos;
				
		}
		
		public function selectById($cod){
					$sql = "select i.codItemPedido, i.quantidade, p.codPedido, p.dtEntrega, p.dtCompra,p.total, c.codCliente,c.nomeCliente, s.codStatus, s.statusPedido, pra.codPrato, pra.nomePrato
from tblItemPedido as i inner join tblPedido as p on p.codPedido = i.codPedido inner join tblCliente as c on c.codCliente = p.codCliente inner join tblStatus as s on s.codStatus = p.codStatus inner join tblPrato as pra on pra.codPrato = i.codPrato  where s.codStatus <> 6  and c.codCliente = '".$_SESSION['cod']."' and p.codPedido = '".$cod."'";

            echo($sql);
			$select = mysql_query($sql);
            
            $listaPedidos = array(); 
			
			while($rs = mysql_fetch_array($select)){
				
                $pedido = new Pedido();
				$pedido->codPedido = $rs['codPedido'];
				$pedido->dtEntrega= $rs['dtEntrega'];
				$pedido->dtCompra = $rs['dtCompra'];
				$pedido->cliente->codCliente = $rs['codCliente'];
				$pedido->cliente->nomeCliente = $rs['nomeCliente'];
				$pedido->codStatus = $rs['codStatus'];
				$pedido->nomeStatus = $rs['statusPedido'];
				$pedido->total = $rs['total'];
                $pedido->prato->nomePrato = $rs['nomePrato'];
                $pedido->item->quantidade = $rs['quantidade'];
               
				$listaPedidos[] = $pedido;						
			}
			
			return $listaPedidos;
           
		}
		
		
	}

?>