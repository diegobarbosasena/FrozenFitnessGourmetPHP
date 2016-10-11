

<div class="cadas">Consulta Objetivos</div>
 <form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>objetivo/cadastrar">
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
            Imagem
        </td>
        <td class="col_consulta">
           Descrição
        </td>
        <td class="col_consulta">
            Opções
        </td>
    </tr>
    <?php
		require_once('controllers/objetivo_controller.php');
		
		$controllerObjetivo = new objetivo_controller();
				
		$rs=$controllerObjetivo->listarTodos();
		
		$cont=0;
		
		while ($cont < count($rs)){
	
	?>
    <tr class="linha_consulta">
        <td class="col_consulta">
           <?php echo($rs[$cont]->nomeCategoriaPrato); ?>
            
        </td>
        <td class="col_consulta">
            <?php echo($rs[$cont]->imagemCategoria); ?>
        </td>
        <td class="descricao">
         <?php echo($rs[$cont]->descricaoCategoria); ?>
        </td>
        <td class="col_consulta" >
           <a href="<?php echo(PROJECTDIR)?>objetivo/cadastrar/<?php echo($rs[$cont]->codCategoriaPrato) ?>" class="link"> Editar </a>| <a href="<?php echo(PROJECTDIR)?>objetivo/deletar/<?php echo($rs[$cont]->codCategoriaPrato) ?>" class="link">Excluir </a>
        </td>
   
    <?php 
		
		$cont++;
		}
	?>

</table>