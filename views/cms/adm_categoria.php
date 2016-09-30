<?php 
	
	$nome = "";
?>

<div class="cadas">Cadastrar Categoria</div>

    <form  name="frmconsulta" method="post" action="../cms/ConsultaCategoria">
        <input class="btnConsulta" name="btnconsulta" type="submit" value="Consultar Dados" />
        
    </form>

        <form class="frm" name="frmcategoria" method="post" action="../categoria/<?php echo($acao)?>">
            
            <table>
                  
                  <tr>
                    <td class="campo_frm">Nome:</td>
                    <td><input class="caixa_frm" type="text" name="txtCategoria"  value="<?php echo($nome)?>"    /></td>
                  </tr>
              
                  

                  <tr>  
                    <td></td>
                    <td><input class="btnSalvar" name="btnsalvar" type="submit" value="Salvar" /></td>
                  </tr>
                
            </table>
            
            </form>