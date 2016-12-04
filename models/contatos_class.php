
<?php 

    class contatos{
        
        public $codFaleConosco;
        public $nome;
        public $email;
        public $telefone;
        public $mensagem;
        
        
        public function __construct(){
            
            require_once('models/banco_dados.php');
		
            $conexao = new mysql_db();

            $conexao->conectar();
        }
        
        public function insert($contato){
            
            $sql = "insert into tblfaleconosco (nome, email, telefone, mensagem)";
            $sql = $sql . " values ('".$contato->nome."', '".$contato->email."','".$contato->telefone."','".$contato->mensagem."')";
            
            if(mysql_query($sql))
				return true;
			else
				return false;	
            
            
        }
        
        public function selectAll (){
            
			$sql = "";
			
			$select = mysql_query($sql);
						
            
            $listaContatos = array();
            
			while($rs = mysql_fetch_array($select)){
                	  
                $contato = new Contato();
                $contato->nome = $rs['nome'];
                $contato->email = $rs['email'];
                $contato->telefone = $rs['telefone'];
                $contato->mensagem = $rs['mensagem'];
                
				$listaContatos[] = $contato;                              							
			}
			
            return $listaContatos;           
		}
		
		public function selectById($codContato){
			
			$sql = "".$codContato;
			
			$select = mysql_query($sql);
			
			if($rs = mysql_fetch_array($select)){
				
				$contato = new Contato();
                $contato->nome = $rs['nome'];
                $contato->email = $rs['email'];
                $contato->telefone = $rs['telefone'];
                $contato->mensagem = $rs['mensagem'];
											
			}
			
			return $contato;
		}
		
		
		public function delete($codContato) {
		
			$sql = "".$codContato;

			if(mysql_query($sql))
				return true;
			else
				return false;							
		}	
    }

?>