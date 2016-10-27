
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
		
				$sql = "insert into tbldica (tituloDica, descricaoDica, imagemDica) values('".$dicas->tituloDica."','".$dicas->descricaoDica."',
					'".$dicas->imagemDica."')";

				echo($sql);
				if(mysql_query($sql)){
				
					return true;
				}else{
					return false;	
				}
		}		
		
		public function selectAll (){
            
			$sql = "select * from tbldica";
			
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
			
			$sql = "select * from tbldica where codDica=".$codDica;
			
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
		
		public function update() {
		
			$sql = "update tbldica set tituloDica='".$this->tituloDica."', descricaoDica='".$this->descricaoDica."'  where codDica=".$this->codDica;     
		
			if(mysql_query($sql)){				
				return true;
			}else{
				return false;
			}
		}
		
		public function delete($codDica) {
		
			$sql = "delete from tbldica where codDica=".$codDica ;

			if(mysql_query($sql))
				return true;
			else
				return false;							
		}	
	}

?>