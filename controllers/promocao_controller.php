
<?php
	
	class promocao_controller {
		
		public $nomePromocao;
		public $dtInicial;
		public $dtFinal;
		public $valorDesconto;
		public $codPromocao;
        
        
        public function __construct(){
            
            require_once('models/promocao_class.php');
     
	    }
		
		public function iniciaAtributo(){
		
			 if($_SERVER['REQUEST_METHOD']==='POST')
            {
			
					$this->codPromocao=$_POST['codPromocao'];
                    $this->nomePromocao=$_POST['txtNomePromocao'];
                    $this->dtInicial=$_POST['txtDtInicial'];
					$this->dtFinal=$_POST['txtDtFinal'];
					$this->valorDesconto=$_POST['txtDesconto'];
					
					
				
            }
		}
        

        
		 public function index(){
            
			$atualizacao = 'inserir';
			$p = new Promocao();
            
            $pesquisa ="";
             
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				
				$promocao=$p->selectById($id);
                
			}else if(isset($_POST["txtPesquisa"])){
					
				$pesquisa = $_POST["txtPesquisa"];
            
                $listaPromocao = $p->selectByName($pesquisa);
                
              
            }else{
                
                //
                $listaPromocao= $p->selectAll();    
            }
             
            
			
          require_once('views/promocao/index.php');
        }
		
        
		public function cadastrar(){
			
			$atualizacao = 'inserir';
			$promocao=new Promocao();
            //echo('CHEGOU');
            
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				$p = new Promocao();
				$promocao=$p->selectById($id);
			}
            require_once('views/promocao/cadastrar.php');
		}
        		
		
		public function listarTodos (){
			 
            $listarPromocao = new Promocao();
            
            return $listarPromocao->selectAll();
			  
		}
		
		public function buscar($codPromocao){
            
            $buscarPromocao = new Promocao();
            
            return $buscarPromocao->selectById();
		  
		}
		
		public function atualizar() {
			$this->iniciaAtributo();
			
			$promocao = new Promocao();
			
			$promocao->codPromocao=$this->codPromocao;
			$promocao->nomePromocao=$this->nomePromocao;
			$promocao->dtInicial=$this->dtInicial;
			$promocao->dtFinal=$this->dtFinal;
			$promocao->valorDesconto=$this->valorDesconto;
					
			if($promocao->update()){	
				
				header("location: ../promocao/index/".$this->codPromocao);
			}
		}
		
		public function deletar($codPromocao) {
			
			$promocao = new Promocao();
			
			$codPromocao = $_GET['id'];
			
			if($promocao->delete($codPromocao)){
                header("location: ../../promocao/index");
            }
            

            
		}
		
		public function inserir() {
			$this->iniciaAtributo();
		
            $novoPromocao = new Promocao();
            
            $novoPromocao->nomePromocao = $this->nomePromocao;
			$novoPromocao->dtInicial = $this->dtInicial;
			$novoPromocao->dtFinal = $this->dtFinal;
			$novoPromocao->valorDesconto = $this->valorDesconto;
            	

			if($novoPromocao::insert($novoPromocao)){
                header("location: ../promocao/index");
            }else{
                header("location: ../promocao/cadastrar");                      
			}
		}
  
	}

?>