 <div id="conteudo">
	

	<fieldset class="perfil">
		 <legend class="tit_cliente">Meus Dados</legend>
                    
		      <table class="tbl_dados">
				<tr>
					<td class="dados_cliente_tit">Nome:</td>
					<td class="dados_cliente"> <?php echo $cliente->nomeCliente; ?></td>
				</tr>
				<tr>
					<td class="dados_cliente_tit">Email:</td>
					<td class="dados_cliente"><?php echo $cliente->emailCliente; ?></td>
				</tr>
				<tr>
					<td class="dados_cliente_tit">CPF:</td>
					<td class="dados_cliente"><?php echo $cliente->cpfCliente; ?></td>
				</tr>
				<tr>
					<td class="dados_cliente_tit">Data de nascimento:</td>
					<td class="dados_cliente"><?php echo $cliente->dtNascCliente; ?></td>
				</tr>
				<tr>
					<td class="dados_cliente_tit">Peso:</td>
					<td class="dados_cliente"><?php echo $cliente->peso; ?></td>
				</tr>
				<tr>
					<td class="dados_cliente_tit">Altura:</td>
					<td class="dados_cliente"><?php echo $cliente->altura; ?></td>
				</tr>
				<tr>
					<td class="dados_cliente_tit">Celular:</td>
					<td class="dados_cliente"><?php echo $cliente->celularCliente; ?></td>
				</tr>
				<tr>
					<td class="dados_cliente_tit">Telefone:</td>
					<td class="dados_cliente"><?php echo $cliente->telefoneCliente; ?></td>
				</tr>
				<tr>
					<td class="dados_cliente_tit">Sexo:</td>
					<td class="dados_cliente"><?php echo $cliente->sexo; ?></td>
				</tr>
				<tr>
					<td class="dados_cliente_tit">Objetivo:</td>
					<td class="dados_cliente"><?php echo $cliente->objetivo->nomeObjetivo; ?></td>
				</tr>
			
				<tr>
					<td class="dados_cliente_tit">Logradouro:</td>
					<td class="dados_cliente"><?php echo $cliente->endereco->logradouro; ?></td>
				</tr>
			
				<tr>
					<td class="dados_cliente_tit">Numero:</td>
					<td class="dados_cliente"><?php echo $cliente->endereco->numero; ?></td>
				</tr>
				<tr>
					<td class="dados_cliente_tit">Bairro:</td>
					<td class="dados_cliente"><?php echo $cliente->endereco->bairro; ?></td>
				</tr>
				<tr>
					<td class="dados_cliente_tit">CEP:</td>
					<td class="dados_cliente"><?php echo $cliente->endereco->cep; ?></td>
				</tr>
				<tr>
					<td class="dados_cliente_tit">Estado:</td>
					<td class="dados_cliente"><?php echo $cliente->endereco->cidade->estado->nomeEstado; ?></td>
				</tr>
				<tr>
					<td class="dados_cliente_tit">Cidade:</td>
					<td class="dados_cliente"><?php echo $cliente->endereco->cidade->nomeCidade; ?></td>
				</tr>
				
			  </table>
        
                <form id="formulario" method="post" action="<?php echo(PROJECTDIR)?>home/cadastro/<?php echo $cliente->codCliente; ?>"> 

                        <input class="btn_contato" type="submit" value="Editar"> 
                </form>
	</fieldset>
	
	
 </div>
