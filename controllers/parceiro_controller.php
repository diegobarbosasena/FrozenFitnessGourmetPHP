
<?php
	
	class parceiro_controller {

		public $nomeParceiro;
		public $codParceiro;
        
        
        public function __construct(){
            
            require_once('models/parceiro_class.php');

    
            if($_SERVER['REQUEST_METHOD']==='POST')
            {
				if(isset($_POST['txtnomeParceiro']) && isset($_POST['codParceiro'])){
					 $this->codParceiro = $_POST['codParceiro'];
					 $this->nomeParceiro=$_POST['txtnomeParceiro'];
				}
            }       
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
        		
				
		public function listarTodos (){
			 
			$listar = new Parceiro();
			return $listar->selectAll();	
		}
		
		public function buscar($codParceiro){
			
			$buscar = new Parceiro();
			return $buscar->selectById($codParceiro);
			
		}
		
		public function atualizar() {
		
			$atualizar = new Parceiro();
			$atualizar->codParceiro = $this->codParceiro;
			$atualizar->nomeParceiro = $this->nomeParceiro;
			
			
			if($atualizar->update()){					
				header("location: ../parceiro/index".$this->codCliente);
			}
		}
        
		public function deletar() {
			
			$codParceiro = $_GET['id'];
			
			$deletar = new Parceiro();
			if($deletar->delete($codParceiro)){
				header("location: ../../parceiro/index");
			}	
		}
		
		public function inserir() {
              
			$parceiro = new Parceiro();
			$parceiro->codParceiro = $this->codParceiro;
			$parceiro->nomeParceiro = $this->nomeParceiro;
			
			if($cliente::insert($cliente)){
				header("location: ../parceiro/index");
			}
		}

	}

?>