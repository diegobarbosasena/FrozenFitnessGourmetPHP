<form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>parceiro/index">
        <input class="btnVoltar" name="btnvoltar" type="submit" value="Voltar" />
        
</form>
<div class="cadas">Detalhes</div>
<table class="tbl_consulta_dtl">
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Nome: 
        </td>
        <td class="col_consulta_dtl">
          <?php echo($parceiro->nomeParceiro); ?>  
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            CNPJ: 
        </td>
        <td class="col_consulta_dtl">
          <?php echo($parceiro->cnpjParceiro); ?>  
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Imagem: 
        </td>
        <td class="col_consulta_dtl">
            <img src="<?php  echo (PROJECTDIR.$parceiro->imagemParceiro); ?>" class="imgTable" >
           
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Site: 
        </td>
        <td class="col_consulta_dtl">
          <?php echo($parceiro->siteParceiro); ?>  
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Telefone: 
        </td>
        <td class="col_consulta_dtl">
          <?php echo($parceiro->telefoneParceiro); ?>  
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
           Email: 
        </td>
        <td class="col_consulta_dtl">
          <?php echo($parceiro->emailParceiro); ?>  
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Logradouro: 
        </td>
        <td class="col_consulta_dtl">
          <?php echo($parceiro->endereco->logradouro); ?>  
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Cidade: 
        </td>
        <td class="col_consulta_dtl">
          <?php echo($parceiro->endereco->cidade->nomeCidade); ?>    
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Estado: 
        </td>
        <td class="col_consulta_dtl">
          <?php echo($parceiro->endereco->cidade->estado->nomeEstado); ?>    
        </td>
        
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            CEP: 
        </td>
        <td class="col_consulta_dtl">
          <?php echo($parceiro->endereco->cep); ?>    
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Nº: 
        </td>
        <td class="col_consulta_dtl">
           <?php echo($parceiro->endereco->numero); ?>      
        </td>
     </tr>
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Bairro: 
        </td>
        <td class="col_consulta_dtl">
           <?php echo($parceiro->endereco->bairro); ?>      
        </td>
        
     </tr>
    
    <tr class="linha_consulta_dtl">
        <td class="col_consulta_dtl">
            Complemento: 
        </td>
        <td class="col_consulta_dtl">
            <div class="overflow">
           <?php echo($parceiro->endereco->complemento); ?>   
            </div>
        </td>
     </tr>


</table>