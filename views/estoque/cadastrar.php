<<<<<<< HEAD
<form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>estoque/index">
   <input class="btnVoltar" name="btnvoltar" type="submit" value="Voltar" />
</form>

<div class="cadas">Estoque</div>
=======

<div class="cadas">Estoque</div>

    <form  name="frmconsulta" method="post" action="../cms/ConsultaEstoque">
        <input class="btnConsulta" name="btnconsulta" type="submit" value="Consultar Dados" />
        
    </form>
>>>>>>> 130e20beb7ff2a73ea122c4a849946caac6f1a0b

        <form class="frm" name="frmprodutos" method="post" action="">
            
            <table>
                  
                  <tr>
                    <td class="campo_frm">Escolha:</td>
                    <td><input name="escolhaEstoque" type="radio"   value=""    /> Produto 
                      <input name="escolhaEstoque" type="radio"   value=""    />Ingrediente</td>
                  </tr>
                
                <tr>
                    <td class="campo_frm">Produto/ Ingrediente:</td>
                    <td >  <select size="1" name="D1">

                            <option selected value="Selecione">Selecione:</option>

                            <option value="2000">2000</option>

                            <option value="2001">2001</option>

                        </select>
                    </td>
                  </tr>
                
                 <tr>
                    <td class="campo_frm">Quantidade:</td>
                    <td><input class="caixa_frm" name="txtdtfabricacao" type="text" value=""  /></td>
                </tr>
                 <tr>
                    <td class="campo_frm">Data de Validade:</td>
                    <td><input class="caixa_frm" name="txtdtfabricacao" type="text" value=""  /></td>
                </tr>
                 
                

                  <tr>
                      
                    <td></td>
                    <td><input class="btnSalvar" name="btnsalvar" type="submit" value="Salvar" /></td>
                    
                  </tr>
                
                </table>
            
            </form>