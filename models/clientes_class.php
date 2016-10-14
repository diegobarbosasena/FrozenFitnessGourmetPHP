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
        
        public function __construct(){
            
            require_once('models/banco_dados.php');
		
            $conexao = new mysql_db();

            $conexao->conectar();
        }
        		
				
		public function insert($prato) {

			$sql = "";
			if(mysql_query($sql))
				return true;
			else
				return false;
			
		}		
		
		public function selectAll (){
			
			$sql = "";
            
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