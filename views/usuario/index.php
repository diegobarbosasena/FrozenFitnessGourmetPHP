
<div class="cadas">Consulta de Usuarios</div>

    
<form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>funcionario/cadastrar">
        <input class="btnConsulta" name="btnconsulta" type="submit" value="Cadastrar Dados" />
</form>
<form>
    <input class="pesquisarCms" type="text" name="lala" value="" placeholder="Pesquisar...">
    <input class="btnPesquisaCms" type="submit" name="btnPesquisa" value=""/>
</form>
<form name="FrmUsuario" method="post" action="">
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
			
			require_once('controllers/funcionario_controller.php');
			
			$controllerFuncionario = new funcionario_controller();
					
			$rs=$controllerFuncionario->listarTodos();

			$cont=0;
			
			while ($cont < count($rs)){
            
			
		?>
        
    <tr class="linha_consulta">
	
        <td class="col_consulta">
             <?php 
					echo($rs[$cont]->nomeFuncionarioLoja);
			?>
        </td>
        <td class="col_consulta">
            <?php 
					echo($rs[$cont]->cpfFuncionarioLoja);
			?>
        </td>
        <td class="col_consulta">
            <?php 
					echo($rs[$cont]->usuarioFuncionario);
			?>
        </td>
        <td class="col_consulta">
            <?php 
					echo($rs[$cont]->nomeTipoUsuario);
			?>
        </td>
        <td class="col_consulta" >
            <a href="<?php echo(PROJECTDIR)?>funcionario/cadastrar/<?php echo($rs[$cont]->codFuncionarioLoja);?>" class="link"> Editar </a>| <a href="<?php echo(PROJECTDIR)?>funcionario/deletar/<?php echo($rs[$cont]->codFuncionarioLoja);?>" class="link">Excluir </a> 
        </td>
		
		<?php
            
				$cont++;
			}
			
		
		?>
        
    </tr>

</table>