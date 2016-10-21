
<div class="cadas">Cadastrar Usuario</div>

<form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>usuarios/index">
        <input class="btnVoltar" name="btnvoltar" type="submit" value="Voltar" />
        
</form>

        <form class="frm" name="frmprodutos" method="post" action="<?php echo(PROJECTDIR)?>funcionario/<?php echo($atualizacao) ?>">
            
            <table>
                  
                  <tr>
                    <td class="campo_frm">Nome:</td>
                    <td><input class="caixa_frm" type="text"   name="txtNome" value=""    /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">CPF:</td>
                    <td><input class="caixa_frm"  name="txtCpf" type="text"  value=""  /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Usuário:</td>
                    <td><input class="caixa_frm" name="txtUsuario"  type="text" value="" /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Senha:</td>
                    <td><input class="caixa_frm" name="txtSenha" type="text" value="" /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Confirmar senha:</td>
                    <td><input class="caixa_frm" name="txtConfirmaSenha" type="text" value=""  /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Tipo:</td>
                    <td >  <select size="1" name="slecioneTipoUsuario">

                            <option selected value="Selecione">Selecione:</option>

                            <option value="">Administrador</option>

                            <option value="">Cataloguista</option>

                        </select>
                    </td>
                  </tr>

                  <tr>
                      
                    <td></td>
                    <td><input class="btnSalvar" name="btnsalvar" type="submit" value="Salvar" /></td>
                    
                  </tr>
                
                </table>
            
            </form>