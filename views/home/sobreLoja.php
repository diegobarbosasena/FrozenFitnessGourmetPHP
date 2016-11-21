
<div id="conteudo">
    <?php foreach($sobre as $loja){?>
    <p class="titulo_sobre"> <?php  echo ($loja->tituloSobreLoja); ?>  </p>
    <p class="subtitulo_sobre">História de dedicação e amor em tudo que faz</p>
    <div class="imagem_sobre"></div>
    <p class="descricao_sobre">
		 <?php  echo ($loja->historiaSobreLoja); ?>  
    </p>
    
    <div class="imagem_sobre2 imagemsobre"></div>
    <div class="imagem_sobre3 imagemsobre"></div>
    <div class="imagem_sobre4 imagemsobre"></div>
	<?php } ?>  
</div>