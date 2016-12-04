<?php
	
	class Objetivo {

		public $codObjetivo;
		public $nomeObjetivo;
		public $descricaoObjetivo;

		
        public function __construct(){
            
            require_once('models/banco_dados.php');
		
            $conexao = new mysql_db();

            $conexao->conectar();
        }
        		
				
		public function insert($objetivo) {
		
				$sql = "insert into tblObjetivo (nomeObjetivo, descricaoObjetivo) values ('".$objetivo->nomeObjetivo."', '".$objetivo->descricaoObjetivo."');";
			
				if(mysql_query($sql)){
					return true;
				}else{
					return false;	
				}
		}		
		
		public function selectAll (){
            
			$sql = "select * from tblObjetivo";
			
			$select = mysql_query($sql);
            
            $listaObjetivo = array(); 
			
			while($rs = mysql_fetch_array($select)){
				
                $objetivo = new Objetivo();
				$objetivo->codObjetivo = $rs['codObjetivo'];
                $objetivo->nomeObjetivo = $rs['nomeObjetivo'];
				$objetivo->descricaoObjetivo = $rs['descricaoObjetivo'];
				
				$listaObjetivo[] = $objetivo;						
			}
			
			return $listaObjetivo;
				
		}
		
		public function selectById($codObjetivo){
			
			$sql = "select * from tblObjetivo where codObjetivo=".$codObjetivo;
			
			$select = mysql_query($sql);
			
			if($rs = mysql_fetch_array($select)){
				
				$objetivo = new Objetivo();
				$objetivo->codObjetivo = $rs['codObjetivo'];
                $objetivo->nomeObjetivo = $rs['nomeObjetivo'];
				$objetivo->descricaoObjetivo = $rs['descricaoObjetivo'];	
			}
			
			return $objetivo;
		}
        
        public function selectByName($nomeObjetivo){
            $sql = "select * from tblObjetivo  where nomeObjetivo like '%".$nomeObjetivo."%'";
			
			
			$select = mysql_query($sql);
			 $listaObjetivo = array();
            
			
            while($rs = mysql_fetch_array($select)){
				
				  $objetivo = new Objetivo();
				$objetivo->codObjetivo = $rs['codObjetivo'];
                $objetivo->nomeObjetivo = $rs['nomeObjetivo'];
				$objetivo->descricaoObjetivo = $rs['descricaoObjetivo'];
                
                $listaObjetivo[]= $objetivo;
											
			}
			
			return $listaObjetivo;
		}
		
		public function update() {
		
			$sql = "update tblObjetivo set nomeObjetivo = '".$this->nomeObjetivo."', descricaoObjetivo = '".$this->descricaoObjetivo."' where codObjetivo=".$this->codObjetivo;     
			
			if(mysql_query($sql)){				
				return true;
			}else{
				return false;
			}
		}
		
		public function delete($codObjetivo) {
		
			$sql = "delete from tblObjetivo where codObjetivo=".$codObjetivo;

			if(mysql_query($sql))
				return true;
			else
				return false;							
		}	
	}

?>