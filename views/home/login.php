<div id="conteudo">
    <form class="login-form" method="post" action="<?php  echo PROJECTDIR; ?>usuarios/entrar">
            <input class="login_caixa" type="text" name="txtusuario" placeholder="username" required/>
            <input class="login_caixa"type="password" name="txtsenha" placeholder="password" required/>
            <input class="button_login" type="submit" name="btnLogin" value="Login"/>
                             
            <p class="message">Não é registrado? <a href="<?php  echo PROJECTDIR; ?>home/cadastro">Crie sua conta</a></p>
    </form>

<div>