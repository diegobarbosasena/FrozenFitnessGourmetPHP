
<div class="cadas">Estoque Ingrediente</div>

    <form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>estoque/index">
        <input class="btnVoltar" name="btnvoltar" type="submit" value="Voltar" />
        
</form>



        <form class="frm" name="frmprodutos" method="post" action="<?php echo(PROJECTDIR)?>estoque/<?php echo($atualizacao) ?>">
        <input type="hidden" value="<?php echo($estoque->codEstoque)?>" name="codEstoque"/>
            
            <table>
                
                <tr>
                    <td class="campo_frm">Nome:</td>
                    <td >   <select size="1" name="codMateria">
						<option selected value="Selecione">Selecione:</option>
                          <?php
                            require_once('controllers/ingrediente_controller.php');

                            $controllerIngrediente = new ingrediente_controller();

                            $rs=$controllerIngrediente->listarTodos();

                            $cont=0;

                            while ($cont < count($rs)){
        
                        ?>  

                            <option value="<?php echo($rs[$cont]->codMateria); ?>" required><?php echo($rs[$cont]->nomeMateria);?></option>
                        
       					 <?php
                            
                            $cont++;
                        }


                        ?>

                        </select>
                    </td>
                  </tr>
                
                 <tr>
                    <td class="campo_frm">Quantidade Inserida:</td>
                    <td><input class="caixa_frm" name="txtquantidade" type="text" value="<?php echo ($estoque->quantidade);?>" required /></td>
                </tr>
                <tr>
                    <td class="campo_frm">Quantidade Minima:</td>
                    <td><input class="caixa_frm" name="txtquantidadeLimite" type="text" value="<?php echo ($estoque->quantidadeMinima);?>" required /></td>
                </tr>
                 <tr>
                    <td class="campo_frm">Data de Fabricação:</td>
                    <td><input class="caixa_frm" name="txtdtFabricacao" type="text" value="<?php echo ($estoque->dtFabricacao);?>" required /></td>
                </tr>
				<tr>
                    <td class="campo_frm">Data de Validade:</td>
                    <td><input class="caixa_frm" name="txtdtValidade" type="text" value="<?php echo ($estoque->dtValidade);?>"  required /></td>
                </tr>
				

                  <tr>
                      
                    <td></td>
                    <td><input class="btnSalvar" name="btnsalvar" type="submit" value="Salvar" /></td>
                    
                  </tr>
                
                </table>
            
            </form>