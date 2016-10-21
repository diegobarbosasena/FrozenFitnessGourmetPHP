
<div class="cadas">Estoque</div>

    <form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>estoque/index">
        <input class="btnVoltar" name="btnvoltar" type="submit" value="Voltar" />
        
</form>



        <form class="frm" name="frmprodutos" method="post" action="">
            
            <table>
                  
                  <tr>
                    <td class="campo_frm">Escolha:</td>
                    <td><input name="escolhaEstoque" type="radio"   value=""    /> Produto 
                      <input name="escolhaEstoque" type="radio"   value=""    />Ingrediente</td>
                  </tr>
                
                <tr>
                    <td class="campo_frm">Nome:</td>
                    <td >  <select size="1" name="D1">

                            <option selected value="Selecione">Selecione:</option>

                            <option value="2000">2000</option>

                            <option value="2001">2001</option>

                        </select>
                    </td>
                  </tr>
                
                 <tr>
                    <td class="campo_frm">Quantidade Inserida:</td>
                    <td><input class="caixa_frm" name="txtquantidade" type="text" value=""  /></td>
                </tr>
                <tr>
                    <td class="campo_frm">Quantidade Minima:</td>
                    <td><input class="caixa_frm" name="txtquantidadeLimite" type="text" value=""  /></td>
                </tr>
                 <tr>
                    <td class="campo_frm">Data de Fabricação:</td>
                    <td><input class="caixa_frm" name="txtdtValidade" type="text" value=""  /></td>
                </tr>
				<tr>
                    <td class="campo_frm">Data de Validade:</td>
                    <td><input class="caixa_frm" name="txtdtValidade" type="text" value=""  /></td>
                </tr>
				

                  <tr>
                      
                    <td></td>
                    <td><input class="btnSalvar" name="btnsalvar" type="submit" value="Salvar" /></td>
                    
                  </tr>
                
                </table>
            
            </form>