
<div class="cadas">Cadastrar Objetivos </div>

   <form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>objetivo/index">
        <input class="btnVoltar" name="btnvoltar" type="submit" value="Voltar" />
        
</form>
        <form class="frm" name="frmprodutos" enctype="multipart/form-data" method="post" action="<?php echo(PROJECTDIR)?>objetivo/<?php echo($atualizacao) ?>">
            <input type="hidden" value="<?php echo($objetivo->codCategoriaPrato)?>" name="codCategoriaPrato"/>
            <table>
                  
                  <tr>
                    <td class="campo_frm">Objetivo:</td>
                    <td><input class="caixa_frm" name="txtNomeObjetivo" value="<?php echo($objetivo->nomeCategoriaPrato)?>"  type="text"/></td>
                </tr>
                  
                  <tr>
                      
                    <td></td>
                    <td><input class="btnSalvar" name="btnsalvar" type="submit" value="Salvar" /></td>
                    
                  </tr>
                
                </table>
            
            </form>
			
			