<?php 
	require_once('slide.php'); 

?>
<div id="conteudo">

	<?php 		
	foreach($categoria as $c){ 
	?>
    <div class="categoria">
        <a href="<?php  echo (PROJECTDIR)?>produtos/categoria/<?php  echo ($c->codCategoriaPrato); ?>" class="link">
        <div>
			<img src="<?php  echo (PROJECTDIR.$c->imagemCategoriaPrato); ?>" class="categoria1 margin">  
        </div>
        <div class="titulo_categoria1 titulo">
            <?php  echo ($c->nomeCategoriaPrato); ?>  
        </div>
        <div class="descricao_categoria1">
			<?php  echo ($c->descricaoCategoriaPrato); ?>  
        </div>
        </a>
    </div>
    <?php  
	} ?>
    
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
                <div>
					<img src="<?php  echo (PROJECTDIR.$p->imagemPrato); ?>" class="imagem_mais_vendidos1 mais">  
                </div>
                <p class="titulo_mais_vendido"><?php  echo ($p->nomePrato); ?></p>
                <p class="descricao_mais_vendido"><?php  echo ($p->descricaoPrato); ?></p>
                <p class="kcal_mais_vendido"> Calorias: <?php  echo ($p->caloria); ?></p>
                <p class="preco_mais_vendido">R$<?php  echo ($p->precoPrato); ?></p>
               
               
                <form class="login-form" method="post" action="<?php echo(PROJECTDIR)?>home/detalhes/<?php  echo($p->codPrato); ?>"> <input class="btn_detalhes" type="submit" value="Detalhes"> </form>
                    
                 <form class="login-form" method="post" action="<?php echo(PROJECTDIR)?>carrinho/inserir/<?php  echo($p->codPrato); ?>"> <input class="btn_comprar" type="submit" value="Adicionar"> </form>
            
            </div>
		<?php } ?>
            
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
        <?php foreach($dicas as $d){ ?>
        <div>
            <img src="<?php  echo (PROJECTDIR.$d->imagemDica); ?>" class="imagem_dica">  
        </div> 
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
        <div>
            <img src="<?php  echo (PROJECTDIR.$e->imagemExercicio); ?>" class="imagem_exercicio">  
        </div>
        <p class="assunto_exercicio"><?php  echo ($e->tituloExercicio); ?></p>
        <p class="descricao_exercicio">
            <?php  echo ($e->descricaoExercicio); ?>
        </p>
		<?php  } ?>
    </div>
    
    <div class="clear"> </div>
    </div>
</div>           
 
   
    
       

            
            