
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
            
			$sql = "select uc.codUsuarioFuncionarioLoja, u.codUsuario, u.usuario, u.senha, c.codFuncionarioLoja, c.nomeFuncionarioLoja, cpfFuncionarioLoja
                     from tblusuarioFuncionarioLoja as uc inner join tblusuario as u on 
                    (uc.codUsuario = u.codUsuario) inner join tblFuncionarioLoja as c on (c.codFuncionarioLoja = uc.codFuncionarioLoja)";
			
			$select = mysql_query($sql);
			
			$cont=0;
			while($rs = mysql_fetch_array($select)){
				
				$listaFuncionario[] = new Funcionario();
				  
				$listaFuncionario[$cont]->codFuncionarioLoja = $rs['codFuncionarioLoja'];
                $listaFuncionario[$cont]->nomeFuncionarioLoja = $rs['nomeFuncionarioLoja'];
				$listaFuncionario[$cont]->cpfFuncionarioLoja = $rs['cpfFuncionarioLoja'];
				$listaFuncionario[$cont]->senhaFuncionario = $rs['senha'];
				$listaFuncionario[$cont]->usuarioFuncionario = $rs['usuario'];
				
				$cont++;							
			}
			
			return $listaFuncionario;
			
		}
		
		public function selectById($codFuncionarioLoja){
			
			  
			$sql = "select uc.codUsuarioFuncionarioLoja, u.codUsuario, u.usuario, u.senha, c.codFuncionarioLoja, c.nomeFuncionarioLoja, cpfFuncionarioLoja
                     from tblusuarioFuncionarioLoja as uc inner join tblusuario as u on 
                    (uc.codUsuario = u.codUsuario) inner join tblFuncionarioLoja as c on (c.codFuncionarioLoja = uc.codFuncionarioLoja) where c.codFuncionarioLoja=".$codFuncionarioLoja;
			
			$select = mysql_query($sql);
			
	
			if($rs = mysql_fetch_array($select)){
				
				$funcionario = new Funcionario();
				  
				$funcionario->codFuncionarioLoja = $rs['codFuncionarioLoja'];
                $funcionario->nomeFuncionarioLoja = $rs['nomeFuncionarioLoja'];
				$funcionario->cpfFuncionarioLoja = $rs['cpfFuncionarioLoja'];
				$funcionario->senhaFuncionario = $rs['senha'];
				$funcionario->usuarioFuncionario = $rs['usuario'];
											
			}
			
			return $funcionario;
					 
		}
		
		public function update($codFuncionarioLoja) {
		
		
		}
		
		public function delete($codFuncionarioLoja) {
		
			$sql = "delete from tblfuncionarioloja where codfuncionarioloja =".$codFuncionarioLoja;
			echo($sql);
			/*if(mysql_query($sql))
				return true;
			else
				return false;	*/	
		}
		
		public function insertFuncionario($novofuncionario) {
			
			$sql = "insert into tblfuncionarioLoja (nomeFuncionarioLoja,cpfFuncionarioLoja) values ('".$novofuncionario->nomeFuncionarioLoja."', '".$novofuncionario->cpfFuncionarioLoja."')";
			$sql2 ="insert into tblusuario (usuario, senha) values('".$novofuncionario->usuarioFuncionario."','".$novofuncionario->senhaFuncionario."')";
			$sql3 = "insert into tblusuariofuncionarioloja (codUsuario, codFuncionarioLoja) values (LAST_INSERT_ID(),LAST_INSERT_ID())";
			echo($sql);	
			echo($sql2);	
			echo($sql3);	
			//mysql_query($sql);
			//mysql_query($sql2);
			//mysql_query($sql3);
			/*if(mysql_query($sql3))
				return true;
			else
				return false;*/
		
		}   
}		

?>