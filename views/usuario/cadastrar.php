
<div class="cadas">Cadastrar Usuario</div>

<form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>funcionario/index">
        <input class="btnVoltar" name="btnvoltar" type="submit" value="Voltar" />
        
</form>

        <form class="frm" name="frmprodutos" method="post" action="<?php echo(PROJECTDIR)?>funcionario/<?php echo($atualizacao) ?>">
		
             <input type="hidden" value="<?php echo($funcionario->codFuncionarioLoja)?>" name="codFuncionarioLoja"/>
            <table>
                  
                  <tr>
                    <td class="campo_frm">Nome:</td>
                    <td><input class="caixa_frm" type="text"   name="txtNome" value="<?php echo($funcionario->nomeFuncionarioLoja)?>"    /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">CPF:</td>
                    <td><input class="caixa_frm"  name="txtCpf" type="text"  value="<?php echo($funcionario->cpfFuncionarioLoja)?>"  /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Usuário:</td>
                    <td><input class="caixa_frm" name="txtUsuario"  type="text" value="<?php echo($funcionario->usuarioFuncionario)?>" /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Senha:</td>
                    <td><input class="caixa_frm" name="txtSenha" type="text" value="<?php echo($funcionario->senhaFuncionario)?>" /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Confirmar senha:</td>
                    <td><input class="caixa_frm" name="txtConfirmaSenha" type="text" value="<?php echo($funcionario->confirmacaoSenha)?>"  /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Tipo:</td>
                    <td >  <select size="1" name="slecioneTipoUsuario">
				     
                    <option selected value="Selecione">Selecione:</option>
                         <?php
                            require_once('controllers/tipoUsuario_controller.php');

                            $controllerTipo = new tipoUsuario_controller();

                            $rs=$controllerTipo->listarTodos();

                            $cont=0;

                            while ($cont < count($rs)){
        
                        ?>  

                            <option value="<?php echo($rs[$cont]->codTipoUsuario); ?>"><?php echo($rs[$cont]->nomeTipoUsuario);?></option>
                        <?php
                            
                            $cont++;
                        }


                        ?>
        
                        </select>
						
					</td>
					
                  </tr>

                  <tr>
                      
                    <td></td>
                    <td><input class="btnSalvar" name="btnsalvar" type="submit" value="Salvar" /></td>
                    
                  </tr>
                
                </table>
            
            </form>