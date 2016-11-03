
<div class="cadas">Cadastrar Exercicios </div>


 <form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>exercicios/index">
        <input class="btnVoltar" name="btnvoltar" type="submit" value="Voltar" />
 </form>

        <form class="frm" name="frmprodutos" enctype="multipart/form-data" method="post" action="<?php echo(PROJECTDIR)?>exercicios/<?php echo($atualizacao) ?>">
            <input type="hidden" value="<?php echo($exercicios->codExercicio)?>" name="codExercicio"/>
            <table>
                  
                  <tr>
                    <td class="campo_frm">Titulo:</td>
                    <td><input class="caixa_frm" name="txtTituloExercicio" value="<?php echo($exercicios->tituloExercicio)?>" required onkeypress="return txtBoxFormat(event);" type="text"/></td>
                </tr>
                  <tr>
                    <td class="campo_frm">Imagem Produto:</td>
                    <td><input  name="ExercicioFile" type="file"  value="<?php echo($exercicios->imagemExercicio)?>" required/></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Descrição:</td>
                    <td>
						<div>
							<textarea class="campo_desc" name="txtDescricaoExercicio"   cols="35" rows="8" required ><?php echo($exercicios->descricaoExercicio);?></textarea>
						</div>
                        
          
					</td> 
                  </tr>  

                  <tr>
                      
                    <td></td>
                    <td><input class="btnSalvar" name="btnsalvar" type="submit" value="Salvar" /></td>
                    
                  </tr>
                
                </table>
            
            </form>
			
			