
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
        		
				
		public function insert($slider) {

			$sql = "insert into tblSlider (tituloSlider, linkImagemSlider) 
					values ('".$slider->tituloSlider."', '".$slider->linkImagemSlider."')";

			
			if(mysql_query($sql))
				return true;
			else
				return false;
			
		}		
		
		public function selectAll (){
			
			$sql = "select * from tblSlider";
            
			$select = mysql_query($sql);
						
            
            $listaSlider = array();
            
			while($rs = mysql_fetch_array($select)){
                	  
                $slider = new Slider();
                $slider->codSlider = $rs['codSlider'];
                $slider->tituloSlider = $rs['tituloSlider'];
				$slider->linkImagemSlider = $rs['linkImagemSlider'];
                  
				 
				$listaSlider[] = $slider;                              							
			}
			
            return $listaSlider;   
							
		}
		
		public function selectById($codSlider){
			
			$sql = "select* from tblSlider where codSlider=".$codSlider;
			
			$select = mysql_query($sql);
			
			if($rs = mysql_fetch_array($select)){
				
				$slider = new Slider();
                $slider->codSlider = $rs['codSlider'];
                $slider->tituloSlider = $rs['tituloSlider'];
				$slider->linkImagemSlider = $rs['linkImagemSlider'];
               
											
			}
			
			return $slider;
		}
        
         public function selectByName($tituloSlider){
             $sql = "select* from tblSlider where tituloSlider like '%".$tituloSlider."%'";

			
			$select = mysql_query($sql);
			 $listaSlider = array();
            
			
            while($rs = mysql_fetch_array($select)){
				
				  $slider = new Slider();
                $slider->codSlider = $rs['codSlider'];
                $slider->tituloSlider = $rs['tituloSlider'];
				$slider->linkImagemSlider = $rs['linkImagemSlider'];
               
                
                $listaSlider[]= $slider;
											
			}
			
			return $listaSlider;
		}
        
		
		public function update() {
					
			$sql = "update tblSlider set tituloSlider = '".$this->tituloSlider."',
			linkImagemSlider = '".$this->linkImagemSlider."' where codSlider=".$this->codSlider;     
				
			if(mysql_query($sql))
				return true;
			else
				return false;		
		}
		
		public function delete($codSlider) {
		
			$sql = "delete from tblSlider where codSlider=".$codSlider;

			if(mysql_query($sql))
				return true;
			else
				return false;					
		}	
	
	
	}

?>