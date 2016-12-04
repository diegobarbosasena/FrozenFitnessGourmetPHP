<?php

    class contatos_controller{
    
        public $nome;
        public $email;
        public $telefone;
        public $mensagem;
        
        public function __construct(){
            
           require_once("models/contatos_class.php");
            
            
		
        }
            
        public function iniciaAtributo(){
            
            if($_SERVER['REQUEST_METHOD']=='POST')
            {
            
                $this->nome=$_POST['txtnome'];
                $this->telefone=$_POST['txttelefone'];
                $this->mensagem=$_POST['txtmensagem'];
                $this->email=$_POST['txtemail'];
           
            }
        }
          
        public function index(){
            
			$atualizacao = 'inserir';
			$contato = new Contato();
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				$c = new Contato();
				$contato=$c->selectById($id);
			}
			
           require_once('views/contatos/index.php');
        }
		
		public function cadastrar(){
			
			$atualizacao = 'inserir';
			$contato = new Contato();
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				$c = new Contato();
				$contato=$c->selectById($id);
			}
			
           require_once('views/contatos/cadastrar.php');
		}
        	
		public function listarTodos (){
			 
			$listar = new Contato();
			return $listar->selectAll();	
		}
		
		public function buscar($codContato){
			
			$buscar = new Contato();
			return $buscar->selectById($codContato);
			
		}
		
        
		public function deletar() {
			
			$codContato = $_GET['id'];
			
			$deletar = new Cliente();
			if($deletar->delete($codContato)){
				header("location: ../../contatos/index");
			}	
		}
		
		public function inserir() {
              
            $this->iniciaAtributo();
            $contato = new Contatos();
            $contato->nome = $this->nome;
            $contato->telefone = $this->telefone;
            $contato->mensagem = $this->mensagem;
            $contato->email = $this->email;
			
			
			if($contato::insert($contato)){
				header("location: ../home/contatos");
			}
		}
  
        
    }

?>