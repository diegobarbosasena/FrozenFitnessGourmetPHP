
<?php
	
	$_GET ['txtCategoria'] = "";
	
?>
<script>
    function deletarCategoriaMateria(codCategoriaMateria){
                             
        if(confirm("Deseja Excluir?")){
            
            location.href = "<?php echo(PROJECTDIR)?>categoria/deletar/" + codCategoriaMateria ;
        }
                         
                         
    }

    
</script>

<div class="cadas">Consulta Categoria Materia</div>

 <form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>categoria/cadastrar">
        <input class="btnConsulta" name="btnconsulta" type="submit" value="Cadastrar Dados" />
        
 </form>



<form name="FrmPesquisa" method="post" action="<?php echo(PROJECTDIR)?>categoria/index">
    
    <input class="pesquisarCms" type="text" name="txtPesquisa" value="<?php echo($pesquisa)?>" placeholder="Pesquisar...">
    <input class="btnPesquisaCms" type="submit" name="btnPesquisa" value=""/>
</form> 
    
<table class="tbl_consulta">
    <tr class="linha_consulta">
        <td class="col_consulta">
            Nome 
        </td>
      
        <td class="col_consulta">
            Opção 
        </td>
		
    <?php
		foreach ($listaCategoriaMateria as $categoria){	
            
	?>    
        
    <tr class="linha_consulta">
        
        <td class="col_consulta">
           <?php 
					echo($categoria->nomeCategoriaMateria);
			?>
        </td>
        
        <td class="col_consulta">
            <a href="<?php echo(PROJECTDIR)?>categoria/cadastrar/<?php echo($categoria->codCategoriaMateria) ?>" class="link"> Editar</a> | 
            
            <a href="#" class="link" onclick="deletarCategoriaMateria(<?php echo($categoria->codCategoriaMateria)?>)">Excluir </a> 
          
        </td>
		
        <?php
            
			
		}
		
		
		?>
        
    </tr>

</table>