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
	
<form name="FrmPesquisa" method="post" action="<?php echo(PROJECTDIR)?>prato/index">
    
    <input class="pesquisarCms" type="text" name="txtPesquisa" value="<?php echo($pesquisa)?>" placeholder="Pesquisar...">
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
			            
    
            foreach ($listaPratos as $prato){			
		?>
        
   
    <tr class="linha_consulta">
        <td class="col_consulta">
            <?php echo ($prato->nomePrato);?>
        </td>
        <td class="col_consulta">
            <?php echo ($prato->precoPrato);?>
        </td>

        <td class="col_consulta" >
            <a href="<?php echo(PROJECTDIR)?>prato/cadastrar/<?php echo($prato->codPrato) ?>" class="link"> Editar </a>| <a href="#" class="link" onclick="deletarPrato(<?php echo($prato->codPrato) ?>)">Excluir </a> | <a href="<?php echo(PROJECTDIR)?>prato/detalhe/<?php echo($prato->codPrato) ?>" class="link">Detalhes </a>
        </td>
        
    </tr>
			<?php 
      
            
            
            }
    ?>
	
</table>