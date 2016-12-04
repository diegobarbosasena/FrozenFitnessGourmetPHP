
<?php
	
	class Parceiro {

		public $nomeParceiro;
		public $codParceiro;
		public $cnpjParceiro;
		public $imagemParceiro;
		public $siteParceiro;
		public $telefoneParceiro;
		public $emailParceiro;
		public $endereco;
        
        
        public function __construct(){
            
            require_once('models/banco_dados.php');
            require_once('models/endereco_class.php');
		
            $conexao = new mysql_db();

            $conexao->conectar();
			
			$this->endereco = new Endereco();
        }       		
				
		public function insert($parceiro) {
			
			$sql = "insert into tblEndereco (logradouro,cep,numero,bairro,complemento,codCidade) values ('".$parceiro->endereco->logradouro."',
			'".$parceiro->endereco->cep."','".$parceiro->endereco->numero."','".$parceiro->endereco->bairro."','".$parceiro->endereco->complemento."',
			'".$parceiro->endereco->cidade->codCidade."')";
		
			mysql_query($sql);
		
			$sql2 = "insert into tblParceiro (nomeParceiro,cnpjParceiro,imagemParceiro,siteParceiro,telefoneParceiro,emailParceiro,codEndereco) 
			values('".$parceiro->nomeParceiro."', '".$parceiro->cnpjParceiro."', '".$parceiro->imagemParceiro."', '".$parceiro->siteParceiro."',
			'".$parceiro->telefoneParceiro."','".$parceiro->emailParceiro."', LAST_INSERT_ID())";
	
			if(mysql_query($sql2))
				return true;
			else
				return false;
							
		}		
		
		
		
		public function selectAll (){
            
			$sql = "select p.codParceiro, p.cnpjParceiro, p.nomeParceiro, p.imagemParceiro, p.siteParceiro, p.telefoneParceiro, p.emailParceiro,
					e.codEndereco, e.logradouro, e.cep, e.numero, e.bairro, e.complemento, c.codCidade, c.nomeCidade, s.codEstado, s.nomeEstado, s.uf
					from tblParceiro as p inner join tblEndereco as e on (p.codEndereco= e.codEndereco) inner join tblCidade as c on (e.codCidade = c.codCidade)
					inner join tblEstado as s on (c.codEstado = s.codEstado);";
			
			$select = mysql_query($sql);
						
            
            $listaParceiro = array();
            
			while($rs = mysql_fetch_array($select)){
                	  
                $parceiro = new Parceiro();
				
				$parceiro->codParceiro = $rs['codParceiro'];
                $parceiro->nomeParceiro = $rs['nomeParceiro'];				
				$parceiro->cnpjParceiro = $rs['cnpjParceiro'];
                $parceiro->imagemParceiro = $rs['imagemParceiro'];
				$parceiro->siteParceiro = $rs['siteParceiro'];
                $parceiro->telefoneParceiro = $rs['telefoneParceiro'];
				$parceiro->emailParceiro = $rs['emailParceiro'];				
				$parceiro->endereco->logradouro = $rs['logradouro'];
				$parceiro->endereco->cep = $rs['cep'];
				$parceiro->endereco->numero = $rs['numero'];
				$parceiro->endereco->bairro = $rs['bairro'];				
				$parceiro->endereco->cidade->codCidade = $rs['codCidade'];
				$parceiro->endereco->cidade->nomeCidade = $rs['nomeCidade'];
				$parceiro->endereco->complemento = $rs['complemento'];
				$parceiro->endereco->cidade->estado->codEstado = $rs['codEstado'];       
				$parceiro->endereco->cidade->estado->nomeEstado = $rs['nomeEstado'];   	
                
				$listaParceiro[] = $parceiro;                              							
			}
			
            return $listaParceiro;           
		}
		
		public function selectById($codParceiro){
			
					$sql = "select p.codParceiro, p.cnpjParceiro, p.nomeParceiro, p.imagemParceiro, p.siteParceiro, p.telefoneParceiro, p.emailParceiro,
					e.codEndereco, e.logradouro, e.cep, e.numero, e.bairro, e.complemento, c.codCidade, c.nomeCidade, s.codEstado, s.nomeEstado, s.uf
					from tblParceiro as p inner join tblEndereco as e on (p.codEndereco= e.codEndereco) inner join tblCidade as c on (e.codCidade = c.codCidade)
					inner join tblEstado as s on (c.codEstado = s.codEstado) where p.codParceiro=".$codParceiro;
			
			$select = mysql_query($sql);
						
            
			if($rs = mysql_fetch_array($select)){
                	  
                $parceiro = new Parceiro();
				
                $parceiro->codParceiro = $rs['codParceiro'];
                $parceiro->nomeParceiro = $rs['nomeParceiro'];				
				$parceiro->cnpjParceiro = $rs['cnpjParceiro'];
                $parceiro->imagemParceiro = $rs['imagemParceiro'];
				$parceiro->siteParceiro = $rs['siteParceiro'];
                $parceiro->telefoneParceiro = $rs['telefoneParceiro'];
				$parceiro->emailParceiro = $rs['emailParceiro'];				
				$parceiro->endereco->logradouro = $rs['logradouro'];
				$parceiro->endereco->cep = $rs['cep'];
				$parceiro->endereco->numero = $rs['numero'];
				$parceiro->endereco->bairro = $rs['bairro'];				
				$parceiro->endereco->cidade->codCidade = $rs['codCidade'];
				$parceiro->endereco->cidade->nomeCidade = $rs['nomeCidade'];
				$parceiro->endereco->complemento = $rs['complemento'];
				$parceiro->endereco->cidade->estado->codEstado = $rs['codEstado'];       
				$parceiro->endereco->cidade->estado->nomeEstado = $rs['nomeEstado'];   				
			}
			
            return $parceiro; 
		}
        public function selectByName($nomeParceiro){
            
            $sql = "select p.codParceiro, p.cnpjParceiro, p.nomeParceiro, p.imagemParceiro, p.siteParceiro, p.telefoneParceiro, p.emailParceiro,
					e.codEndereco, e.logradouro, e.cep, e.numero, e.bairro, e.complemento, c.codCidade, c.nomeCidade, s.codEstado, s.nomeEstado, s.uf
					from tblParceiro as p inner join tblEndereco as e on (p.codEndereco= e.codEndereco) inner join tblCidade as c 
                    on (e.codCidade = c.codCidade)
					inner join tblEstado as s on (c.codEstado = s.codEstado) where  p.nomeParceiro like '%".$nomeParceiro."%'";
			
			
			$select = mysql_query($sql);
			 $listaParceiros = array();
            
			
            while($rs = mysql_fetch_array($select)){
				
				 $parceiro = new Parceiro();
				
                $parceiro->codParceiro = $rs['codParceiro'];
                $parceiro->nomeParceiro = $rs['nomeParceiro'];				
				$parceiro->cnpjParceiro = $rs['cnpjParceiro'];
                $parceiro->imagemParceiro = $rs['imagemParceiro'];
				$parceiro->siteParceiro = $rs['siteParceiro'];
                $parceiro->telefoneParceiro = $rs['telefoneParceiro'];
				$parceiro->emailParceiro = $rs['emailParceiro'];				
				$parceiro->endereco->logradouro = $rs['logradouro'];
				$parceiro->endereco->cep = $rs['cep'];
				$parceiro->endereco->numero = $rs['numero'];
				$parceiro->endereco->bairro = $rs['bairro'];				
				$parceiro->endereco->cidade->codCidade = $rs['codCidade'];
				$parceiro->endereco->cidade->nomeCidade = $rs['nomeCidade'];
				$parceiro->endereco->complemento = $rs['complemento'];
				$parceiro->endereco->cidade->estado->codEstado = $rs['codEstado'];       
				$parceiro->endereco->cidade->estado->nomeEstado = $rs['nomeEstado'];   
                $listaParceiros[]= $parceiro;
			}
                
                
								
			
			return $listaParceiros;
		}
        
		
		public function update() {
		
			$sql = "update tblParceiro set nomeParceiro='".$this->nomeParceiro."', cnpjParceiro='".$this->cnpjParceiro."', imagemParceiro='".$this->imagemParceiro."',
					siteParceiro='".$this->siteParceiro."', telefoneParceiro='".$this->telefoneParceiro."', emailParceiro='".$this->emailParceiro."' where codParceiro=".$this->codParceiro;     
			
			mysql_query($sql);
			
			$sql2 = "update tblEndereco set logradouro='".$this->endereco->logradouro."',  cep='".$this->endereco->cep."', numero='".$this->endereco->numero."',
			bairro='".$this->endereco->bairro."', codCidade='".$this->endereco->cidade->codCidade."' where codCidade=".$this->endereco->cidade->codCidade;	
			
				
			if(mysql_query($sql2))
				return true;
			else
				return false;		
		}
        
         
		
		public function delete($codParceiro) {
		
			$sql = "delete from tblParceiro where codParceiro=".$codParceiro;

			if(mysql_query($sql))
				return true;
			else
				return false;							
		}	
	}

?>