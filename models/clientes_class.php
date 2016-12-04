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
		public $sexo;
		public $usuarioCliente;
		public $codUsuarioCliente;
		public $senhaCliente;
		public $confirmacaoSenha;
		public $objetivo;
        
        public function __construct(){
            
            require_once('models/banco_dados.php');
			require_once('models/endereco_class.php');
			require_once('models/objetivo_class.php');
			
            $conexao = new mysql_db();

            $conexao->conectar();
			
			$this->endereco = new Endereco();
			$this->objetivo = new Objetivo();
        }
        		
				
		public function insert($cliente) {
			
			$sql = "INSERT INTO `tblCliente`(`nomeCliente`, `cpfCliente`, `dtNascCliente`, `peso`, `altura`, `telefoneCliente`, `celularCliente`, `emailCliente`,`sexo`) 
					VALUES ('".$cliente->nomeCliente."','".$cliente->cpfCliente."','".$cliente->dtNascCliente."', '".$cliente->peso."', '".$cliente->altura."', 
					'".$cliente->telefoneCliente."', '".$cliente->celularCliente."', '".$cliente->emailCliente."','".$cliente->sexo."');";
			
			$last_id = "set @id = LAST_INSERT_ID();";
			
            $sqlobjetivo = "INSERT INTO tblObjetivoCliente (codObjetivo, codCliente) 
                values ('".$cliente->objetivo->codObjetivo."',@id);";
			
			$sql2 = "insert into tblEndereco (logradouro,cep,numero,bairro,complemento,codCidade) values ('".$cliente->endereco->logradouro."',
			'".$cliente->endereco->cep."','".$cliente->endereco->numero."','".$cliente->endereco->bairro."','".$cliente->endereco->complemento."',
			'".$cliente->endereco->cidade->codCidade."');";
			
			$sql3 = "INSERT INTO `tblClienteEnd`(`codEndereco`, `codCliente`) VALUES (LAST_INSERT_ID(),@id);";
            
            $sqluser = "insert into tblUsuario (usuario,senha) values ('".$cliente->usuarioCliente."','".$cliente->senhaCliente."');";
            
            $sql4 = "insert into tblUsuarioCliente (codCliente, codUsuario) values (@id, LAST_INSERT_ID());";
			
			/*echo($sql);
			echo($last_id);
            echo($sqlobjetivo);			
			echo($sql2);
			echo($sql3);
            echo($sqluser);
            echo($sql4);*/

			mysql_query($sql);
			mysql_query($last_id);
			mysql_query($sqlobjetivo);
			mysql_query($sql2);
			mysql_query($sql3);
			mysql_query($sqluser);
			
			if(mysql_query($sql4))
				return true;
			else
				return false;
			
		}		
		
		public function selectAll (){
			
			$sql = "select uc.codUsuarioCliente, u.codUsuario, u.usuario, u.senha, c.codCliente, c.nomeCliente, c.cpfCliente, c.dtNascCliente, 
					c.peso, c.altura, c.telefoneCliente, c.celularCliente, c.emailCliente, c.sexo,  oc.codObjetivo, o.nomeObjetivo, e.logradouro, e.numero, e.bairro, e.cep, e.complemento,  ec.codEndereco, ci.codCidade, ci.nomeCidade, s.codEstado, s.nomeEstado from tblUsuarioCliente as uc inner join tblUsuario as u on (uc.codUsuario = u.codUsuario) inner join tblCliente 
					as c on (c.codCliente = uc.codCliente) inner join tblObjetivoCliente as oc on (oc.codCliente = c.codCliente) 
					inner join tblObjetivo as o on (o.codObjetivo = oc.codObjetivo) inner join tblClienteEnd as ec on (ec.codCliente = c.codCliente) inner join tblEndereco as e on (e.codEndereco = ec.codEndereco) inner join tblCidade as ci on (ci.codCidade = e.codCidade)
					inner join tblEstado as s on (s.codEstado = ci.codEstado);";
            
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
				$cliente->codUsuarioCliente = $rs['codUsuario'];
				$cliente->sexo =  $rs['sexo'];
				

				$cliente->endereco->logradouro = $rs['logradouro'];
				$cliente->endereco->codEndereco = $rs['codEndereco'];
				$cliente->endereco->cep  = $rs['cep'];
				$cliente->endereco->numero = $rs['numero'];
				$cliente->endereco->bairro = $rs['bairro'];
				$cliente->endereco->complemento = $rs['complemento'];
				$cliente->endereco->cidade->codCidade = $rs['codCidade'];
				$cliente->endereco->cidade->nomeCidade = $rs['nomeCidade'];
				$cliente->endereco->cidade->estado->codEstado = $rs['codEstado'];
				$cliente->endereco->cidade->estado->nomeEstado = $rs['nomeEstado'];

				$cliente->objetivo->codObjetivo = $rs['codObjetivo'];
				$cliente->objetivo->nomeObjetivo = $rs['nomeObjetivo'];
                
				$listaClientes[] = $cliente;                              							
			}
			
            return $listaClientes;   
							
		}
		
		public function selectById($codCliente){
			
				$sql = "select uc.codUsuarioCliente, u.codUsuario, u.usuario, u.senha, c.codCliente, c.nomeCliente, c.cpfCliente, c.dtNascCliente, 
					c.peso, c.altura, c.telefoneCliente, c.celularCliente, c.emailCliente, c.sexo,  oc.codObjetivo, o.nomeObjetivo, e.logradouro, e.numero, e.bairro, e.cep, e.complemento,  ec.codEndereco, ci.codCidade, ci.nomeCidade, s.codEstado, s.nomeEstado from tblUsuarioCliente as uc inner join tblUsuario as u on (uc.codUsuario = u.codUsuario) inner join tblCliente 
					as c on (c.codCliente = uc.codCliente) inner join tblObjetivoCliente as oc on (oc.codCliente = c.codCliente) 
					inner join tblObjetivo as o on (o.codObjetivo = oc.codObjetivo) inner join tblClienteEnd as ec on (ec.codCliente = c.codCliente) inner join tblEndereco as e on (e.codEndereco = ec.codEndereco) inner join tblCidade as ci on (ci.codCidade = e.codCidade)
					inner join tblEstado as s on (s.codEstado = ci.codEstado) where c.codCliente =".$codCliente;
            
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
                $cliente->usuarioCliente = $rs['usuario'];
				$cliente->senhaCliente = $rs['senha'];
				$cliente->codUsuarioCliente = $rs['codUsuario'];
				$cliente->sexo =  $rs['sexo'];
				

				$cliente->endereco->logradouro = $rs['logradouro'];
				$cliente->endereco->codEndereco = $rs['codEndereco'];
				$cliente->endereco->cep  = $rs['cep'];
				$cliente->endereco->numero = $rs['numero'];
				$cliente->endereco->bairro = $rs['bairro'];
				$cliente->endereco->complemento = $rs['complemento'];
				$cliente->endereco->cidade->codCidade = $rs['codCidade'];
				$cliente->endereco->cidade->nomeCidade = $rs['nomeCidade'];
				$cliente->endereco->cidade->estado->codEstado = $rs['codEstado'];
				$cliente->endereco->cidade->estado->nomeEstado = $rs['nomeEstado'];

				$cliente->objetivo->codObjetivo = $rs['codObjetivo'];
				$cliente->objetivo->nomeObjetivo = $rs['nomeObjetivo'];
                                   							
			}
			
            return $cliente;   
		}
        
        public function selectByName($nomeCliente){
            $sql = "select uc.codUsuarioCliente, u.codUsuario, u.usuario, u.senha, c.codCliente, c.nomeCliente, c.cpfCliente, c.dtNascCliente, 
					c.peso, c.altura, c.telefoneCliente, c.celularCliente, c.emailCliente, c.sexo,  oc.codObjetivo, o.nomeObjetivo, e.logradouro, e.numero, e.bairro, e.cep, e.complemento,  ec.codEndereco, ci.codCidade, ci.nomeCidade, s.codEstado, s.nomeEstado from tblUsuarioCliente as uc inner join tblUsuario as u on (uc.codUsuario = u.codUsuario) inner join tblCliente 
					as c on (c.codCliente = uc.codCliente) inner join tblObjetivoCliente as oc on (oc.codCliente = c.codCliente) 
					inner join tblObjetivo as o on (o.codObjetivo = oc.codObjetivo) inner join tblClienteEnd as ec on (ec.codCliente = c.codCliente) inner join tblEndereco as e on (e.codEndereco = ec.codEndereco) inner join tblCidade as ci on (ci.codCidade = e.codCidade)
					inner join tblEstado as s on (s.codEstado = ci.codEstado) where c.nomeCliente like '%".$nomeCliente."%'";
			
			
			
			$select = mysql_query($sql);
			 $listaPrato = array();
            
			
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
				$cliente->codUsuarioCliente = $rs['codUsuario'];
				$cliente->sexo =  $rs['sexo'];
				

				$cliente->endereco->logradouro = $rs['logradouro'];
				$cliente->endereco->codEndereco = $rs['codEndereco'];
				$cliente->endereco->cep  = $rs['cep'];
				$cliente->endereco->numero = $rs['numero'];
				$cliente->endereco->bairro = $rs['bairro'];
				$cliente->endereco->complemento = $rs['complemento'];
				$cliente->endereco->cidade->codCidade = $rs['codCidade'];
				$cliente->endereco->cidade->nomeCidade = $rs['nomeCidade'];
				$cliente->endereco->cidade->estado->codEstado = $rs['codEstado'];
				$cliente->endereco->cidade->estado->nomeEstado = $rs['nomeEstado'];

				$cliente->objetivo->codObjetivo = $rs['codObjetivo'];
				$cliente->objetivo->nomeObjetivo = $rs['nomeObjetivo'];
                
                $listaPrato[]= $cliente;
											
			}
			
			return $listaPrato;
		}
		
		public function update() {
					
			$sqlCliente = "update tblCliente set nomeCliente='".$this->nomeCliente."', cpfCliente = '".$this->cpfCliente."', dtNascCliente='".$this->dtNascCliente."', peso='".$this->peso."', altura='".$this->altura."',  telefoneCliente='".$this->telefoneCliente."', celularCliente='".$this->celularCliente."',
            emailCliente='".$this->emailCliente."' where codCliente=".$this->codCliente;   
            
            $sqlEndereco = "update tblEndereco set logradouro = '".$this->endereco->logradouro."', cep = '".$this->endereco->cep."', numero = '".$this->endereco->numero."', bairro = '".$this->endereco->bairro."',
            complemento = '".$this->endereco->complemento."', codCidade = '".$this->endereco->cidade->codCidade."' where codEndereco=".$this->endereco->codEndereco;
            
            $sqlUsuario = "update tblUsuario set usuario = '".$this->usuarioCliente."', senha = '".$this->senhaCliente."' where codUsuario=".$this->codUsuarioCliente;
            
            /*echo($sqlCliente);
            echo($sqlEndereco);
            echo($sqlUsuario);*/
           
			mysql_query($sqlCliente);	
			mysql_query($sqlEndereco);	
            
			if(mysql_query($sqlUsuario))
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