
<?php
	class SobreLoja{
		
		public $codSobreLoja;
		public $imgSobreLoja;
		public $imgSobreLoja1;
		public $imgSobreLoja2;
		public $imgSobreLoja3;
		public $tituloSobreLoja;
		public $historiaSobreLoja;
		public $codEmpresa;
		
		public function __construct(){
            
            require_once('models/banco_dados.php');
		
            $conexao = new mysql_db();

            $conexao->conectar();
        }
        		
				
		public function insert($sobreLoja) {

			$sql = "";
			
			if(mysql_query($sql))
				return true;
			else
				return false;
			
		}		
		
		public function selectAll (){
            
			$select = mysql_query($sql);
						
            
            $listaLoja = array();
            
			while($rs = mysql_fetch_array($select)){
                	  
                $sobreLoja = new Estoque();
                $sobreLoja->codSobreLoja = $rs['codSobreLoja'];
                $sobreLoja->imgSobreLoja = $rs['imgSobreLoja'];
				$sobreLoja->imgSobreLoja1 = $rs['imgSobreLoja1'];
				$sobreLoja->imgSobreLoja2 = $rs['imgSobreLoja2'];
				$sobreLoja->imgSobreLoja3 = $rs['imgSobreLoja3'];
				$sobreLoja->tituloSobreLoja = $rs['tituloSobreLoja'];
                $sobreLoja->historiaSobreLoja = $rs['historiaSobreLoja'];
				$sobreLoja->codEmpresa = $rs['codEmpresa'];
                              
				$listaLoja[] = $sobreLoja;                              							
			}
			
            return $listaLoja;   
							
		}
		
		public function selectById($codSobreLoja){
			
			$sql = "=".$codSobreLoja;
			
			$select = mysql_query($sql);
			
			if($rs = mysql_fetch_array($select)){
				
				$sobreLoja = new SobreLoja();
                $sobreLoja->codSobreLoja = $rs['codSobreLoja'];
                $sobreLoja->imgSobreLoja = $rs['imgSobreLoja'];
				$sobreLoja->imgSobreLoja1 = $rs['imgSobreLoja1'];
				$sobreLoja->imgSobreLoja2 = $rs['imgSobreLoja2'];
				$sobreLoja->imgSobreLoja3 = $rs['imgSobreLoja3'];
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
		
		public function delete($codSobreLoja) {
		
			$sql = "";

			if(mysql_query($sql))
				return true;
			else
				return false;					
		}	
	
		
		
	}
?>