<form  name="frmconsulta" method="post" action="../../sobre/index">
        <input class="btnVoltar" name="btnconsulta" type="submit" value="Voltar" />
        
</form>
<div class="cadas">Detalhes</div>
<table class="tbl_consulta_dtl">
    
     
		<?php
			require_once('controllers/sobre_controller.php');
			
			$controllerSobre = new sobre_controller();
			
			$rs=$controllerSobre->buscar($_GET['id']);

		?>
        
    
    <tr class="linha_consulta_dtl">
       
        <td class="col_consulta_dtl">
          Titulo:
        </td>
        <td class="col_consulta_dtl">
            
           <?php echo ($rs->tituloSobreLoja);?>  
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Imagem Principal: 
        </td>
        <td class="col_consulta_dtl">
            <img src="<?php  echo (PROJECTDIR.$rs->imgSobreLoja); ?>" class="imgTable" >
           
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Imagem 1 : 
        </td>
        <td class="col_consulta_dtl">
       	
           <?php echo ($rs->imgSobreLoja1);?>  
        
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Imagem 2: 
        </td>
        <td class="col_consulta_dtl">
           <?php echo ($rs->imgSobreLoja2);?>    
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            imagem 3: 
        </td>
        <td class="col_consulta_dtl">
          <?php echo ($rs->imgSobreLoja3);?>    
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
        
            Historia: 
        </td>
        <td class="col_consulta_dtl">
            <div class="overflow">
                <?php echo ($rs->historiaSobreLoja);?>
            </div>
        </td>
     </tr>
   

    
        
		<?php 
                
           
    ?>

</table>