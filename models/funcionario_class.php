
<?php
	class Funcionario{
		
		public $nomeFuncionario;
		public $cpfFuncionarioLoja;
		public $codFuncionarioLoja;
		public $usuarioFuncionario;
		public $senhaFuncionario;
		public $confirmacaoSenha;
		
		public function __construct(){
            
            require_once('models/banco_dados.php');
		
            $conexao = new mysql_db();

            $conexao->conectar();
        }
		
		public function selectAll (){
            
			$sql = "";
			
			$select = mysql_query($sql);
			
			$cont=0;
			while($rs = mysql_fetch_array($select)){
				
				$listaFuncionario[] = new Categoria();
				  
				$listaFuncionario[$cont]->codFuncionarioLoja = $rs['codFuncionarioLoja'];
                $listaFuncionario[$cont]->nomeFuncionarioLoja = $rs['nomeFuncionarioLoja'];
				$listaFuncionario[$cont]->cpfFuncionarioLoja = $rs['cpfFuncionarioLoja'];
				$listaFuncionario[$cont]->senhaFuncionario = $rs['senhaFuncionario'];
				$listaFuncionario[$cont]->usuarioFuncionario = $rs['usuarioFuncionario'];
				
				$cont++;							
			}
			
			return $listaFuncionario;
			
		}
		
		public function selectById($codFuncionarioLoja){
			
			
		 
		}
		
		public function update($codFuncionarioLoja) {
		
		
		}
		
		public function delete($codFuncionarioLoja) {
		
			$sql = "delete * from tblfuncionarioLoja where codFuncionarioLoja=".$codFuncionarioLoja;

			if(mysql_query($sql))
				return true;
			else
				return false;		
		}
		
		public function insertFuncionario($novofuncionario) {
			
			$sql = "insert into tblfuncionarioLoja (nomeFuncionarioLoja,cpfFuncionarioLoja) values ('".$novofuncionario->nomeFuncionarioLoja."', '".$novofuncionario->cpfFuncionarioLoja."')";
			$sql2 ="insert into tblusuario (usuario, senha) values('".$novofuncionario->usuarioFuncionario."','".$novofuncionario->senhaFuncionario."')";
			$sql3 = "insert into tblusuariofuncionarioloja (codUsuario, codFuncionarioLoja) values (LAST_INSERT_ID(),LAST_INSERT_ID())";

			mysql_query($sql);
			mysql_query($sql2);
			
			if(mysql_query($sql3))
				return true;
			else
				return false;
		
		}   
}		

?>