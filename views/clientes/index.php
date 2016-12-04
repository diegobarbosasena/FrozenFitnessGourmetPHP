

<div class="cadas">Consulta de Clientes</div>

  
<form name="FrmPesquisa" method="post" action="<?php echo(PROJECTDIR)?>clientesCms/index">
    
    <input class="pesquisarCms" type="text" name="txtPesquisa" value="<?php echo($pesquisa)?>" placeholder="Pesquisar...">
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
		
        foreach($listaClientes as $cliente){
	
	?> 
        
    <tr class="linha_consulta">
        <td class="col_consulta">
        <?php echo($cliente->nomeCliente); ?>
            
        </td>
        <td class="col_consulta">
             <?php echo($cliente->cpfCliente); ?>
        </td>
        <td class="col_consulta">
            <?php echo($cliente->telefoneCliente); ?>
        </td>
        <td class="col_consulta">
             <?php echo($cliente->celularCliente); ?>
        </td>
         <td class="col_consulta">
           <?php echo($cliente->emailCliente); ?>
        </td>
         <td class="col_consulta">
            <?php echo($cliente->objetivo->nomeObjetivo); ?>
        </td>
         <td class="col_consulta">
            <a href="<?php echo(PROJECTDIR)?>clientesCms/detalhe/<?php echo($cliente->codCliente) ?>" class="link">Detalhes </a>
        </td>
        <?php 
		
		
		}
	?>
      </tr>
   

</table>