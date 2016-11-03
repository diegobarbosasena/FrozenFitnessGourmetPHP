
<div class="cadas">Consulta de Estoque</div>

<form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>estoque/cadastrar">
    <input class="btnConsulta" name="btnconsulta" type="submit" value="Cadastrar Dados" />
</form>

<form name="FrmPesquisa" method="post" action="home.php">
    
    <input class="pesquisarCms" type="text" name="lala" value="" placeholder="Pesquisar...">
    <input class="btnPesquisaCms" type="submit" name="btnPesquisa" value=""/>
</form> 

	<div class="clear"> </div>

<table class="tbl_consulta">
    <tr class="linha_consulta">
        <td class="col_consulta">
            Nome 
        </td>
        <td class="col_consulta">
            Quantidade 
        </td>
        <td class="col_consulta">
            Quantidade Minima
        </td>
        <td class="col_consulta">
           Data de Fabricação
        </td>
		<td class="col_consulta">
           Data de Validade 
        </td>
        <td class="col_consulta">
            Opções
        </td>
    </tr>
     <?php
		
			foreach ($listar as $estoque){
    ?>   
    <tr class="linha_consulta">
        <td class="col_consulta">
            <?php echo ($estoque->nomeMateria);?>
        </td>
        <td class="col_consulta">
            <?php echo ($estoque->quantidade);?>
        </td>
        <td class="col_consulta">
            <?php echo ($estoque->quantidadeMinima);?>
        </td>
        <td class="col_consulta">
        	 <?php echo ($estoque->dtFabricacao);?>  
        </td>
		<td class="col_consulta">
        	 <?php echo ($estoque->dtValidade);?>
        </td>
        <td class="col_consulta" >
           <a href="<?php echo(PROJECTDIR)?>estoque/cadastrar/<?php echo($estoque->codEstoque) ?>" class="link"> Editar </a>|
			<a href="<?php echo(PROJECTDIR)?>estoque/deletar/<?php echo($estoque->codEstoque) ?>" class="link">Excluir </a>
        </td>
    </tr>
    
    
	<?php 
                           
            }
	?>
    

</table>