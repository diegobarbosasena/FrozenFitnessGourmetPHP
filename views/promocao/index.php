
<div class="cadas">Consulta de Promoção</div>
<form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>promocao/cadastrar">
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
            Data Inicial
        </td>
        <td class="col_consulta">
            Data Final
        </td>
        <td class="col_consulta">
            Valor Desconto %
        </td>
        <td class="col_consulta">
            Opção 
        </td>
		
	</tr>
     <?php
			require_once('controllers/promocao_controller.php');
			
			$controllerPromocao = new promocao_controller();
			
			$rs=$controllerPromocao->ListarTodos();
			
			$cont=0;
		
			while ($cont < count($rs)){
		?>   
    <tr class="linha_consulta">
        <td class="col_consulta">
            <?php echo ($rs[$cont]->nomePromocao);?>
        </td>
        <td class="col_consulta">
             <?php echo ($rs[$cont]->dtInicial);?>
        </td>
        <td class="col_consulta">
            <?php echo ($rs[$cont]->dtFinal);?>
        </td>
        <td class="col_consulta">
             <?php echo ($rs[$cont]->valorDesconto);?>
        </td>
        <td class="col_consulta" >
           <a href="<?php echo(PROJECTDIR)?>promocao/cadastrar/<?php echo($rs[$cont]->codPromocao) ?>" class="link"> Editar </a>|
		   <a href="<?php echo(PROJECTDIR)?>promocao/deletar/<?php echo($rs[$cont]->codPromocao) ?>" class="link">Excluir </a>
        </td>
        
    </tr>
	
	<?php 
                
            $cont++; 
            
            
            }
	?>
    
</table>