
<div class="cadas">Cadastrar Igrediente</div>

    <form  name="frmconsulta" method="post" action="../cms/ConsultaIngrediente">
        <input class="btnConsulta" name="btnconsulta" type="submit" value="Consultar Dados" />
        
    </form>

        <form class="frm" name="frmprodutos" method="post" action="">
            
            <table>
                  
                  <tr>
                    <td class="campo_frm">Nome:</td>
                    <td><input name="txtIgrediente" class="caixa_frm" type="text"   value=""    /></td>
                  </tr>
                 <tr>
                    <td class="campo_frm">Quantidade:</td>
                    <td><input name="quantIgrediente" class="caixa_frm"  type="text" value=""  /></td>
                </tr>
                <tr>
                    <td class="campo_frm">Categoria:</td>
                    <td >  <select size="1" name="categoriaIgrediente">

                            <option selected value="Selecione">Selecione:</option>

                            <option value="2000">2000</option>

                            <option value="2001">2001</option>

                        </select>
                    </td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Descrição:</td>
                    <td><textarea  name="descricaoIgrediente"class="campo_desc" cols="35" rows="8" ></textarea></td> 
                  </tr>  
                

                  <tr>
                      
                    <td></td>
                    <td><input class="btnSalvar" name="btnsalvar" type="submit" value="Salvar" /></td>
                    
                  </tr>
                
                </table>
            
            </form>