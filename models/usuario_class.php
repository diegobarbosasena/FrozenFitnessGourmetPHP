
<?php
	
	class Usuario {
		public $usuario;
		public $senha;

		
        public function __construct(){
            
            require_once('models/banco_dados.php');
			require_once('models/funcionario_class.php');
			require_once('models/clientes_class.php');
			
            $conexao = new mysql_db();

            $conexao->conectar();
        }
        		
		
        
        public function loginCliente($usuario, $senha){
            
            
				$c = new Cliente();
				$lista = $c->selectAll();
				
				foreach($lista as $c){
					if($c->usuarioCliente == $usuario && $c->senhaCliente == $senha){

						 return $c->nomeCliente; 
					}				
				}

				return null;
    
        }
		
		   public function loginFunc($usuario, $senha){
            
				$f = new Funcionario();
				$lista = $f->selectAll();
				
				foreach($lista as $f){
					if($f->usuarioFuncionario == $usuario && $f->senhaFuncionario == $senha){
						 return $f->nomeFuncionarioLoja; 
					}				
				}
				
				return null;
			
		   }
    
        
	}

?>