
<div class="cadas">Cadastrar Categoria Prato </div>


 <form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>categoriaPrato/index">
        <input class="btnVoltar" name="btnvoltar" type="submit" value="Voltar" />
 </form>

        <form class="frm" name="frmprodutos" enctype="multipart/form-data" method="post" action="<?php echo(PROJECTDIR)?>categoriaPrato/<?php echo($atualizacao) ?>">
            <input type="hidden" value="<?php echo($objetivo->codCategoriaPrato)?>" name="codCategoriaPrato"/>
            <table>
                  
                  <tr>
                    <td class="campo_frm">Nome:</td>
                    <td><input class="caixa_frm" name="txtNomeObjetivo" value="<?php echo($objetivo->nomeCategoriaPrato)?>"  type="text"/></td>
                </tr>
                  <tr>
                    <td class="campo_frm">Imagem Produto:</td>
                    <td><input  name="objetivoFile" type="file"  value="<?php echo($objetivo->imagemCategoria)?>" /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Descri��o:</td>
                    <td>
						<div>
							<textarea class="campo_desc" name="txtDescricaoObjetivo"   cols="35" rows="8" ><?php echo($objetivo->descricaoCategoria);?></textarea>
						</div>
					</td> 
                  </tr>  

                  <tr>
                      
                    <td></td>
                    <td><input class="btnSalvar" name="btnsalvar" type="submit" value="Salvar" /></td>
                    
                  </tr>
                
                </table>
            
            </form>
			
			