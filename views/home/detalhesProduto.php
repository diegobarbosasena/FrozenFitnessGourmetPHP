
<div id="conteudo">
    
    <div class="clear"> </div>
    
    <div class="detalhes_produto">
        <div class="deta_prod_center">
            <div> 
                    <img src="<?php echo(PROJECTDIR.$prato->imagemPrato);?>" class="img_deta_prod"/>
            </div>

            <div class="titulo_preco">
                <p class="titulo_deta_prod"> <?php echo($prato->nomePrato)?> </p>

                <div class="clear"> </div>

                <p class="preco_deta_prod">Preço: R$ <?php echo($prato->precoPrato)?></p>
                
                <div class="clear"> </div>
                
                <!--<a href="<?php echo(PROJECTDIR)?>home/venda" class="comprar"> Comprar </a> -->
                
                <a href="<?php echo(PROJECTDIR)?>carrinho/inserir/<?php  echo($prato->codPrato); ?>" class="comprar"> Adicionar </a>
                
            </div>    
        </div>
        
        <div class="clear"> </div>
        
        <p class="desc_deta_prod">
            <?php echo($prato->descricaoPrato)?> 
        </p>    
        
        <div class="clear"> </div>
        
        <div class="valor_nuticional">
            <table>
                <tr>
                    <td class="center" colspan="3">
                        INFORMAÇÃO NUTRICIONAL
                    </td>
                </tr>
                <tr>
                    <td class="center" colspan="3">
                        Porção de 00g (*)
                    </td>
                </tr>
                <tr>
                    <td class="center" colspan="2">
                        Quantidade por porção
                    </td>
                    <td class="center" >
                        % VD (**)
                    </td>
                </tr>
                
                <tr>
                    <td>Valor Calórico</td>
                    <td><?php echo($prato->caloria)?>g </td>
                    <td>3,25%</td>
                </tr>
                <tr>
                    <td>Carboidratos</td>
                    <td><?php echo($prato->carboidrato)?>g</td>
                    <td>4,71%</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td><?php echo($prato->proteina)?>g</td>
                    <td>1,70%</td>
                </tr>
                <tr>
                    <td>Gorduras Totais</td>
                    <td><?php echo($prato->gorduras)?>g</td>
                    <td>0,76%</td>
                </tr>
                <!-- <tr>
                    <td>Gorduras Saturadas</td>
                    <td>0,39mg</td>
                    <td>1,77%</td>
                </tr>
                <tr>
                    <td>Cálcio</td>
                    <td>37,26mg</td>
                    <td>3,72%</td>
                </tr>
                <tr>
                    <td>Ferro</td>
                    <td>0,02mg</td>
                    <td>0,11%</td>
                </tr>
                <tr>
                    <td>Sódio</td>
                    <td>4,5mg</td>
                    <td>0,18%</td>
                </tr>
                <tr>
                    <td>Colesterol</td>
                    <td>1,19mg</td>
                    <td>0,39%</td>
                </tr>-->
                
                <tr>
                    <td colspan="3">
                        (*) Calcular estes valores com base no peso médio do picolé 
                        <br>
                        (**) % Valores calculados em uma dieta de 2000 kcal ou 8.400kj.
                    </td>
                </tr> 
            </table>
        </div>

    </div>
    
    <div class="clear"> </div>
    
</div><!-- conteudo-->
