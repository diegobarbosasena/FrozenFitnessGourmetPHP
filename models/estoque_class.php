
<?php
	class Estoque{
	
		public $codEstoque;
		public $dtValidade;
		public $dtFabricacao;
		public $quantidade;
		public $quantidadeMinima;
		public $codMateria;
		public $nomeMateria;
		
		public function __construct(){
            
            require_once('models/banco_dados.php');
		
            $conexao = new mysql_db();

            $conexao->conectar();
        }
        		
				
		public function insert($estoque) {

			$sql = "insert into tblEstoque (dtFabricacao,dtValidade,quantidade,quantidadeMinima,codMateria)
					values ('".$estoque->dtFabricacao."', '".$estoque->dtValidade."', '".$estoque->quantidade."', '".$estoque->quantidadeMinima."', '".$estoque->codMateria."')";
					
					echo($sql);
			

			if(mysql_query($sql))
				return true;
			else
				return false;	
			
		}		
		
		public function selectAll (){
			
			$sql = "select  e.codEstoque,e.dtFabricacao, e.dtValidade, e.quantidade,
					e.quantidadeMinima, e.codMateria, m.codMateria, m.nomeMateria
					from tblEstoque as e
					inner join tblMateriaPrima as m
					on (e.codMateria = m.codMateria);";
			
			$select = mysql_query($sql);
						
            
            $listaEstoque= array();
            
			while($rs = mysql_fetch_array($select)){
                	  
                $estoque = new Estoque();
				$estoque->nomeMateria = $rs['nomeMateria'];
				$estoque->codMateria = $rs['codMateria'];
                $estoque->codEstoque = $rs['codEstoque'];
                $estoque->dtValidade = $rs['dtValidade'];
				$estoque->dtFabricacao = $rs['dtFabricacao'];
				$estoque->quantidade = $rs['quantidade'];
                $estoque->quantidadeMinima = $rs['quantidadeMinima'];
                 $estoque->nomeMateria = $rs['nomeMateria'];
                              
				$listaEstoque[] = $estoque;                              							
			}
			
            return $listaEstoque;   
							
		}
		
		public function selectById($codEstoque){
			
			$sql = "select e.codEstoque,e.dtFabricacao, e.dtValidade, e.quantidade,
					e.quantidadeMinima, e.codMateria, m.codMateria, m.nomeMateria
					from tblEstoque as e
					inner join tblMateriaPrima as m
					on (e.codMateria = m.codMateria) where codEstoque=".$codEstoque;
			
			$select = mysql_query($sql);
			
			if($rs = mysql_fetch_array($select)){
				
				$estoque = new Estoque();
				$estoque->codMateria = $rs['codMateria'];
                $estoque->codEstoque = $rs['codEstoque'];
                $estoque->dtValidade = $rs['dtValidade'];
				$estoque->dtFabricacao = $rs['dtFabricacao'];
				$estoque->quantidade = $rs['quantidade'];
                $estoque->quantidadeMinima = $rs['quantidadeMinima'];
                 $estoque->nomeMateria = $rs['nomeMateria'];
               
											
			}
			
			return $estoque;
		}
        
         public function selectByName($nomeMateria){
             
             $sql = "select e.codEstoque,e.dtFabricacao, e.dtValidade, e.quantidade,
					e.quantidadeMinima, e.codMateria, m.codMateria, m.nomeMateria
					from tblEstoque as e
					inner join tblMateriaPrima as m
					on (e.codMateria = m.codMateria) where m.nomeMateria like '%".$nomeMateria."%'";

			$select = mysql_query($sql);
			 $listaEstoque = array();
            
			
            while($rs = mysql_fetch_array($select)){
				
				 $estoque = new Estoque();
				$estoque->codMateria = $rs['codMateria'];
                $estoque->codEstoque = $rs['codEstoque'];
                $estoque->dtValidade = $rs['dtValidade'];
				$estoque->dtFabricacao = $rs['dtFabricacao'];
				$estoque->quantidade = $rs['quantidade'];
                $estoque->quantidadeMinima = $rs['quantidadeMinima'];
                 $estoque->nomeMateria = $rs['nomeMateria'];

                
                $listaEstoque[]= $estoque;
											
			}
			
			return $listaEstoque;
		}
        
		
		public function update() {
					
			$sql ="update tblEstoque set codMateria = '".$this->codMateria."',
			dtValidade = '".$this->dtValidade."',dtFabricacao = '".$this->dtFabricacao."',
			 quantidade = '".$this->quantidade."', quantidadeMinima = '".$this->quantidadeMinima."'   where codEstoque=".$this->codEstoque;       
				
			if(mysql_query($sql))
				return true;
			else
				return false;		
		}
		
		public function delete($codEstoque) {
		
			$sql = "delete from tblEstoque where codEstoque=".$codEstoque;

			if(mysql_query($sql))
				return true;
			else
				return false;					
		}	
	
	
	
	}

?>