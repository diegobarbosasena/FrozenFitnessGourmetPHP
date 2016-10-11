
<?php
	
	$_GET ['txtTipoUsuario'] = "";
	
?>


<div class="cadas">Consulta Categoria</div>

 <form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>nivelUsuario/cadastrar">
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
            Opção 
        </td>
		
    <?php
		require_once('controllers/tipoUsuario.php');
		
		$controllerTipoUsuario = new TipoUsuario_controller();
				
		$rs=$controllerTipoUsuario->listarTodos();

		$cont=0;
		
		while ($cont < count($rs)){
            
            if($rs[$cont]->nomeTipoUsuario != ""){   
	?>    
        
    <tr class="linha_consulta">
        
        <td class="col_consulta">
           <?php 
					echo($rs[$cont]->nomeTipoUsuario);
			?>
        </td>
        
        <td class="col_consulta">
            <a href="<?php echo(PROJECTDIR)?>categoria/cadastrar/<?php echo($rs[$cont]->codTipoUsuario) ?>" class="link"> Editar</a> | 
            <a href="<?php echo(PROJECTDIR)?>categoria/deletar/<?php echo($rs[$cont]->codTipoUsuario) ?>" class="link">Excluir </a> 
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