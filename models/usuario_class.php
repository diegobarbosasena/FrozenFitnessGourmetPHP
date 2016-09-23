
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
		
		
		}
		
		public function insert() {
		
		
		}
        
        public function login($usuario, $senha){
            
            $sql = "select uc.codUsuarioCliente, u.codUsuario, u.usuario, u.senha, c.codCliente, c.nomeCliente,tu.codTipoUsuario, tu.nomeTipoUsuario from tblusuariocliente as uc inner join tblusuario as u on (uc.codUsuario = u.codUsuario) inner join tblcliente as c on (c.codCliente = uc.codCliente) inner join tbltipousuario as tu on (tu.codTipoUsuario = u.codTipoUsuario);";
            
            $select = mysql_query($sql);
            
            $cont=0;
            while($rs=mysql_fetch_array($select))
            {
                if($rs['usuario'] == $usuario && $rs['senha'] == $senha){
                   return 1; 
                }else{
                    return 0;
                }                               
            }
    
        }
	
	
	}

?>