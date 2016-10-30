
<div class="cadas">Sobre a Loja</div>
<form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>sobre/cadastrar">
    <input class="btnConsulta" name="btnconsulta" type="submit" value="Cadastrar Dados" />
</form>

<form name="FrmPesquisa" method="post" action="home.php">
    
    <input class="pesquisarCms" type="text" name="lala" value="" placeholder="Pesquisar...">
    <input class="btnPesquisaCms" type="submit" name="btnPesquisa" value=""/>
</form> 
<table class="tbl_consulta">
    <tr class="linha_consulta">
        <td class="col_consulta">
            Título 
        </td>
        <td class="col_consulta">
            História
        </td>
        
        <td class="col_consulta">
            Opção 
        </td>
         <?php
		
			foreach ($lista as $sobreLoja){
    ?>   

    <tr class="linha_consulta">
        <td class="col_consulta">
            <?php echo ($sobreLoja->tituloSobreLoja);?>
        </td>
        <td class="col_consulta">
            <div class="overflow">
            <?php echo ($sobreLoja->historiaSobreLoja);?>
            </div>
        </td>
        
        <td class="col_consulta" >
            <a href="<?php echo(PROJECTDIR)?>sobre/cadastrar/<?php echo($sobreLoja->codSobreLoja) ?>" class="link"> Editar </a>|
			<a href="<?php echo(PROJECTDIR)?>sobre/deletar/<?php echo($sobreLoja->codSobreLoja) ?>" class="link">Excluir </a>|<a href="<?php echo(PROJECTDIR)?>sobre/detalhe/<?php echo($sobreLoja->codSobreLoja) ?>" class="link">Detalhes </a>
        </td>
        
    </tr>
    
    <?php 
                           
            }
	?>

</table>