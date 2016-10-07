<?php
	
	class Objetivo {

		public $nomeCategoriaPrato;
		public $codCategoriaPrato;
		public $descricaoCategoria;
		public $imagemCategoria;

		
        public function __construct(){
            
            require_once('models/banco_dados.php');
		
            $conexao = new mysql_db();

            $conexao->conectar();
        }
        		
        
        public function getImg($nome_arq){
            
            if(strstr($nome_arq, '.jpg') || strstr($nome_arq, '.png')){
                if(move_uploaded_file($_FILES["livro_file"]["tmp_name"],$file)){
                    if($operacao=="Cadastrar"){
                    $sql="insert into tbllivro(titulolivro, descricaolivro, fotolivro, preco, codcat, codsubcat)
                    values('".$nome."','".$descricao."','".$file."','".$preco."','".$categoria."','".$subcategoria."')";
                    }elseif($operacao=="Editar"){
                    $sql="update tbllivro set titulolivro='".$nome."', descricaolivro='".$descricao."', fotolivro='".$file."', preco='".$preco."', codcat='".$categoria."', codsubcat='".$subcategoria."' where codlivro='".$_SESSION["cod"]."'";
                    }
                    mysql_query($sql);
                    header("location:adm_all_livro_mes.php");
                }
                }else{
                            echo'<script> alert ("Extensão Inválida."); </script>';
                        }
        }
				
		public function insert($categoriaPrato) {

		
				$sql = "insert into tblcategoriaprato (nomeCategoriaPrato, descricaoCategoria, imagemCategoria) values('".$categoriaPrato->nomeCategoriaPrato."','".$categoriaPrato->descricaoCategoria."',
					'".$categoriaPrato->imagemCategoria."')";
			
				if(mysql_query($sql))
					return true;
				else
					return false;
					//echo($sql);
	
		}		
		
		public function selectAll (){
            
			$sql = "select * from tblcategoriaprato";
			
			$select = mysql_query($sql);
            
            $listaObjetivo = array(); 
			
			while($rs = mysql_fetch_array($select)){
				
                $objetivo = new Objetivo();
				$$objetivo->codCategoriaPrato = $rs['codCategoriaPrato'];
                $objetivo->nomeCategoriaPrato = $rs['nomeCategoriaPrato'];
				$objetivo->descricaoCategoria = $rs['descricaoCategoria'];
				
				$listaObjetivo[] = $objetivo;						
			}
			
			return $listaObjetivo;
				
		}
		
		public function selectById($codCategoriaMateria){
			
			$sql = "select * from tblcategoriaprato where codCategoriaPrato=".$codCategoriaPrato;
			
			$select = mysql_query($sql);
			
			echo($sql);
			
			if($rs = mysql_fetch_array($select)){
				
				$listaCatPrato[] = new Objetivo();
				  
				$listaCatPrato[$cont]->codCategoriaPrato = $rs['codCategoriaPrato'];
                $listaCatPrato[$cont]->nomeCategoriaPrato = $rs['nomeCategoriaPrato'];
											
			}
			
			return $listaCatPrato;
		}
		
		public function update($categoriaPrato) {
		
			$sql = "update tblcategoriaprato set nomeCategoriaPrato='".$categoriaPrato->nomeCategoriaPrato."' where codCategoriaPrato=".$categoriaPrato->codCategoriaPrato;     
			//echo($sql.'  CHEGOU');
				
			if(mysql_query($sql))
				return true;
			else
				return false;				
		}
		
		public function delete($codCategoriaPrato) {
		
			$sql = "delete from tblcategoriaprato where codCategoriaPrato=".$codCategoriaPrato;

			if(mysql_query($sql))
				return true;
			else
				return false;							
		}	
	}

?>