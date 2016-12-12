
<div id="conteudo">

    <?php 
        require_once('views/menu/menuProdutos.php'); 
    ?>

    <div class="area_produtos">
        
        <?php foreach($listaPratos as $p){ ?>
        <div class="produtos">
            <div>
                <img src="<?php  echo (PROJECTDIR.$p->imagemPrato); ?>" class="imagem_produtos1">  
            </div>
            <p class="titulo_produtos"> <?php  echo ($p->nomePrato); ?></p>
            <p class="descricao_produto">
                <?php  echo ($p->descricaoPrato); ?>
            </p>
            <p class="kcal_produtos"> Calorias: <?php  echo ($p->caloria); ?></p>
            <p class="preco_produtos">R$<?php  echo ($p->precoPrato); ?></p>
          
            <form class="login-form" method="post" action="<?php echo(PROJECTDIR)?>home/detalhes/<?php  echo($p->codPrato); ?>"> <input class="btn_detalhes" type="submit" value="Detalhes"> </form>
            
            <!-- <button type="button" onclick="addProduto(<?php //echo($p->codPrato)?>);"> Comprar </button> -->
            
            <form class="login-form" method="post" action="<?php echo(PROJECTDIR)?>carrinho/inserir/<?php  echo($p->codPrato); ?>"> <input class="btn_comprar" type="submit" value="Adicionar"> </form>
            
        </div>
        
        <?php }?>

       
    </div>
    
</div><!-- conteudo-->
