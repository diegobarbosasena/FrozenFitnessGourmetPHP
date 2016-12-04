
<?php
	
	class tipoUsuario_controller {
		
		public $nomeTipoUsuario;
		public $codTipoUsuario;
        
        
        public function __construct(){
            
            require_once('models/tipoUsuario_class.php');
            
    
           
        }
		
		public function iniciaAtributo(){
		
			 if($_SERVER['REQUEST_METHOD']==='POST')
            {
			
					$this->nomeTipoUsuario=$_POST['txtTipoUsuario'];
					$this->codTipoUsuario= $_POST['codTipoUsuario'];
				
            }
		}
	
        
		 public function index(){
            
			$atualizacao = 'inserir';
			$t = new TipoUsuario();
            
            $pesquisa ="";
             
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				
				$tipoUsuario=$t->selectById($id);
                
			}else if(isset($_POST["txtPesquisa"])){
					
				$pesquisa = $_POST["txtPesquisa"];
            
                $listaTipoUsuario = $t->selectByName($pesquisa);
                
              
            }else{
                
                //
                $listaTipoUsuario= $t->selectAll();    
            }
             
            
			
            require_once('views/nivelUsuario/index.php');
        }
		
		
		public function cadastrar(){
			
			$atualizacao = 'inserir';
			$tipoUsuario=new TipoUsuario();
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				$t = new TipoUsuario();
				$tipoUsuario=$t->selectById($id);
			}
			
			
			require_once('views/nivelUsuario/cadastrar.php');
		}
		
		public function listarTodos (){
			 
			$listar = new TipoUsuario();
			return $listar->selectAll();	
		}
		
		public function buscar($codTipoUsuario){
			
			$buscar = new TipoUsuario();
			return $buscar->selectById($codTipoUsuario);
			
		}
		
		public function atualizar() {
			$this->iniciaAtributo();
			$atualizar = new TipoUsuario();
			$atualizar->nomeTipoUsuario = $this->nomeTipoUsuario;
			$atualizar->codTipoUsuario=  $this->codTipoUsuario;
			
						
			if($atualizar->update()){	
				
				header("location: ../tipoUsuario/index/".$this->codTipoUsuario);
			}
		}
		
		public function deletar() {
			
			$codTipoUsuario = $_GET['id'];
			
			$deletar = new TipoUsuario();
			if($deletar->delete($codTipoUsuario)){
				header("location: ../../tipoUsuario/index");
			}	
		}
		
		public function inserir() {
             $this->iniciaAtributo();
			$tipoUsuario = new TipoUsuario();
			$tipoUsuario->nomeTipoUsuario = $this->nomeTipoUsuario;
			
			if($tipoUsuario::insert($tipoUsuario)){
				
				header("location: ../tipoUsuario/index");
			}
		}
	}

?>