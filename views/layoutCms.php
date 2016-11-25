<?php
    function recebe_data(){
        date_default_timezone_set('America/Sao_Paulo');
        $date = date('d/m/Y');

        return $date;
    }

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="<?php  echo PROJECTDIR; ?>conteudo/css/style_cms.css">
<title>.:CMS - Frozen Fitness Gourmet:.</title>
<link rel="icon" href="<?php  echo PROJECTDIR; ?>conteudo/imagem/icone.png">

 
</head>
    
    <?php ob_start(); ?>

<script language="JavaScript"> 

	 function moveRelogio(){ 
        momentoAtual = new Date() 
        hora = momentoAtual.getHours() 
        minuto = momentoAtual.getMinutes() 
        segundo = momentoAtual.getSeconds() 
        
        str_segundo = new String (segundo) 
        
        if (str_segundo.length == 1) 
            segundo = "0" + segundo 

        str_minuto = new String (minuto) 
        
        if (str_minuto.length == 1) 
            minuto = "0" + minuto 

        str_hora = new String (hora) 
       
        if (str_hora.length == 1) 
            hora = "0" + hora 

        horaImprimivel = hora + ":" + minuto + ":" + segundo 

        document.form_relogio.relogio.value = horaImprimivel 

        setTimeout("moveRelogio()",1000) 
    } 
	
	function txtBoxFormat(evtKeyPress) {
		var i, nCount, sValue, fldLen, mskLen,bolMask, sCod, nTecla;

		if(document.all) { // Internet Explorer
			nTecla = evtKeyPress.keyCode;
		} else if(document.layers) { // Nestcape
			nTecla = evtKeyPress.which;
		} else {
			nTecla = evtKeyPress.which;
			if (nTecla == 8) {
				return true;
			}
		}

		if (nTecla != 8)
		  return ((nTecla <= 47) || (nTecla >= 58)); 
		else 
		  return true;
	}
	

</script>

<script language="JavaScript">
	function mascara(t, mask){
		var i= t.value.length;
		var saida = mask.substring(1,0);
		var texto = mask.substring(i)
		if(texto.substring(0,1) != saida){
			t.value += texto.substring(0,1);
		}
	
	}
</script>
    
<body onload="moveRelogio()">  
	<div class="area_cms">
    	<div class="cabecalho_cms">
        	<div class="tempo">
                <div class="data_cms">
                    <?php echo recebe_data(); ?>      
                </div>
                <div class="hora_cms">
                    <form name="form_relogio"> 
                        <input class="relogio" type="text" name="relogio" size="10" onfocus="window.document.form_relogio.relogio.blur()">
                    </form> 
                </div>
            </div>    
        	<div class="logo">
            </div>
            <div class="bemvindo_cms">

            	<p> Bem vindo(a),<?php if(isset($_SESSION['usuarioCms']))
											echo $_SESSION['usuarioCms']; ?> </p> 
                
                <p> <a class="sair" href="<?php  echo PROJECTDIR; ?>home/logOff"> Sair </a> </p>
            </div>
    	</div>
        
       <div class="conteudo_crescer">
            <div class="menu_cms">
                    <ul class="menu_cms_link">

                        <li><a href="<?php  echo PROJECTDIR; ?>prato/index" class="link">Adm. Prato Pronto</a></li>
                        <li><a href="<?php  echo PROJECTDIR; ?>categoriaPrato/index" class="link">Adm. Categoria Prato</a></li> 
                        <li><a href="<?php  echo PROJECTDIR; ?>categoria/index" class="link">Adm. Categoria Matéria</a></li>
                        <li><a href="<?php  echo PROJECTDIR; ?>ingrediente/index" class="link">Adm. Ingredientes</a></li>
                        <li><a href="<?php  echo PROJECTDIR; ?>produtocms/index" class="link">Adm. Produtos</a></li>
                        <li><a href="<?php  echo PROJECTDIR; ?>estoque/index" class="link">Adm. Estoque</a></li>
                        <li><a href="<?php  echo PROJECTDIR; ?>promocao/index" class="link">Adm. Promoção</a></li>
                        <li><a href="<?php  echo PROJECTDIR; ?>sobre/index" class="link">Adm. Sobre a Loja</a></li>
                        <li><a href="<?php  echo PROJECTDIR; ?>marketing/index" class="link">Adm. Marketing</a></li>
                        <li><a href="<?php  echo PROJECTDIR; ?>parceiro/index" class="link">Adm. Parceiros</a></li>
                        <li><a href="<?php  echo PROJECTDIR; ?>objetivo/index" class="link">Adm. Objetivo</a></li>
                        <li><a href="<?php  echo PROJECTDIR; ?>dicas/index" class="link">Adm. Dicas</a></li>
                        <li><a href="<?php  echo PROJECTDIR; ?>exercicios/index" class="link">Adm. Exercicios</a></li>
                        <li><a href="<?php  echo PROJECTDIR; ?>funcionario/index" class="link">Adm. Usuários</a></li>
                        <li><a href="<?php  echo PROJECTDIR; ?>tipoUsuario/index" class="link">Adm. Tipo Usuario</a></li>
                        <li><a href="<?php  echo PROJECTDIR; ?>clientesCms/index" class="link">Clientes</a></li>                      

                    </ul>

            </div>

            <div class="conteudo_cms">
                <?php 
                    require_once('router.php');
                ?>
            </div>
        </div>
    </div>
</body>
</html>
