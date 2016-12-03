<script>
    function deletarPromocao(codPromocao){
                             
        if(confirm("Deseja Excluir?")){
            
            location.href = "<?php echo(PROJECTDIR)?>promocao/deletar/" + codPromocao ;
        }
                         
                         
    }

    
</script>
<div class="cadas">Consulta de Promoção</div>
<form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>promocao/cadastrar">
    <input class="btnConsulta" name="btnconsulta" type="submit" value="Cadastrar Dados" />
</form>


<form name="FrmPesquisa" method="post" action="<?php echo(PROJECTDIR)?>promocao/index">
    
    <input class="pesquisarCms" type="text" name="txtPesquisa" value="<?php echo($pesquisa)?>" placeholder="Pesquisar...">
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
			foreach ($listaPromocao as $promocao){	
		?>   
    <tr class="linha_consulta">
        <td class="col_consulta">
            <?php echo ($promocao->nomePromocao);?>
        </td>
        <td class="col_consulta">
             <?php echo ($promocao->dtInicial);?>
        </td>
        <td class="col_consulta">
            <?php echo ($promocao->dtFinal);?>
        </td>
        <td class="col_consulta">
             <?php echo ($promocao->valorDesconto);?>
        </td>
        <td class="col_consulta" >
           <a href="<?php echo(PROJECTDIR)?>promocao/cadastrar/<?php echo($promocao->codPromocao) ?>" class="link"> Editar </a>|
		   <a href="<?php echo(PROJECTDIR)?>promocao/deletar/<?php echo($rs[$cont]->codPromocao) ?>" class="link">Excluir </a>
             <a href="#" class="link" onclick="deletarPromocao(<?php echo($promocao->codPromocao) ?>)">Excluir </a> 
        </td>
        
    </tr>
	
	<?php 
                

            }
	?>
    
</table>