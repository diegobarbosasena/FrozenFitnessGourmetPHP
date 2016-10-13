
<?php
	
	class parceiro_controller {

		public $nomeParceiro;
		public $codParceiro;
        
        
        public function __construct(){
            require_once('models/parceiro_class.php');
            require_once('models/banco_dados.php');
		
            $conexao = new mysql_db();

            $conexao->conectar();
        }
		
		
		public function index(){
            
			$atualizacao = 'inserir';
			$parceiro=new Parceiro();
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				$parceiro = new Pareiro();
				$parceiro=$c->selectById($id);
			}
			
           require_once('views/parceiro/index.php');
        }
		
		public function cadastrar(){
			
			$atualizacao = 'inserir';
			$parceiro=new Parceiro();
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				$p = new Parceiro();
				$parceiro=$c->selectById($id);
			}
			
			
			require_once('views/parceiro/cadastrar.php');
		}
        		
				
		public function insert($tipoUsuario) {
		
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
		
		public function delete($codTipoUsuario) {
		
			$sql = "delete from tblTipoUsuarioParceiro where codParceiro=".$codParceiro;

			if(mysql_query($sql))
				return true;
			else
				return false;							
		}	
	}

?>