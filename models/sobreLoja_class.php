
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

			$sql = "insert into tblSobreLoja (tituloSobreLoja,imgSobreLoja,imgSobreLoja1, imgSobreLoja2, imgSobreLoja3,  historiaSobreLoja ) 
					values ('".$sobreLoja->tituloSobreLoja."', '".$sobreLoja->imgSobreLoja."', '".$sobreLoja->imgSobreLoja1."',
                    '".$sobreLoja->imgSobreLoja2."', '".$sobreLoja->imgSobreLoja3."',
                     '".$sobreLoja->historiaSobreLoja."')";
            
			
			if(mysql_query($sql))
				return true;
			else
				return false;
			
		}		
		
		public function selectAll (){
            
            $sql="select * from tblSobreLoja";
            
			$select = mysql_query($sql);
						
            
            $listaLoja = array();
            
			while($rs = mysql_fetch_array($select)){
                	  
                $sobreLoja = new SobreLoja();
                $sobreLoja->codSobreLoja = $rs['codSobreLoja'];
                $sobreLoja->imgSobreLoja = $rs['imgSobreLoja'];
				$sobreLoja->imgSobreLoja1 = $rs['imgSobreLoja1'];
				$sobreLoja->imgSobreLoja2 = $rs['imgSobreLoja2'];
				$sobreLoja->imgSobreLoja3 = $rs['imgSobreLoja3'];
				$sobreLoja->tituloSobreLoja = $rs['tituloSobreLoja'];
                $sobreLoja->historiaSobreLoja = $rs['historiaSobreLoja'];
				
                              
				$listaLoja[] = $sobreLoja;                              							
			}
			
            return $listaLoja;   
							
		}
		
		public function selectSite (){
            
            $sql="select * from tblSobreLoja order by rand() limit 1";
            
			$select = mysql_query($sql);
						
            
            $listaLoja = array();
            
			while($rs = mysql_fetch_array($select)){
                	  
                $sobreLoja = new SobreLoja();
                $sobreLoja->codSobreLoja = $rs['codSobreLoja'];
                $sobreLoja->imgSobreLoja = $rs['imgSobreLoja'];
				$sobreLoja->imgSobreLoja1 = $rs['imgSobreLoja1'];
				$sobreLoja->imgSobreLoja2 = $rs['imgSobreLoja2'];
				$sobreLoja->imgSobreLoja3 = $rs['imgSobreLoja3'];
				$sobreLoja->tituloSobreLoja = $rs['tituloSobreLoja'];
                $sobreLoja->historiaSobreLoja = $rs['historiaSobreLoja'];
				
                              
				$listaLoja[] = $sobreLoja;                              							
			}
			
            return $listaLoja;   
							
		}
		
		public function selectById($codSobreLoja){
			
			$sql = "select * from tblSobreLoja where codSobreLoja=".$codSobreLoja;
			
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
				
               
											
			}
			
			return $sobreLoja;
		}
        
        
         public function selectByName($tituloSobreLoja){
             $sql = "select * from tblSobreLoja  where tituloSobreLoja like '%".$tituloSobreLoja."%'";
			
			$select = mysql_query($sql);
			 $listaSobre = array();
            
			
            while($rs = mysql_fetch_array($select)){
				
				 $sobreLoja = new SobreLoja();
                $sobreLoja->codSobreLoja = $rs['codSobreLoja'];
                $sobreLoja->imgSobreLoja = $rs['imgSobreLoja'];
				$sobreLoja->imgSobreLoja1 = $rs['imgSobreLoja1'];
				$sobreLoja->imgSobreLoja2 = $rs['imgSobreLoja2'];
				$sobreLoja->imgSobreLoja3 = $rs['imgSobreLoja3'];
				$sobreLoja->tituloSobreLoja = $rs['tituloSobreLoja'];
                $sobreLoja->historiaSobreLoja = $rs['historiaSobreLoja'];
                
                $listaSobre[]= $sobreLoja;
											
			}
			
			return $listaSobre;
		}
        
		
		public function update() {
					
			$sql = "update tblSobreLoja set tituloSobreLoja = '".$this->tituloSobreLoja."', imgSobreLoja = '".$this->imgSobreLoja."', imgSobreLoja1 = '".$this->imgSobreLoja1."', imgSobreLoja2 = '".$this->imgSobreLoja2."', imgSobreLoja3 = '".$this->imgSobreLoja3."', historiaSobreLoja = '".$this->historiaSobreLoja."'  where codSobreLoja=".$this->codSobreLoja; 
            
			if(mysql_query($sql))
				return true;
			else
				return false;		
		}
		
		public function delete($codSobreLoja) {
		
			$sql = "delete from tblSobreLoja where codSobreLoja=".$codSobreLoja;

			if(mysql_query($sql))
				return true;
			else
				return false;					
		}	
	
		
		
	}
?>