
<?php
	class Funcionario{
		
		public $nomeFuncionario;
		public $cpfFuncionarioLoja;
		public $codFuncionarioLoja;
		
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
				$listaFuncionario[$cont]->cpfFuncionarioLoja = $rs['nomeFuncionarioLoja'];

				
				$cont++;							
			}
			
			if($listaFuncionario != ""){
				return 	$listaFuncionario;
			}else{
				return "";
			}
			
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
			
			if(mysql_query($sql))
				return true;
			else
				return false;
		
		}   
		
		public function funcionarioUsuario(){
			
			$sql = "insert into tblusuariofuncionarioloja (codFuncionarioLoja, codUsuario) values ('".$ ."', '".$codUsuario."')";
			
			if(mysql_query($sql))
				return true;
			else
				return false;			
		}
}		

?>