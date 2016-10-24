
<form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>parceiro/index">
   <input class="btnVoltar" name="btnvoltar" type="submit" value="Voltar" />
</form>


<div class="cadas">Cadastrar Parceiro</div>

        <form class="frm" name="frmprodutos" method="post" action="">
            
            <table>
                  
                  <tr>
                    <td class="campo_frm">Nome:</td>
                    <td><input name="txtNome" class="caixa_frm" type="text"   value=""    /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">CNPJ:</td>
                    <td><input class="caixa_frm"  name="txtCnpj" type="text"  value=""  /></td>
                  </tr>
                 <tr>
                    <td class="campo_frm">Imagem:</td>
                    <td><input  name="txtdtvalidade" type="file" value=""  /></td>
                  </tr>
                     
                  
                  <tr>
                    <td class="campo_frm">Site:</td>
                    <td><input class="caixa_frm" name="txtsite"  type="text" value="" /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Telefone:</td>
                    <td><input class="caixa_frm" name="txttelefone" type="text" value="" /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Email:</td>
                    <td><input class="caixa_frm" name="txtemail" type="text" value=""  /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Logradouro:</td>
                    <td><input class="caixa_frm" name="txtlogradouro" type="text" value="" /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">CEP:</td>
                    <td><input class="caixa_frm" name="txtcep" type="text" value=""  /></td>
                  </tr>    
                  <tr>
                    <td class="campo_frm">Numero:</td>
                    <td><input class="caixa_frm" name="txtnumero" type="text" value=""  /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Bairro:</td>
                    <td><input class="caixa_frm" name="txtbairro" type="text" value=""  /></td>
                  </tr>
                  
                
                  <tr>
                    <td class="campo_frm">Estado:</td>
                    <td >  <select size="1" name="D1">

                            <option selected value="Selecione">Selecione:</option>

                            <option value="2000">2000</option>

                            <option value="2001">2001</option>

                        </select>
                    </td>
                  </tr>
                <tr>
                    <td class="campo_frm">Cidade:</td>
                    <td >  <select size="1" name="D1">

                            <option selected value="Selecione">Selecione:</option>

                            <option value="2000">2000</option>

                            <option value="2001">2001</option>

                        </select>
                    </td>
                  </tr>
                    <tr>
                    <td class="campo_frm">Empresa:</td>
                    <td >  <select size="1" name="D1">

                            <option selected value="Selecione">Selecione:</option>

                            <option value="2000">2000</option>

                            <option value="2001">2001</option>

                        </select>
                    </td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Complemento:</td>
                    <td>
                    <input class="caixa_frm" name="txtcomplemento" type="text" value=""  /></td>
                    
                    </td> 
                  </tr>  
                

                  <tr>
                      
                    <td></td>
                    <td><input class="btnSalvar" name="btnsalvar" type="submit" value="Salvar" /></td>
                    
                  </tr>
                
                </table>
            
            </form>