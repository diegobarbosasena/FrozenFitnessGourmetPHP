
<form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>parceiro/index">
   <input class="btnVoltar" name="btnvoltar" type="submit" value="Voltar" />
</form>


<div class="cadas">Cadastrar Parceiro</div>

        <form class="frm" name="frmparceiros" enctype="multipart/form-data" method="post" action="<?php echo(PROJECTDIR)?>parceiro/<?php echo($atualizacao)?>">
            <input type="hidden" value="<?php echo($parceiro->codParceiro)?>" name="codParceiro"/>
            <table>
                  
                  <tr>
                    <td class="campo_frm">Nome:</td>
                    <td><input name="txtNome" class="caixa_frm" type="text"  maxlength="60"   value="<?php echo($parceiro->nomeParceiro)?>"    /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">CNPJ:</td>
                    <td><input class="caixa_frm"  name="txtCnpj" type="text"  maxlength="14" value="<?php echo($parceiro->cnpjParceiro)?>"  onkeypress="mascara(this,'###-###-###/##')"  placeholder="111 111 111 11"/></td>
                  </tr>
                 <tr>
                    <td class="campo_frm">Imagem:</td>
                    <td><input  name="imagemParceiro" type="file" value="<?php echo($parceiro->imagemParceiro)?>"  /></td>
                  </tr>
                     
                  
                  <tr>
                    <td class="campo_frm">Site:</td>
                    <td><input class="caixa_frm" name="txtsite"  maxlength="100" placeholder="http://www.smartgourmet.com.br" type="url" value="<?php echo($parceiro->siteParceiro)?>" /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Telefone:</td>
                    <td><input class="caixa_frm" name="txttelefone" placeholder="00 0000-0000" type="tel" maxlength="12" onkeypress="mascara(this,'## ####-####')" value="<?php echo($parceiro->telefoneParceiro)?>" /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Email:</td>
                    <td>
                    	<input class="caixa_frm" name="txtemail" maxlength="100" placeholder="frozen@smart.com" type="email" value="<?php echo($parceiro->emailParceiro)?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"/>
                    </td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Logradouro:</td>
                    <td><input class="caixa_frm" name="txtlogradouro" maxlength="60" type="text" value="<?php echo($parceiro->endereco->logradouro)?>" /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">CEP:</td>
                    <td><input class="caixa_frm" name="txtcep"  maxlength="9" type="text" onkeypress="mascara(this,'#####-###')"  placeholder="00000 000"value="<?php echo($parceiro->endereco->cep)?>"  /></td>
                  </tr>    
                  <tr>
                    <td class="campo_frm">Numero:</td>
                    <td><input class="caixa_frm" name="txtnumero"  maxlength="5" type="text" value="<?php echo($parceiro->endereco->numero)?>"  /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Bairro:</td>
                    <td><input class="caixa_frm" name="txtbairro"  maxlength="30" type="text" value="<?php echo($parceiro->endereco->bairro)?>"  /></td>
                  </tr>
                  
                
                  <tr>
                    <td class="campo_frm">Estado:</td>
                    <td >  <select size="1" name="codEstado">
						<option selected value="Selecione">Selecione:</option>		
						 
						 <?php
							
							foreach ($listaEstados as $end->cidade->estado){
						?>   
                         

                            <option value="<?php echo($end->cidade->estado->codEstado); ?>"><?php echo($end->cidade->estado->nomeEstado);?></option>
                        <?php
                            
							}

                        ?>
                        </select>
                    </td>
                  </tr>
                <tr>
                    <td class="campo_frm">Cidade:</td>
                    <td >  <select size="1" name="codCidade">

                            <option selected value="Selecione">Selecione:</option>

                             
						 <?php
							
							foreach ($listaCidades as $end->cidade){
						?>   
                         

                            <option value="<?php echo($end->cidade->codCidade); ?>"><?php echo($end->cidade->nomeCidade);?></option>
                        <?php
                            
							}

                        ?>

                        </select>
                    </td>
                  </tr>
                    
                  <tr>
                    <td class="campo_frm">Complemento:</td>
                    <td>
                    <input class="caixa_frm" name="txtcomplemento"  maxlength="60" type="text" value="<?php echo($parceiro->endereco->complemento)?>"  />
                      </td>
                    
        
                  </tr>  
                
                  <tr>
                      
                    <td></td>
                    <td><input class="btnSalvar" name="btnsalvar" type="submit" value="Salvar" /></td>
                    
                  </tr>
                
                </table>
            
            </form>