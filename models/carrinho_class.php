<?php
	
	class Carrinho {

		public $codCarrinho;
		public $cliente;
		public $prato;
        public $qtd;
        public $total;
        public $img;
		public $produto;
        	
        public function __construct(){
            
            require_once('models/banco_dados.php');
            require_once('models/clientes_class.php');
            require_once('models/prato_class.php');
            require_once('models/produto_class.php');
		
            $conexao = new mysql_db();

            $conexao->conectar();
            
            $this->cliente = new Cliente();
            $this->prato = new Prato();
            $this->produto = new Produto();
        }
        		
        
		public function insert() {
		
                $sql = "insert into tblCarrinho (codCliente,codPrato)
                values ('".$this->cliente->codCliente."','".$this->prato->codPrato."')";
			
				//echo($sql);
			
				if(mysql_query($sql)){
					return true;
				}else{
					return false;	
				}
		}		
		
		 
		public function insertPersonalizado() {
		
                $sql = "insert into tblCarrinho (codCliente,codProduto)
                values ('".$this->cliente->codCliente."','".$this->produto->codProduto."')";
			
				//echo($sql);
			
				if(mysql_query($sql)){
					return true;
				}else{
					return false;	
				}
		}		
		
		
		public function selectAll (){
            
			$sql = "select car.codCarrinho,c.codCliente, c.nomeCliente, p.codPrato, p.imagemPrato, p.nomePrato, p.precoPrato, sum(p.precoPrato) as total ,count(*) as qtd from tblCarrinho as car 
            inner join tblCliente as c on (c.codCliente = car.codCliente) inner join tblPrato as p on (p.codPrato = car.codPrato)  where c.codCliente = '".$_SESSION['cod']."' group by p.codPrato";

			$select = mysql_query($sql);
            
            $listaItens = array(); 
            
			
			while($rs = mysql_fetch_array($select)){
				
                $carrinho = new Carrinho();
				$carrinho->cliente->codCliente = $rs['codCliente'];
				$carrinho->codCarrinho = $rs['codCarrinho'];
				$carrinho->cliente->nomeCliente = $rs['nomeCliente'];
				$carrinho->prato->codPrato = $rs['codPrato'];
				$carrinho->prato->nomePrato = $rs['nomePrato'];
				$carrinho->prato->precoPrato = $rs['precoPrato'];
				$carrinho->qtd = $rs['qtd'];
				$carrinho->total = $rs['total'];
				$carrinho->img = $rs['imagemPrato'];
               
				$listaItens[] = $carrinho;						
			}
			
			return $listaItens;
				
		}
		
		public function selectAllPersonalizado (){
            
			$sql = "select car.codCarrinho,c.codCliente, c.nomeCliente, p.codProduto, p.nomeProduto, p.precoProduto, sum(p.precoProduto) as total ,count(*) as qtd from tblCarrinho as car 
            inner join tblCliente as c on (c.codCliente = car.codCliente) inner join tblProduto as p on (p.codProduto = car.codProduto)  where c.codCliente = '".$_SESSION['cod']."' group by p.codProduto";

			$select = mysql_query($sql);
            
            $listaItens = array(); 
            
			
			while($rs = mysql_fetch_array($select)){
				
                $carrinho = new Carrinho();
				$carrinho->cliente->codCliente = $rs['codCliente'];
				$carrinho->codCarrinho = $rs['codCarrinho'];
				$carrinho->cliente->nomeCliente = $rs['nomeCliente'];
				$carrinho->produto->codProduto = $rs['codProduto'];
				$carrinho->produto->nomeProduto = $rs['nomeProduto'];
				$carrinho->produto->precoProduto = $rs['precoProduto'];
				$carrinho->qtd = $rs['qtd'];
				$carrinho->total = $rs['total'];
               
				$listaItens[] = $carrinho;						
			}
			
			return $listaItens;
				
		}
		
		public function selectById(){
			
		
		}
		
		public function delete() {
		
			$sql = "TRUNCATE tblCarrinho;";
            mysql_query($sql);
								
		}	
        
        public function deleteById($codCarrinho) {
		
			$sql = "delete from tblCarrinho where codCarrinho='".$codCarrinho."'";

            if(mysql_query($sql))
				return true;
			else
				return false;							
		}
 
        public function deleteItem($id) {
		
			$sql = "delete from tblCarrinho where codCarrinho='".$id."'";
			
            if(mysql_query($sql))
				return true;
			else
				return false;						
		}		
	}

?>