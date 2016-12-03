
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

			$sql = "insert into tblPromocao (nomePromocao, dtInicial, dtFinal,valorDesconto) 
            values('".$promocao->nomePromocao."','".$promocao->dtInicial."','".$promocao->dtFinal."','".$promocao->valorDesconto."')";
					
					echo($sql);
			
			if(mysql_query($sql))
				return true;
			else
				return false;
			
		}		
		
		public function selectAll (){
			$sql="select * from tblPromocao";
            
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
		
		public function selectById($codPromocao){
			
			$sql = "select* from tblPromocao where codPromocao=".$codPromocao;
			
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
		
         public function selectByName($nomePromocao){
             
             $sql = "select* from tblPromocao where nomePromocao like '%".$nomePromocao."%'";
			
			
			$select = mysql_query($sql);
			 $listaPromocao = array();
            
			
            while($rs = mysql_fetch_array($select)){
				
				 
				$promocao = new Promocao();
                $promocao->codPromocao = $rs['codPromocao'];
                $promocao->nomePromocao = $rs['nomePromocao'];
				$promocao->dtInicial = $rs['dtInicial'];
                $promocao->dtFinal = $rs['dtFinal'];
				$promocao->valorDesconto = $rs['valorDesconto'];
                
                $listaPromocao[]= $promocao;
											
			}
			
			return $listaPromocao;
		}
        
		public function update() {
					
			$sql = "update tblPromocao set nomePromocao = '".$this->nomePromocao."', dtInicial = '".$this->dtInicial."', dtFinal = '".$this->dtFinal."',
				valorDesconto = '".$this->valorDesconto."' where codPromocao=".$this->codPromocao; 

			echo($sql);
				
			if(mysql_query($sql))
				return true;
			else
				return false;	
		}
		
		public function delete($codPromocao) {
		
			$sql = "delete from tblPromocao where codpromocao=".$codPromocao;

			if(mysql_query($sql))
				return true;
			else
				return false;					
		}	
	
	
	}
?>