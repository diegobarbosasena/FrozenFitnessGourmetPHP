
<div class="cadas">Cadastrar Tipo Usuario</div>

<form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>tipoUsuario/index">
        <input class="btnVoltar" name="btnvoltar" type="submit" value="Voltar" />
        
</form>

	
	
        <form class="frm" name="frmcategoria" method="post" action="<?php echo(PROJECTDIR)?>categoria/<?php echo($atualizacao) ?>">
	
            
			
			<input type="hidden" value="<?php echo($tipoUsuario->codTipoUsuario)?>" name="codCategoriaMateria"/>
            <table>
                  
                  <tr>
                    <td class="campo_frm">Nome:</td>
                    <td><input class="caixa_frm" type="text" name="txtTipoUsuario"  value="<?php echo($tipoUsuario->nomeTipoUsuario)?>"    /></td>
                  </tr>
              
                  

                  <tr>  
                    <td></td>
                    <td><input class="btnSalvar" name="btnsalvar" type="submit" value="Salvar" /></td>
                  </tr>
                
            </table>
            
            </form>