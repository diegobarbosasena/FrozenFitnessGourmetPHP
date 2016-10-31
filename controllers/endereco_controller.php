

<?php
	
	class endereco_controller {

		public $logradouro;
		public $cep;
		public $numero;
		public $bairro;
		public $cidade;
		public $complemento;
        
        public function __construct(){
            
            require_once('models/parceiro_class.php');
   
        }
		
		public function iniciaAtributo(){
		
			
            if($_SERVER['REQUEST_METHOD']==='POST')
            {
				 $this->cidade->estado->codEstado = $_POST['codEstado'];
				 $this->logradouro= $_POST['txtlogradouro'];
				 $this->cep = $_POST['txtcep'];
				 $this->numero = $_POST['txtnumero'];
				 $this->bairro = $_POST['txtbairro'];
				 $this->cidade->codCidade = $_POST['codCidade']; 						
				 $this->complemento = $_POST['txtcomplemento'];
            }     
		}
		
		public function listarTodos (){
			  
		}	
				
		public function buscar($codEndereco){
			
			
		}
		
		public function atualizar() {
		
			
		}
        
		public function deletar() {
			
		}
		
		public function inserir() {
            
		}

	}

?>