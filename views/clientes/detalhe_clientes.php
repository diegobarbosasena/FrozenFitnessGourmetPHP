<form  name="frmconsulta" method="post" action="../../prato/index">
        <input class="btnVoltar" name="btnconsulta" type="submit" value="Voltar" />
        
</form>
<div class="cadas">Detalhes</div>
<table class="tbl_consulta_dtl">
    
     
		<?php
			require_once('controllers/clientes_controller.php');
			
			$controllerClientes = new clientes_controller();
			
			$rs=$controllerClientes->buscar($_GET['id']);

		?>
        
    
    <tr class="linha_consulta_dtl">
       
        <td class="col_consulta_dtl">
          Nome:
        </td>
        <td class="col_consulta_dtl">
           <?php echo ($rs->nomeCliente);?>  
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            CPF: 
        </td>
        <td class="col_consulta_dtl">
           <?php echo ($rs->cpfCliente);?>  
        </td>
     </tr>
      <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Data de Nascimento: 
        </td>
        <td class="col_consulta_dtl">
       
           <?php echo ($rs->dtNascCliente);?>  
        
        </td>
     </tr>
      <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Peso: 
        </td>
        <td class="col_consulta_dtl">
       
           <?php echo ($rs->peso);?>  
        
        </td>
     </tr>
      <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Altura: 
        </td>
        <td class="col_consulta_dtl">
       
           <?php echo ($rs->altura);?>  
        
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Telefone: 
        </td>
        <td class="col_consulta_dtl">
       
           <?php echo ($rs->telefoneCliente);?>  
        
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Celular: 
        </td>
        <td class="col_consulta_dtl">
           <?php echo ($rs->celularCliente);?>    
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Email: 
        </td>
        <td class="col_consulta_dtl">
          <?php echo ($rs->emailCliente);?>    
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Objetivo: 
        </td>
        <td class="col_consulta_dtl">
          <?php echo ($rs->nomeObjetovo);?>    
        </td>
     </tr>

		<?php 
                
           
    ?>

</table>