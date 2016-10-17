

<div class="cadas">Consulta de Produtos</div>

<form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>produtocms/cadastrar">
    <input class="btnConsulta" name="btnconsulta" type="submit" value="Cadastrar Dados" /
        

</form>

<form name="FrmPesquisa" method="post" action="home.php">
    
    <input class="pesquisarCms" type="text" name="lala" value="" placeholder="Pesquisar...">
    <input class="btnPesquisaCms" type="submit" name="btnPesquisa" value=""/>
</form> 
<table class="tbl_consulta">
    <tr class="linha_consulta">
        <td class="col_consulta">
            Nome 
        </td>
        <td class="col_consulta">
            Preço
        </td>
        <td class="col_consulta">
            Dt. Fabricação 
        </td>
        <td class="col_consulta">
            Dt. Validade 
        </td>
        <td class="col_consulta">
            Opção 
        </td>
        
    <tr class="linha_consulta">
        <td class="col_consulta">
            Salmão ao molho
        </td>
        <td class="col_consulta">
            R$50,00
        </td>
        <td class="col_consulta">
            12/05/2016
        </td>
        <td class="col_consulta">
           12/05/2016
        </td>
        <td class="col_consulta" >
            <a href="" class="link"> Editar </a>| <a href="" class="link">Excluir </a> <a href="../cms/DetalheProduto" class="link">Detalhes </a>
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
            <a href="" class="link"> Editar </a>| <a href="" class="link">Excluir </a> <a href="../produtocms/detalhe" class="link">Detalhes </a>
        </td>
        
    </tr>

</table>