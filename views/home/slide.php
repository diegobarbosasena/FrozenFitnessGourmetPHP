	
	<div id="slide"> 
            <figure>
                   <span class="trs next">&raquo;</span>
                   <span class="trs prev">&laquo;</span>
 
   			<!--<div id="slider">
             <a href="#" class="trs" ><img src="../conteudo/imagem/slide1.png"  /></a>
              <a href="#" class="trs"><img src="../conteudo/imagem/slide2.png"  /></a>
              <a href="#" class="trs"><img src="../conteudo/imagem/slide3.png"  /></a>   			
             </div> -->
                
            <div id="slider">
                <?php foreach($slide as $s){ ?>
             <a href="#" class="trs" ><img src="<?php echo(PROJECTDIR.$s->linkImagemSlider); ?>"  /></a>
              <?php } ?>  			
             </div>
 
   			<figcaption></figcaption>
			</figure>
            </div>
            
           <script type="text/javascript">
				function setaImagem(){
					var settings = {
					primeiraImg: function(){
					elemento = document.querySelector("#slider a:first-child");
					elemento.classList.add("ativo");
					this.legenda(elemento);
				},
 
        		slide: function(){
            	elemento = document.querySelector(".ativo");
 
            if(elemento.nextElementSibling){
                elemento.nextElementSibling.classList.add("ativo");
                settings.legenda(elemento.nextElementSibling);
                elemento.classList.remove("ativo");
            }else{
                elemento.classList.remove("ativo");
                settings.primeiraImg();
            }
 
        },
 
        proximo: function(){
            clearInterval(intervalo);
            elemento = document.querySelector(".ativo");
 
            if(elemento.nextElementSibling){
                elemento.nextElementSibling.classList.add("ativo");
                settings.legenda(elemento.nextElementSibling);
                elemento.classList.remove("ativo");
            }else{
                elemento.classList.remove("ativo");
                settings.primeiraImg();
            }
            intervalo = setInterval(settings.slide,4000);
        },
 
        anterior: function(){
            clearInterval(intervalo);
            elemento = document.querySelector(".ativo");
 
            if(elemento.previousElementSibling){
                elemento.previousElementSibling.classList.add("ativo");
                settings.legenda(elemento.previousElementSibling);
                elemento.classList.remove("ativo");
            }else{
                elemento.classList.remove("ativo");						
                elemento = document.querySelector("a:last-child");
                elemento.classList.add("ativo");
                this.legenda(elemento);
            }
            intervalo = setInterval(settings.slide,4000);
        },
 
        legenda: function(obj){
            var legenda = obj.querySelector("img").getAttribute("alt");
            document.querySelector("figcaption").innerHTML = legenda;
        }
 
    }
 
		//chama o slide
		settings.primeiraImg();
	 
		//chama a legenda
		settings.legenda(elemento);
	 
		//chama o slide à um determinado tempo
		var intervalo = setInterval(settings.slide,4000);
		document.querySelector(".next").addEventListener("click",settings.proximo,false);
		document.querySelector(".prev").addEventListener("click",settings.anterior,false);
	}
	 
	window.addEventListener("load",setaImagem,false);
	</script>
			  