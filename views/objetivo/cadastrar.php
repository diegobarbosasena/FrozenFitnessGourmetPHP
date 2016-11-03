
<div class="cadas">Cadastrar Objetivos </div>

   <form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>objetivo/index">
        <input class="btnVoltar" name="btnvoltar" type="submit" value="Voltar" />
        
</form>
        <form class="frm" name="frmprodutos" enctype="multipart/form-data" method="post" action="<?php echo(PROJECTDIR)?>objetivo/<?php echo($atualizacao) ?>">
            <input type="hidden" value="<?php echo($objetivo->codObjetivo)?>" name="codObjetivo"/>
            <table>
                  
                  <tr>
                    <td class="campo_frm">Objetivo:</td>
                    <td><input class="caixa_frm" name="txtNomeObjetivo" value="<?php echo($objetivo->nomeObjetivo)?>" required onkeypress="return txtBoxFormat(event);" type="text"/></td>
                  </tr>
                   <tr>
                    <td class="campo_frm">Descricao:</td>
                    <td> <textarea name="txtDescricaoObjetivo" class="campo_desc" cols="35" rows="8" required >  <?php echo($objetivo->descricaoObjetivo)?>  </textarea></td>
                   
                  </tr>
                  
                  <tr>
                      
                    <td></td>
                    <td><input class="btnSalvar" name="btnsalvar" type="submit" value="Salvar" /></td>
                    
                  </tr>
                
                </table>
            
            </form>
			
			