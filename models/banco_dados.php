
<?php

class mysql_db{
	
	public $server;
	public $user;
	public $password;
	
	public function __construct(){
		
		/*$this->server="10.107.140.14";
		$this->user="root";
		$this->password="root";*/
        
        $this->server="192.168.0.2";
		$this->user="smartgourmet";
		$this->password="smart147852";
        
         /*$this->server="localhost";
		$this->user="root";
		$this->password="bcd127";*/
	}
	
	public function conectar(){
		
		if($this->conexao=mysql_connect($this->server, $this->user, $this->password))
		{
			
			mysql_select_db("dbsmartgourmet");
		}else{
			
			echo("Erro na conexao com o BD.". mysql_error());
			die();
		}
	}
	
	public function descconectar(){	
		mysql_close($this->conexao);
	}	
}

?>
