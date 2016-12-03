<script>
    function deletarEstoque(codEstoque){
                             
        if(confirm("Deseja Excluir?")){
            
            location.href = "<?php echo(PROJECTDIR)?>estoque/deletar/" + codEstoque ;
        }
                         
                         
    }

    
</script>
<div class="cadas">Consulta de Estoque</div>

<form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>estoque/cadastrar">
    <input class="btnConsulta" name="btnconsulta" type="submit" value="Cadastrar Dados" />
</form>

<form name="FrmPesquisa" method="post" action="<?php echo(PROJECTDIR)?>estoque/index">
    
    <input class="pesquisarCms" type="text" name="txtPesquisa" value="<?php echo($pesquisa)?>" placeholder="Pesquisar...">
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
		
			foreach ($listaEstoque as $estoque){
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
			
              <a href="#" class="link" onclick="deletarEstoque(<?php echo($estoque->codEstoque) ?>)">Excluir </a> 
        </td>
    </tr>
    
    
	<?php 
                           
            }
	?>
    

</table>