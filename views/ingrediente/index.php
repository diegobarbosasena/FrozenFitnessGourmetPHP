<?php
	
	$_GET ['txtIgrediente'] = "";
	
?>


<script>
    function deletarIngrediente(codMateria){
                             
        if(confirm("Deseja Excluir?")){
            
            location.href = "<?php echo(PROJECTDIR)?>ingrediente/deletar/" + codMateria;
        }
                         
                         
    }
    
    </script>
<div class="cadas">Consultar Igredientes </div>


<form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>ingrediente/cadastrar">
    <input class="btnConsulta" name="btnconsulta" type="submit" value="Cadastrar Dados" />
</form>

<form name="FrmPesquisa" method="post" action="<?php echo(PROJECTDIR)?>ingrediente/index">
    
    <input class="pesquisarCms" type="text" name="txtPesquisa" value="<?php echo($pesquisa)?>" placeholder="Pesquisar...">
    <input class="btnPesquisaCms" type="submit" name="btnPesquisa" value=""/>
</form> 


<table class="tbl_consulta">
    <tr class="linha_consulta">
        <td class="col_consulta">
            Nome
        </td>
        
        <td class="col_consulta">
           Categoria
        </td>
        <td class="col_consulta">
           Descrição
        </td>
		<td class="col_consulta">
           Preço
        </td>
        <td class="col_consulta">
            Opções
        </td>
        <?php

			 foreach ($listaIngrediente as $ingrediente){	
		?>
        

    </tr>
    <tr class="linha_consulta">
        <td class="col_consulta">
            <?php echo ($ingrediente->nomeMateria);?>
        </td>
       
        <td class="col_consulta">
           <?php echo ($ingrediente->nomeCategoriaMateria);?>
        </td>
        <td class="col_consulta">
            <div class="overflow" >
                <?php echo ($ingrediente->descricaoMateria);?>
            <div class="overflow" >
        </td>
		 <td class="col_consulta">
           <?php echo ($ingrediente->precoMateria);?>
        </td>
        <td class="col_consulta" >
             <a href="<?php echo(PROJECTDIR)?>ingrediente/cadastrar/<?php echo($ingrediente->codMateria)?>" class="link"> Editar </a>|
            <a href="#" class="link" onclick="deletarIngrediente(<?php echo($ingrediente->codMateria)?>)">Excluir </a> 
                </td>
    </tr>
    <?php 

            
            }
    ?>

</table>