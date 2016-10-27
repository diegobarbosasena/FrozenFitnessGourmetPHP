
<div class="cadas">Consultar Igredientes</div>


<form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>ingrediente/cadastrar">
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
			require_once('controllers/ingrediente_controller.php');
			
			$controllerIngrediente = new ingrediente_controller();
			
			$rs=$controllerIngrediente->ListarTodos();
			
			$cont=0;
		
			while ($cont < count($rs)){
		?>
        

    </tr>
    <tr class="linha_consulta">
        <td class="col_consulta">
            <?php echo ($rs[$cont]->nomeMateria);?>
        </td>
       
        <td class="col_consulta">
           <?php echo ($rs[$cont]->nomeCategoriaMateria);?>
        </td>
        <td class="col_consulta">
          <?php echo ($rs[$cont]->descricaoMateria);?>
        </td>
		 <td class="col_consulta">
           <?php echo ($rs[$cont]->precoMateria);?>
        </td>
        <td class="col_consulta" >
             <a href="<?php echo(PROJECTDIR)?>ingrediente/cadastrar/<?php echo($rs[$cont]->codMateria)?>" class="link"> Editar </a>|<a href="<?php echo(PROJECTDIR)?>ingrediente/deletar/<?php echo($rs[$cont]->codMateria)?>" class="link">Excluir </a>        </td>
    </tr>
    <?php 
                
            $cont++; 
            
            
            }
    ?>

</table>