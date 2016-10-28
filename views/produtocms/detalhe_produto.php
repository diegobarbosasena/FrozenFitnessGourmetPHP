<form  name="frmconsulta" method="post" action="../cms/ConsultaProduto">
        <input class="btnVoltar" name="btnvoltar" type="submit" value="Voltar" />
        
    </form>
<div class="cadas">Detalhes</div>
<table class="tbl_consulta_dtl">
    <tr class="linha_consulta_dtl">
	
		<?php
			require_once('controllers/prato_controller.php');
			
			$controllerProduto = new prato_controller();
			
			$rs=$controllerProduto->buscar($_GET['id']);

		?>
		
        <td class="col_consulta_dtl">
            Nome: 
        </td>
        <td class="col_consulta_dtl">
           <?php echo ($rs->nomeProduto);?>  
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Preço: 
        </td>
        <td class="col_consulta_dtl">
           <?php echo ($rs->precoProduto);?>  
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Caloria: 
        </td>
        <td class="col_consulta_dtl">
           <?php echo ($rs->caloriaProduto);?>  
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Valor Energético: 
        </td>
        <td class="col_consulta_dtl">
           <?php echo ($rs->valorEnergeticoProduto);?>  
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Carboidrato: 
        </td>
        <td class="col_consulta_dtl">
           <?php echo ($rs->carboidratoProduto);?>  
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Proteina: 
        </td>
        <td class="col_consulta_dtl">
           <?php echo ($rs->proteinaProduto);?>    
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Sódio: 
        </td>
        <td class="col_consulta_dtl">
           <?php echo ($rs->sodioProduto);?>  
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Gordura: 
        </td>
        <td class="col_consulta_dtl">
           <?php echo ($rs->gordurasProduto);?>   
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Data Frabricação: 
        </td>
        <td class="col_consulta_dtl">
           <?php echo ($rs->dtFabricacaoProduto);?>  
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Data Validade: 
        </td>
        <td class="col_consulta_dtl">
           <?php echo ($rs->dtValidadeProduto);?>   
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Imagem: 
        </td>
        <td class="col_consulta_dtl">
           <?php echo ($rs->imagemProduto);?>  
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Descrição:
        </td>
        <td class="col_consulta_dtl">
          <div class="overflow" >
           <?php echo ($rs->descricaoProduto);?>  
          </div> 
        </td>
     </tr>


</table>