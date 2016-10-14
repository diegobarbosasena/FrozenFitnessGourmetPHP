
<?php
	class Slider{
		public $codSlider;
		public $tituloSlider;
		public $linkImagemSlider;
		
		public function __construct(){
            
            require_once('models/banco_dados.php');
		
            $conexao = new mysql_db();

            $conexao->conectar();
        }
        		
				
		public function insert($categoriaPrato) {

			$sql = "";
			
			if(mysql_query($sql))
				return true;
			else
				return false;
			
		}		
		
		public function selectAll (){
            
			$select = mysql_query($sql);
						
            
            $listaSlider = array();
            
			while($rs = mysql_fetch_array($select)){
                	  
                $slider = new Estoque();
                $slider->codSlider = $rs['codSlider'];
                $slider->tituloSlider = $rs['tituloSlider'];
				$slider->linkImagemSlider = $rs['linkImagemSlider'];
                              
				$listaSlider[] = $listaSlider;                              							
			}
			
            return $listaSlider;   
							
		}
		
		public function selectById($codPrato){
			
			$sql = "=".$codPrato;
			
			$select = mysql_query($sql);
			
			if($rs = mysql_fetch_array($select)){
				
				$slider = new Estoque();
                $slider->codSlider = $rs['codSlider'];
                $slider->tituloSlider = $rs['tituloSlider'];
				$slider->linkImagemSlider = $rs['linkImagemSlider'];
               
											
			}
			
			return $slider;
		}
		
		public function update() {
					
			$sql = "";     
				
			if(mysql_query($sql))
				return true;
			else
				return false;		
		}
		
		public function delete($codCategoriaPrato) {
		
			$sql = "";

			if(mysql_query($sql))
				return true;
			else
				return false;					
		}	
	
	
	}

?>