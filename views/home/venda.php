<div id="conteudo">
    <p class="monte"> Carrinho de Compras </p>
    
    

     
     <div class="venda_prods">
           
        <?php foreach($carrinho as $c){ ?> 
        <div class="categoria_monte_venda"> <?php  echo ($c->prato->nomePrato); ?></div>
                <div  class="categoria_venda"> 
                <form method="post" action="<?php echo (PROJECTDIR); ?>carrinho/add">
            <input type="hidden" value="<?php echo($c->prato->codPrato)?>" name="codPrato"/>

                    <input class="btn_mais_venda" type="submit" value=""> 
                </form>
                    
                <div class="quantidade_venda"> <?php  echo ($c->qtd); ?> </div>
                    
                <form method="post" action="<?php echo (PROJECTDIR); ?>carrinho/remove">
            <input type="hidden" value="<?php echo($c->codCarrinho)?>" name="codCarrinho"/>
                    <input class="btn_menos_venda" type="submit" value=""> 
                </form>
                </div>
                 <div>
                      <img src="<?php  echo (PROJECTDIR.$c->img); ?> " class="imagem_produtos5">  
                </div>
         
          
         <?php } ?>

        </div>
    <div class="venda_itens">
            <div class="adicionados_venda">
                <p class="itens_adc"> Itens adicionados</p>
                <ul class="lst_itens_adc">
                    <?php 
                         $totalProdutos = 0;
                        foreach($carrinho as $c){ ?> 
                      <li class="item_lst_adc"><?php  echo ($c->prato->nomePrato." ". $c->qtd); ?>
                          <form method="post" action="<?php echo(PROJECTDIR)?>carrinho/deletarItemCompra/<?php  echo ($c->codCarrinho); ?>"> 
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
        <!-- <div class="adicionados_venda">
       <p class="itens_adc"> Frete </p>
   		
        <form class="login-form" action="../home/venda">
            <input class="campo_frete" type="text" name="txtnome"> 
          <input class="btn_adquirir" type="submit" value=" Calcular Frete"> 
            
         </form>
         <p class="itens_adc"> Valor do Frete  </p>
        <p class="qnt_adc"> R$ 20,00. </p>
        
        </div> -->
        
        <?php if($carrinho != null){ ?> 
            <div class="adicionados_venda">
            <p class="itens_adc"> Total </p>
            <p class="qnt_adc"> R$ <?php  echo ($totalProdutos); ?> </p>
            <p class="itens_adc"> Forma de Pagamento: </p>
            <p class="qnt_adc"> Boleto </p>
            <!-- <form class="login-form" method="post" action="../boleto.php" target="_blank"> -->
            <form class="login-form" method="post" action="../home/confirmaEndereco"> 
              <input class="btn_adquirir" type="submit" value="Concluir a compra"> 
             </form>
        <?php } ?> 
   </div>
    
    </div>
  

    
    
</div>