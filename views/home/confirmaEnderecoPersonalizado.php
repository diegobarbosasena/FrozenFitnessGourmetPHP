
<div id="conteudo">
        
        <div class="clear"></div>
        <fieldset class="perfi">
		 <legend class="tit_cliente">Endereço de Entrega</legend>
                    
		      <table class="tbl_dados">
                <?php foreach($cliente as $c){ ?> 
				<tr>
					<td class="dados_cliente_tit">Logradouro:</td>
					<td class="dados_cliente"> <?php  echo ($c->endereco->logradouro); ?></td>
				</tr>
			
				<tr>
					<td class="dados_cliente_tit">Numero:</td>
					<td class="dados_cliente"><?php  echo ($c->endereco->numero); ?></td>
				</tr>
				<tr>
					<td class="dados_cliente_tit">Bairro:</td>
					<td class="dados_cliente"><?php  echo ($c->endereco->bairro); ?></td>
				</tr>
				<tr>
					<td class="dados_cliente_tit">CEP:</td>
					<td class="dados_cliente"><?php  echo ($c->endereco->cep); ?></td>
				</tr>
				<tr>
					<td class="dados_cliente_tit">Estado:</td>
					<td class="dados_cliente"><?php  echo ($c->endereco->cidade->estado->nomeEstado); ?></td>
				</tr>
				<tr>
					<td class="dados_cliente_tit">Cidade:</td>
					<td class="dados_cliente"><?php  echo ($c->endereco->cidade->nomeCidade); ?></td>
				</tr>
				 <?php } ?> 
			  </table>
        
                <form id="formulario" method="post" action="<?php echo(PROJECTDIR)?>pedido/inserirPersonalizado"> 

                        <input class="btn_contato" type="submit" value="Confirmar"> 
                </form>
             <form id="formulario" method="post" action="<?php echo(PROJECTDIR)?>home/outroEnd"> 

                        <input class="btn_contato" type="submit" value="Outro"> 
                </form>
	
        
			
     </div><!-- conteudo-->