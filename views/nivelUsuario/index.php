
<?php
	
	$_GET ['txtTipoUsuario'] = "";
	
?>


<div class="cadas">Consulta Tipo Usuario</div>

 <form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>tipoUsuario/cadastrar">
        <input class="btnConsulta" name="btnconsulta" type="submit" value="Cadastrar Dados" />
        
 </form>

<form name="FrmPesquisa" method="post" action="">
    
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
		require_once('controllers/tipoUsuario_controller.php');
		
		$controllerTipoUsuario = new tipoUsuario_controller();
				
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
            <a href="<?php echo(PROJECTDIR)?>tipoUsuario/cadastrar/<?php echo($rs[$cont]->codTipoUsuario) ?>" class="link"> Editar</a> | 
            <a href="<?php echo(PROJECTDIR)?>tipoUsuario/deletar/<?php echo($rs[$cont]->codTipoUsuario) ?>" class="link">Excluir </a> 
        </td>
		
		<?php 
            }else{
                ?>
        
                
        <?php
            }
			$cont++;
		}
		
		
		?>
        
    </tr>

</table>