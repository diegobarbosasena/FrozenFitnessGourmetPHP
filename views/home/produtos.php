
<div id="conteudo">

    <?php 
        require_once('views/menu/menuProdutos.php'); 
    ?>

    <div class="area_produtos">
        
        <?php foreach($prato as $p){ ?>
        <div class="produtos">
            <div class="imagem_produtos1">
            </div>
            <p class="titulo_produtos"> <?php  echo ($p->nomePrato); ?></p>
            <p class="descricao_produto">
                <?php  echo ($p->descricaoPrato); ?>
            </p>
            <p class="kcal_produtos"> Calorias: <?php  echo ($p->caloria); ?></p>
            <p class="preco_produtos">R$<?php  echo ($p->precoPrato); ?></p>
          
            <form class="login-form" method="post" action="<?php echo(PROJECTDIR)?>home/detalhes/<?php  echo($p->codPrato); ?>"> <input class="btn_detalhes" type="submit" value="Detalhes"> </form>
            
            <!-- <button type="button" onclick="addProduto(<?php echo($p->codPrato)?>);"> Comprar </button> -->
            
            <form class="login-form" method="post" action="<?php echo(PROJECTDIR)?>carrinho/inserir/<?php  echo($p->codPrato); ?>"> <input class="btn_comprar" type="submit" value="Adicionar"> </form>
            
            
        </div>
        
        <?php }?>

        <!-- <div class="produtos">
            <div class="imagem_produtos2">
            </div>
            <p class="titulo_produtos"> Frango com Batata Doce</p>
            <p class="descricao_produto">
                Nesse prato podemos contar com uma grande quantidade de energia e nutrientes.
            </p>
            <p class="kcal_produtos">Calorias: 500kcal.</p>
            <p class="preco_produtos">R$45,00.</p>
            <form class="login-form" action="../home/detalhes"> <input class="btn_detalhes" type="submit" value="Detalhes"> 
            <input class="btn_comprar" type="submit" value="Comprar"> </form>
        </div>

        <div class="produtos">
            <div class="imagem_produtos3">
            </div>
            <p class="titulo_produtos"> Salmão ao molho</p>
            <p class="descricao_produto">
                Nesse prato podemos contar com uma grande quantidade de energia e nutrientes.
            </p>
            <p class="kcal_produtos"> Calorias: 500kcal.</p>
            <p class="preco_produtos">R$45,00.</p>
            <form class="login-form" action="../home/detalhes"> <input class="btn_detalhes" type="submit" value="Detalhes"> 
            <input class="btn_comprar" type="submit" value="Comprar"> </form>
        </div>

        <div class="produtos">
            <div class="imagem_produtos4">
            </div>
            <p class="titulo_produtos"> Frango com Brócolis</p>
            <p class="descricao_produto">
                Nesse prato podemos contar com uma grande quantidade de energia e nutrientes.
            </p>
            <p class="kcal_produtos"> Calorias: 500kcal.</p>
            <p class="preco_produtos">R$45,00.</p>
            <form class="login-form" action="../home/detalhes"> <input class="btn_detalhes" type="submit" value="Detalhes"> 
            <input class="btn_comprar" type="submit" value="Comprar"> </form>
        </div>

        <div class="produtos">
            <div class="imagem_produtos1">
            </div>
            <p class="titulo_produtos">Strogonoff Light</p>
            <p class="descricao_produto">
                Nesse prato podemos contar com uma grande quantidade de energia e nutrientes.
            </p>
            <p class="kcal_produtos"> Calorias: 500kcal.</p>
            <p class="preco_produtos">R$45,00.</p>
             <form class="login-form" action="../home/detalhes"> <input class="btn_detalhes" type="submit" value="Detalhes"> 
            <input class="btn_comprar" type="submit" value="Comprar"> </form>
        </div>

        <div class="produtos">
            <div class="imagem_produtos2">
            </div>
            <p class="titulo_produtos"> Frango com Batata Doce</p>
            <p class="descricao_produto">Nesse prato podemos contar com uma grande quantidade de energia e nutrientes.</p>
            <p class="kcal_produtos">Calorias: 500kcal.</p>
            <p class="preco_produtos">R$45,00.</p>
            <form class="login-form" action="../home/detalhes"> <input class="btn_detalhes" type="submit" value="Detalhes"> 
            <input class="btn_comprar" type="submit" value="Comprar"> </form>
        </div>

        <div class="produtos">
            <div class="imagem_produtos3">
            </div>
            <p class="titulo_produtos"> Salmão ao molho</p>
            <p class="descricao_produto">Nesse prato podemos contar com uma grande quantidade de energia e nutrientes.</p>
            <p class="kcal_produtos"> Calorias: 500kcal.</p>
            <p class="preco_produtos">R$45,00.</p>
            <form class="login-form" action="../home/detalhes"> <input class="btn_detalhes" type="submit" value="Detalhes"> 
            <input class="btn_comprar" type="submit" value="Comprar"> </form>
        </div>
        
        <div class="produtos">
            <div class="imagem_produtos2">
            </div>
            <p class="titulo_produtos"> Frango com Batata Doce</p>
            <p class="descricao_produto">
                Nesse prato podemos contar com uma grande quantidade de energia e nutrientes.
            </p>
            <p class="kcal_produtos">Calorias: 500kcal.</p>
            <p class="preco_produtos">R$45,00.</p>
            <form class="login-form" action="../home/detalhes"> <input class="btn_detalhes" type="submit" value="Detalhes"> 
            <input class="btn_comprar" type="submit" value="Comprar"> </form>
        </div>


        <div class="produtos">
            <div class="imagem_produtos4">
            </div>
            <p class="titulo_produtos"> Frango com Brócolis</p>
            <p class="descricao_produto">Nesse prato podemos contar com uma grande quantidade de energia e nutrientes.</p>
            <p class="kcal_produtos"> Calorias: 500kcal.</p>
            <p class="preco_produtos">R$45,00.</p>
           <form class="login-form" action="../home/detalhes"> <input class="btn_detalhes" type="submit" value="Detalhes"> 
            <input class="btn_comprar" type="submit" value="Comprar"> </form>
        </div> -->

    </div>
    
</div><!-- conteudo-->
