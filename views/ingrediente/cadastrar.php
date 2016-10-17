

<<<<<<< HEAD

<form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>ingrediente/index">
   <input class="btnVoltar" name="btnvoltar" type="submit" value="Voltar" />
</form>

<div class="cadas">Cadastrar Igrediente</div>

=======
    <form  name="frmconsulta" method="post" action="../cms/ConsultaIngrediente">
        <input class="btnConsulta" name="btnconsulta" type="submit" value="Consultar Dados" />
        
    </form>
>>>>>>> 130e20beb7ff2a73ea122c4a849946caac6f1a0b

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