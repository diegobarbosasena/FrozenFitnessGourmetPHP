<div id="conteudo">
    
    </fieldset>
        <div class="area_contato">
            <form id="formulario" method="post" action="<?php echo(PROJECTDIR)?>clientes/<?php echo($atualizacao)?> "> 
				
				 <input type="hidden" value="<?php echo($cliente->codCliente)?>" name="codCliente"/>
				 <input type="hidden" value="<?php echo($cliente->endereco->codEndereco)?>" name="codEndereco"/>
				 <input type="hidden" value="<?php echo($cliente->codUsuarioCliente)?>" name="codUsuarioCliente"/>
			
           
                <fieldset>
                    <legend> Endereco</legend>
                    <div class="altura"> </div>
                    <br> <label>Logradouro</label> <input name="txtlogradouro" class="campo_logradouro" type="text" placeholder="Rua, Av " value="">               
                    <br> <label>Numero:</label> <input name="txtnumero" class="campo_numero" type="text" placeholder="00" value="">
                    <br> <label>Bairro:</label> <input name="txtbairro" class="campo_bairro" type="text" placeholder="Nome do Bairro" value="">
                    <br> <label>CEP:</label> <input name="txtcep" class="campo_cep" type="text" placeholder="00000 000" value="">
					<br> <label>Complemento:</label> <input name="txtcomplemento" class="campo_rua" type="text" value="">
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
                            <br> <input class="btn_contato" type="submit" value="Enviar">

                        </select>
                    <div class="altura"> </div>     

                   
            </form>
        </div>
        
        <div class="clear"></div>
        
</div>