<?php
    class Cliente{
        
        public $codCliente;
        public $nomeCliente;
        public $cpfCliente;
        public $dtNascCliente;
        public $peso;
        public $altura;
        public $telefoneCliente;
        public $celularCliente;
        public $emailCliente;  
		public $endereco;
		public $usuarioCliente;
		public $senhaCliente;
		public $confirmacaoSenha;
		public $objetivo;
        
        public function __construct(){
            
            require_once('models/banco_dados.php');
			require_once('models/endereco_class.php');
			require_once('models/objetivo_class.php');
			
            $conexao = new mysql_db();

            $conexao->conectar();
			
        }
        		
				
		public function insert($cliente) {
			
			$sql = "INSERT INTO `tblCliente`(`nomeCliente`, `cpfCliente`, `dtNascCliente`, `peso`, `altura`, `telefoneCliente`, `celularCliente`, `emailCliente`) 
					VALUES ('".$cliente->nomeCliente."','".$cliente->cpfCliente."','".$cliente->dtNascCliente."', '".$cliente->peso."', '".$cliente->altura."', 
					'".$cliente->telefoneCliente."', '".$cliente->celularCliente."', '".$cliente->emailCliente."');";
			
            $sqlobjetivo = "INSERT INTO tblObjetivoCliente (codObjetivo, codCliente) 
                values ('".$cliente->objetivo->codObjetivo."',LAST_INSERT_ID());";
            
			$last_id = "set @id = LAST_INSERT_ID();";
			
			$sql2 = "insert into tblEndereco (logradouro,cep,numero,bairro,complemento,codCidade) values ('".$cliente->endereco->logradouro."',
			'".$cliente->endereco->cep."','".$cliente->endereco->numero."','".$cliente->endereco->bairro."','".$cliente->endereco->complemento."',
			'".$cliente->endereco->cidade->codCidade."');";
			
			$sql3 = "INSERT INTO `tblClienteEnd`(`codEndereco`, `codCliente`) VALUES (LAST_INSERT_ID(),@id);";
            
            $sqluser = "insert into tblUsuario (usuario,senha,codTipoUsuario) values ('".$cliente->usuarioCliente."','".$cliente->senhaCliente."',2);";
            
            $sql4 = "insert into tblUsuarioCliente (codCliente, codUsuario) values (@id, LAST_INSERT_ID());";
			
			echo($sql);
            echo($sqlobjetivo);
			echo($last_id);
			echo($sql2);
			echo($sql3);
            echo($sqluser);
            echo($sql4);

			/*mysql_query($sqlobjetivo);
			mysql_query($sqlobjetivo);
			mysql_query($last_id);
			mysql_query($sql2);
			mysql_query($sql3);
			mysql_query($sqluser);
			
			if(mysql_query($sql4))
				return true;
			else
				return false;*/
			
		}		
		
		public function selectAll (){
			
			$sql = "select uc.codUsuarioCliente, u.codUsuario, u.usuario, u.senha, c.codCliente, c.nomeCliente, c.cpfCliente, c.dtNascCliente, 
					c.peso, c.altura, c.telefoneCliente, c.celularCliente, c.emailCliente, tu.codTipoUsuario,
					tu.nomeTipoUsuario from tblusuariocliente as uc inner join tblusuario as u on (uc.codUsuario = u.codUsuario) inner join tblcliente 
					as c on (c.codCliente = uc.codCliente) inner join tbltipousuario as tu on (tu.codTipoUsuario = u.codTipoUsuario);";
            
			$select = mysql_query($sql);
						
            
            $listaClientes = array();
            
			while($rs = mysql_fetch_array($select)){
                	  
                $cliente = new Cliente();
                $cliente->codCliente = $rs['codCliente'];
                $cliente->nomeCliente = $rs['nomeCliente'];
				$cliente->cpfCliente = $rs['cpfCliente'];
                $cliente->dtNascCliente = $rs['dtNascCliente'];
				$cliente->peso = $rs['peso'];
                $cliente->altura = $rs['altura'];
				$cliente->telefoneCliente = $rs['telefoneCliente'];
                $cliente->celularCliente = $rs['celularCliente'];
				$cliente->emailCliente = $rs['emailCliente'];
                $cliente->usuarioCliente = $rs['usuario'];
				$cliente->senhaCliente = $rs['senha'];
                
				$listaClientes[] = $cliente;                              							
			}
			
            return $listaClientes;   
							
		}
		
		public function selectById($codCliente){
			
			$sql = "".$codCliente;
			
			$select = mysql_query($sql);
			
			if($rs = mysql_fetch_array($select)){
				
				$cliente = new Cliente();
                $cliente->codCliente = $rs['codCliente'];
                $cliente->nomeCliente = $rs['nomeCliente'];
				$cliente->cpfCliente = $rs['cpfCliente'];
                $cliente->dtNascCliente = $rs['dtNascCliente'];
				$cliente->peso = $rs['peso'];
                $cliente->altura = $rs['altura'];
				$cliente->telefoneCliente = $rs['telefoneCliente'];
                $cliente->celularCliente = $rs['celularCliente'];
				$cliente->emailCliente = $rs['emailCliente'];
                  
			}
			
			return $prato;
		}
		
		public function update() {
					
			$sql = "";     
				
			if(mysql_query($sql))
				return true;
			else
				return false;		
		}
		
		public function delete($codCliente) {
		
			$sql = "=".$codCliente;

			if(mysql_query($sql))
				return true;
			else
				return false;					
		}	
        
    }

?>