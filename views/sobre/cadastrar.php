
        <div class="cadas"> Loja</div>
        <form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>sobre/index">
           <input class="btnVoltar" name="btnvoltar" type="submit" value="Voltar" />
        </form>



        <form class="frm" name="frmprodutos" method="post" action="">
            
            <table>
                  
                  <tr>
                    <td class="campo_frm">Titulo:</td>
                    <td><input class="txtTituloSobreLoja" type="text"   value=""    /></td>
                  </tr>
                 
                 <tr>
                    <td class="campo_frm">Imagem Principal:</td>
                    <td><input  name="imgSobreLoja" type="file" value=""  /></td>
                  </tr>
                     
                
                  
                
                 <tr>
                    <td class="campo_frm">Historia:</td>
                    <td><textarea class="campoHistoria" cols="35" rows="8" ></textarea></td> 
                  </tr> 
                
                 <tr>
                    <td class="campo_frm">Imagem :</td>
                    <td><input  name="img1" type="file" value=""  /></td>
                  </tr>
                
                 <tr>
                    <td class="campo_frm">Imagem :</td>
                    <td><input  name="img2" type="file" value=""  /></td>
                  </tr>
                
                 <tr>
                    <td class="campo_frm">Imagem :</td>
                    <td><input  name="img3" type="file" value=""  /></td>
                  </tr>
               
                  <tr>
                      
                    <td></td>
                    <td><input class="btnSalvar" name="btnsalvar" type="submit" value="Salvar" /></td>
                    
                  </tr>
                
                </table>
            
            </form>