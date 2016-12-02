<div id="conteudo">
     
    <p class="monte"> Personalize seu prato! </p>
            
    <div class="per_prods"> 
       
     <div class="escolher_monte">  
         
     
	
	 <form class="login-form" method="post" action="<?php echo(PROJECTDIR)?>carrinho/inserirPersonalizado">
		 <div>	
			
			<div class="categoria_monte"> Itens </div>
          
				<select class="montar" size="1" name="cboItens">
				   
					<?php foreach($produto as $p){ ?>
					<option value="<?php  echo($p->codProduto); ?>"><?php echo ($p->nomeProduto); ?></option>
					<?php

						
					} ?>
				</select>
				
				<!--<div id="">
					<input class="btn_mais" type="submit" value=""> 
				</div>
				<div class="quantidade"> 10 </div>
				<div id="">
					<input class="btn_menos" type="submit" value=""> 
				</div> -->
       
		</div>
		
        <!-- <button id="AddItem" onclick="MoreItens('escolher_monte')" >Add Item</button> -->
		
		 <input class="btn_comprar" type="submit" value="Add Item"> 
		 </form>
     </div>
        
	  <div class="escolher_monte">  
	  <form class="login-form" method="post" action="<?php echo(PROJECTDIR)?>carrinho/inserirPersonalizado">
		 <div>	
			
			<div class="categoria_monte"> Sobremesas </div>
          
				<select class="montar" size="1" name="cboItens">
				   
					<?php foreach($sobremesa as $p){ ?>
					<option value="<?php echo ($p->codProduto); ?>"><?php echo ($p->nomeProduto); ?></option>
					<?php } ?>
				</select>
				
			<!--<div id="">
					<input class="btn_mais" type="submit" value=""> 
				</div>
				<div class="quantidade"> 10 </div>
				<div id="">
					<input class="btn_menos" type="submit" value=""> 
				</div> -->
		</div>
		
        <!-- <button id="AddItem" onclick="MoreItens('escolher_monte')" >Add Item</button> -->
		
		 <input class="btn_comprar" type="submit" value="Add Item"> 
		 </form>
	 
	</div>
	 
	  <div class="escolher_monte">  
	  <form class="login-form" method="post" action="<?php echo(PROJECTDIR)?>carrinho/inserirPersonalizado">
		 <div>	
			
			<div class="categoria_monte"> Bebidas </div>
          
				<select class="montar" size="1" name="cboItens">
				   <?php foreach($bebida as $p){ ?>
					<option value="<?php echo ($p->codProduto); ?>"><?php echo ($p->nomeProduto); ?></option>
					<?php } ?>
				</select>
				
			<!--<div id="">
					<input class="btn_mais" type="submit" value=""> 
				</div>
				<div class="quantidade"> 10 </div>
				<div id="">
					<input class="btn_menos" type="submit" value=""> 
				</div> -->
       
		</div>
		
        <!-- <button id="AddItem" onclick="MoreItens('escolher_monte')" >Add Item</button> -->
		
		 <input class="btn_comprar" type="submit" value="Add Item"> 
		</form>
       	</div>     
        
    </div>
    
     
    <div class="per_itens">
       <div class="adicionados">
            <p class="itens_adc"> Itens adicionados</p>
		   <ul class="lst_itens_adc">

			<?php 
                         $totalProdutos = 0;
                        foreach($carrinho as $c){ ?> 
						
				

                  <li class="item_lst_adc"><?php  echo ($c->produto->nomeProduto." ". $c->qtd ); ?>
                      <form method="post" action="<?php echo(PROJECTDIR)?>carrinho/deletarItem/<?php  echo ($c->codCarrinho); ?>"> 
                        <input class="btn_dlt_item" type="submit" value=""> 
                      </form>
                  </li>
            
				  
				  <?php
                        $totalProdutos = $totalProdutos + $c->total;                          
                                                  
                        } ?>
            </ul>
       </div>


    
	   

            <div class="adicionados">
            <p class="itens_adc"> Total </p>
            <p class="qnt_adc"> R$ <?php  echo ($totalProdutos); ?> </p>
            <p class="itens_adc"> Forma de Pagamento: </p>
            <p class="qnt_adc"> Boleto </p>
            <!-- <form class="login-form" method="post" action="../boleto.php" target="_blank"> -->
            <form class="login-form" method="post" action="../home/confirmaEnderecoPersonalizado"> 
              <input class="btn_adquirir" type="submit" value="Concluir a compra"> 
             </form>

  
   </div>
  </div>  
    
</div>