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
        	
        public function __construct(){
            
            require_once('models/banco_dados.php');
            require_once('models/clientes_class.php');
		
            $conexao = new mysql_db();

            $conexao->conectar();
            
            $this->cliente = new Cliente();
            
            
        }
        		
				
		public function insert() {
                $item = new ItemPedido();
                
                date_default_timezone_set('America/Sao_Paulo');
                $this->dtCompra = date('Y-m-d');
                $dia = date('d');
		
                $sql = "insert into tblPedido (tipoPedido,dtCompra,dtEntrega,codCliente,codStatus)
                values ('web','".$this->dtCompra."', now() + INTERVAL 5 DAY,'".$_SESSION['cod']."', '1')";
                $last_id = "set @id = LAST_INSERT_ID();";
                //echo($sql);
                mysql_query($sql);
                /*echo($sql);
                echo($last_id);
                mysql_query($sql);
                mysql_query($last_id);
                $item->insert('@id');*/
				
            if(mysql_query($last_id)){
                    $item->insert('@id');
					return true;
				}else{
					return false;	
				}
		}		
		
		public function selectAll (){
            
			$sql = "select i.codItemPedido, i.quantidade, p.codPedido, p.dtEntrega, p.dtCompra,p.total, c.codCliente, s.codStatus, s.statusPedido 
from tblItemPedido as i inner join tblPedido as p on p.codPedido = i.codPedido inner join tblCliente as c on c.codCliente = p.codCliente inner join tblStatus as s on s.codStatus = p.codStatus where s.codStatus <> 6  and c.codCliente = '".$_SESSION['cod']."' group by p.codPedido";

			
			$select = mysql_query($sql);
            
            $listaPedidos = array(); 
			
			while($rs = mysql_fetch_array($select)){
				
                $pedido = new Pedido();
				$pedido->codPedido = $rs['codPedido'];
				$pedido->dtEntrega= $rs['dtEntrega'];
				$pedido->dtCompra = $rs['dtCompra'];
				$pedido->cliente->codCliente = $rs['codCliente'];
				$pedido->codStatus = $rs['codStatus'];
				$pedido->nomeStatus = $rs['statusPedido'];
               
				$listaPedidos[] = $pedido;						
			}
			
			return $listaPedidos;
				
		}
		
		public function selectById(){
			
           
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