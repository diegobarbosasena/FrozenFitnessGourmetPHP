
<?php 
	
	$nome = "";
?>
<div class="cadas">Cadastrar Objetivos </div>

    <form  name="frmconsulta" method="post" action="../cms/ConsultaObjetivo">
        <input class="btnConsulta" name="btnconsulta" type="submit" value="Consultar " />
        
    </form>

        <form class="frm" name="frmprodutos" method="post" action="../objetivo/<?php echo($acao)?>">
            
            <table>
                  
                  <tr>
                    <td class="campo_frm">Nome:</td>
                    <td><input class="caixa_frm" name="txtNomeObjetivo" type="text"   value="<?php echo($nome)?>"    /></td>
                </tr>
                  <tr>
                    <td class="campo_frm">Imagem Produto:</td>
                    <td><input  name="imgproduto" type="file" value=""  /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Descrição:</td>
                    <td><textarea class="campo_desc" name="txtDescricaoObjetivo" cols="35" rows="8" ></textarea></td> 
                  </tr>  

                  <tr>
                      
                    <td></td>
                    <td><input class="btnSalvar" name="btnsalvar" type="submit" value="Salvar" /></td>
                    
                  </tr>
                
                </table>
            
            </form>