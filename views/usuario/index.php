<script>
    function deletarFuncionario(codFuncionarioLoja){
                             
        if(confirm("Deseja Excluir?")){
            
            location.href = "<?php echo(PROJECTDIR)?>funcionario/deletar/" + codFuncionarioLoja ;
        }
                         
                         
    }

    
</script>

<div class="cadas">Consulta de Usuarios</div>

    
<form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>funcionario/cadastrar">
        <input class="btnConsulta" name="btnconsulta" type="submit" value="Cadastrar Dados" />
</form>
<form name="FrmPesquisa" method="post" action="<?php echo(PROJECTDIR)?>funcionario/index">
    
    <input class="pesquisarCms" type="text" name="txtPesquisa" value="<?php echo($pesquisa)?>" placeholder="Pesquisar...">
    <input class="btnPesquisaCms" type="submit" name="btnPesquisa" value=""/>
</form> 


<table class="tbl_consulta">
    <tr class="linha_consulta">
        <td class="col_consulta">
            Nome 
        </td>
        <td class="col_consulta">
            CPF
        </td>
        <td class="col_consulta">
            Usuario
        </td>
        <td class="col_consulta">
            Tipo 
        </td>
        <td class="col_consulta">
            Opção 
        </td>
		
		
		<?php
			
			 foreach ($listaFuncionario as $funcionario){	
            
			
		?>
        
    <tr class="linha_consulta">
        <td class="col_consulta">
             <?php 
					echo($funcionario->nomeFuncionarioLoja);
			?>
        </td>
        <td class="col_consulta">
            <?php 
					echo($funcionario->cpfFuncionarioLoja);
			?>
        </td>
        <td class="col_consulta">
            <?php 
					echo($funcionario->usuarioFuncionario);
			?>
        </td>
        <td class="col_consulta">
            <?php 
					echo($funcionario->nomeTipoUsuario);
			?>
        </td>

        <td class="col_consulta" >
            <a href="<?php echo(PROJECTDIR)?>funcionario/cadastrar/<?php echo($funcionario->codFuncionarioLoja);?>" class="link"> Editar </a>|
            <a href="<?php echo(PROJECTDIR)?>funcionario/deletar/<?php echo($funcionario->codFuncionarioLoja);?>" class="link"> Excluir </a>
           <!-- <a href="#" class="link" onclick="deletarFuncionario(<?php //echo($funcionario->codFuncionarioLoja) ?>)">Excluir </a> -->
        </td>
		
		<?php
            
				
			}
			
		
		?>
        
    </tr>

</table>