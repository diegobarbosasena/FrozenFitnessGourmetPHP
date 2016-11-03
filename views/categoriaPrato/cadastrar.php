
<div class="cadas">Cadastrar Categoria Prato </div>


 <form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>categoriaPrato/index">
        <input class="btnVoltar" name="btnvoltar" type="submit" value="Voltar" />
 </form>

        <form class="frm" name="frmprodutos" enctype="multipart/form-data" method="post" action="<?php echo(PROJECTDIR)?>categoriaPrato/<?php echo($atualizacao) ?>">
            <input type="hidden" value="<?php echo($categoriaPrato->codCategoriaPrato)?>" name="codCategoriaPrato"/>
            <table>
                  
                  <tr>
                    <td class="campo_frm">Nome:</td>
                    <td><input class="caixa_frm" name="txtNomeCategoriaPrato" value="<?php echo($categoriaPrato->nomeCategoriaPrato) ?>" required onkeypress="return txtBoxFormat(event);" type="text"/></td>
                </tr>
                  <tr>
                    <td class="campo_frm">Imagem Produto:</td>
                    <td><input  name="CategoriaPratoFile" type="file"  value="<?php echo($categoriaPrato->imagemCategoriaPrato)?>" required /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Descrição:</td>
                    <td>

							<textarea class="campo_desc" name="txtDescricaoCategoriaPrato"  required cols="35" rows="8" ><?php echo($categoriaPrato->descricaoCategoriaPrato);?></textarea>
				
          
					</td> 
                  </tr>  

                  <tr>
                      
                    <td></td>
                    <td><input class="btnSalvar" name="btnsalvar" type="submit" value="Salvar" /></td>
                    
                  </tr>
                
                </table>
            
            </form>
			
			