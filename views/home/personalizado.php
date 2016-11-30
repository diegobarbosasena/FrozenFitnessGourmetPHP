<div id="conteudo">
    <p class="monte"> Personalize seu prato! </p>
    
    <div class="per_prods">
       
     <div class="escolher_monte">
     <div class="categoria_monte"> Itens </div>
          
        <select class="montar" size="1" name="Carnes">
           
            <?php foreach($produto as $p){ ?>
            <option value="bovina"><?php echo ($p->nomeProduto); ?></option>
            <?php } ?>
        </select>
        
        <form id="">
        	<input class="btn_mais" type="submit" value=""> 
        </form>
        <div class="quantidade"> 10 </div>
        <form id="">
        	<input class="btn_menos" type="submit" value=""> 
        </form>
     </div>
        
    <div class="escolher_monte">
     <div class="categoria_monte"> Sobremesas </div>
          
        <select class="montar" size="1" name="Carnes">
        
            <?php foreach($sobremesa as $p){ ?>
            <option value="bovina"><?php echo ($p->nomeProduto); ?></option>
            <?php } ?>
        </select>
        
        <form id="">
        	<input class="btn_mais" type="submit" value=""> 
        </form>
        <div class="quantidade"> 10 </div>
        <form id="">
        	<input class="btn_menos" type="submit" value=""> 
        </form>
     </div> 
        
    <div class="escolher_monte">
     <div class="categoria_monte"> Bebidas </div>
          
        <select class="montar" size="1" name="Carnes">
            
            <?php foreach($bebida as $p){ ?>
            <option value="bovina"><?php echo ($p->nomeProduto); ?></option>
            <?php } ?>
        </select>
        
        <form id="">
        	<input class="btn_mais" type="submit" value=""> 
        </form>
        <div class="quantidade"> 10 </div>
        <form id="">
        	<input class="btn_menos" type="submit" value=""> 
        </form>
     </div> 
            
        
    </div>
    
    <div class="per_itens">
       <div class="adicionados">
            <p class="itens_adc"> Itens adicionados</p>
            <ul class="lst_itens_adc">
                  <li class="item_lst_adc">Carne Bovina
                      <form>
                        <input class="btn_dlt_item" type="submit" value=""> 
                      </form>
                  </li>
                  <li class="item_lst_adc">Arroz Integral
                      <form>
                        <input class="btn_dlt_item" type="submit" value=""> 
                      </form>
                  </li>
                  <li class="item_lst_adc">Salada Mista
                      <form>
                        <input class="btn_dlt_item" type="submit" value=""> 
                      </form>
                  </li>
            </ul>
       </div>

       <div class="adicionados">
            <p class="itens_adc"> Quantidade em Calorias </p>
            <p class="qnt_adc"> 1505 kcal </p>
            <p class="itens_adc"> Quantidade em Gordura </p>
            <p class="qnt_adc"> 2000g </p>
            <p class="itens_adc"> Quantidade em Sódio </p>
            <p class="qnt_adc"> 300mg </p>

       </div>

        <div class="adicionados">
            <p class="itens_adc"> Total </p>
            <p class="qnt_adc"> R$ 265,04. </p>
             <form class="login-form" action="">
              <input class="btn_adquirir" type="submit" value="Adquirir prato"> </form>
       </div>
  
   
  </div>  
    
</div>