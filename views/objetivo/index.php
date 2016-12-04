<script>
    function deletarObjetivo(codObjetivo){
                             
        if(confirm("Deseja Excluir?")){
            
            location.href = "<?php echo(PROJECTDIR)?>objetivo/deletar/" + codObjetivo ;
        }
                         
                         
    }

    
</script>


<div class="cadas">Consulta Objetivos</div>
 <form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>objetivo/cadastrar">
        <input class="btnConsulta" name="btnconsulta" type="submit" value="Cadastrar Dados" />
        
 </form>
<form name="FrmPesquisa" method="post" action="<?php echo(PROJECTDIR)?>objetivo/index">
    
    <input class="pesquisarCms" type="text" name="txtPesquisa" value="<?php echo($pesquisa)?>" placeholder="Pesquisar...">
    <input class="btnPesquisaCms" type="submit" name="btnPesquisa" value=""/>
</form> 
<table class="tbl_consulta">
    <tr class="linha_consulta">
        <td class="col_consulta">
            Objetivo
        </td>
        <td class="col_consulta">
            Descricao
        </td>
        <td class="col_consulta">
            Opções
        </td>
    </tr>
    <?php
		foreach ($listaObjetivo as $objetivo){	
	
	?>
    <tr class="linha_consulta">
        <td class="col_consulta">
           <?php echo($objetivo->nomeObjetivo); ?>
            
        </td>
       
        <td class="descricao">
        <div class="overflow" >
         <?php echo($objetivo->descricaoObjetivo); ?>
        </div>
        </td>
        <td class="col_consulta" >
           <a href="<?php echo(PROJECTDIR)?>objetivo/cadastrar/<?php echo($rs[$cont]->codObjetivo) ?>" class="link"> Editar </a>| 
            <a href="#" class="link" onclick="deletarObjetivo(<?php echo($objetivo->codObjetivo) ?>)">Excluir </a> 
        </td>
   
    <?php 
        }
		
	?>
	</tr>
</table>