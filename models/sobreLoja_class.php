
<?php
	class SobreLoja{
		
		public $codSobreLoja;
		public $imgSobreLoja;
		public $tituloSobreLoja;
		public $historiaSobreLoja;
		public $codEmpresa;
		
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
						
            
            $listaLoja array();
            
			while($rs = mysql_fetch_array($select)){
                	  
                $sobreLoja = new Estoque();
                $sobreLoja->codSobreLoja = $rs['codSobreLoja'];
                $sobreLoja->imgSobreLoja = $rs['imgSobreLoja'];
				$sobreLoja->tituloSobreLoja = $rs['tituloSobreLoja'];
                $sobreLoja->historiaSobreLoja = $rs['historiaSobreLoja'];
				$sobreLoja->codEmpresa = $rs['codEmpresa'];
                              
				$listaLoja[] = $sobreLoja;                              							
			}
			
            return $listaLoja;   
							
		}
		
		public function selectById($codPrato){
			
			$sql = "=".$codPrato;
			
			$select = mysql_query($sql);
			
			if($rs = mysql_fetch_array($select)){
				
				$sobreLoja = new Estoque();
                $sobreLoja->codSobreLoja = $rs['codSobreLoja'];
                $sobreLoja->imgSobreLoja = $rs['imgSobreLoja'];
				$sobreLoja->tituloSobreLoja = $rs['tituloSobreLoja'];
                $sobreLoja->historiaSobreLoja = $rs['historiaSobreLoja'];
				$sobreLoja->codEmpresa = $rs['codEmpresa'];
               
											
			}
			
			return $sobreLoja;
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