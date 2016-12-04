
<div class="cadas">Cadastrar Usuario</div>

<form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>funcionario/index">
        <input class="btnVoltar" name="btnvoltar" type="submit" value="Voltar" />
        
</form>

        <form class="frm" name="frmprodutos" method="post" action="<?php echo(PROJECTDIR)?>funcionario/<?php echo($atualizacao) ?>">
		
             <input type="hidden" value="<?php echo($funcionario->codFuncionarioLoja)?>" name="codFuncionarioLoja"/>
            
            	<input type="hidden" value="<?php echo($funcionario->codUsuario) ?>" name="codUsuario"/>

            <table>
                  
                  <tr>
                    <td class="campo_frm">Nome:</td>
                    <td><input class="caixa_frm" type="text"   name="txtNome" value="<?php echo($funcionario->nomeFuncionarioLoja)?>" required onkeypress="return txtBoxFormat(event);"   /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">CPF:</td>
                    <td><input class="caixa_frm"  name="txtCpf" type="text"  value="<?php echo($funcionario->cpfFuncionarioLoja)?>" required   onkeypress="mascara(this,'###-###-###/##')" maxlength="14" placeholder="111 111 111 11"/></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Usuário:</td>
                    <td><input class="caixa_frm" name="txtUsuario"  type="text" value="<?php echo($funcionario->usuarioFuncionario)?>" required /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Senha:</td>
                    <td><input class="caixa_frm" name="txtSenha" type="password" value="<?php echo($funcionario->senhaFuncionario)?>" required /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Confirmar senha:</td>
                    <td><input class="caixa_frm" name="txtConfirmaSenha" type="password" value="<?php echo($funcionario->confirmacaoSenha)?>" required /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Tipo:</td>
                    <td >  <select size="1" name="codTipoUsuario" required>
				     
                    <option selected value="Selecione">Selecione:</option>
                         <?php
                            require_once('controllers/tipoUsuario_controller.php');

                            $controllerTipo = new tipoUsuario_controller();

                            $rs=$controllerTipo->listarTodos();

                            $cont=0;

                            while ($cont < count($rs)){
        
                        ?>  

                            <option value="<?php echo($rs[$cont]->codTipoUsuario); ?>" required><?php echo($rs[$cont]->nomeTipoUsuario);?></option>
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