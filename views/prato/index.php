<script>
    function deletarPrato(codPrato){
                             
        if(confirm("Deseja Excluir?")){
            
            location.href = "<?php echo(PROJECTDIR)?>prato/deletar/" + codPrato ;
        }
                         
                         
    }
</script>

<div class="cadas">Consulta de Pratos Prontos</div>

<form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>prato/cadastrar">
       <input class="btnConsulta" name="btnconsulta" type="submit" value="Cadastrar Dados" />
        
    </form>
	
<form name="FrmPesquisa" method="post" action="<?php echo(PROJECTDIR)?>prato/buscarNome">
    
    <input class="pesquisarCms" type="text" name="txtPesquisa" value="" placeholder="Pesquisar...">
    <input class="btnPesquisaCms" type="submit" name="btnPesquisa" value=""/>
</form> 
<table class="tbl_consulta">
    <tr class="linha_consulta">
		
        <td class="col_consulta">
            Nome 
        </td>
        <td class="col_consulta">
            Preço
        </td>
     
        <td class="col_consulta">
            Opção 
        </td>
		
		<?php
			require_once('controllers/prato_controller.php');
			
			$controllerPrato = new prato_controller();
			
			$rs=$controllerPrato->ListarTodos();
			
			$cont=0;
		
			while ($cont < count($rs)){
		?>
        
   
    <tr class="linha_consulta">
        <td class="col_consulta">
            <?php echo ($rs[$cont]->nomePrato);?>
        </td>
        <td class="col_consulta">
            <?php echo ($rs[$cont]->precoPrato);?>
        </td>

        <td class="col_consulta" >
            <a href="<?php echo(PROJECTDIR)?>prato/cadastrar/<?php echo($rs[$cont]->codPrato) ?>" class="link"> Editar </a>| <a href="#" class="link" onclick="deletarPrato(<?php echo($rs[$cont]->codPrato) ?>)">Excluir </a> | <a href="<?php echo(PROJECTDIR)?>prato/detalhe/<?php echo($rs[$cont]->codPrato) ?>" class="link">Detalhes </a>
        </td>
        
    </tr>
			<?php 
                
            $cont++; 
            
            
            }
    ?>
	
</table>