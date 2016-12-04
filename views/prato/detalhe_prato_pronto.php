<form  name="frmconsulta" method="post" action="../../prato/index">
        <input class="btnVoltar" name="btnconsulta" type="submit" value="Voltar" />
        
</form>
<div class="cadas">Detalhes</div>
<table class="tbl_consulta_dtl">
    
          
    
    <tr class="linha_consulta_dtl">
       
        <td class="col_consulta_dtl">
          Nome:
        </td>
        <td class="col_consulta_dtl">
          <?php  echo ($p->nomePrato); ?>
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Preço: 
        </td>
        <td class="col_consulta_dtl">
           <?php  echo ($p->precoPrato); ?>
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Descrição: 
        </td>
        <td class="col_consulta_dtl">
       	<div class="overflow" >
           <?php  echo ($p->descricaoPrato); ?>
        </div>
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Valor Energético: 
        </td>
        <td class="col_consulta_dtl">
           <?php  echo ($p->valorEnergetico); ?>
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Carboidrato: 
        </td>
        <td class="col_consulta_dtl">
            <?php  echo ($p->carboidrato); ?>  
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Proteina: 
        </td>
        <td class="col_consulta_dtl">
          <?php  echo ($p->proteina); ?>   
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Sódio: 
        </td>
        <td class="col_consulta_dtl">
          <?php  echo ($p->sodio); ?>   
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Gorduras: 
        </td>
        <td class="col_consulta_dtl">
          <?php  echo ($p->gorduras); ?>
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Imagem: 
        </td >
        <td  class="col_consulta_dtl">
           <img src="<?php  echo (PROJECTDIR.$p->imagemPrato); ?>" class="imgTable" >   
             
        </td>
     </tr>
	 
	  <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Categoria: 
        </td>
        <td class="col_consulta_dtl">
             <?php  echo ($p->nomeCategoriaPrato); ?>
        </td>
     </tr>
	 
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Caloria:
        </td>
        <td class="col_consulta_dtl">
           <?php  echo ($p->caloria); ?>
        </td>
     </tr>
	

</table>