<script>
    function deletarSobre(codSobreLoja){
                             
        if(confirm("Deseja Excluir?")){
            
            location.href = "<?php echo(PROJECTDIR)?>sobre/deletar/" + codSobreLoja ;
        }
                         
                         
    }

    
</script>

<div class="cadas">Sobre a Loja</div>
<form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>sobre/cadastrar">
    <input class="btnConsulta" name="btnconsulta" type="submit" value="Cadastrar Dados" />
</form>

<form name="FrmPesquisa" method="post" action="<?php echo(PROJECTDIR)?>sobre/index">
    
    <input class="pesquisarCms" type="text" name="txtPesquisa" value="<?php echo($pesquisa)?>" placeholder="Pesquisar...">
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
		
			foreach ($listaSobre as $sobreLoja){
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
			
            <a href="#" class="link" onclick="deletarSobre(<?php echo($sobreLoja->codSobreLoja) ?>)">Excluir </a> |
            <a href="<?php echo(PROJECTDIR)?>sobre/detalhe/<?php echo($sobreLoja->codSobreLoja) ?>" class="link">Detalhes </a>
        </td>
        
    </tr>
    
    <?php 
                           
            }
	?>

</table>