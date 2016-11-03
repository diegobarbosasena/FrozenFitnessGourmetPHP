
<div class="cadas">Cadastrar Dicas </div>


 <form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>dicas/index">
        <input class="btnVoltar" name="btnvoltar" type="submit" value="Voltar" />
 </form>

        <form class="frm" name="frmprodutos" enctype="multipart/form-data" method="post" action="<?php echo(PROJECTDIR)?>dicas/<?php echo($atualizacao) ?>">
            <input type="hidden" value="<?php echo($dicas->codDica)?>" name="codDica"/>
            <table>
                  
                  <tr>
                    <td class="campo_frm">Titulo:</td>
                    <td><input class="caixa_frm" name="txtTituloDica" value="<?php echo($dicas->tituloDica)?>" required onkeypress="return txtBoxFormat(event);" type="text"/></td>
                </tr>
                  <tr>
                    <td class="campo_frm">Imagem Produto:</td>
                    <td><input  name="DicaFile" type="file"  value="<?php echo($dicas->imagemDica)?>" required /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Descrição:</td>
                    <td>
						<div>
							<textarea class="campo_desc" name="txtDescricaoDica" required   cols="35" rows="8" ><?php echo($dicas->descricaoDica);?></textarea>
						</div>
                        
          
					</td> 
                  </tr>  

                  <tr>
                      
                    <td></td>
                    <td><input class="btnSalvar" name="btnsalvar" type="submit" value="Salvar" /></td>
                    
                  </tr>
                
                </table>
            
            </form>
			
			