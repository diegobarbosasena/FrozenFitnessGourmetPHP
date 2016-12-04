
<?php
	
	class TipoUsuario {

		public $nomeTipoUsuario;
		public $codTipoUsuario;
        
        
        public function __construct(){
            
            require_once('models/banco_dados.php');
		
            $conexao = new mysql_db();

            $conexao->conectar();
        }
				
		public function insert($tipoUsuario) {
		
			$sql = "insert into tblTipoUsuario (nomeTipoUsuario) values('".$tipoUsuario->nomeTipoUsuario."')";
			
			if(mysql_query($sql))
				return true;
			else
				return false;
							
		}		
		
		
		
		public function selectAll (){
            
			$sql = "select * from tblTipoUsuario";
			
			$select = mysql_query($sql);
						
            
            $listaTipoUsuario = array();
            
			while($rs = mysql_fetch_array($select)){
                	  
                $tipoUsuario = new TipoUsuario();
                $tipoUsuario->codTipoUsuario = $rs['codTipoUsuario'];
                $tipoUsuario->nomeTipoUsuario = $rs['nomeTipoUsuario'];
				$listaTipoUsuario[] = $tipoUsuario;                              							
			}
			
            return $listaTipoUsuario;           
		}
		
		public function selectById($codTipoUsuario){
			
			$sql = "select * from tblTipoUsuario where codTipoUsuario=".$codTipoUsuario;
			
			$select = mysql_query($sql);
			
			if($rs = mysql_fetch_array($select)){
				
				$tipoUsuario= new TipoUsuario();
				  
				$tipoUsuario->codTipoUsuario = $rs['codTipoUsuario'];
                $tipoUsuario->nomeTipoUsuario = $rs['nomeTipoUsuario'];
											
			}
			
			return $tipoUsuario;
		}
        public function selectByName($nomeTipoUsuario){
            $sql = "select * from tblTipoUsuario  where nomeTipoUsuario like '%".$nomeTipoUsuario."%'";
            
			
			$select = mysql_query($sql);
			 $listaTipoUsuario = array();
            
			
            while($rs = mysql_fetch_array($select)){
				
				  $tipoUsuario= new TipoUsuario();
				  
				$tipoUsuario->codTipoUsuario = $rs['codTipoUsuario'];
                $tipoUsuario->nomeTipoUsuario = $rs['nomeTipoUsuario'];
                
                $listaTipoUsuario[]= $tipoUsuario;
											
			}
			
			return $listaTipoUsuario;
		}
		
		public function update() {
		
			$sql = "update tblTipoUsuario set nomeTipoUsuario='".$this->nomeTipoUsuario."' where codTipoUsuario=".$this->codTipoUsuario;     
				echo($sql);
			if(mysql_query($sql))
				return true;
			else
				return false;
						
		}
		
		public function delete($codTipoUsuario) {
		
			$sql = "delete from tblTipoUsuario where codTipoUsuario=".$codTipoUsuario;

			if(mysql_query($sql))
				return true;
			else
				return false;							
		}	
	}

?>