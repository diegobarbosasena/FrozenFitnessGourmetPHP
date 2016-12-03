
<?php
	class MateriaPrima{
		
	public $codMateria;
	public $nomeMateria;
	public $precoMateria;
	public $descricaoMateria;
	public $codCategoriaMateria;
	public $nomeCategoriaMateria;
	
		
	 public function __construct(){
            
            require_once('models/banco_dados.php');
		
            $conexao = new mysql_db();

            $conexao->conectar();
        }
        		
				
		public function insert($materiaPrima) {

			$sql = "insert into tblMateriaPrima (nomeMateria, precoMateria, descricaoMateria) 
					values ('".$materiaPrima->nomeMateria."', '".$materiaPrima->precoMateria."', '".$materiaPrima->descricaoMateria."')";
			
			mysql_query($sql);
			//echo($sql);
				
			
			$sql2 = "insert into tblCatMateria (codMateria,codCategoriaMateria) values (LAST_INSERT_ID(),'".$materiaPrima->codCategoriaMateria."')";
			//echo($sql2);
			if(mysql_query($sql2))
				return true;
			else
				return false;	
				
			
		}		
		
		public function selectAll (){
		
			$sql = "select m.codMateria,m.nomeMateria, m.precoMateria, m.descricaoMateria,
					c.nomeCategoriaMateria, c.codCategoriaMateria
					from tblMateriaPrima as m
					inner join tblCatMateria as cat
					on (m.codMateria = cat.codMateria)
					inner join tblCategoriaMateria as c
					on(cat.codCategoriaMateria = c.codCategoriaMateria);";
					
			//echo("foi".$sql);
            
			$select = mysql_query($sql);
						
            
            $listaMateria = array();
            
			while($rs = mysql_fetch_array($select)){
                	  
                $materiaPrima = new MateriaPrima();
                $materiaPrima->codMateria = $rs['codMateria'];
                $materiaPrima->nomeMateria = $rs['nomeMateria'];
				$materiaPrima->precoMateria = $rs['precoMateria'];
                $materiaPrima->descricaoMateria = $rs['descricaoMateria'];
				$materiaPrima->codCategoriaMateria = $rs['codCategoriaMateria'];
				$materiaPrima->nomeCategoriaMateria = $rs['nomeCategoriaMateria'];
				
				
                
                
				$listaMateria[] = $materiaPrima;                              							
			}
			
            return $listaMateria;   
							
		}
		
		public function selectById($codMateria){
			
			$sql = "select m.codMateria,m.nomeMateria, m.precoMateria, m.descricaoMateria,
					c.nomeCategoriaMateria, c.codCategoriaMateria
					from tblMateriaPrima as m
					inner join tblCatMateria as cat
					on (m.codMateria = cat.codMateria)
					inner join tblCategoriaMateria as c
					on(cat.codCategoriaMateria = c.codCategoriaMateria) where m.codMateria=".$codMateria;
					
			//echo("foi".$sql);
            
			$select = mysql_query($sql);
						
            
            $listaMateria = array();
            
			while($rs = mysql_fetch_array($select)){
                	  
                $materiaPrima = new MateriaPrima();
                $materiaPrima->codMateria = $rs['codMateria'];
                $materiaPrima->nomeMateria = $rs['nomeMateria'];
				$materiaPrima->precoMateria = $rs['precoMateria'];
                $materiaPrima->descricaoMateria = $rs['descricaoMateria'];
				$materiaPrima->codCategoriaMateria = $rs['codCategoriaMateria'];
				$materiaPrima->nomeCategoriaMateria = $rs['nomeCategoriaMateria'];
				
			}
			
			return $materiaPrima;
		}
        
        
         public function selectByName($nomeMateria){
             
             $sql = "select m.codMateria,m.nomeMateria, m.precoMateria, m.descricaoMateria,
					c.nomeCategoriaMateria, c.codCategoriaMateria
					from tblMateriaPrima as m
					inner join tblCatMateria as cat
					on (m.codMateria = cat.codMateria)
					inner join tblCategoriaMateria as c
					on(cat.codCategoriaMateria = c.codCategoriaMateria) where m.nomeMateria like '%".$nomeMateria."%'";
			
			//$sql = "select * from tblCategoriaPrato where nomeCategoriaPrato like '%".$nomeCategoriaPrato."%'";
        
            
			
			$select = mysql_query($sql);
			 $listaIngrediente = array();
            
			
            while($rs = mysql_fetch_array($select)){
                
				
				 	  
                $materiaPrima = new MateriaPrima();
                $materiaPrima->codMateria = $rs['codMateria'];
                $materiaPrima->nomeMateria = $rs['nomeMateria'];
				$materiaPrima->precoMateria = $rs['precoMateria'];
                $materiaPrima->descricaoMateria = $rs['descricaoMateria'];
				$materiaPrima->codCategoriaMateria = $rs['codCategoriaMateria'];
				$materiaPrima->nomeCategoriaMateria = $rs['nomeCategoriaMateria'];		
                
                $listaIngrediente[]= $materiaPrima;
											
			}
			
			return $listaIngrediente;
		}
		
		public function update() {
		
		
		$sql = "update tblMateriaPrima set nomeMateria = '".$this->nomeMateria."', precoMateria = '".$this->precoMateria."', descricaoMateria = '".$this->descricaoMateria."' where codMateria=".$this->codMateria;     
				mysql_query($sql);
				
		$sql2 = "update tblCatMateria set codCategoriaMateria='".$this->codCategoriaMateria."' where codMateria =".$this->codMateria;
			//echo($sql2);	
			if(mysql_query($sql2))
				return true;
			else
				return false;		
		}
					
			
		
		public function delete($codMateria) {
		
			$sql = "delete from tblCatMateria where codMateria=".$codMateria;
            
            mysql_query($sql);
            
            $sql2 = "delete from tblMateriaPrima where codMateria=".$codMateria;

			if(mysql_query($sql2))
				return true;
			else
				return false;	
 	
		}	
	
	}
	
?>