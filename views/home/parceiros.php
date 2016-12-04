<div id="conteudo">
        <div class="imagem_parceiro">
        </div>
        
        <div class="clear"></div>
        
        
        <?php foreach($parceiros as $p){?>
        <div class="parceiro">
            <div>
                <img src="<?php echo(PROJECTDIR.$p->imagemParceiro);?>" class="img_parceiro"/>
            </div>
            <p class="nome_parceiro"><?php echo($p->nomeParceiro);?></p>
            <p class="tel_parceiro"><?php echo($p->telefoneParceiro);?></p>
            <p class="desc_parceiro"><?php echo($p->siteParceiro);?></p>
        </div>
        <?php } ?>
</div>