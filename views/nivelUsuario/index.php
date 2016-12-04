
<?php
	
	$_GET ['txtTipoUsuario'] = "";
	
?>

<script>
    function deletarTipoUsuario(codTipoUsuario){
                             
        if(confirm("Deseja Excluir?")){
            
            location.href = "<?php echo(PROJECTDIR)?>tipoUsuario/deletar/" + codTipoUsuario ;
        }
                         
                         
    }
</script>
<div class="cadas">Consulta Tipo Usuario</div>

 <form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>tipoUsuario/cadastrar">
        <input class="btnConsulta" name="btnconsulta" type="submit" value="Cadastrar Dados" />
        
 </form>

<form name="FrmPesquisa" method="post" action="<?php echo(PROJECTDIR)?>tipoUsuario/index">
    
    <input class="pesquisarCms" type="text" name="txtPesquisa" value="<?php echo($pesquisa)?>" placeholder="Pesquisar...">
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
		 foreach ($listaTipoUsuario as $tipoUsuario){	
	?>    
        
    <tr class="linha_consulta">
        
        <td class="col_consulta">
           <?php 
					echo($tipoUsuario->nomeTipoUsuario);
			?>
        </td>
        
        <td class="col_consulta">
            <a href="<?php echo(PROJECTDIR)?>tipoUsuario/cadastrar/<?php echo($tipoUsuario->codTipoUsuario) ?>" class="link"> Editar</a> | 
            <a href="#" class="link" onclick="deletarTipoUsuario(<?php echo($tipoUsuario->codTipoUsuario) ?>)">Excluir </a> 
        </td>
		
		<?php 
           
		}
		
		
		?>
        
    </tr>

</table>