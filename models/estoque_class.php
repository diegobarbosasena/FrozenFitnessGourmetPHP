
<?php
	class Estoque{
	
		public $codEstoque;
		public $dtValidade;
		public $quantidade;
		public $quantidadeLimte;
		
		public function __construct(){
            
            require_once('models/banco_dados.php');
		
            $conexao = new mysql_db();

            $conexao->conectar();
        }
        		
				
		public function insert($categoriaPrato) {

			$sql = "";
			
			if(mysql_query($sql))
				return true;
			else
				return false;
			
		}		
		
		public function selectAll (){
            
			$select = mysql_query($sql);
						
            
            $listaEstoque= array();
            
			while($rs = mysql_fetch_array($select)){
                	  
                $estoque = new Estoque();
                $estoque->codEstoque = $rs['codEstoque'];
                $estoque->dtValidade = $rs['dtValidade'];
				$estoque->quantidade = $rs['quantidade'];
                $estoque->quantidadeLimte = $rs['quantidadeLimte'];
                              
				$listaEstoque[] = $estoque;                              							
			}
			
            return $listaEstoque;   
							
		}
		
		public function selectById($codPrato){
			
			$sql = "=".$codPrato;
			
			$select = mysql_query($sql);
			
			if($rs = mysql_fetch_array($select)){
				
				$estoque = new Estoque();
                $estoque->codEstoque = $rs['codEstoque'];
                $estoque->dtValidade = $rs['dtValidade'];
				$estoque->quantidade = $rs['quantidade'];
                $estoque->quantidadeLimte = $rs['quantidadeLimte'];
               
											
			}
			
			return $promocao;
		}
		
		public function update() {
					
			$sql = "";     
				
			if(mysql_query($sql))
				return true;
			else
				return false;		
		}
		
		public function delete($codCategoriaPrato) {
		
			$sql = "";

			if(mysql_query($sql))
				return true;
			else
				return false;					
		}	
	
	
	
	}

?>