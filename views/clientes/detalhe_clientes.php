<form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>clientesCms/index">
        <input class="btnVoltar" name="btnconsulta" type="submit" value="Voltar" />
        
</form>
<div class="cadas">Detalhes</div>
<table class="tbl_consulta_dtl">
     
    <tr class="linha_consulta_dtl">
       
        <td class="col_consulta_dtl">
          Nome:
        </td>
        <td class="col_consulta_dtl">
           <?php echo ($cliente->nomeCliente);?>  
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            CPF: 
        </td>
        <td class="col_consulta_dtl">
           <?php echo ($cliente->cpfCliente);?>  
        </td>
     </tr>
      <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Data de Nascimento: 
        </td>
        <td class="col_consulta_dtl">
       
           <?php echo ($cliente->dtNascCliente);?>  
        
        </td>
     </tr>
      <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Peso: 
        </td>
        <td class="col_consulta_dtl">
       
           <?php echo ($cliente->peso);?>  
        
        </td>
     </tr>
      <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Altura: 
        </td>
        <td class="col_consulta_dtl">
       
           <?php echo ($cliente->altura);?>  
        
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Telefone: 
        </td>
        <td class="col_consulta_dtl">
       
           <?php echo ($cliente->telefoneCliente);?>  
        
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Celular: 
        </td>
        <td class="col_consulta_dtl">
           <?php echo ($cliente->celularCliente);?>    
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Email: 
        </td>
        <td class="col_consulta_dtl">
          <?php echo ($cliente->emailCliente);?>    
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Objetivo: 
        </td>
        <td class="col_consulta_dtl">
          <?php echo($cliente->objetivo->nomeObjetivo); ?>    
        </td>
     </tr>

</table>