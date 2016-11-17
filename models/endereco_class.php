

<?php
	
	class Endereco {
		
		public $logradouro;
		public $cep;
		public $numero;
		public $bairro;
		public $cidade;
		public $complemento;
        public $codEndereco;
        
        
        public function __construct(){
            
            require_once('models/banco_dados.php');
			require_once('models/cidade_class.php');
		
            $conexao = new mysql_db();

            $conexao->conectar();
			
			$this->cidade = new Cidade();
        }
        		
				
		public function insert() {

							
		}		
		
		
		
		public function selectAll (){
            
				
            $sql = "select e.codEndereco, e.logradouro, e.cep, e.numero, e.bairro, e.complemento, c.codCidade
					from tblEndereco as e inner join tblCidade as c on (e.codCidade = c.codCidade)";
			
			$select = mysql_query($sql);
						
            
            $listaEnderecos = array();
            
			while($rs = mysql_fetch_array($select)){
                	  
                $endereco = new Endereco();
                $endereco->codEndereco = $rs['codEndereco'];
                $endereco->logradouro = $rs['logradouro'];
				$endereco->cep = $rs['cep'];
				$endereco->numero = $rs['numero'];
				$endereco->bairro = $rs['bairro'];
				$endereco->complemento = $rs['complemento'];
				$endereco->codCidade = $rs['codCidade'];
                
				$listaEnderecos[] = $endereco;                              							
			}
			
            return $listaEnderecos;         
		}
		
		public function selectById($codEndereco){
			
		}
		
		public function update() {
				
		}
		
		public function delete($codParceiro) {
		
									
		}	
	}

?>