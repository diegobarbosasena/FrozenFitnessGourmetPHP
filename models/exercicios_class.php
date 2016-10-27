
<?php
	class Exercicios{
	

		public $tituloExercicio;
		public $codExercicio;
		public $descricaoExercicio;
		public $imagemExercicio;

		
        public function __construct(){
            
            require_once('models/banco_dados.php');
		
            $conexao = new mysql_db();

            $conexao->conectar();
        }
        		
				
		public function insert($exercicios) {
		
				$sql = "insert into tblexercicio (tituloExercicio, descricaoExercicio, imagemExercicio) values('".$exercicios->tituloExercicio."','".$exercicios->descricaoExercicio."',
					'".$exercicios->imagemExercicio."')";
					

				
				if(mysql_query($sql)){
				
					return true;
				}else{
					return false;	
				}
		}		
		
		public function selectAll (){
            
			$sql = "select * from tblexercicio";
			
			$select = mysql_query($sql);
            
            $listaExercicio = array(); 
			
			while($rs = mysql_fetch_array($select)){
				
                $exercicios = new Exercicios();
				$exercicios->codExercicio = $rs['codExercicio'];
                $exercicios->tituloExercicio = $rs['tituloExercicio'];
				$exercicios->descricaoExercicio = $rs['descricaoExercicio'];
				$exercicios->imagemExercicio = $rs['imagemExercicio'];
				
				$listaExercicio[] = $exercicios;						
			}
			
			return $listaExercicio;
				
		}
		
		public function selectById($codExercicio){
			
			$sql = "select * from tblexercicio where codExercicio=".$codExercicio;
			
			$select = mysql_query($sql);
			
			if($rs = mysql_fetch_array($select)){
				
				$exercicios = new Exercicios();
				  
				$exercicios = new Exercicios();
				$exercicios->codExercicio = $rs['codExercicio'];
                $exercicios->tituloExercicio = $rs['tituloExercicio'];
				$exercicios->descricaoExercicio = $rs['descricaoExercicio'];
				$exercicios->imagemExercicio = $rs['imagemExercicio'];			
			}
			
			return $exercicios;
		}
		
		public function update() {
		
			$sql = "update tblexercicio set tituloExercicio='".$this->tituloExercicio."', descricaoExercicio='".$this->descricaoExercicio."', imagemExercicio='".$this->imagemExercicio."'  where codExercicio=".$this->codExercicio;     
			
			if(mysql_query($sql)){				
				return true;
			}else{
				return false;
			}
		}
		
		public function delete($codExercicio) {
		
			$sql = "delete from tblexercicio where codExercicio=".$codExercicio;

			if(mysql_query($sql))
				return true;
			else
				return false;							
		}	
	}

?>