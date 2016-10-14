
<div class="cadas">Cadastrar Produto</div>

    <form  name="frmconsulta" method="post" action="../produtocms/index">
        <input class="btnConsulta" name="btnconsulta" type="submit" value="Consultar Dados" />
        
    </form>
        <form class="frm" name="frmprodutos" method="post" action="../produtocms/cadastrar">
            
            <table>
                  
                  <tr>
                    <td class="campo_frm">Nome:</td>
                    <td><input class="caixa_frm" name="txtnomeProduto" type="text"   value=""    /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Carboidrato:</td>
                    <td><input class="caixa_frm"  name="txtcarboidratoProduto" type="text"  value=""  /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Calorias:</td>
                    <td><input class="caixa_frm" name="txtcaloriasProduto"  type="text" value="" /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Valor Energético:</td>
                    <td><input class="caixa_frm" name="txtevlrenergeticoProduto" type="text" value="" /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Proteina:</td>
                    <td><input class="caixa_frm" name="txtproteinaProduto" type="text" value=""  /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Sódio:</td>
                    <td><input class="caixa_frm" name="txtsodioProduto" type="text" value="" /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Gordura:</td>
                    <td><input class="caixa_frm" name="txtgorduraProduto" type="text" value=""  /></td>
                  </tr>    
                  <tr>
                    <td class="campo_frm">Data de Fabricação:</td>
                    <td><input class="caixa_frm" name="txtdtfabricacaoProduto" type="text" value=""  /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Data de Validade:</td>
                    <td><input class="caixa_frm" name="txtdtvalidadeProduto" type="text" value=""  /></td>
                  </tr>
                
                  <tr>
                    <td class="campo_frm">Categoria:</td>
                    <td >  <select size="1" name="categoriaProduto">

                            <option selected value="Selecione">Selecione:</option>

                            <option value="2000">2000</option>

                            <option value="2001">2001</option>

                        </select>
                    </td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Imagem Produto:</td>
                    <td><input  name="fileProduto" type="file" value=""  /></td>
                  </tr>
                     
                  <tr>
                    <td class="campo_frm">Descrição:</td>
                    <td><textarea name="descricaoProduto" class="campo_desc" cols="35" rows="8" ></textarea></td> 
                  </tr>  
                

                  <tr>
                      
                    <td></td>
                    <td><input class="btnSalvar" name="btnsalvar" type="submit" value="Salvar" /></td>
                    
                  </tr>
                
                </table>
            
            </form>