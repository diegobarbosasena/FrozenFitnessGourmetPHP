
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
            
            mysql_query($sql);
        }
        
    }

?>