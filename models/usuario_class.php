
<?php
	
	class Usuario {
		public $usuario;
		public $senha;

		
        public function __construct(){
            
            require_once('models/banco_dados.php');
			require_once('models/funcionario_class.php');
			
            $conexao = new mysql_db();

            $conexao->conectar();
        }
        		
		
        
        public function loginCliente($usuario, $senha){
            
            $sql = "select uc.codUsuarioCliente, u.codUsuario, u.usuario, u.senha, c.codCliente, c.nomeCliente,tu.codTipoUsuario,
			tu.nomeTipoUsuario from tblusuariocliente as uc inner join tblusuario as u on (uc.codUsuario = u.codUsuario) inner join tblcliente 
			as c on (c.codCliente = uc.codCliente) inner join tbltipousuario as tu on (tu.codTipoUsuario = u.codTipoUsuario);";

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
		
		   public function loginFunc($usuario, $senha){
            
				$f = new Funcionario();
				$lista = $f->selectAll();
				
				foreach($lista as $f){
					if($f->usuarioFuncionario == $usuario && $f->senhaFuncionario == $senha){
						 return 1; 
					}				
				}
				
				return 0;
			
		   }
    
        
	}

?>