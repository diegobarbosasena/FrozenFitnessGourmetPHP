
<?php 
	class Promocao{
	
		public $codPromocao;
		public $nomePromocao;
		public $dtInicial;
		public $dtFinal;
		public $valorDesconto;
		
		public function __construct(){
            
            require_once('models/banco_dados.php');
		
            $conexao = new mysql_db();

            $conexao->conectar();
        }
        		
				
		public function insert($promocao) {

			$sql = "insert into tblPromocao (nomePromocao, dtInicial, dtFinal,valorDesconto) values('".$promocao->nomePromocao."','".$promocao->dtInicial."',
					'".$promocao->dtFinal."','".$promocao->valorDesconto."')";
			
			if(mysql_query($sql))
				return true;
			else
				return false;
			
		}		
		
		public function selectAll (){
            
			$select = mysql_query($sql);
						
            
            $listaPromocao = array();
            
			while($rs = mysql_fetch_array($select)){
                	  
                $promocao = new Promocao();
                $promocao->codPromocao = $rs['codPromocao'];
                $promocao->nomePromocao = $rs['nomePromocao'];
				$promocao->dtInicial = $rs['dtInicial'];
                $promocao->dtFinal = $rs['dtFinal'];
				$promocao->valorDesconto = $rs['valorDesconto'];
               
                
				$listaPromocao[] = $promocao;                              							
			}
			
            return $listaPromocao;   
							
		}
		
		public function selectById($codPrato){
			
			$sql = "=".$codPrato;
			
			$select = mysql_query($sql);
			
			if($rs = mysql_fetch_array($select)){
				
				$promocao = new Promocao();
                $promocao->codPromocao = $rs['codPromocao'];
                $promocao->nomePromocao = $rs['nomePromocao'];
				$promocao->dtInicial = $rs['dtInicial'];
                $promocao->dtFinal = $rs['dtFinal'];
				$promocao->valorDesconto = $rs['valorDesconto'];
               
											
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