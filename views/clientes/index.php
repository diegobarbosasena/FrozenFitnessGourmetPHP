  

<div class="cadas">Consulta de Clientes</div>

  
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
           Telefone
        </td>
        <td class="col_consulta">
            Celular 
        </td>
        <td class="col_consulta">
            Email 
        </td>
        <td class="col_consulta">
            Objetivo 
        </td>
         <td class="col_consulta">
            Opções 
        </td>
    </tr>
    <?php
		require_once('controllers/clientes_controller.php');
		
		$controllerClientes = new clientes_controller();
				
		$rs=$controllerClientes->listarTodos();
		
		$cont=0;
		
		while ($cont < count($rs)){
	
	?> 
        
    <tr class="linha_consulta">
        <td class="col_consulta">
        <?php echo($rs[$cont]->nomeCliente); ?>
            
        </td>
        <td class="col_consulta">
             <?php echo($rs[$cont]->cpfCliente); ?>
        </td>
        <td class="col_consulta">
            <?php echo($rs[$cont]->telefoneCliente); ?>
        </td>
        <td class="col_consulta">
             <?php echo($rs[$cont]->celularCliente); ?>
        </td>
         <td class="col_consulta">
           <?php echo($rs[$cont]->emailCliente); ?>
        </td>
         <td class="col_consulta">
            <?php echo($rs[$cont]->nomeObjetivo); ?>
        </td>
         <td class="col_consulta">
            <a href="<?php echo(PROJECTDIR)?>clientes/detalhe/<?php echo($rs[$cont]->codCliente) ?>" class="link">Detalhes </a>
        </td>
        <?php 
		
		$cont++;
		}
	?>
      </tr>
   

</table>