
<div class="cadas">Cadastrar Categoria Materia</div>

<form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>categoria/index">
        <input class="btnVoltar" name="btnvoltar" type="submit" value="Voltar" />
        
</form>

	
	
        <form class="frm" name="frmcategoria" method="post" action="<?php echo(PROJECTDIR)?>categoria/<?php echo($atualizacao) ?>">
	
            
			
			<input type="hidden" value="<?php echo($categoria->codCategoriaMateria)?>" name="codCategoriaMateria"/>
            <table>
                
                  <tr>
                    <td class="campo_frm">Nome:</td>
                    <td><input class="caixa_frm" type="text" name="txtCategoriaMateria"  value="<?php echo($categoria->nomeCategoriaMateria)?>"  required onkeypress="return txtBoxFormat(event);" /></td>
                  </tr>
              
                  

                  <tr>  
                    <td></td>
                    <td><input class="btnSalvar" name="btnsalvar" type="submit" value="Salvar" /></td>
                  </tr>
                
            </table>
            
            </form>