
<div class="cadas">Consulta Categoria</div>
<table class="tbl_consulta">
    <tr class="linha_consulta">
        <td class="col_consulta">
            Nome 
        </td>
      
        <td class="col_consulta">
            Opção 
        </td>
		
		
    <?php
		require_once('controllers/categoria_controller.php');
		
		$controllerCategoria = new categoria_controller();
				
		$rs=$controllerCategoria->listarTodos();
		
		$cont=0;
		
		while ($cont < count($rs)){
	
	?>
    
    <tr class="linha_consulta">
        
        <td class="col_consulta">
           <?php echo($rs[$cont]->nomeCategoriaMateria); ?>
        </td>
        <td class="col_consulta" >
            <a href="../categoria/atualizar" class="link"> Editar </a>| <a href="../categoria/deletar/<?php echo($rs[$cont]->codCategoriaMateria) ?>" class="link">Excluir </a> 
        </td>
		
		<?php 
		
			$cont++;
		}
		?>
        
    </tr>

</table>