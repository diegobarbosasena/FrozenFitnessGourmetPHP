<script>
    function deletarProdutoCms(codCategoriaPrato){
                             
        if(confirm("Deseja Excluir?")){
            
            location.href = "<?php echo(PROJECTDIR)?>produtocms/deletar/" + codCategoriaPrato ;
        }
                         
                         
    }

    
</script>

<div class="cadas">Consulta de Produtos</div>

<form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>produtocms/cadastrar">
    <input class="btnConsulta" name="btnconsulta" type="submit" value="Cadastrar Dados" />
        

</form>

<form name="FrmPesquisa" method="post" action="<?php echo(PROJECTDIR)?>produtocms/index">
    
    <input class="pesquisarCms" type="text" name="txtPesquisa" value="<?php echo($pesquisa)?>" placeholder="Pesquisar...">
    <input class="btnPesquisaCms" type="submit" name="btnPesquisa" value=""/>
</form> 
    
<table class="tbl_consulta">
    <tr class="linha_consulta">
        <td class="col_consulta">
            Nome 
        </td>
        <td class="col_consulta">
            Preço
        </td>
        
        <td class="col_consulta">
            Opção 
        </td>
		
		<?php
			foreach ($listaProdutoCms as $produtoCms){	
		?>
        
        
    <tr class="linha_consulta">
        <td class="col_consulta">
             <?php echo ($produtoCms->nomeProduto);?>
        </td>
        <td class="col_consulta">
            <?php echo ($produtoCms->precoProduto);?>
        </td>
        
        <td class="col_consulta" >
            <a href="<?php echo(PROJECTDIR)?>produtocms/cadastrar/<?php echo($produtoCms->codProduto) ?>" class="link"> Editar </a>|
            <a href="#" class="link" onclick="deletarProdutoCms(<?php echo($produtoCms->codProduto) ?>)">Excluir </a> 
            | <a href="<?php echo(PROJECTDIR)?>produtocms/detalhe/<?php echo($produtoCms->codProduto) ?>" class="link">Detalhes </a>
        </td>
		<?php 
                         
            }
		?>
        
    </tr>

</table>