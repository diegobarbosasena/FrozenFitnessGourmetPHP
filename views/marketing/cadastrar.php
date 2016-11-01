
<form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>marketing/index">
   <input class="btnVoltar" name="btnvoltar" type="submit" value="Voltar" />
</form>

<div class="cadas"> Slider</div>

   
        <form class="frm" name="frmprodutos" method="post" enctype="multipart/form-data" action="<?php echo(PROJECTDIR)?>marketing/<?php echo($atualizacao) ?>">
		<input type="hidden" value="<?php echo($slider->codSlider)?>" name="codSlider"/>
            
            <table>
                  
                  <tr>
                    <td class="campo_frm">Titulo:</td>
                    <td><input name="txtTituloMarketing" class="caixa_frm" type="text"   value="<?php echo ($slider->tituloSlider)?>" required onkeypress="return txtBoxFormat(event);"   /></td>
                  </tr>
                 
                 <tr>
                    <td class="campo_frm">Imagem Produto:</td>
                    <td><input name="imgFile" type="file" value="" required /></td>
                  </tr>
         
                  <tr>
                      
                    <td></td>
                    <td><input class="btnSalvar" name="btnsalvar" type="submit" value="Salvar" /></td>
                    
                  </tr>
                
                </table>
            
            </form>