
<script>
    function deletarParceiro(codCategoriaPrato){
                             
        if(confirm("Deseja Excluir?")){
            
            location.href = "<?php echo(PROJECTDIR)?>parceiro/deletar/" + codParceiro ;
        }
                         
                         
    }

    
</script>


<div class="cadas">Consulta de Parceiros</div>
<form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>parceiro/cadastrar">

    <input class="btnConsulta" name="btnconsulta" type="submit" value="Cadastrar Dados" />
</form>

<form name="FrmPesquisa" method="post" action="<?php echo(PROJECTDIR)?>parceiro/index">
    
    <input class="pesquisarCms" type="text" name="txtPesquisa" value="<?php echo($pesquisa)?>" placeholder="Pesquisar...">
    <input class="btnPesquisaCms" type="submit" name="btnPesquisa" value=""/>
</form> 
    
<table class="tbl_consulta">
    <tr class="linha_consulta">
        <td class="col_consulta">
            Nome 
        </td>
        <td class="col_consulta">
            Telefone
        </td>
        <td class="col_consulta">
            Email 
        </td>
        <td class="col_consulta">
            Site 
        </td>
        <td class="col_consulta">
            Opção 
        </td>
        <?php
								
			foreach ($listaParceiros as $parceiro){
		?>  
    <tr class="linha_consulta">
		 
                         
        <td class="col_consulta">
            <?php echo($parceiro->nomeParceiro); ?>
        </td>
        <td class="col_consulta">
             <?php echo($parceiro->telefoneParceiro); ?>
        </td>
        <td class="col_consulta">
             <?php echo($parceiro->emailParceiro); ?>
        </td>
        <td class="col_consulta">
            <?php echo($parceiro->siteParceiro); ?>
        </td>
        <td class="col_consulta" >
            <a href="<?php echo(PROJECTDIR)?>parceiro/cadastrar/<?php echo($parceiro->codParceiro); ?>" class="link"> Editar </a>|
            <a href="#" class="link" onclick="deletarParceiro(<?php echo($parceiro->codParceiro) ?>)">Excluir </a> 
            <a href="<?php echo(PROJECTDIR)?>parceiro/detalhe/<?php echo($parceiro->codParceiro); ?>" class="link">Detalhes </a>
        </td>
		
    </tr>
		<?php
                            
			}

		?>
</table>