
<div class="cadas">Cadastrar Objetivos </div>

   <form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>objetivo/index">
        <input class="btnVoltar" name="btnvoltar" type="submit" value="Voltar" />
        
</form>
        <form class="frm" name="frmprodutos" method="post" action="../objetivo/inserir">
            
            <table>
                  
                  <tr>
                    <td class="campo_frm">Nome:</td>
                    <td><input class="caixa_frm" name="txtNomeObjetivo" type="text"/></td>
                </tr>
                  <tr>
                    <td class="campo_frm">Imagem Produto:</td>
                    <td><input  name="objetivoFile" type="file" value=""  /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Descrição:</td>
                    <td><textarea class="campo_desc" name="txtDescricaoObjetivo"   cols="35" rows="8" ></textarea></td> 
                  </tr>  

                  <tr>
                      
                    <td></td>
                    <td><input class="btnSalvar" name="btnsalvar" type="submit" value="Salvar" /></td>
                    
                  </tr>
                
                </table>
            
            </form>