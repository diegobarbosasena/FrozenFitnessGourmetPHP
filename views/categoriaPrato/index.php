<?php
	
	$_GET ['Categoria'] = "";
	
?>


<script>
    function deletarCategoria(codCategoriaPrato){
                             
        if(confirm("Deseja Excluir?")){
            
            location.href = "<?php echo(PROJECTDIR)?>categoriaPrato/deletar/" + codCategoriaPrato ;
        }
                         
                         
    }

    
</script>

<div class="cadas">Consultar Categoria Prato</div>

 
  <form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>categoriaPrato/cadastrar">
        <input class="btnConsulta" name="btnconsulta" type="submit" value="Cadastrar Dados" />
        
 </form>


<form name="FrmPesquisa" method="post" action="<?php echo(PROJECTDIR)?>categoriaPrato/index">
    
    <input class="pesquisarCms" type="text" name="txtPesquisa" value="<?php echo($pesquisa)?>" placeholder="Pesquisar...">
    <input class="btnPesquisaCms" type="submit" name="btnPesquisa" value=""/>
</form> 
    
<table class="tbl_consulta">
    <tr class="linha_consulta">
        <td class="col_consulta">
            Nome 
        </td>
        <td class="col_consulta">
           	Imagem
        </td>
        <td class="col_consulta">
            Descrição 
        </td>
       
      
        <td class="col_consulta">
            Opção 
        </td>
		
    <?php
		 foreach ($listaCategoriaPrato as $categoriaPrato){	
            
      
	?>    
        
    <tr class="linha_consulta">
        
        <td class="col_consulta">
           <?php 
					echo($categoriaPrato->nomeCategoriaPrato);
			?>
        </td>
		
		  <td class="col_consulta">
           
                <img src="<?php  echo (PROJECTDIR.$categoriaPrato->imagemCategoriaPrato); ?>" class="imgTable" >  
                

        </td>
		
		 <td class="col_consulta">
             <div class="overflow" >
           <?php 
					echo($categoriaPrato->descricaoCategoriaPrato);
			?>
                 <div class="overflow" >
        </td>
        
        <td class="col_consulta">
            <a href="<?php echo(PROJECTDIR)?>categoriaPrato/cadastrar/<?php echo($categoriaPrato->codCategoriaPrato) ?>" class="link"> Editar</a> | 
            <a href="#" class="link" onclick="deletarCategoria(<?php echo($categoriaPrato->codCategoriaPrato) ?>)">Excluir </a> 
            
            
        </td>
		                
        <?php
            
			
		}
		
		
		?>
        
    </tr>

</table>