

<form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>ingrediente/index">
   <input class="btnVoltar" name="btnvoltar" type="submit" value="Voltar" />
</form>

<div class="cadas">Cadastrar Igrediente</div>

		

        <form class="frm" name="frmprodutos" method="post" action="<?php echo(PROJECTDIR)?>ingrediente/<?php echo($atualizacao) ?>">
            <input type="hidden" value="<?php echo($materiaPrima->codMateria)?>" name="codMateria"/>
            <table>
                  
                  <tr>
                    <td class="campo_frm">Nome:</td>
                    <td><input name="txtIgrediente" class="caixa_frm" type="text"   value="<?php echo($materiaPrima->nomeMateria)?>" required onkeypress="return txtBoxFormat(event);"/></td>
                  </tr>
				   <tr>
                    <td class="campo_frm">Preço:</td>
                    <td><input name="txtPrecoMateria" class="caixa_frm" type="text"   value="<?php echo ($materiaPrima->precoMateria);?>"   required/>
                    </td>
                  </tr>
                
                <tr>
                    <td class="campo_frm">Categoria:</td>
                    <td >  <select size="1" name="categoriaIngrediente" required>
						<!--<option selected value="Selecione">Selecione:</option>-->
                          <?php
                            require_once('controllers/categoria_controller.php');

                            $controllerCategoria = new categoria_controller();

                            $rs=$controllerCategoria->listarTodos();

                            $cont=0;

                            while ($cont < count($rs)){
        
                        ?>  

                            <option  value="<?php echo($rs[$cont]->codCategoriaMateria); ?>" ><?php echo($rs[$cont]->nomeCategoriaMateria);?></option>
                        
       					 <?php
                            
                            $cont++;
                        }


                        ?>

                        </select>
                    </td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Descrição:</td>
                    <td><textarea  name="descricaoIgrediente" class="campo_desc" cols="35" rows="8" > <?php echo($materiaPrima->descricaoMateria)?></textarea></td> 
                  </tr>  
                

                  <tr>
                      
                    <td></td>
                    <td><input class="btnSalvar" name="btnsalvar" type="submit" value="Salvar" /></td>
                    
                  </tr>
                
                </table>
            
            </form>