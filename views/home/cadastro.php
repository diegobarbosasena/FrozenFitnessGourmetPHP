    <div id="conteudo">
        
        <div class="clear"></div>
        
        <div class="area_contato">
            <form id="formulario" method="post" action="<?php echo(PROJECTDIR)?>clientes/<?php echo($atualizacao)?> "> 
				
				 <input type="hidden" value="<?php echo($cliente->codCliente)?>" name="codCliente"/>
				 <input type="hidden" value="<?php echo($cliente->endereco->codEndereco)?>" name="codEndereco"/>
				 <input type="hidden" value="<?php echo($cliente->codUsuarioCliente)?>" name="codUsuarioCliente"/>
			
                <fieldset>
                    
                    <legend> Dados Pessoais</legend>
                    <div class="altura"> </div>
                    <label>Nome:</label> <input name="txtnomecliente" class="campo_nome" type="text"  maxlength="40" placeholder="Digite seu nome" value="<?php echo $cliente->nomeCliente; ?>" required onkeypress="return txtBoxFormat(event);">
  
                    <br> <label>Email:</label> <input  name="txtemailcliente" maxlength="40" class="campo_nome"placeholder="frozen@smart.com" type="email" value="<?php echo $cliente->emailCliente; ?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                    
                    <br> <label>CPF:</label> <input maxlength="14"  name="txtcpfcliente" class="campo_cpf" type="text"  placeholder="111 111 111 11" value="<?php echo $cliente->cpfCliente; ?>" 
                                                    onkeypress="mascara(this,'###-###-###/##')">
                    <br> <label>Data de Nascimento:</label> <input  name="txtdtnascimento"  class="campo_data"  pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" placeholder="dd/mm/aaaa" type="date" value="<?php echo $cliente->dtNascCliente; ?>" required>
                    <br> <label>Peso:</label> <input  name="txtpesocliente"  class="campo_nome" type="number" maxlength="6" placeholder="00" value="<?php echo $cliente->peso;?>"  onkeypress="mascara(this,'###.##')" required>
                    <br> <label>Altura:</label> <input  name="txtalturacliente" class="campo_altura" type="number" placeholder="0.00" maxlength="3" value="<?php echo $cliente->altura; ?>" required>
                    <br> <label>Celular:</label> <input  name="txtcelcliente" class="campo_celular" placeholder="00 0000-0000" type="tel" maxlength="13" onkeypress="mascara(this,'## # ####-####')" required >
                    <br> <label>Telefone:</label> <input  name="txttelcliente" class="campo_telefone" placeholder="00 0000-0000" type="tel" maxlength="12" onkeypress="mascara(this,'## ####-####')" value="<?php echo $cliente->telefoneCliente; ?>" required >                               
                   <br>
                <input TYPE="radio" NAME="txtsexo" VALUE="F" checked> Feminino
                <input TYPE="radio" NAME="txtsexo" VALUE="M"> Masculino
                <br>
                <div class="altura"> </div> 
                <tr>
                    <td class="campo_frm">Objetivo:</td>
                    <td >  <select size="1" name="codObjetivo">

                            <option selected value="Selecione">Selecione:</option>

                             
						 <?php
							
							foreach ($listaObjetivos as $cliente->objetivo){
						?>   
                         

                            <option value="<?php echo($cliente->objetivo->codObjetivo); ?>"><?php echo($cliente->objetivo->nomeObjetivo);?></option>
                        <?php
                            
							}

                        ?>

                        </select>
                    </td>
                  </tr>  
                  <p>  </p>

                </fieldset>     
                <fieldset>
                    <legend> Endereco</legend>
                    <div class="altura"> </div>
                    <br> <label>Logradouro</label> <input name="txtlogradouro" class="campo_logradouro" type="text" placeholder="Rua, Av " value="<?php echo $cliente->endereco->logradouro; ?>" required>               
                    <br> <label>Numero:</label> <input name="txtnumero" class="campo_numero" type="text" placeholder="00" value="<?php echo $cliente->endereco->numero; ?>" required>
                    <br> <label>Bairro:</label> <input name="txtbairro" class="campo_bairro" type="text" placeholder="Nome do Bairro" value="<?php echo $cliente->endereco->bairro; ?>" required >
                    <br> <label>CEP:</label> <input name="txtcep" class="campo_cep" type="text" maxlength="9" placeholder="00000 000" value="<?php echo $cliente->endereco->cep; ?>" onkeypress="mascara(this,'#####-###')" required>
					<br> <label>Complemento:</label> <input name="txtcomplemento" class="campo_rua" type="text" value="<?php echo $cliente->endereco->complemento; ?>">
                    <br> <label>Estado:</label>
                        <select size="1" name="codEstado">

						<option selected value="Selecione">Selecione:</option>		
						 
						 <?php
							
							foreach ($listaEstados as $end->cidade->estado){
						?>   
                         

                            <option value="<?php echo($end->cidade->estado->codEstado); ?>"><?php echo($end->cidade->estado->nomeEstado);?></option>
                        <?php
                            
							}

                        ?>
                        </select>
                     <label>Cidade:</label>
                        <select size="1" name="codCidade">
                           
                            <option selected value="Selecione">Selecione:</option>

                             
						 <?php
							
							foreach ($listaCidades as $end->cidade){
						?>   
                         

                            <option value="<?php echo($end->cidade->codCidade); ?>"><?php echo($end->cidade->nomeCidade);?></option>
                        <?php
                            
							}

                        ?>

                        </select>
                    <div class="altura"> </div>     

                    </fieldset>
                     <fieldset>
                    <legend> Login</legend>
                         <div class="altura"> </div>
                        
                            <br> <label>Usuario:</label> <input name="txtusuario" class="campo_usuario" type="text" placeholder="Digite um nome para seu Login" value="<?php echo $cliente->usuarioCliente; ?>" required>
                            <br> <label>Senha:</label> <input name="txtsenha" class="campo_senha" type="password" placeholder="Digite sua senha" maxlength="10" required>
                            <br> <label>Confirmar Senha:</label> <input name="txtconfirmasenha" class="campo_confirmar_senha" type="password" maxlength="10" placeholder="Digite sua senha novamente" required>
                           
                            <br>

                    <br> <input class="btn_contato" type="submit" value="Enviar"> 
                    <div class="altura"> </div>     
                </fieldset> 
            </form>
        </div>
        
        <div class="clear"></div>
        
        
			
     </div><!-- conteudo-->