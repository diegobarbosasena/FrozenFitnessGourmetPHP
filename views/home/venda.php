<div id="conteudo">
    <p class="monte"> Carrinho de Compras </p>
    
    

     
     <div class="venda_prods">
           
        <?php foreach($carrinho as $c){ ?> 
        <div class="categoria_monte_venda"> <?php  echo ($c->prato->nomePrato); ?></div>
                <div  class="categoria_venda"> 
                <form id="">
                    <input class="btn_mais_venda" type="submit" value=""> 
                </form>
                <div class="quantidade_venda"> <?php  echo ($c->qtd); ?> </div>
                <form id="">
                    <input class="btn_menos_venda" type="submit" value=""> 
                </form>
                </div>
         
                 <div class="imagem_produtos5">
                </div>
         <?php } ?>
            
         <!-- <div class="categoria_bebida"> Bedidas:</div>
                <div class="espaco">
                <select class="bebida" size="1" name="Carnes">
                    <option selected value="Selecione">Selecione:</option>
                    <option value="bovina">Bovina</option>
                    <option value="suina">Suína</option>
                </select>
                </div>
                <div  class="categoria_venda_bebida"> 
                    <form id="">
                        <input class="btn_mais_venda" type="submit" value=""> 
                    </form>
                    <div class="quantidade_venda"> 10 </div>
                    <form id="">
                        <input class="btn_menos_venda" type="submit" value=""> 
                    </form>
                </div> -->

        </div>
    <div class="venda_itens">
            <div class="adicionados_venda">
                <p class="itens_adc"> Itens adicionados</p>
                <ul class="lst_itens_adc">
                    <?php 
                         $totalProdutos = 0;
                        foreach($carrinho as $c){ ?> 
                      <li class="item_lst_adc"><?php  echo ($c->prato->nomePrato); ?>
                          <form>
                            <input class="btn_dlt_item" type="submit" value=""> 
                          </form>
                      </li>
                      <?php
                        $totalProdutos = $totalProdutos + $c->total;                          
                                                  
                        } ?>
               
                </ul>
                <p class="itens_adc"> Total </p>
                <p class="qnt_adc"> R$ <?php  echo ($totalProdutos); ?> </p>
           </div>
        <div class="adicionados_venda">
       <p class="itens_adc"> Frete </p>
   		
        <form class="login-form" action="../home/venda">
            <input class="campo_frete" type="text" name="txtnome"> 
          <input class="btn_adquirir" type="submit" value=" Calcular Frete"> 
            
         </form>
         <p class="itens_adc"> Valor do Frete  </p>
        <p class="qnt_adc"> R$ 20,00. </p>
        
        </div>
        
        
        <div class="adicionados_venda">
        <p class="itens_adc"> Total </p>
        <p class="qnt_adc"> R$ 260,00. </p>
   		<p class="itens_adc"> Forma de Pagamento: </p>
        <p class="qnt_adc"> Boleto </p>
        <form class="login-form" action="../home/confirmaEndereco">
          <input class="btn_adquirir" type="submit" value="Concluir a compra"> 
         </form>
        
   </div>
    
    </div>
  

    
    
</div>