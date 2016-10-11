
<div class="cadas">Consulta de Pratos Prontos</div>

<form  name="frmconsulta" method="post" action="../prato/cadastrar">
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
            Preço
        </td>
        <td class="col_consulta">
            Dt. Fabricação 
        </td>
        <td class="col_consulta">
            Dt. Validade 
        </td>
        <td class="col_consulta">
            Opção 
        </td>
		
		<?php
			require_once('controllers/prato_controller.php');
			
			$controllerPrato = new prato_controller();
			
			$rs=$controllerPrato->ListarTodos();
			
			$cont=0;
		
			//while ($cont < count($rs)){
		?>
        
   
    <tr class="linha_consulta">
        <td class="col_consulta">
            <?php //echo ($rs[$cont]->nomePrato);?>
        </td>
        <td class="col_consulta">
            <?php //echo ($rs[$cont]->preco);?>
        </td>
        <td class="col_consulta">
            <?php //echo ($rs[$cont]->);?>
        </td>
        <td class="col_consulta">
           
        </td>
        <td class="col_consulta" >
            <a href="" class="link"> Editar </a>| <a href="" class="link">Excluir </a> <a href="../cms/DetalhePratoPronto" class="link">Detalhes </a>
        </td>
        
    </tr>
			<?php //}?>
</table>