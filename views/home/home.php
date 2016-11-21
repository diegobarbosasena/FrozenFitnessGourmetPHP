<?php 
	require_once('slide.php'); 

?>
<div id="conteudo">

	<?php 		
	foreach($categoria as $c){ 
	?>
    <div class="categoria">
        <div class="categoria1 margin">

        </div>
        <div class="titulo_categoria1 titulo">
            <?php  echo ($c->nomeCategoriaPrato); ?>  
        </div>
        <div class="descricao_categoria1">
			<?php  echo ($c->descricaoCategoriaPrato); ?>  
        </div>
    </div>
			
    <?php  
	} ?>
	<!-- <div class="categoria">
        <div class="categoria2 margin">

        </div>
        <div class="titulo_categoria2 titulo">
            Energia e Resistência   
        </div>
        <div class="descricao_categoria2">
            Capacidade de superação da resistência externa e de contra-ação a esta resistência, alimentação é essencial nesse processo.
        </div>
    </div>    
    <div class="categoria">
        <div class="categoria3 margin">
        </div>
        <div class="titulo_categoria3 titulo">
            Emagrecimento   
        </div>
        <div class="descricao_categoria3">
            As gorduras localizadas no nosso corpo não apareceram ali do dia para noite, mas são resultados de meses ou anos de uma alimentação não equilibrada.
        </div>
    </div> -->
    
    <div class="clear"> </div>
    
    <div class="vendidos">            
        
        <div class="mais_vendidos">
            Produtos em Destaque
        </div>
        
        <div class="icone3">
        </div>

        <div class="area_mais_vendidos">

		<?php foreach($prato as $p){ ?>
			<div class="pratos_mais_vendidos">
                <div class="imagem_mais_vendidos1 mais">
                </div>
                <p class="titulo_mais_vendido"><?php  echo ($p->nomePrato); ?></p>
                <p class="descricao_mais_vendido"><?php  echo ($p->descricaoPrato); ?></p>
                <p class="kcal_mais_vendido"> Calorias: <?php  echo ($p->caloria); ?></p>
                <p class="preco_mais_vendido">R$<?php  echo ($p->precoPrato); ?></p>
                <form class="login-form" action="<?php echo(PROJECTDIR)?>home/detalhes/<?php  echo($p->codPrato); ?>"> <input class="btn_detalhes" type="submit" value="Detalhes"> 
                <input class="btn_comprar" type="submit" value="Comprar"> </form>
            </div>
		<?php } ?>
            <!--<div class="pratos_mais_vendidos">
                <div class="imagem_mais_vendidos1 mais">
                </div>
                <p class="titulo_mais_vendido">Strogonoff Light</p>
                <p class="descricao_mais_vendido">Nesse prato podemos contar com uma grande quantidade de energia e nutrientes.</p>
                <p class="kcal_mais_vendido"> Calorias: 500kcal.</p>
                <p class="preco_mais_vendido">R$45,00.</p>
                <form class="login-form" action="../home/detalhes"> <input class="btn_detalhes" type="submit" value="Detalhes"> 
                <input class="btn_comprar" type="submit" value="Comprar"> </form>
            </div>

            <div class="pratos_mais_vendidos">
                <div class="imagem_mais_vendidos2 mais">
                </div>
                <p class="titulo_mais_vendido"> Frango com Batata Doce</p>
                <p class="descricao_mais_vendido">Nesse prato podemos contar com uma grande quantidade de energia e nutrientes.</p>
                <p class="kcal_mais_vendido">Calorias: 500kcal.</p>
                <p class="preco_mais_vendido">R$45,00.</p>
                 <form class="login-form" action="../home/detalhes"> <input class="btn_detalhes" type="submit" value="Detalhes"> 
                <input class="btn_comprar" type="submit" value="Comprar"> </form>
            </div>

            <div class="pratos_mais_vendidos">
                <div class="imagem_mais_vendidos3 mais">
                </div>
                <p class="titulo_mais_vendido"> Salmão ao molho</p>
                <p class="descricao_mais_vendido">Nesse prato podemos contar com uma grande quantidade de energia e nutrientes.</p>
                <p class="kcal_mais_vendido"> Calorias: 500kcal.</p>
                <p class="preco_mais_vendido">R$45,00.</p>
                 <form class="login-form" action="../home/detalhes"> <input class="btn_detalhes" type="submit" value="Detalhes"> 
                <input class="btn_comprar" type="submit" value="Comprar"> </form>
            </div>

            <div class="pratos_mais_vendidos">
                <div class="imagem_mais_vendidos4 mais">
                </div>
                <p class="titulo_mais_vendido"> Frango com Brócolis</p>
                <p class="descricao_mais_vendido">Nesse prato podemos contar com uma grande quantidade de energia e nutrientes.</p>
                <p class="kcal_mais_vendido"> Calorias: 500kcal.</p>
                <p class="preco_mais_vendido">R$45,00.</p>
                 <form class="login-form" action="../home/detalhes"> <input class="btn_detalhes" type="submit" value="Detalhes"> 
                <input class="btn_comprar" type="submit" value="Comprar"> </form>
            </div>
            
            <div class="pratos_mais_vendidos">
                <div class="imagem_mais_vendidos1 mais">
                </div>
                <p class="titulo_mais_vendido">Strogonoff Light</p>
                <p class="descricao_mais_vendido">Nesse prato podemos contar com uma grande quantidade de energia e nutrientes.</p>
                <p class="kcal_mais_vendido"> Calorias: 500kcal.</p>
                <p class="preco_mais_vendido">R$45,00.</p>
                 <form class="login-form" action="../home/detalhes"> <input class="btn_detalhes" type="submit" value="Detalhes"> 
                     <input class="btn_comprar" type="submit" value="Comprar"> </form>
            </div>
            
            <div class="pratos_mais_vendidos">
                <div class="imagem_mais_vendidos2 mais">
                </div>
                <p class="titulo_mais_vendido"> Frango com Batata Doce</p>
                <p class="descricao_mais_vendido">Nesse prato podemos contar com uma grande quantidade de energia e nutrientes.</p>
                <p class="kcal_mais_vendido">Calorias: 500kcal.</p>
                <p class="preco_mais_vendido">R$45,00.</p>
                 <form class="login-form" action="../home/detalhes"> <input class="btn_detalhes" type="submit" value="Detalhes"> 
                <input class="btn_comprar" type="submit" value="Comprar"> </form>
            </div> -->

        </div>

    </div> 
    
    <div class="clear"> </div>
    
    <div class="monte_ja"> 
        <form method="post" action="../home/personalizado">
            <p class="text_personalizado"> A verdadeira gastronomia está no que você ainda vai criar!</p>    
           <input class="btn_monteja" type="submit" value="Experimente"> 
        </form>
    </div> <!-- monte seu prato-->
    
    <div class="clear"> </div>
    
    <div class="dica">
        <p class="titulo_dica_exercicio"> Dica Frozen Fitness</p>
        <div class="icone1">
        </div>
        <div class="imagem_dica">
        </div> <?php foreach($dicas as $d){ ?>
        <p class="assunto_dica"><?php  echo ($d->tituloDica); ?></p>
        <p class="descricao_dica">           
            <?php  echo ($d->descricaoDica); ?>
        </p>
		<?php } ?>
    </div>

    <div class="exercicio">
		<?php foreach($exercicios as $e){ ?>
        <p class="titulo_dica_exercicio"> Exercícios Fitness</p>
        <div class="icone2">
        </div>
        <div class="imagem_exercicio">
        </div>
        <p class="assunto_exercicio"><?php  echo ($e->tituloExercicio); ?></p>
        <p class="descricao_exercicio">
            <?php  echo ($e->descricaoExercicio); ?>
        </p>
		<?php  } ?>
    </div>
    
    <div class="clear"> </div>
    
</div>           
 
   
    
       

            
            