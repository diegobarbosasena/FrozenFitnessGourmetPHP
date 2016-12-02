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
		