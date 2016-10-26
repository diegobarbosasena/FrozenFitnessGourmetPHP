
<?php
	
	class Usuario {
		
		public $tipoUsuario;
		public $usuario;
		public $senha;
		public $codTipoUsuario;
        
        
        public function __construct(){
            
            require_once('models/banco_dados.php');
		
            $conexao = new mysql_db();

            $conexao->conectar();
        }
        		
		
		public function selectAll (){
            
			$sql = "select uc.codUsuarioCliente, u.codUsuario, u.usuario, u.senha, c.codCliente, c.nomeCliente, tu.codTipoUsuario, tu.nomeTipoUsuario from tblusuariocliente as uc inner join tblusuario as u on (uc.codUsuario = u.codUsuario) inner join tblcliente as c on (c.codCliente = uc.codCliente) inner join tbltipousuario as tu on (tu.codTipoUsuario = u.codTipoUsuario);";
            
            $select = mysql_query($sql);
            
            $cont=0;
            while($rs=mysql_fetch_array($select))
            {
                $listaUsuarios[] = new Usuario();

                $listaUsuarios[$cont]->codTipoUsuario = $rs['codTipoUsuario'];
                $listaUsuarios[$cont]->usuario = $rs['usuario'];
                $listaUsuarios[$cont]->senha = $rs['senha'];
                $listaUsuarios[$cont]->tipoUsuario = $rs['tipoUsuario'];
                
                $cont = $cont + 1;
            }
		
            return $listaUsuarios;
		}
		
		public function selectById($codUsuario){
			
		 
			$sql = "select uc.codUsuarioCliente, u.codUsuario, u.usuario, u.senha, c.codCliente, c.nomeCliente, tu.codTipoUsuario, tu.nomeTipoUsuario from tblusuariocliente as uc inner join tblusuario as u on (uc.codUsuario = u.codUsuario) inner join tblcliente as c on (c.codCliente = uc.codCliente) inner join tbltipousuario as tu on (tu.codTipoUsuario = u.codTipoUsuario) where codUsuario =".$codUsuario;
            
            $select = mysql_query($sql);
            
            $cont=0;
            while($rs=mysql_fetch_array($select))
            {
                $user[] = new Usuario();

                $user[$cont]->codTipoUsuario = $rs['codTipoUsuario'];
                $user[$cont]->usuario = $rs['usuario'];
                $user[$cont]->senha = $rs['senha'];
                $user[$cont]->tipoUsuario = $rs['tipoUsuario'];
                
                $cont = $cont + 1;
            }
		
            return $user;
		}
		
		public function update($codUsuario) {
		
		
		}
		
		public function delete($codUsuario) {
		
			$sql = "delete from tblusuario where codUsuario=".$codUsuario;

			if(mysql_query($sql))
				return true;
			else
				return false;
		
		}
		
		public function insert($novousuario) {
			
			$sql = "insert into tblusuario (usuario, senha) values('".$novousuario->usuario."','".$novousuario->senha."')";
			echo($sql);
			/*if(mysql_query($sql))
				return true;
			else
				return false;*/
		
		}
        
        public function loginCliente($usuario, $senha){
            
            /*$sql = "select uc.codUsuarioCliente, u.codUsuario, u.usuario, u.senha, c.codCliente, c.nomeCliente,tu.codTipoUsuario,
			tu.nomeTipoUsuario from tblusuariocliente as uc inner join tblusuario as u on (uc.codUsuario = u.codUsuario) inner join tblcliente 
			as c on (c.codCliente = uc.codCliente) inner join tbltipousuario as tu on (tu.codTipoUsuario = u.codTipoUsuario);";*/
			
			$sql = "select uc.codUsuarioCliente, u.codUsuario, u.usuario, u.senha, c.codCliente, c.nomeCliente
			from tblusuariocliente as uc inner join tblusuario as u on (uc.codUsuario = u.codUsuario) inner join tblcliente 
			as c on (c.codCliente = uc.codCliente);";
           // echo($sql);
            $select = mysql_query($sql);
            
            $cont=0;
            while($rs=mysql_fetch_array($select))
            {
				//echo($rs['usuario']);
				//echo($usuario);
                if($rs['usuario'] == $usuario && $rs['senha'] == $senha){
                   return 1; 
                }  
			
				$cont++;
            }
			
			return 0;
    
        }
        
         
        public function loginFunc($usuario, $senha){
            
            /*$sql = "select uc.codUsuarioFuncionarioLoja, u.codUsuario, u.usuario,  c.codFuncionarioLoja, c.nomeFuncionarioLoja, c.cpfFuncionarioLoja
                    tu.codTipoUsuario, tu.nomeTipoUsuario from tblusuarioFuncionarioLoja as uc inner join tblusuario as u on 
                    (uc.codUsuario = u.codUsuario) inner join tblFuncionarioLoja as c on (c.codFuncionarioLoja = uc.codFuncionarioLoja) 
                    inner join tbltipousuario as tu on (tu.codTipoUsuario = u.codTipoUsuario);"*/
					
			$sql = "select uc.codUsuarioFuncionarioLoja, u.codUsuario, u.usuario, u.senha, c.codFuncionarioLoja, c.nomeFuncionarioLoja, c.cpfFuncionarioLoja
                     from tblusuarioFuncionarioLoja as uc inner join tblusuario as u on 
                    (uc.codUsuario = u.codUsuario) inner join tblFuncionarioLoja as c on (c.codFuncionarioLoja = uc.codFuncionarioLoja)";
            //echo($sql);
            $select = mysql_query($sql);
            
            $cont=0;
            while($rs=mysql_fetch_array($select))
            {
                if($rs['usuario'] == $usuario && $rs['senha'] == $senha){
                   return 1; 
                }
				
				$cont++;
            }
			
			return 0;
    
        }
	
	
	
	}

?>