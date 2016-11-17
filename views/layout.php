
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php  echo PROJECTDIR; ?>conteudo/css/style.css">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
    <script  type="text/javascript">
       var cont = 1;
        
        function addProduto(codProduto)
        {
            var obj = document.getElementById("contador");
            obj.innerHTML = cont++;
            
            var produto = {};
            produto.id = codProduto;
            produto.qtd = cont;
            
        }
    </script>
        
        <title>Frozen Fitness Gourmet</title>
    </head>
    <body>

        <!-- <div id="contador"> <?php $_SESSION['var'] = "<script>document.write(obj);</script>";
                            echo $_SESSION['var'];?> </div> -->
        
        <div class="menu">
            <div id="logo">
            </div>
            
            <nav>  
                <ul id="menu">
				
                    <li><a href="<?php  echo PROJECTDIR; ?>home/index" class="link">Home</a></li>
                    <li><a href="<?php  echo PROJECTDIR; ?>home/produtos" class="link">Produtos</a></li>
                    <li><a href="<?php  echo PROJECTDIR; ?>home/sobre" class="link">Sobre a Loja</a></li>
                    <li><a href="<?php  echo PROJECTDIR; ?>home/parceiros" class="link">Parceiros</a></li>
                    <li><a href="<?php  echo PROJECTDIR; ?>home/personalizado" class="link">Personalize</a></li>
                    <li><a href="<?php  echo PROJECTDIR; ?>home/contatos" class="link">Contato</a></li>
                   
                </ul>
            </nav>
            
            <div class="nomeusuario"> 
				<a href="<?php  echo PROJECTDIR; ?>home/visualizar">
                <p>Bem Vindo!</p>
                <p> <?php 
					if(isset($_SESSION['usuario']))
						echo $_SESSION['usuario']; ?> </p>
				</a>
            </div>
            
            <div class="botoes">
			
			
                
			<?php if(!isset($_SESSION['usuario']) || $_SESSION['usuario'] == ""){ ?> 
                <div class="login">
                    <a href="#" class="link"></a>
                    <div class="entrar">
                        <div class="form">                          
                            <form class="login-form" method="post" action="<?php  echo PROJECTDIR; ?>usuarios/entrar">
                                <input type="text" name="txtusuario" placeholder="username" required/>
                                <input type="password" name="txtsenha" placeholder="password" required/>
                                <input class="button_login" type="submit" name="btnLogin" value="Login"/>
                             
                                <p class="message">Não é registrado? <a href="<?php  echo PROJECTDIR; ?>home/cadastro">Crie sua conta</a></p>
                            </form>
                        </div>
                    </div>
                </div>
                <?php }else{ ?> 
					
					<a href="<?php  echo PROJECTDIR; ?>home/logOff"  > <div class="logOff" title="Deseja sair?" ></div> </a>
					
					
				<?php } ?> 
                
                <a href="<?php  echo PROJECTDIR;?>home/venda" class="link"> 
                    <div class="carrinho">
                     
                </div> </a>

                <form name="FrmPesquisa" method="post" action="<?php  echo PROJECTDIR;?>home/index">
                    <input class="button_pesquisa" type="submit" name="btnPesquisa" value=""/>
                    <input class="pesquisar" type="text" name="lala" value="" placeholder="Pesquisar...">
                </form>

            </div>
        </div>

        <div class="clear"> </div>

        <?php require_once('router.php'); ?>

        <div class="clear"> </div>

        <footer>
            <div class="links">
                <ul class="rodape">
                    <li><a href="#" class="link_rodape">Loja Online</a></li>
                    <li><a href="#" class="link_rodape">Combos</a></li>
                    <li><a href="#" class="link_rodape">Refeições</a></li>
                    <li><a href="#" class="link_rodape">Dietas</a></li>
                </ul>
                <ul class="rodape">
                    <li><a href="#" class="link_rodape">Loja Online</a></li>
                    <li><a href="#" class="link_rodape">Combos</a></li>
                    <li><a href="#" class="link_rodape">Refeições</a></li>
                    <li><a href="#" class="link_rodape">Dietas</a></li>
                </ul>
            </div>
            <div class="row2">
                <div class="contatos">
                    <a href="../home/parceiros" class="link_rodape2" > Parceiros </a>  •    Contato    •   Pratos prontos   •   Nossas transportadoras
                </div>
                <div class="redes_sociais">
                    <div class="facebook">
                    </div>
                    <div class="youtube">
                    </div>
                    <div class="twiter">
                    </div>
                    <div class="insta">
                    </div>
                </div>
                <div class="clear"></div>
                <p class="direitos"> FROZEN FITNESS GOURMET © TODOS OS DITEITOS RESERVADOS - 2015 </p>
            </div>

        </footer>

    </body>
</html>
