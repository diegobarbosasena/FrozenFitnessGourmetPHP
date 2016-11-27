<div id="conteudo">
   
    <div class="form">    
        <form class="login-form" method="post" action="<?php  echo PROJECTDIR; ?>usuarios/entrar">
            <input type="text" name="txtusuario" placeholder="Usuário" required/>
            <input type="password" name="txtsenha" placeholder="Senha" required/>
            <input class="button_login" type="submit" name="btnLogin" value="Login"/>

            <p class="message">Não é registrado? <a href="<?php  echo PROJECTDIR; ?>home/cadastro">Crie sua conta</a></p>
        </form>
    </div>
                   
</div>
