<?php
	
	$_GET ['Categoria'] = "";
	
?>


<div class="cadas">Consultar Categoria Prato</div>

 
  <form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>categoriaPrato/cadastrar">
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
            Opção 
        </td>
		
    <?php
		require_once('controllers/categoria_controller.php');
		
		$controllerCategoria = new categoria_controller();
				
		$rs=$controllerCategoria->listarTodos();

		$cont=0;
		
		while ($cont < count($rs)){
            
            if($rs[$cont]->nomeCategoriaMateria != ""){   
	?>    
        
    <tr class="linha_consulta">
        
        <td class="col_consulta">
           <?php 
					echo($rs[$cont]->nomeCategoriaMateria);
			?>
        </td>
        
        <td class="col_consulta">
            <a href="<?php echo(PROJECTDIR)?>categoria/cadastrar/<?php echo($rs[$cont]->codCategoriaMateria) ?>" class="link"> Editar</a> | 
            <a href="<?php echo(PROJECTDIR)?>categoria/deletar/<?php echo($rs[$cont]->codCategoriaMateria) ?>" class="link">Excluir </a> 
        </td>
		
		<?php 
            }else{
                ?>
        
                <div class="cadas"> Vazio </div>
        <?php
            }
			$cont++;
		}
		
		
		?>
        
    </tr>

</table>