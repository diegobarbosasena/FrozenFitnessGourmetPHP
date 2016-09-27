<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../conteudo/css/style_cms.css">
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

                        <li><a href="../cms/AdmPratoPronto" class="link">Adm. Prato Pronto</a></li>
                        <li><a href="../cms/AdmObjetivo" class="link">Adm. Objetivo</a></li>
                         <li><a href="../cms/AdmCategoria" class="link">Adm. Categoria</a></li>
                        <li><a href="../cms/AdmIgrediente" class="link">Adm. Ingredientes</a></li>
                        <li><a href="../cms/AdmProduto" class="link">Adm. Produtos</a></li>
                        <li><a href="../cms/AdmUsuario" class="link">Adm. Usuários</a></li>
                        <li><a href="../cms/AdmPromocao" class="link">Adm. Promoção</a></li>
                        <li><a href="../cms/AdmEstoque" class="link">Adm. Estoque</a></li>
                         <li><a href="../cms/AdmSobre" class="link">Sobre a Loja</a></li>
                        <li><a href="../cms/AdmMarketing" class="link">Marketing</a></li>
                        <li><a href="../cms/AdmParceiro" class="link">Parceiros</a></li>
                       

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
