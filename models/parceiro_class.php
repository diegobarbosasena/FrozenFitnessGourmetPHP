
<?php
	
	class Parceiro {

		public $nomeParceiro;
		public $codParceiro;
		public $cnpjParceiro;
		public $imagemParceiro;
		public $siteParceiro;
		public $telefoneParceiro;
		public $emailParceiro;
		public $endereco;
        
        
        public function __construct(){
            
            require_once('models/banco_dados.php');
		
            $conexao = new mysql_db();

            $conexao->conectar();
        }       		
				
		public function insert() {
		
			$sql = "insert into tblParceiro (nomeParceiro) values('".$nomeParceiro->nomeParceiro."')";
			
			if(mysql_query($sql))
				return true;
			else
				return false;
							
		}		
		
		
		
		public function selectAll (){
            
			$sql = "select * from tblParceiro";
			
			$select = mysql_query($sql);
						
            
            $listaParceiro = array();
            
			while($rs = mysql_fetch_array($select)){
                	  
                $parceiro = new Parceiro();
                $parceiro->codParceiro = $rs['codParceiro'];
                $parceiro->nomeParceiro = $rs['nomeParceiro'];
                
				$listaParceiro[] = $parceiro;                              							
			}
			
            return $listaParceiro;           
		}
		
		public function selectById($codParceiro){
			
			$sql = "select * from tblParceiro where codParceiro=".$codParceiro;
			
			$select = mysql_query($sql);
			
			if($rs = mysql_fetch_array($select)){
				
				$Parceiro= new Parceiro();
				  
				$Parceiro->codParceiro = $rs['codParceiro'];
                $Parceiro->nomeParceiro = $rs['nomeParceiro'];
											
			}
			
			return $Parceiro;
		}
		
		public function update() {
		
			$sql = "update tblParceiro set codParceiro='".$this->nomeParceiro."' where codParceiro=".$this->codParceiro;     
				
			if(mysql_query($sql))
				return true;
			else
				return false;				
		}
		
		public function delete($codParceiro) {
		
			$sql = "delete from tblParceiro where codParceiro=".$codParceiro;

			if(mysql_query($sql))
				return true;
			else
				return false;							
		}	
	}

?>