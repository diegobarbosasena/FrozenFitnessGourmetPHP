<form  name="frmconsulta" method="post" action="../cms/AdmIngrediente">
        
        
</form>
<div class="cadas">Consultar Igredientes</div>
<form name="FrmPesquisa" method="post" action="home.php">
    
    <input class="pesquisarCms" type="text" name="lala" value="" placeholder="Pesquisar...">
    <input class="btnPesquisaCms" type="submit" name="btnPesquisa" value=""/>
</form> 
<form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>ingrediente/cadastrar">
        <input class="btnConsulta" name="btnconsulta" type="submit" value="Cadastrar Dados" />
        
 </form>

<table class="tbl_consulta">
    <tr class="linha_consulta">
        <td class="col_consulta">
            Nome
        </td>
        <td class="col_consulta">
            Quantidade
        </td>
        <td class="col_consulta">
           Caloria
        </td>
        <td class="col_consulta">
           Descrição
        </td>
        <td class="col_consulta">
            Opções
        </td>
    </tr>
    <tr class="linha_consulta">
        <td class="col_consulta">
            Farinha de trigo
            
        </td>
        <td class="col_consulta">
           200 kg
        </td>
        <td class="col_consulta">
           5000 kcal
        </td>
        <td class="col_consulta">
          As gorduras localizadas no nosso corpo não apareceram
        </td>
        <td class="col_consulta" >
            <a href="" class="link"> Editar </a>| <a href="" class="link">Excluir </a>
        </td>
    </tr>
    <tr class="linha_consulta">
        <td class="col_consulta">
            
        </td>
        <td class="col_consulta">
           
        </td>
        <td class="col_consulta">
           
        </td>
        <td class="col_consulta">
          
        </td>
        <td class="col_consulta" >
            <a href="" class="link"> Editar </a>| <a href="" class="link">Excluir </a>
        </td>
    </tr>

</table>