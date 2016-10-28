

<div class="cadas">Consulta de Produtos</div>

<form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>produtocms/cadastrar">
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
            Preço
        </td>
        <td class="col_consulta">
            Dt. Fabricação 
        </td>
        <td class="col_consulta">
            Dt. Validade 
        </td>
        <td class="col_consulta">
            Opção 
        </td>
		
		<?php
			require_once('controllers/produtocms_controller.php');
			
			$controllerProduto = new produtocms_controller();
			
			$rs=$controllerProduto->ListarTodos();
			
			$cont=0;
		
			while ($cont < count($rs)){
		?>
        
        
    <tr class="linha_consulta">
        <td class="col_consulta">
             <?php echo ($rs[$cont]->nomeProduto);?>
        </td>
        <td class="col_consulta">
            <?php echo ($rs[$cont]->precoProduto);?>
        </td>
        <td class="col_consulta">
             <?php echo ($rs[$cont]->dtFabricacaoProduto);?>
        </td>
        <td class="col_consulta">
            <?php echo ($rs[$cont]->dtValidadeProduto);?>
        </td>
        <td class="col_consulta" >
            <a href="<?php echo(PROJECTDIR)?>produtocms/cadastrar/<?php echo($rs[$cont]->codProduto) ?>" class="link"> Editar </a>| <a href="<?php echo(PROJECTDIR)?>produtocms/deletar/<?php echo($rs[$cont]->codProduto) ?>" class="link">Excluir </a> <a href="<?php echo(PROJECTDIR)?>produtocms/detalhe/<?php echo($rs[$cont]->codProduto) ?>" class="link">Detalhes </a>
        </td>
		<?php 
                
            $cont++; 
            
            
            }
		?>
        
    </tr>

</table>