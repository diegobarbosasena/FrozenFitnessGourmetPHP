
<?php
	class Dicas{
	

		public $tituloDica;
		public $codDica;
		public $descricaoDica;
		public $imagemDica;

		
        public function __construct(){
            
            require_once('models/banco_dados.php');
		
            $conexao = new mysql_db();

            $conexao->conectar();
        }
        		
				
		public function insert($dicas) {
		
				$sql = "insert into tblDica (tituloDica, descricaoDica, imagemDica) values('".$dicas->tituloDica."','".$dicas->descricaoDica."',
					'".$dicas->imagemDica."')";

				//echo($sql);
				if(mysql_query($sql)){
				
					return true;
				}else{
					return false;	
				}
		}		
		
		public function selectAll (){
            
			$sql = "select * from tblDica";
			
			$select = mysql_query($sql);
            
            $listaDica = array(); 
			
			while($rs = mysql_fetch_array($select)){
				
                $dicas = new Dicas();
				$dicas->codDica = $rs['codDica'];
                $dicas->tituloDica = $rs['tituloDica'];
				$dicas->descricaoDica = $rs['descricaoDica'];
				$dicas->imagemDica = $rs['imagemDica'];
				
				$listaDica[] = $dicas;						
			}
			
			return $listaDica;
				
		}
		
		public function selectById($codDica){
			
			$sql = "select * from tblDica where codDica=".$codDica;
			
			$select = mysql_query($sql);
			
			if($rs = mysql_fetch_array($select)){
				
				$dicas = new Dicas();
				  
				$dicas = new Dicas();
				$dicas->codDica = $rs['codDica'];
                $dicas->tituloDica = $rs['tituloDica'];
				$dicas->descricaoDica = $rs['descricaoDica'];
				$dicas->imagemDica = $rs['imagemDica'];			
			}
			
			return $dicas;
		}
        
         public function selectByName($tituloDica){
			$sql = "select * from tblDica where tituloDica like '%".$tituloDica."%'";

			$select = mysql_query($sql);
			 $listaDicas = array();
            
			
            while($rs = mysql_fetch_array($select)){
				
				$dicas = new Dicas();
				  
				$dicas = new Dicas();
				$dicas->codDica = $rs['codDica'];
                $dicas->tituloDica = $rs['tituloDica'];
				$dicas->descricaoDica = $rs['descricaoDica'];
				$dicas->imagemDica = $rs['imagemDica'];		
                $listaDicas[]= $dicas;
											
			}
			
			return $listaDicas;
		}
		
		public function update() {
		
			$sql = "update tblDica set tituloDica='".$this->tituloDica."', descricaoDica='".$this->descricaoDica."' , imagemDica= '".$this->imagemDica."' where codDica=".$this->codDica;     
		
			if(mysql_query($sql)){				
				return true;
			}else{
				return false;
			}
		}
		
		public function delete($codDica) {
		
			$sql = "delete from tblDica where codDica=".$codDica ;

			if(mysql_query($sql))
				return true;
			else
				return false;							
		}	
	}

?>