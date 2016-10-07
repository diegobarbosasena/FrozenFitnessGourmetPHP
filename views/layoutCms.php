<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php  echo PROJECTDIR; ?>conteudo/css/style_cms.css">
<title>Untitled Document</title>
</head>

<body>
	<div class="area_cms">
    	<div class="cabecalho_cms">
        	<div class="tempo">
                <div class="data_cms">
                    05/09/2016
                </div>
                <div class="hora_cms">
                    15:30
                </div>
            </div>    
        	<div class="logo">
            </div>
            <div class="bemvindo_cms">
            	<p> Bem vindo(a), Janaína </p> 
                
                <p> <a class="sair" href="../home/index"> Sair </a> </p>
            </div>
    	</div>
        
       <div class="conteudo_crescer">
            <div class="menu_cms">
                    <ul class="menu_cms_link">

                        <li><a href="<?php  echo PROJECTDIR; ?>prato/index" class="link">Adm. Prato Pronto</a></li>
                        <li><a href="<?php  echo PROJECTDIR; ?>objetivo/index" class="link">Adm. Objetivo</a></li>
                         <li><a href="<?php  echo PROJECTDIR; ?>categoria/index" class="link">Adm. Categoria</a></li>
                        <li><a href="<?php  echo PROJECTDIR; ?>ingrediente/index" class="link">Adm. Ingredientes</a></li>
                        <li><a href="<?php  echo PROJECTDIR; ?>produtocms/index" class="link">Adm. Produtos</a></li>
                        <li><a href="<?php  echo PROJECTDIR; ?>usuario/index" class="link">Adm. Usuários</a></li>
                        <li><a href="<?php  echo PROJECTDIR; ?>promocao/index" class="link">Adm. Promoção</a></li>
                        <li><a href="<?php  echo PROJECTDIR; ?>estoque/index" class="link">Adm. Estoque</a></li>
                         <li><a href="<?php  echo PROJECTDIR; ?>sobre/index" class="link">Sobre a Loja</a></li>
                        <li><a href="<?php  echo PROJECTDIR; ?>markting/index" class="link">Marketing</a></li>
                        <li><a href="<?php  echo PROJECTDIR; ?>parceiro/index" class="link">Parceiros</a></li>
                       

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
