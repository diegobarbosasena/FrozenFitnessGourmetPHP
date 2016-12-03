<?php
	
	class itemPedido {

		public $codItemPedido;
		public $quantidade;
		public $codPedido;
        public $codPrato;
        	
        public function __construct(){
            
            require_once('models/banco_dados.php');
            require_once('models/carrinho_class.php');
		
            $conexao = new mysql_db();

            $conexao->conectar();

        }
        		
				
		public function insert($codPedido) {
                $c = new Carrinho();

                if($c->selectAll() != null){
					foreach($c->selectAll() as $c){
							$sql = "insert into tblItemPedido (codPedido,codPrato,quantidade)
							values (".$codPedido.",'".$c->prato->codPrato."','".$c->qtd."')";
                      mysql_query($sql);
                    }
				}else{
                    foreach($c->selectAllPersonalizado() as $c){
							$sql = "insert into tblItemPedido (codPedido,codProduto,quantidade)
							values (".$codPedido.",'".$c->produto->codProduto."','".$c->qtd."')";
                        mysql_query($sql);
				    }
						
				}   
				
            
                $c->delete();      
		}		
		
		public function selectAll (){
            
			
				
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