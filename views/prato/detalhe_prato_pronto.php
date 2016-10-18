<form  name="frmconsulta" method="post" action="../../prato/index">
        <input class="btnVoltar" name="btnconsulta" type="submit" value="Voltar" />
        
</form>
<div class="cadas">Detalhes</div>
<table class="tbl_consulta_dtl">
    
     
		<?php
			require_once('controllers/prato_controller.php');
			
			$controllerPrato = new prato_controller();
			
			$rs=$controllerPrato->buscar($_GET['id']);

		?>
        
    
    <tr class="linha_consulta_dtl">
       
        <td class="col_consulta_dtl">
          Nome:
        </td>
        <td class="col_consulta_dtl">
           <?php echo ($rs->nomePrato);?>  
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Preço: 
        </td>
        <td class="col_consulta_dtl">
           <?php echo ($rs->precoPrato);?>  
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Descrição: 
        </td>
        <td class="col_consulta_dtl">
           <?php echo ($rs->descricaoPrato);?>  
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Valor Energético: 
        </td>
        <td class="col_consulta_dtl">
           <?php echo ($rs->valorEnergetico);?>    
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Carboidrato: 
        </td>
        <td class="col_consulta_dtl">
          <?php echo ($rs->carboidrato);?>    
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Proteina: 
        </td>
        <td class="col_consulta_dtl">
          <?php echo ($rs->proteina);?>    
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Sódio: 
        </td>
        <td class="col_consulta_dtl">
          <?php echo ($rs->sodio);?>    
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Gorduras: 
        </td>
        <td class="col_consulta_dtl">
          <?php echo ($rs->gorduras);?>    
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Data Frabricação: 
        </td>
        <td class="col_consulta_dtl">
          <?php echo ($rs->dtFabricacao);?>    
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Data Validade:
        </td>
        <td class="col_consulta_dtl">
          <?php echo ($rs->dtValidade);?>    
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Imagem: 
        </td>
        <td class="col_consulta_dtl">
          <?php echo ($rs->imagemPrato);?>    
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Caloria:
        </td>
        <td class="col_consulta_dtl">
          <?php echo ($rs->caloria);?>    
        </td>
     </tr>
		<?php 
                
           
    ?>

</table>