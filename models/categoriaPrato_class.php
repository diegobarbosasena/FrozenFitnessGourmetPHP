
<?php
	class categoriaPrato{
	

		public $nomeCategoriaPrato;
		public $codCategoriaPrato;
		public $descricaoCategoriaPrato;
		public $imagemCategoriaPrato;

		
        public function __construct(){
            
            require_once('models/banco_dados.php');
		
            $conexao = new mysql_db();

            $conexao->conectar();
        }
        		
				
		public function insert($categoriaPrato) {
		
				$sql = "insert into tblCategoriaPrato (nomeCategoriaPrato, descricaoCategoriaPrato, imagemCategoriaPrato) values('".$categoriaPrato->nomeCategoriaPrato."','".$categoriaPrato->descricaoCategoriaPrato."',
					'".$categoriaPrato->imagemCategoriaPrato."')";

				if(mysql_query($sql)){
				
					return true;
				}else{
					return false;	
				}
		}		
		
		public function selectAll (){
            
			$sql = "select * from tblCategoriaPrato";
			
			$select = mysql_query($sql);
            
            $listaCategoriaPrato = array(); 
			
			while($rs = mysql_fetch_array($select)){
				
                $categoriaPrato = new categoriaPrato();
				$categoriaPrato->codCategoriaPrato = $rs['codCategoriaPrato'];
                $categoriaPrato->nomeCategoriaPrato = $rs['nomeCategoriaPrato'];
				$categoriaPrato->descricaoCategoriaPrato = $rs['descricaoCategoriaPrato'];
				$categoriaPrato->imagemCategoriaPrato = $rs['imagemCategoriaPrato'];
				
				$listaCategoriaPrato[] = $categoriaPrato;						
			}
			
			return $listaCategoriaPrato;
		}
		
		public function selectHome (){
            
			$sql = "select * from tblCategoriaPrato order by rand() limit 3";
			
			$select = mysql_query($sql);
            
            $listaCategoriaPrato = array(); 
			
			while($rs = mysql_fetch_array($select)){
				
                $categoriaPrato = new categoriaPrato();
				$categoriaPrato->codCategoriaPrato = $rs['codCategoriaPrato'];
                $categoriaPrato->nomeCategoriaPrato = $rs['nomeCategoriaPrato'];
				$categoriaPrato->descricaoCategoriaPrato = $rs['descricaoCategoriaPrato'];
				$categoriaPrato->imagemCategoriaPrato = $rs['imagemCategoriaPrato'];
				
				$listaCategoriaPrato[] = $categoriaPrato;						
			}
			
			return $listaCategoriaPrato;
		}
		
		
		public function selectById($codCategoriaPrato){
			
			$sql = "select * from tblCategoriaPrato where codCategoriaPrato=".$codCategoriaPrato;
			
			$select = mysql_query($sql);
			
			if($rs = mysql_fetch_array($select)){
				
				$categoriaPrato = new categoriaPrato();
				  
				$categoriaPrato->codCategoriaPrato = $rs['codCategoriaPrato'];
                $categoriaPrato->nomeCategoriaPrato = $rs['nomeCategoriaPrato'];
				$categoriaPrato->imagemCategoriaPrato = $rs['imagemCategoriaPrato'];	
				$categoriaPrato->descricaoCategoriaPrato = $rs['descricaoCategoriaPrato'];				
			}
			
			return $categoriaPrato;
		}
        
        
        
        
         public function selectByName($nomeCategoriaPrato){
			
			$sql = "select * from tblCategoriaPrato where nomeCategoriaPrato like '%".$nomeCategoriaPrato."%'";
        
            
			
			//$sql = "select * from tblprato where codPrato=".$codPrato;
			
			$select = mysql_query($sql);
			 $listaCategoriaPrato = array();
            
			
            while($rs = mysql_fetch_array($select)){
                
                $categoriaPrato = new categoriaPrato();
				
				$categoriaPrato->codCategoriaPrato = $rs['codCategoriaPrato'];
                $categoriaPrato->nomeCategoriaPrato = $rs['nomeCategoriaPrato'];
				$categoriaPrato->imagemCategoriaPrato = $rs['imagemCategoriaPrato'];	
				$categoriaPrato->descricaoCategoriaPrato = $rs['descricaoCategoriaPrato'];				
                
                $listaCategoriaPrato[]= $categoriaPrato;
											
			}
			
			return $listaCategoriaPrato;
		}
        

		
		public function update() {
		
			$sql = "update tblCategoriaPrato set nomeCategoriaPrato='".$this->nomeCategoriaPrato."', descricaoCategoriaPrato='".$this->descricaoCategoriaPrato."', imagemCategoriaPrato= '".$this->imagemCategoriaPrato."' where codCategoriaPrato=".$this->codCategoriaPrato;     
			
			if(mysql_query($sql)){				
				return true;
			}else{
				return false;
			}
		}
		
		public function delete($codCategoriaPrato) {
		
			$sql = "delete from tblCategoriaPrato where codCategoriaPrato=".$codCategoriaPrato;

			if(mysql_query($sql))
				return true;
			else
				return false;							
		}	
	}

?>