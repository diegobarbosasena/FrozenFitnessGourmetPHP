
<?php
	
	$_GET ['txtCategoria'] = "";
	
?>


<div class="cadas">Consulta Categoria Materia</div>

 <form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>categoria/cadastrar">
        <input class="btnConsulta" name="btnconsulta" type="submit" value="Cadastrar Dados" />
        
 </form>

<form name="FrmPesquisa" method="post" action="home.php">
    
    <input class="pesquisarCms" type="text" name="lala" value="" placeholder="Pesquisar...">
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
		require_once('controllers/categoria_controller.php');
		
		$controllerCategoria = new categoria_controller();
				
		$rs=$controllerCategoria->listarTodos();

		$cont=0;
		
		while ($cont < count($rs)){
            
	?>    
        
    <tr class="linha_consulta">
        
        <td class="col_consulta">
           <?php 
					echo($rs[$cont]->nomeCategoriaMateria);
			?>
        </td>
        
        <td class="col_consulta">
            <a href="<?php echo(PROJECTDIR)?>categoria/cadastrar/<?php echo($rs[$cont]->codCategoriaMateria) ?>" class="link"> Editar</a> | 
            <a href="<?php echo(PROJECTDIR)?>categoria/deletar/<?php echo($rs[$cont]->codCategoriaMateria)?>" class="link">Excluir </a> 
        </td>
		
        <?php
            
			$cont++;
		}
		
		
		?>
        
    </tr>

</table>