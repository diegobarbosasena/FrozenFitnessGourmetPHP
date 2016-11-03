
        <div class="cadas"> Loja</div>
        <form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>sobre/index">
           <input class="btnVoltar" name="btnvoltar" type="submit" value="Voltar" />
        </form>



        <form class="frm" name="frmprodutos" enctype="multipart/form-data" method="post" action="<?php echo(PROJECTDIR)?>sobre/<?php echo($atualizacao)?>">
            <input type="hidden" value="<?php echo($sobreLoja->codSobreLoja)?>" name="txtcodSobreLoja"/>
            <table>
                  
                  <tr>
                    <td class="campo_frm">Titulo:</td>
                    <td><input class="txtTituloSobreLoja" type="text" name="txtTituloSobreLoja"  value="<?php echo($sobreLoja->tituloSobreLoja)?>"  required onkeypress="return txtBoxFormat(event);"  /></td>
                  </tr>
                 
                 <tr>
                    <td class="campo_frm">Imagem Principal:</td>
                    <td><input  name="imgSobreLoja" type="file" value=""  /></td>
                  </tr>
                     
                
                  
                
                 <tr>
                    <td class="campo_frm">Historia:</td>
                    <td><textarea class="campoHistoria" cols="35" rows="8" name="txtHistoria" required ><?php echo($sobreLoja->historiaSobreLoja)?></textarea></td> 
                  </tr> 
                
                 <tr>
                    <td class="campo_frm">Imagem  :</td>
                    <td><input  name="imgSobreLoja1" type="file" value=""  /></td>
                  </tr>
                
                 <tr>
                    <td class="campo_frm">Imagem :</td>
                    <td><input  name="imgSobreLoja2" type="file" value=""  /></td>
                  </tr>
                
                 <tr>
                    <td class="campo_frm">Imagem :</td>
                    <td><input  name="imgSobreLoja3" type="file" value=""  /></td>
                  </tr>
               
                  <tr>
                      
                    <td></td>
                    <td><input class="btnSalvar" name="btnsalvar" type="submit" value="Salvar" /></td>
                    
                  </tr>
                
                </table>
            
            </form>