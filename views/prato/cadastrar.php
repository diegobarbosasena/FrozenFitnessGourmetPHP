
<div class="cadas">Cadastrar Pratos </div>

    <form  name="frmconsulta" method="post" action="../prato/index">
	 <input class="btnVoltar" name="btnvoltar" type="submit" value="Voltar" />
        
        
    </form>


        <form class="frm" name="frmprodutos" method="post" enctype="multipart/form-data" action="<?php echo(PROJECTDIR)?>prato/<?php echo($atualizacao) ?>">

        <form class="frm" name="frmprodutos" method="post" action="<?php echo(PROJECTDIR)?>prato/<?php echo($atualizacao) ?>">

            
           <input type="hidden" value="<?php echo($prato->codPrato)?>" name="codPrato"/>
            <table>
                  
                  <tr>
                    <td class="campo_frm">Nome:</td>
                    <td><input class="caixa_frm" type="text"   name="txtnomePrato"  value=""    /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Carboidrato:</td>
                    <td><input class="caixa_frm"  name="txtcarboidrato" type="text"  value=""  /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Calorias:</td>
                    <td><input class="caixa_frm" name="txtcaloria"  type="text" value="" /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Valor Energético:</td>
                    <td><input class="caixa_frm" name="txtvalorEnergetico" type="text" value="" /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Proteina:</td>
                    <td><input class="caixa_frm" name="txtproteina" type="text" value=""  /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Sódio:</td>
                    <td><input class="caixa_frm" name="txtsodio" type="text" value="" /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Gordura:</td>
                    <td><input class="caixa_frm" name="txtgorduras" type="text" value=""  /></td>
                  </tr>    
                  <tr>
                    <td class="campo_frm">Data de Fabricação:</td>
                    <td><input class="caixa_frm" name="txtdtFabricacao" type="text" value=""  /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Data de Validade:</td>
                    <td><input class="caixa_frm" name="txtdtValidade" type="text" value=""  /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Preço:</td>
                    <td><input class="caixa_frm"  name="txtprecoPrato" type="text"  value=""  /></td>
                  </tr>
                   <tr>
                    <td class="campo_frm">Categoria:</td>
                    <td >  <select size="1" name="D1">
                        
                    <option selected value="Selecione">Selecione:</option>
                         <?php
                            require_once('controllers/categoriaPrato_controller.php');

                            $controllerCategoria = new categoriaPrato_controller();

                            $rs=$controllerCategoria->listarTodos();

                            $cont=0;

                            while ($cont < count($rs)){
        
                        ?>  

                            <option value="<?php echo($rs[$cont]->codCategoriaPrato); ?>"><?php echo($rs[$cont]->nomeCategoriaPrato);?></option>
                        <?php
                            
                            $cont++;
                        }


                        ?>
        
                        </select>
                    </td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Imagem Prato:</td>

                    <td><input  name="imagemPrato" type="file" value=""  /></td>

                   

                  </tr>
                  <tr>
                    <td class="campo_frm">Descrição:</td>
                    <td><textarea class="campo_desc" name= "txtdescricaoPrato" cols="35" rows="8" ></textarea></td> 
                  </tr>  

                  <tr>
                      
                    <td></td>
                    <td><input class="btnSalvar" name="btnsalvar" type="submit" value="Salvar" /></td>
                    
                  </tr>
                
                </table>
            
            </form>