    <div id="conteudo">
        
        <div class="clear"></div>
        
        <div class="area_contato">
            <form id="formulario" method="post" action="<?php echo(PROJECTDIR)?>clientes/<?php echo($atualizacao)?> "> 
				
				 <input type="hidden" value="<?php echo($cliente->codCliente)?>" name="codCliente"/>
			
                <fieldset>
                    
                    <legend> Dados Pessoais</legend>
                    <div class="altura"> </div>
                        <label>Nome:</label> <input name="txtnomecliente" class="campo_nome" type="text" placeholder="Digite seu nome" value="">
                    <br> <label>Email:</label> <input  name="txtemailcliente" class="campo_nome" type="text" placeholder="nome@nome.com">
                    <br> <label>CPF:</label> <input  name="txtcpfcliente" class="campo_cpf" type="text" placeholder="111 111 111 11">
                    <br> <label>Data de Nascimento:</label> <input  name="txtdtnascimento"  class="campo_data" type="text" placeholder="00/00/0000">
                    <br> <label>Peso:</label> <input  name="txtpesocliente"  class="campo_nome" type="text" placeholder="00">
                    <br> <label>Altura:</label> <input  name="txtalturacliente" class="campo_altura" type="text" placeholder="0.00">
                    <br> <label>Celular:</label> <input  name="txtcelcliente" class="campo_celular" type="text" placeholder="00 9 9999 9999">
                    <br> <label>Telefone:</label> <input  name="txttelcliente" class="campo_telefone" type="text" placeholder="00 1111 2222" >
                   
                    <br>
                   
                <INPUT TYPE="radio" NAME="FEMININO" VALUE="op1"> Feminino
                <INPUT TYPE="radio" NAME="MASCULINO" VALUE="op2"> Masculino
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
                    <br> <label>Logradouro</label> <input name="txtlogradouro" class="campo_logradouro" type="text" placeholder="Rua, Av ">               
                    <br> <label>Numero:</label> <input name="txtnumero" class="campo_numero" type="text" placeholder="00">
                    <br> <label>Bairro:</label> <input name="txtbairro" class="campo_bairro" type="text" placeholder="Nome do Bairro">
                    <br> <label>CEP:</label> <input name="txtcep" class="campo_cep" type="text" placeholder="00000 000">
					<br> <label>Complemento:</label> <input name="txtcomplemento" class="campo_rua" type="text" >
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
                        
                            <br> <label>Usuario:</label> <input name="txtusuario" class="campo_usuario" type="text" placeholder="Digite um nome para seu Login">
                            <br> <label>Senha:</label> <input name="txtsenha" class="campo_senha" type="text" placeholder="Digite sua senha">
                            <br> <label>Confirmar Senha:</label> <input name="txtconfirmasenha" class="campo_confirmar_senha" type="text" placeholder="Digite sua senha novamente">
                           
                            <br>

                    <br> <input class="btn_contato" type="submit" value="Enviar"> 
                    <div class="altura"> </div>     
                </fieldset> 
            </form>
        </div>
        
        <div class="clear"></div>
        
        
			
     </div><!-- conteudo-->